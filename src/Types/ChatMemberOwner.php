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
 * Represents a `ChatMember` that owns the chat and has all administrator privileges.
 *
 * @link https://core.telegram.org/bots/api#chatmemberowner
 *
 * @property-read string|null $status Required. The member's status in the chat, always “creator”
 * @property-write string $status
 * @property-read User|null $user Required. Information about the user
 * @property-write User|array<string, mixed> $user
 * @property-read bool|null $isAnonymous Required. *True*, if the user's presence in the chat is hidden
 * @property-write bool $isAnonymous
 * @property-read string|null $customTitle Optional. Custom title for this user
 * @property-write string $customTitle
 */
class ChatMemberOwner extends ChatMember
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
                'value' => 'creator',
                'required' => true,
            ],
            'user' => [
                'type' => [User::class],
                'required' => true,
            ],
            'is_anonymous' => [
                'type' => ['bool'],
                'required' => true,
            ],
            'custom_title' => [
                'type' => ['string'],
            ],
        ];
    }

    /**
     * Required. The member's status in the chat, always “creator”
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

    /**
     * Required. *True*, if the user's presence in the chat is hidden
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsAnonymous(): mixed
    {
        return $this->getFieldValue('is_anonymous');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsAnonymous(mixed $value): static
    {
        return $this->setFieldValue('is_anonymous', $value);
    }

    /**
     * Optional. Custom title for this user
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getCustomTitle(): mixed
    {
        return $this->getFieldValue('custom_title');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCustomTitle(mixed $value): static
    {
        return $this->setFieldValue('custom_title', $value);
    }
}
