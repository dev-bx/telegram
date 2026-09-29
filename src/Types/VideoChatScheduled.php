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
 * This object represents a service message about a video chat scheduled in the chat.
 *
 * @link https://core.telegram.org/bots/api#videochatscheduled
 *
 * @property-read int|null $startDate Required. Point in time (Unix timestamp) when the video chat is supposed to be started by a chat administrator
 * @property-write int $startDate
 */
class VideoChatScheduled extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'start_date' => [
                'type' => ['int'],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Point in time (Unix timestamp) when the video chat is supposed to be started by a chat administrator
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getStartDate(): mixed
    {
        return $this->getFieldValue('start_date');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setStartDate(mixed $value): static
    {
        return $this->setFieldValue('start_date', $value);
    }
}
