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
 * This object represents a boost added to a chat or changed.
 *
 * @link https://core.telegram.org/bots/api#chatboostupdated
 *
 * @property-read Chat|null $chat Required. Chat which was boosted
 * @property-write Chat|array<string, mixed> $chat
 * @property-read ChatBoost|null $boost Required. Information about the chat boost
 * @property-write ChatBoost|array<string, mixed> $boost
 */
class ChatBoostUpdated extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'chat' => [
                'type' => [Chat::class],
                'required' => true,
            ],
            'boost' => [
                'type' => [ChatBoost::class],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Chat which was boosted
     *
     * @return Chat|null
     * @throws Base\TelegramException
     */
    public function getChat(): mixed
    {
        return $this->getFieldValue('chat');
    }

    /**
     * @param Chat|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setChat(mixed $value): static
    {
        return $this->setFieldValue('chat', $value);
    }

    /**
     * Required. Information about the chat boost
     *
     * @return ChatBoost|null
     * @throws Base\TelegramException
     */
    public function getBoost(): mixed
    {
        return $this->getFieldValue('boost');
    }

    /**
     * @param ChatBoost|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setBoost(mixed $value): static
    {
        return $this->setFieldValue('boost', $value);
    }
}
