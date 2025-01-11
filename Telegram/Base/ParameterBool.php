<?php

namespace DevBX\Telegram\Base;

class ParameterBool extends BaseType {

    public static function isCompatible($data): bool
    {
        return $data === true || $data === false || $data === 'True' || $data === 'False';
    }

    public function setValue($newValue)
    {
        $this->value = ($newValue === true || $newValue === 'True');
    }

}