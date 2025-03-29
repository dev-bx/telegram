<?php

namespace DevBX\Telegram\Base;

class Error implements \JsonSerializable
{
    /** @var int|string */
    protected int|string $code;

    /** @var string */
    protected string $message;
    /**
     * @var null
     */

    protected mixed $customData;

    /**
     * Creates a new Error.
     *
     * @param string $message Message of the error.
     * @param int|string $code Code of the error.
     * @param mixed|null $customData Data typically of key/value pairs that provide additional
     * user-defined information about the error.
     */
    public function __construct(string $message, int|string $code = 0, mixed $customData = null)
    {
        $this->message = $message;
        $this->code = $code;
        $this->customData = $customData;
    }

    /**
     * @param \Throwable $exception
     * @return static
     */
    public static function createFromThrowable(\Throwable $exception): static
    {
        return new static($exception->getMessage(), $exception->getCode());
    }

    /**
     * Returns the code of the error.
     * @return int|string
     */
    public function getCode(): int|string
    {
        return $this->code;
    }

    /**
     * Returns the message of the error.
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @return mixed|null
     */
    public function getCustomData(): mixed
    {
        return $this->customData;
    }

    public function __toString()
    {
        return $this->getMessage();
    }

    public function jsonSerialize(): array
    {
        return [
            'message' => $this->getMessage(),
            'code' => $this->getCode(),
            'customData' => $this->getCustomData(),
        ];
    }
}