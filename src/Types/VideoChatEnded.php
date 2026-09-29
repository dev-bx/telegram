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
 * This object represents a service message about a video chat ended in the chat.
 *
 * @link https://core.telegram.org/bots/api#videochatended
 *
 * @property-read int|null $duration Required. Video chat duration in seconds
 * @property-write int $duration
 */
class VideoChatEnded extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'duration' => [
                'type' => ['int'],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Video chat duration in seconds
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getDuration(): mixed
    {
        return $this->getFieldValue('duration');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setDuration(mixed $value): static
    {
        return $this->setFieldValue('duration', $value);
    }
}
