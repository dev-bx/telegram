<?php

namespace DevBX\Telegram\Base;

class TelegramException extends \Exception
{
    protected array|null $data = null;
    public function __construct($message, $errorCode = null, array $data = null, $previous = null)
    {
        parent::__construct($message, $errorCode, $previous);

        $this->data = $data;
    }

    /**
     * @param $message
     * @return string|static
     */
    static function getExceptionClass($message): string
    {
        static $classMap = [
            '#^Forbidden: bot was blocked by the user$#' => BlockedByUserException::class,
            '#^Too Many Requests: retry after (\d+)$#' => TooManyRequestsException::class,
            '#^Bad Request: message to be replied not found$#' => MessageToBeRepliedNotFoundException::class,
            '#^Bad Request: message to edit not found$#' => MessageToEditNotFoundException::class,
        ];

        foreach ($classMap as $pattern => $class)
        {
            if (preg_match($pattern, $message))
            {
                return $class;
            }
        }

        return static::class;
    }

    public function __get(string $name)
    {
        if (!is_array($this->data) || !is_array($this->data['parameters'] ?? false))
            return null;

        if (array_key_exists($name, $this->data['parameters'])) {
            return $this->data['parameters'][$name];
        }

        $name = BaseObject::camel2snake($name);
        if (array_key_exists($name, $this->data['parameters'])) {
            return $this->data['parameters'][$name];
        }

        return null;
    }
}

class BlockedByUserException extends TelegramException
{

}

/**
 * @property int $retryAfter
 */

class TooManyRequestsException extends TelegramException
{

}

class MessageNotFoundException extends TelegramException
{

}

class MessageToBeRepliedNotFoundException extends MessageNotFoundException
{

}

class MessageToEditNotFoundException extends TelegramException
{
}