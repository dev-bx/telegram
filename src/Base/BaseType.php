<?php

namespace DevBX\Telegram\Base;

/**
 * Базовый класс всех типов и запросов Bot API.
 *
 * Значение хранится в snake_case-ключах Telegram; для каждого поля — объект BaseType (скаляры
 * оборачиваются в Parameter*), ArrayObject (массив) или ArrayOfArrayObject (матрица).
 *
 * @phpstan-type FieldDefinition array{
 *     type: list<string>, // 'int'|'bool'|'string'|'float' или class-string<BaseType>
 *     isArray?: bool|'matrix', // true — массив значений, 'matrix' — массив массивов
 *     required?: bool,
 *     value?: scalar, // константное значение (например, поле type у вариантов объединения)
 *     canReturnBool?: bool, // только для '@return': метод может вернуть true вместо объекта
 * }
 * @phpstan-type FieldDefinitions array<string, FieldDefinition>
 * @phpstan-type UploadFile array{filename?: string, content?: string, resource?: resource, contentType?: string}
 *
 * @phpstan-consistent-constructor
 * @implements \Iterator<array-key, mixed>
 */
class BaseType extends BaseObject implements \Iterator, \JsonSerializable
{
    /** Объединение допускает обычную строку (например, RichText — просто текст). */
    public const RAW_FORM_STRING = 'string';

    /** Объединение допускает список значений того же объединения (например, RichText — массив RichText). */
    public const RAW_FORM_LIST = 'list';

    protected mixed $_initialValue = null;
    protected mixed $_value = null;
    /** @var int */
    protected $_position = 0;

    /**
     * @throws TelegramException
     */
    protected function __construct(mixed $value = null, bool $ignoreUnknownFields = false)
    {
        $this->setEntityValue($value, $ignoreUnknownFields);

        foreach (static::getConstFields() as $fieldName=>$fieldData)
        {
            if ($this->getFieldValue($fieldName) === null)
            {
                $this->setFieldValue($fieldName, $fieldData['value'] ?? null);
            }
        }
    }

    /**
     * Создаёт объект из массива (ключи snake_case или camelCase), другого объекта или скаляра.
     * Объединения (ChatMember, InputMedia, RichText…) переопределяют метод и возвращают подходящий вариант.
     *
     * @return static
     * @throws TelegramException
     */
    public static function create(mixed $value = null, bool $ignoreUnknownFields = false): ?BaseType
    {
        return static::createInstance($value, $ignoreUnknownFields);
    }

    /**
     * Экземпляр именно вызванного класса. Варианты объединений переопределяют create() через него,
     * чтобы не унаследовать подбор варианта из create() объединения.
     *
     * @return static
     * @throws TelegramException
     */
    protected static function createInstance(mixed $value, bool $ignoreUnknownFields): BaseType
    {
        return new static($value, $ignoreUnknownFields);
    }

    /**
     * Пустой объект — заготовка результата запроса, к которой добавляются ошибки.
     *
     * @return static
     * @throws TelegramException
     */
    public static function createEmpty(): BaseType
    {
        return new static(null);
    }

    /**
     * Объединение как строка или список (см. getRawForms()): значение хранится внутри экземпляра объединения.
     *
     * @return static|null null — значение не является допустимой примитивной формой
     * @throws TelegramException
     */
    protected static function createFromRawForm(mixed $value, bool $ignoreUnknownFields): ?BaseType
    {
        $rawForms = static::getRawForms();

        if (is_string($value) && in_array(self::RAW_FORM_STRING, $rawForms, true)) {
            return new static($value, $ignoreUnknownFields);
        }

        if (is_array($value) && self::isList($value) && in_array(self::RAW_FORM_LIST, $rawForms, true)) {
            $items = [];

            foreach ($value as $item) {
                $items[] = static::create($item, $ignoreUnknownFields)?->jsonSerialize();
            }

            return new static($items, $ignoreUnknownFields);
        }

        return null;
    }

