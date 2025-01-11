<?php

namespace DevBX\Telegram\Base;

class ArrayOfArrayObject extends BaseObject implements \Iterator, \JsonSerializable {

    protected $types;
    protected $arrayData = [];
    protected $position = 0;

    public function __construct(array $types)
    {
        $this->types = $types;
    }

    public function add(ArrayObject|array $data = null): static
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
