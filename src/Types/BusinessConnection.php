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
 * Describes the connection of the bot with a business account.
 *
 * @link https://core.telegram.org/bots/api#businessconnection
 *
 * @property-read string|null $id Required. Unique identifier of the business connection
 * @property-write string $id
 * @property-read User|null $user Required. Business account user that created the business connection
 * @property-write User|array<string, mixed> $user
 * @property-read int|null $userChatId Required. Identifier of a private chat with the user who created the business connection. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
 * @property-write int $userChatId
 * @property-read int|null $date Required. Date the connection was established in Unix time
 * @property-write int $date
 * @property-read BusinessBotRights|null $rights Optional. Rights of the business bot
 * @property-write BusinessBotRights|array<string, mixed> $rights
 * @property-read bool|null $isEnabled Required. *True*, if the connection is active
 * @property-write bool $isEnabled
 */
class BusinessConnection extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'user' => [
                'type' => [User::class],
                'required' => true,
            ],
            'user_chat_id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'date' => [
                'type' => ['int'],
                'required' => true,
            ],
            'rights' => [
                'type' => [BusinessBotRights::class],
            ],
            'is_enabled' => [
                'type' => ['bool'],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Unique identifier of the business connection
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getId(): mixed
    {
        return $this->getFieldValue('id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setId(mixed $value): static
    {
        return $this->setFieldValue('id', $value);
    }

    /**
     * Required. Business account user that created the business connection
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
     * Required. Identifier of a private chat with the user who created the business connection. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getUserChatId(): mixed
    {
        return $this->getFieldValue('user_chat_id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setUserChatId(mixed $value): static
    {
        return $this->setFieldValue('user_chat_id', $value);
    }

    /**
     * Required. Date the connection was established in Unix time
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getDate(): mixed
    {
        return $this->getFieldValue('date');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setDate(mixed $value): static
    {
        return $this->setFieldValue('date', $value);
    }

    /**
     * Optional. Rights of the business bot
     *
     * @return BusinessBotRights|null
     * @throws Base\TelegramException
     */
    public function getRights(): mixed
    {
        return $this->getFieldValue('rights');
    }

    /**
     * @param BusinessBotRights|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setRights(mixed $value): static
    {
        return $this->setFieldValue('rights', $value);
    }

    /**
     * Required. *True*, if the connection is active
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsEnabled(): mixed
    {
        return $this->getFieldValue('is_enabled');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsEnabled(mixed $value): static
    {
        return $this->setFieldValue('is_enabled', $value);
    }
}
