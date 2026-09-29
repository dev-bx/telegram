<?php

namespace DevBX\Telegram\Base;

class ParameterString extends BaseType {

    public static function isCompatible(mixed $data): bool
    {
        return is_scalar($data) || $data === null || $data instanceof \Stringable;
    }

    /**
     * @return void
     */
    public function setEntityValue(mixed $newValue, bool $ignoreUnknownFields = false)
    {
        $this->_value = is_scalar($newValue) || $newValue instanceof \Stringable ? (string)$newValue : '';
    }

}
