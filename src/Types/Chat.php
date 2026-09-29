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
 * This object represents a chat.
 *
 * @link https://core.telegram.org/bots/api#chat
 *
 * @property-read int|null $id Required. Unique identifier for this chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
 * @property-write int $id
 * @property-read string|null $type Required. Type of the chat, can be either “private”, “group”, “supergroup” or “channel”
 * @property-write string $type
 * @property-read string|null $title Optional. Title, for supergroups, channels and group chats
 * @property-write string $title
 * @property-read string|null $username Optional. Username, for private chats, supergroups and channels if available
 * @property-write string $username
 * @property-read string|null $firstName Optional. First name of the other party in a private chat
 * @property-write string $firstName
 * @property-read string|null $lastName Optional. Last name of the other party in a private chat
 * @property-write string $lastName
 * @property-read bool|null $isForum Optional. *True*, if the supergroup chat is a forum (has [topics](https://telegram.org/blog/topics-in-groups-collectible-usernames#topics-in-groups) enabled)
 * @property-write bool $isForum
 * @property-read bool|null $isDirectMessages Optional. *True*, if the chat is the direct messages chat of a channel
 * @property-write bool $isDirectMessages
 */
class Chat extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'type' => [
                'type' => ['string'],
                'required' => true,
            ],
            'title' => [
                'type' => ['string'],
            ],
            'username' => [
                'type' => ['string'],
            ],
            'first_name' => [
                'type' => ['string'],
            ],
            'last_name' => [
                'type' => ['string'],
            ],
            'is_forum' => [
                'type' => ['bool'],
            ],
            'is_direct_messages' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Required. Unique identifier for this chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getId(): mixed
    {
        return $this->getFieldValue('id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setId(mixed $value): static
    {
        return $this->setFieldValue('id', $value);
    }

    /**
     * Required. Type of the chat, can be either “private”, “group”, “supergroup” or “channel”
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getType(): mixed
    {
        return $this->getFieldValue('type');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setType(mixed $value): static
    {
        return $this->setFieldValue('type', $value);
    }

    /**
     * Optional. Title, for supergroups, channels and group chats
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getTitle(): mixed
    {
        return $this->getFieldValue('title');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setTitle(mixed $value): static
    {
        return $this->setFieldValue('title', $value);
    }

    /**
     * Optional. Username, for private chats, supergroups and channels if available
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getUsername(): mixed
    {
        return $this->getFieldValue('username');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setUsername(mixed $value): static
    {
        return $this->setFieldValue('username', $value);
    }

    /**
     * Optional. First name of the other party in a private chat
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getFirstName(): mixed
    {
        return $this->getFieldValue('first_name');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setFirstName(mixed $value): static
    {
        return $this->setFieldValue('first_name', $value);
    }

    /**
     * Optional. Last name of the other party in a private chat
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getLastName(): mixed
    {
        return $this->getFieldValue('last_name');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setLastName(mixed $value): static
    {
        return $this->setFieldValue('last_name', $value);
    }

    /**
     * Optional. *True*, if the supergroup chat is a forum (has [topics](https://telegram.org/blog/topics-in-groups-collectible-usernames#topics-in-groups) enabled)
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsForum(): mixed
    {
        return $this->getFieldValue('is_forum');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsForum(mixed $value): static
    {
        return $this->setFieldValue('is_forum', $value);
    }

    /**
     * Optional. *True*, if the chat is the direct messages chat of a channel
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsDirectMessages(): mixed
    {
        return $this->getFieldValue('is_direct_messages');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsDirectMessages(mixed $value): static
    {
        return $this->setFieldValue('is_direct_messages', $value);
    }
}
