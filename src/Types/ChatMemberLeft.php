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
 * Represents a `ChatMember` that isn't currently a member of the chat, but may join it themselves.
 *
 * @link https://core.telegram.org/bots/api#chatmemberleft
 *
 * @property-read string|null $status Required. The member's status in the chat, always “left”
 * @property-write string $status
 * @property-read User|null $user Required. Information about the user
 * @property-write User|array<string, mixed> $user
 */
class ChatMemberLeft extends ChatMember
{
    /**
     * @return static
     * @throws Base\TelegramException
     */
    public static function create(mixed $value = null, bool $ignoreUnknownFields = false): ?Base\BaseType
    {
        return static::createInstance($value, $ignoreUnknownFields);
    }

    public static function getFields(): array
    {
        return [
            'status' => [
                'type' => ['string'],
                'value' => 'left',
                'required' => true,
            ],
            'user' => [
                'type' => [User::class],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. The member's status in the chat, always “left”
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getStatus(): mixed
    {
        return $this->getFieldValue('status');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setStatus(mixed $value): static
    {
        return $this->setFieldValue('status', $value);
    }

    /**
     * Required. Information about the user
     *
     * @return User|null
     * @throws Base\TelegramException
     */
    public function getUser(): mixed
    {
        return $this->getFieldValue('user');
    }

    /**
     * @param User|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setUser(mixed $value): static
    {
        return $this->setFieldValue('user', $value);
    }
}
