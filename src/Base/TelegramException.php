<?php

namespace DevBX\Telegram\Base;

class TelegramException extends \Exception
{
    /** @var array<string, mixed>|null Ответ Telegram целиком (включая `parameters`) */
    protected ?array $data = null;

    /**
     * @param array<string, mixed>|null $data
     */
    public function __construct(string $message, int|string|null $errorCode = null, ?array $data = null, ?\Throwable $previous = null)
    {
        parent::__construct($message, (int)$errorCode, $previous);

        $this->data = $data;
    }

    /**
     * Подбирает класс исключения по тексту ошибки Telegram.
     *
     * @return class-string<TelegramException>
     */
    public static function getExceptionClass(string $message): string
    {
        static $classMap = [
            '#^Forbidden: bot was blocked by the user$#' => BlockedByUserException::class,
            '#^Too Many Requests: retry after (\d+)$#' => TooManyRequestsException::class,
            '#^Bad Request: message to be replied not found$#' => MessageToBeRepliedNotFoundException::class,
            '#^Bad Request: message to edit not found$#' => MessageToEditNotFoundException::class,
            '#^Bad Request: dimensions of the photo are too big$#' => DimensionsPhotoTooBigException::class,
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

    /**
     * Доступ к `parameters` ответа Telegram: `$e->retryAfter`, `$e->migrateToChatId`.
     *
     * @return mixed
     */
    public function __get(string $name)
    {
        $parameters = $this->data['parameters'] ?? null;

        if (!is_array($parameters))
            return null;

        if (array_key_exists($name, $parameters)) {
            return $parameters[$name];
        }

        $name = BaseObject::camel2snake($name);
        if (array_key_exists($name, $parameters)) {
            return $parameters[$name];
        }

        return null;
    }
}
