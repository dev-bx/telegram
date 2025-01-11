<?php

namespace DevBX\Telegram\Base;

class ParameterFloat extends BaseType {

    public static function isCompatible($data): bool
    {
        $castInt = (float) $data;

        return (string)$castInt === (string)$data;
    }

    public function setValue($newValue)
    {
        $this->value = (float)$newValue;
    }

}