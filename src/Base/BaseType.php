<?php

namespace DevBX\Telegram\Base;

class BaseType extends BaseObject implements \Iterator, \JsonSerializable
{
    protected mixed $_initialValue;
    protected mixed $_value;
    protected $_position = 0;

    protected function __construct($value = null, $ignoreUnknownFields = false)
    {
        $this->setEntityValue($value, $ignoreUnknownFields);

        foreach (static::getConstFields() as $fieldName=>$fieldData)
        {
            if ($this->getFieldValue($fieldName) === null)
            {
                $this->setFieldValue($fieldName, $fieldData['value']);
            }
        }
    }

    /**
     * @throws TelegramException
     */
    public static function create($value = null, $ignoreUnknownFields = false): static|null
    {
        $relations = static::getRelations();

        if (empty($relations) || in_array(get_called_class(), $relations)) {
            return new static($value, $ignoreUnknownFields);
        }

        usort($relations, function ($a, $b) {
            /** @var BaseType $a */
            /** @var BaseType $b */

            return count($a::getConstFields())-count($b::getConstFields());
        });

        foreach ($relations as $relation) {
            if ($relation::isCompatible($value)) {
                return $relation::create($value, $ignoreUnknownFields);
            }
        }

        if (static::isStrictMode()) {
            throw new TelegramException('Incompatible values with class ' . get_called_class());
        }

        return null;
    }

    /**
     * @return BaseType[]
     */
    public static function getRelations(): array
    {
        return [];
    }

    /**
     * @param $type
     * @return BaseType|string
     * @throws TelegramException
     */
    public static function getFieldTypeClass($type): BaseType|string
    {
        switch ($type) {
            case 'int':
                return ParameterInt::class;
            case 'bool':
                return ParameterBool::class;
            case 'string':
                return ParameterString::class;
            case 'float':
                return ParameterFloat::class;
        }

        if (!is_a($type, BaseType::class, true))
            throw new TelegramException("Type '$type' is must be an instance of " . BaseType::class);

        return $type;
    }

    public static function isCompatible($data): bool
    {
        $fields = static::getFields();

        if (empty($fields))
            return true;

        if ($data instanceof BaseType) {
            $data = $data->jsonSerialize();
        }

        if (!is_array($data))
            return false;

        foreach ($data as $key=>$value)
        {
            if (static::camel2snake($key) != $key)
            {
                unset($data[$key]);
                $key = static::camel2snake($key);
                $data[$key] = $value;
            }
        }

        foreach (static::getConstFields() as $field => $fieldData) {
            if (!array_key_exists($field, $data))
                return false;

            if ($data[$field] != $fieldData['value'])
                return false;
        }

        foreach (static::getRequiredFields() as $field => $fieldData) {
            if (!array_key_exists($field, $data))
                return false;
        }

        foreach ($data as $key => $value) {
            if (!array_key_exists($key, $fields)) {
                continue;
            }

            $fieldData = $fields[$key];

            $isArray = $fieldData['isArray'] ?? false;

            if ($isArray) {
                if (empty($value))
                    continue;

                if (!is_array($value))
                    return false;

            } else {
                $value = [$value];
            }

            if ($isArray === 'matrix')
            {
                foreach ($value as $matrix) {
                    if (!is_array($matrix))
                        return false;

                    foreach ($matrix as $arrayValue) {
                        $result = false;

                        foreach ($fieldData['type'] as $fieldType) {
                            $fieldType = static::getFieldTypeClass($fieldType);
                            if ($fieldType::isCompatible($arrayValue)) {
                                $result = true;
                                break;
                            }
                        }

                        if (!$result)
                            return false;
                    }
                }
            } else {
                foreach ($value as $arrayValue) {
                    $result = false;

                    foreach ($fieldData['type'] as $fieldType) {
                        $fieldType = static::getFieldTypeClass($fieldType);
                        if ($fieldType::isCompatible($arrayValue)) {
                            $result = true;
                            break;
                        }
                    }

                    if (!$result)
                        return false;
                }
            }
        }

        return true;
    }

    public static function getFields(): array
    {
        return [];
    }

    public static function getConstFields(): array
    {
        $result = [];

        foreach (static::getFields() as $name => $field) {
            if (isset($field['value'])) {
                $result[$name] = $field;
            }
        }

        return $result;
    }

    public static function getRequiredFields(): array
    {
        $result = [];

        foreach (static::getFields() as $name => $field) {
            if ($field['required'] ?? false) {
                $result[$name] = $field;
            }
        }

        return $result;
    }

    public function getEntityInitialValue()
    {
        return $this->_initialValue;
    }

    public function getEntityValue()
    {
        return $this->_value;
    }

    /**
     * @throws TelegramException
     */
    public function setEntityValue($newValue, $ignoreUnknownFields = false)
    {
        $fields = static::getFields();

        if (empty($fields)) {
            $this->_value = $newValue;
            return;
        }

        if ($newValue instanceof BaseType) {
            $newValue = $newValue->jsonSerialize();
        }

        $this->_initialValue = $newValue;
        $this->_value = [];

        if (empty($newValue))
            return;

        if (!is_array($newValue)) {
            $this->addErrorItem(new Error('Invalid value '.var_export($newValue, true).' entity '.static::entityName()));
            return;
        }

        foreach ($newValue as $field => $fieldValue) {
            if ($ignoreUnknownFields && !array_key_exists($field, $fields))
                continue;

            $this->setFieldValue($field, $fieldValue, $ignoreUnknownFields);
        }

    }

