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
 * This object represents a chat background.
 *
 * @link https://core.telegram.org/bots/api#chatbackground
 *
 * @property-read BackgroundType|null $type Required. Type of the background
 * @property-write BackgroundType|array<string, mixed> $type
 */
class ChatBackground extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'type' => [
                'type' => [BackgroundType::class],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Type of the background
     *
     * @return BackgroundType|null
     * @throws Base\TelegramException
     */
    public function getType(): mixed
    {
        return $this->getFieldValue('type');
    }

    /**
     * @param BackgroundType|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setType(mixed $value): static
    {
        return $this->setFieldValue('type', $value);
    }
}
