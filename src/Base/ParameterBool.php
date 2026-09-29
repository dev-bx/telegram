<?php

namespace DevBX\Telegram\Base;

class ParameterBool extends BaseType {

    public static function isCompatible(mixed $data): bool
    {
        return $data === true || $data === false || $data === 'True' || $data === 'False';
    }

    /**
     * @return void
     */
    public function setEntityValue(mixed $newValue, bool $ignoreUnknownFields = false)
    {
        $this->_value = ($newValue === true || $newValue === 'True');
    }

}
