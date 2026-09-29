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
 * Represents a `ChatMember` that was banned in the chat and can't return to the chat or view chat messages.
 *
 * @link https://core.telegram.org/bots/api#chatmemberbanned
 *
 * @property-read string|null $status Required. The member's status in the chat, always “kicked”
 * @property-write string $status
 * @property-read User|null $user Required. Information about the user
 * @property-write User|array<string, mixed> $user
 * @property-read int|null $untilDate Required. Date when restrictions will be lifted for this user; Unix time. If 0, then the user is banned forever.
 * @property-write int $untilDate
 */
class ChatMemberBanned extends ChatMember
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
                'value' => 'kicked',
                'required' => true,
            ],
            'user' => [
                'type' => [User::class],
                'required' => true,
            ],
            'until_date' => [
                'type' => ['int'],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. The member's status in the chat, always “kicked”
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
     * Required. Date when restrictions will be lifted for this user; Unix time. If 0, then the user is banned forever.
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
