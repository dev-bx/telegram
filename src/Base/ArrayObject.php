<?php

namespace DevBX\Telegram\Base;

/**
 * Типизированный список значений поля-массива. Элементы хранятся объектами BaseType
 * (скаляры — ParameterInt/ParameterString/…; значение скаляра — getEntityValue()).
 *
 * @template T of BaseType
 * @implements \Iterator<int, T>
 */
class ArrayObject extends BaseObject implements \Iterator, \JsonSerializable, \Countable {

    /** @var list<class-string<T>> Допустимые классы элементов (скаляры — Parameter*, см. BaseType::resolveFieldTypes()) */
    protected $types;

    /** @var list<T> */
    protected $arrayData = [];

    /** @var int */
    protected $position = 0;

    /**
     * @param list<class-string<T>> $types
     */
    public function __construct(array $types)
    {
        $this->types = $types;
    }

    /**
     * Добавляет элемент: объект, массив полей или скаляр — он приводится к первому подходящему типу.
     *
     * @return $this
     * @throws TelegramException
     */
    public function add(mixed $data, bool $ignoreUnknownFields = false): static
    {
        foreach ($this->types as $type) {
            if ($type::isCompatible($data))
            {
                $item = $type::create($data, $ignoreUnknownFields);

                if ($item !== null) {
                    $this->arrayData[] = $item;
                }

                return $this;
            }
        }

        throw new TelegramException('Collection item type '.gettype($data).' are not supported, valid type(s) '.implode(' or ', $this->types));
    }

    /**
     * @return T
     */
    public function current(): BaseObject
    {
        return $this->arrayData[$this->position];
    }

    public function next(): void
    {
        $this->position++;
    }

    public function key(): int
    {
        return $this->position;
    }

    public function valid(): bool
    {
        return isset($this->arrayData[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }

    public function count(): int
    {
        return count($this->arrayData);
    }

    /**
     * @return list<mixed>
     */
    public function jsonSerialize(): array
    {
        $result = [];

        foreach ($this->arrayData as $obj)
        {
            $result[] = $obj->jsonSerialize();
        }

        return $result;
    }

    public function validate(): bool
    {
        foreach ($this->arrayData as $obj) {
            if (!$obj->validate())
                return false;
        }

        return true;
    }

}
