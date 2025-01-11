<?php

namespace DevBX\Telegram\Base;

class ParameterString extends BaseType {

    public static function isCompatible($data): bool
    {
        return (string)$data == $data;
    }

    public function setValue($newValue)
    {
        $this->value = (string)$newValue;
    }

}