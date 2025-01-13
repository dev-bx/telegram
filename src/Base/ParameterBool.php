<?php

namespace DevBX\Telegram\Base;

class ParameterBool extends BaseType {

    public static function isCompatible($data): bool
    {
        return $data === true || $data === false || $data === 'True' || $data === 'False';
    }

    public function setEntityValue($newValue, $ignoreUnknownFields = false)
    {
        $this->value = ($newValue === true || $newValue === 'True');
    }

}