    public function jsonSerialize(): mixed
    {
        if (empty(static::getFields())) {
            return $this->_value;
        }

        $result = [];

        foreach ($this->_value as $field => $fieldValue) {
            $result[$field] = $fieldValue->jsonSerialize();
        }

        return $result;
    }

    /**
     * @throws TelegramException
     */
    public function setFieldValue($field, $value, $ignoreUnknownFields = false): static
    {
        $field = static::camel2snake($field);

        $objFields = static::getFields();

        if (!isset($objFields[$field])) {
            if (!$ignoreUnknownFields) {
                $this->addErrorItem(new Error('Unknown field "' . $field . '" entity '.static::entityName()));
            }
            return $this;
        }

        if ($value instanceof BaseType) {
            $value = $value->jsonSerialize();
        }

        $fieldData = $objFields[$field];

        if (isset($fieldData['value']))
        {
            if ($fieldData['value'] !== $value)
            {
                $this->addErrorItem(new Error('Invalid value '.var_export($value, true).' for field "' . $field . '" entity "'.static::entityName().'"'));
                return $this;
            }
        }

        $isArray = $fieldData['isArray'] ?? false;

        if ($isArray) {
            if (!empty($value) && !is_array($value)) {
                $this->addErrorItem(new Error('Invalid value '.var_export($value, true).' for field "' . $field . '" entity "'.static::entityName().'"'));
                return $this;
            }

            if ($isArray === 'matrix')
            {
                $this->_value[$field] = new ArrayOfArrayObject($fieldData['type']);
            } else {
                $this->_value[$field] = new ArrayObject($fieldData['type']);
            }

            if (!empty($value)) {
                foreach ($value as $fieldValueItem) {
                    $this->_value[$field]->add($fieldValueItem);
                }
            }

            return $this;
        }

        foreach ($fieldData['type'] as $fieldType) {
            $fieldType = static::getFieldTypeClass($fieldType);
            if ($fieldType::isCompatible($value)) {
                $this->_value[$field] = $fieldType::create($value, $ignoreUnknownFields);
                return $this;
            }
        }

        $this->addErrorItem(new Error('Invalid value '.var_export($value, true).' for field "' . $field . '" entity "'.static::entityName().'"'));

        return $this;
    }

    public static function hasField(string $field): bool
    {
        $field = static::camel2snake($field);

        $objFields = static::getFields();

        return isset($objFields[$field]);
    }

    public function getFieldValue($field)
    {
        $field = static::camel2snake($field);

        $objFields = static::getFields();

        if (!isset($objFields[$field])) {
            throw new TelegramException('Unknown field "' . $field . '" entity "'.static::entityName().'"');
        }

        if (isset($this->_value[$field])) {

            if ($this->_value[$field] instanceof BaseType)
            {
                if ($this->_value[$field]::getFields())
                {
                    return $this->_value[$field];
                }

                return $this->_value[$field]->getEntityValue();
            }

            return $this->_value[$field];
        }

        $fieldType = $objFields[$field];

        $isArray = $fieldType['isArray'] ?? false;
        if ($isArray) {

            if ($isArray === 'matrix')
            {
                $this->_value[$field] = new ArrayOfArrayObject($fieldType['type']);
            } else {
                $this->_value[$field] = new ArrayObject($fieldType['type']);
            }

            return $this->_value[$field];
        }

        return null;
    }

    /**
     * @throws TelegramException
     */
    public function __get(string $name)
    {
        return $this->getFieldValue($name);
    }

    /**
     * @throws TelegramException
     */
    public function __set(string $name, $value)
    {
        $this->setFieldValue($name, $value);
    }

    /**
     * @throws TelegramException
     */
    public function validate(): bool
    {
        foreach (static::getFields() as $field => $fieldData) {
            if (!isset($fieldData['required']) || !$fieldData['required'])
                continue;

            if (!array_key_exists($field, $this->_value)) {
                $this->addErrorItem(new Error('Required field "' . $field . '" not found in entity ' . static::entityName()));
                continue;
            }

            if (!$this->_value[$field]->validate()) {
                $this->addErrorItem(new Error('Required field "' . $field . '" validation failed in entity ' . static::entityName()));
                continue;
            }

            if ($this->_value[$field] instanceof BaseType) {
                if (empty($this->_value[$field]->getEntityValue()))
                {
                    $this->addErrorItem(new Error('Required field "' . $field . '" is empty in entity ' . static::entityName()));
                }
            }
        }

        return true;
    }

    public function current(): mixed
    {
        if (empty($this->_value) || !is_array($this->_value))
            return null;

        $key = array_keys($this->_value)[$this->_position];
        $value = $this->_value[$key];

        if ($value instanceof BaseType) {
            if ($value::getFields())
            {
                return $value;
            }

            return $value->getEntityValue();
        }

        return $value;
    }

    public function next(): void
    {
        $this->_position++;
    }

    public function key(): int|string|null
    {
        if (empty($this->_value) || !is_array($this->_value))
            return null;

        return array_keys($this->_value)[$this->_position];
    }

    public function valid(): bool
    {
        if (empty($this->_value) || !is_array($this->_value))
            return false;

        return $this->_position<count(array_keys($this->_value));
    }

    public function rewind(): void
    {
        $this->_position = 0;
    }
}