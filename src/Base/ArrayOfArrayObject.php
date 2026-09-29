<?php

namespace DevBX\Telegram\Base;

/**
 * Матрица значений (массив массивов), например, строки кнопок inline-клавиатуры.
 *
 * @template T of BaseType
 * @implements \Iterator<int, ArrayObject<T>>
 */
class ArrayOfArrayObject extends BaseObject implements \Iterator, \JsonSerializable, \Countable {

    /** @var list<class-string<T>> */
    protected $types;

    /** @var list<ArrayObject<T>> */
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
     * Добавляет строку матрицы.
     *
     * @param ArrayObject<T>|array<mixed>|null $data
     * @return $this
     * @throws TelegramException
     */
    public function add(ArrayObject|array|null $data = null): static
    {
        $item = new ArrayObject($this->types);

        if($data)
        {
            foreach ($data as $subItem) {
                $item->add($subItem);
            }
        }

        $this->arrayData[] = $item;

        return $this;
    }

    /**
     * @return ArrayObject<T>
     */
    public function current(): ArrayObject
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
     * @return list<list<mixed>>
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