    /**
     * Выбирает вариант объединения: сначала строгое совпадение (константы, обязательные поля, типы),
     * затем мягкое (только константы). Варианты с меньшим числом констант проверяются первыми.
     *
     * @template T of BaseType
     * @param list<class-string<T>> $relations
     * @return T|null null — только в нестрогом режиме
     * @throws TelegramException
     */
    protected static function createFromRelations(array $relations, mixed $value, bool $ignoreUnknownFields): ?BaseType
    {
        usort($relations, function (string $a, string $b): int {
            return count($a::getConstFields()) - count($b::getConstFields());
        });

        foreach ($relations as $relation) {
            if ($relation::isCompatible($value)) {
                return $relation::create($value, $ignoreUnknownFields);
            }
        }

        foreach ($relations as $relation) {
            if ($relation::createIsCompatible($value)) {
                return $relation::create($value, $ignoreUnknownFields);
            }
        }

        if (static::isStrictMode()) {
            throw new TelegramException('Incompatible values with class ' . static::class);
        }

        return null;
    }

    /**
     * Примитивные формы, которые объединение (класс с getRelations()) принимает помимо объектов-вариантов.
     *
     * @return list<self::RAW_FORM_*>
     */
    public static function getRawForms(): array
    {
        return [];
    }

    /**
     * array_is_list() для PHP 8.0.
     *
     * @param array<mixed> $value
     */
    protected static function isList(array $value): bool
    {
        return $value === [] || array_keys($value) === range(0, count($value) - 1);
    }

    /**
     * Варианты объединения. Непустой список означает, что класс абстрактный (например, ChatMember).
     *
     * @return list<class-string<BaseType>>
     */
    public static function getRelations(): array
    {
        return [];
    }

    /**
     * @return class-string<BaseType>
     * @throws TelegramException
     */
    public static function getFieldTypeClass(string $type): BaseType|string
    {
        return self::fieldTypeClass($type);
    }

    /**
     * @return class-string<BaseType>
     * @throws TelegramException
     */
    private static function fieldTypeClass(string $type): string
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

    /**
     * @param list<string> $types
     * @return list<class-string<BaseType>>
     * @throws TelegramException
     */
    public static function resolveFieldTypes(array $types): array
    {
        $result = [];

        foreach ($types as $type) {
            $result[] = self::fieldTypeClass($type);
        }

        return $result;
    }

    /**
     * Приводит ключи camelCase к snake_case.
     *
     * @param array<mixed> $data
     * @return array<mixed>
     */
    private static function normalizeKeys(array $data): array
    {
        $result = [];

        foreach ($data as $key => $value) {
            $result[is_string($key) ? static::camel2snake($key) : $key] = $value;
        }

        return $result;
    }

    /**
     * Мягкая проверка: совпадают константные поля (для выбора варианта объединения при создании).
     */
    public static function createIsCompatible(mixed $data): bool
    {
        $fields = static::getFields();

        if (empty($fields))
            return true;

        if ($data instanceof BaseType) {
            $data = $data->jsonSerialize();
        }

        if (!is_array($data))
            return false;

        $data = self::normalizeKeys($data);

        foreach (static::getConstFields() as $field => $fieldData) {
            if (!array_key_exists($field, $data))
                return false;

            if ($data[$field] != ($fieldData['value'] ?? null))
                return false;
        }

        return true;
    }

