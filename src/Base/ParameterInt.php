<?php

namespace DevBX\Telegram\Base;

class ParameterInt extends BaseType {

    public static function isCompatible(mixed $data): bool
    {
        if (!is_scalar($data) && $data !== null) {
            return false;
        }

        return (string)(int)$data === (string)$data;
    }

    /**
     * @return void
     */
    public function setEntityValue(mixed $newValue, bool $ignoreUnknownFields = false)
    {
        $this->_value = is_scalar($newValue) ? (int)$newValue : 0;
    }

}
