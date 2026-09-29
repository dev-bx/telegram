<?php

namespace DevBX\Telegram\Base;

class BaseObject
{

    /** @var bool */
    protected bool $isSuccess = true;

    /** @var Error[] */
    protected array $errors = [];

    /**
     * Adds the error.
     *
     * @param Error $error
     * @return $this
     * @throws TelegramException
     */
    public function addErrorItem(Error $error): static
    {
        if (static::isStrictMode())
        {
            $exceptionClass = TelegramException::getExceptionClass($error->getMessage());
            $customData = $error->getCustomData();

            throw new $exceptionClass($error->getMessage(), $error->getCode(), is_array($customData) ? $customData : null);
        }

        $this->isSuccess = false;
        $this->errors[] = $error;
        return $this;
    }

    /**
     * Adds array of Error objects
     *
     * @param Error[] $errors
     * @return $this
     */
    public function addErrorsCollection(array $errors): static
    {
        if ($errors)
        {
            $this->isSuccess = false;
            array_push($this->errors, ...$errors);
        }

        return $this;
    }

    /**
     * Returns an array of Error objects.
     *
     * @return Error[]
     */
    public function getErrorsCollection(): array
    {
        return $this->errors;
    }

    /**
     * Returns array of strings with error messages
     *
     * @return string[]
     */
    public function getErrorMessages(): array
    {
        $messages = array();

        foreach ($this->getErrorsCollection() as $error)
            $messages[] = $error->getMessage();

        return $messages;
    }

    public function isSuccess(): bool
    {
        return $this->isSuccess;
    }

    /** @var bool */
    protected static $strictMode = true;

    /**
     * @param bool $value
     * @return void
     */
    public static function setStrictMode($value)
    {
        static::$strictMode = (bool)$value;
    }

    public static function isStrictMode(): bool
    {
        return static::$strictMode;
    }

    public function validate(): bool
    {
        return true;
    }

    public static function entityName(): string
    {
        $name = explode('\\', static::class);
        return end($name);
    }

    /**
     * @return string
     */
    public static function camel2snake(string $str)
    {
        return mb_strtolower(preg_replace('/(.)([A-Z])/', '$1_$2', $str) ?? $str);
    }

}