    /**
     * Строгая проверка: константные и обязательные поля присутствуют, значения подходят по типам.
     *
     * @throws TelegramException
     */
    public static function isCompatible(mixed $data): bool
    {
        $fields = static::getFields();

        if (empty($fields))
            return true;

        if ($data instanceof BaseType) {
            $data = $data->jsonSerialize();
        }

        if (!is_array($data))
            return false;

        $data = self::normalizeKeys($data);

        foreach (static::getConstFields() as $field => $fieldData) {
            if (!array_key_exists($field, $data))
                return false;

            if ($data[$field] != ($fieldData['value'] ?? null))
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
                        if (!self::isCompatibleWithAnyType($fieldData['type'], $arrayValue))
                            return false;
                    }
                }
            } else {
                foreach ($value as $arrayValue) {
                    if (!self::isCompatibleWithAnyType($fieldData['type'], $arrayValue))
                        return false;
                }
            }
        }

        return true;
    }

    /**
     * @param list<string> $types
     * @throws TelegramException
     */
    private static function isCompatibleWithAnyType(array $types, mixed $value): bool
    {
        foreach ($types as $fieldType) {
            if (static::getFieldTypeClass($fieldType)::isCompatible($value)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Описание полей типа (генерируется из документации Bot API).
     *
     * @return FieldDefinitions
     */
    public static function getFields(): array
    {
        return [];
    }

    /**
     * @return FieldDefinitions
     */
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

    /**
     * @return FieldDefinitions
     */
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

    /**
     * @return mixed Значение, переданное при создании (до разбора по полям)
     */
    public function getEntityInitialValue()
    {
        return $this->_initialValue;
    }

    /**
     * @return mixed Для типа с полями — array<string, BaseObject>, для скаляра — само значение
     */
    public function getEntityValue()
    {
        return $this->_value;
    }

    public function isEmpty(): bool
    {
        return $this->_value === null
            || $this->_value === ''
            || (is_array($this->_value) && count($this->_value) === 0);
    }

    /**
     * @return void
     * @throws TelegramException
     */
    public function setEntityValue(mixed $newValue, bool $ignoreUnknownFields = false)
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

            $this->setFieldValue((string)$field, $fieldValue, $ignoreUnknownFields);
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
     * Устанавливает поле (ключ snake_case или camelCase). Объект типа можно передать массивом полей.
     *
     * @return $this
     * @throws TelegramException
     */
    public function setFieldValue(string $field, mixed $value, bool $ignoreUnknownFields = false): static
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
            if ($value instanceof ArrayObject || $value instanceof ArrayOfArrayObject) {
                $value = $value->jsonSerialize();
            }

            if (!empty($value) && !is_array($value)) {
                $this->addErrorItem(new Error('Invalid value '.var_export($value, true).' for field "' . $field . '" entity "'.static::entityName().'"'));
                return $this;
            }

            if ($isArray === 'matrix')
            {
                $matrix = new ArrayOfArrayObject(static::resolveFieldTypes($fieldData['type']));

                foreach (is_array($value) ? $value : [] as $row) {
                    $matrix->add($row);
                }

                $this->_value[$field] = $matrix;
            } else {
                $list = new ArrayObject(static::resolveFieldTypes($fieldData['type']));

                foreach (is_array($value) ? $value : [] as $fieldValueItem) {
                    $list->add($fieldValueItem, $ignoreUnknownFields);
                }

                $this->_value[$field] = $list;
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

        foreach ($fieldData['type'] as $fieldType) {
            $fieldType = static::getFieldTypeClass($fieldType);
            if ($fieldType::createIsCompatible($value)) {
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

    /**
     * Значение поля: скаляр, объект типа, ArrayObject/ArrayOfArrayObject (массивы создаются пустыми) или null.
     *
     * @return mixed
     * @throws TelegramException
     */
    public function getFieldValue(string $field)
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
                $this->_value[$field] = new ArrayOfArrayObject(static::resolveFieldTypes($fieldType['type']));
            } else {
                $this->_value[$field] = new ArrayObject(static::resolveFieldTypes($fieldType['type']));
            }

            return $this->_value[$field];
        }

        return null;
    }

    /**
     * @return mixed
     * @throws TelegramException
     */
    public function __get(string $name)
    {
        return $this->getFieldValue($name);
    }

    /**
     * @return void
     * @throws TelegramException
     */
    public function __set(string $name, mixed $value)
    {
        $this->setFieldValue($name, $value);
    }

    public function __isset(string $name): bool
    {
        return static::hasField($name) && isset($this->_value[static::camel2snake($name)]);
    }

    /**
     * Проверяет обязательные поля. Результат — в isSuccess()/getErrorMessages()
     * (в строгом режиме первая ошибка бросает TelegramException).
     *
     * @throws TelegramException
     */
    public function validate(): bool
    {
        foreach (static::getFields() as $field => $fieldData) {
            if (!isset($fieldData['required']) || !$fieldData['required'])
                continue;

            if (!is_array($this->_value) || !array_key_exists($field, $this->_value)) {
                $this->addErrorItem(new Error('Required field "' . $field . '" not found in entity ' . static::entityName()));
                continue;
            }

            if (!$this->_value[$field]->validate()) {
                $this->addErrorItem(new Error('Required field "' . $field . '" validation failed in entity ' . static::entityName()));
                continue;
            }

            if ($this->_value[$field] instanceof BaseType) {
                if ($this->_value[$field]->isEmpty())
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

        return $this->_position<count($this->_value);
    }

    public function rewind(): void
    {
        $this->_position = 0;
    }
}
