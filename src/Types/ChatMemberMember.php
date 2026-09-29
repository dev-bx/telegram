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
 * Represents a `ChatMember` that has no additional privileges or restrictions.
 *
 * @link https://core.telegram.org/bots/api#chatmembermember
 *
 * @property-read string|null $status Required. The member's status in the chat, always “member”
 * @property-write string $status
 * @property-read string|null $tag Optional. Tag of the member
 * @property-write string $tag
 * @property-read User|null $user Required. Information about the user
 * @property-write User|array<string, mixed> $user
 * @property-read int|null $untilDate Optional. Date when the user's subscription will expire; Unix time
 * @property-write int $untilDate
 */
class ChatMemberMember extends ChatMember
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
                'value' => 'member',
                'required' => true,
            ],
            'tag' => [
                'type' => ['string'],
            ],
            'user' => [
                'type' => [User::class],
                'required' => true,
            ],
            'until_date' => [
                'type' => ['int'],
            ],
        ];
    }

    /**
     * Required. The member's status in the chat, always “member”
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
     * Optional. Tag of the member
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getTag(): mixed
    {
        return $this->getFieldValue('tag');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setTag(mixed $value): static
    {
        return $this->setFieldValue('tag', $value);
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
     * Optional. Date when the user's subscription will expire; Unix time
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getUntilDate(): mixed
    {
        return $this->getFieldValue('until_date');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setUntilDate(mixed $value): static
    {
        return $this->setFieldValue('until_date', $value);
    }
}
