<?php

namespace DevBX\Telegram\Base;

/**
 * @property-read int|null $retryAfter Через сколько секунд можно повторить запрос
 */
class TooManyRequestsException extends TelegramException
{
}
