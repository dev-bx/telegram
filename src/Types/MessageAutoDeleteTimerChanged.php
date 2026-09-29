<?php

/**
 * @project Telegram Bot Api
 * @author Kubeev Ruslan <ruslan@dev-bx.ru>
 * @copyright 2026 Kubeev Ruslan
 * @license MIT
 * @link https://dev-bx.ru/
 *
 * This file is part of the project Telegram Bot Api Class Generator.
 */

namespace DevBX\Telegram\Types;

use DevBX\Telegram\Base;

/**
 * This object represents a service message about a change in auto-delete timer settings.
 *
 * @link https://core.telegram.org/bots/api#messageautodeletetimerchanged
 *
 * @property-read int|null $messageAutoDeleteTime Required. New auto-delete time for messages in the chat; in seconds
 * @property-write int $messageAutoDeleteTime
 */
class MessageAutoDeleteTimerChanged extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'message_auto_delete_time' => [
                'type' => ['int'],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. New auto-delete time for messages in the chat; in seconds
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getMessageAutoDeleteTime(): mixed
    {
        return $this->getFieldValue('message_auto_delete_time');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setMessageAutoDeleteTime(mixed $value): static
    {
        return $this->setFieldValue('message_auto_delete_time', $value);
    }
}
