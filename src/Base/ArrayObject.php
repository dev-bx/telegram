<?php

namespace DevBX\Telegram\Base;

class ArrayObject extends BaseObject implements \Iterator, \JsonSerializable {

    protected $types;
    protected $arrayData = [];
    protected $position = 0;

    public function __construct(array $types)
    {
        $this->types = $types;
    }

    /**
     * @param BaseObject|array $data
     * @return $this
     * @throws TelegramException
     */
    public function add(BaseObject|array $data, $ignoreUnknownFields = false): static
    {
        if (is_array($data))
        {
            /* @var BaseType $type */
            foreach ($this->types as $type) {
                if ($type::isCompatible($data))
                {
                    $this->arrayData[] = $type::create($data, $ignoreUnknownFields);
                    return $this;
                }
            }
        } else {
            foreach ($this->types as $type) {
                if (is_a($data, $type, true)) {
                    $this->arrayData[] = $data;
                    return $this;
                }
            }
        }

        throw new TelegramException('Object class '.get_class($data).' are not supported, class must be '.implode(' or ', $this->types));
    }

    /**
     * @return mixed
     */
    public function current(): BaseObject
    {
        return $this->arrayData[$this->position];
    }

    /**
     * @return void
     */
    public function next(): void
    {
        $this->position++;
    }

    /**
     * @return int
     */
    public function key(): int
    {
        return $this->position;
    }

    /**
     * @return bool
     */
    public function valid(): bool
    {
        return isset($this->arrayData[$this->position]);
    }

    /**
     * @return void
     */
    public function rewind(): void
    {
        $this->position = 0;
    }

    /**
     * @return array
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

    /**
     * @return bool
     */
    public function validate(): bool
    {
        foreach ($this->arrayData as $obj) {
            if (!$obj->validate())
                return false;
        }

        return true;
    }

}
