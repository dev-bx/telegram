<?php

namespace DevBX\Telegram\Base;

class ParameterInt extends BaseType {

    public static function isCompatible($data): bool
    {
        $castInt = (int) $data;

        return (string)$castInt === (string)$data;
    }

    public function setEntityValue($newValue, $ignoreUnknownFields = false)
    {
        $this->_value = (int)$newValue;
    }

}