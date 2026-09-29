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
 * This object represents a Telegram user or bot.
 *
 * @link https://core.telegram.org/bots/api#user
 *
 * @property-read int|null $id Required. Unique identifier for this user or bot. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
 * @property-write int $id
 * @property-read bool|null $isBot Required. *True*, if this user is a bot
 * @property-write bool $isBot
 * @property-read string|null $firstName Required. User's or bot's first name
 * @property-write string $firstName
 * @property-read string|null $lastName Optional. User's or bot's last name
 * @property-write string $lastName
 * @property-read string|null $username Optional. User's or bot's username
 * @property-write string $username
 * @property-read string|null $languageCode Optional. [IETF language tag](https://en.wikipedia.org/wiki/IETF_language_tag) of the user's language
 * @property-write string $languageCode
 * @property-read bool|null $isPremium Optional. *True*, if this user is a Telegram Premium user
 * @property-write bool $isPremium
 * @property-read bool|null $addedToAttachmentMenu Optional. *True*, if this user added the bot to the attachment menu
 * @property-write bool $addedToAttachmentMenu
 * @property-read bool|null $canJoinGroups Optional. *True*, if the bot can be invited to groups. Returned only in `getMe`.
 * @property-write bool $canJoinGroups
 * @property-read bool|null $canReadAllGroupMessages Optional. *True*, if [privacy mode](https://core.telegram.org/bots/features#privacy-mode) is disabled for the bot. Returned only in `getMe`.
 * @property-write bool $canReadAllGroupMessages
 * @property-read bool|null $supportsGuestQueries Optional. *True*, if the bot supports guest queries from chats it is not a member of. Returned only in `getMe`.
 * @property-write bool $supportsGuestQueries
 * @property-read bool|null $supportsInlineQueries Optional. *True*, if the bot supports inline queries. Returned only in `getMe`.
 * @property-write bool $supportsInlineQueries
 * @property-read bool|null $canConnectToBusiness Optional. *True*, if the bot can be connected to a user account to manage it. Returned only in `getMe`.
 * @property-write bool $canConnectToBusiness
 * @property-read bool|null $hasMainWebApp Optional. *True*, if the bot has a main Web App. Returned only in `getMe`.
 * @property-write bool $hasMainWebApp
 * @property-read bool|null $hasTopicsEnabled Optional. *True*, if the bot has forum topic mode enabled in private chats. Returned only in `getMe`.
 * @property-write bool $hasTopicsEnabled
 * @property-read bool|null $allowsUsersToCreateTopics Optional. *True*, if the bot allows users to create and delete topics in private chats. Returned only in `getMe`.
 * @property-write bool $allowsUsersToCreateTopics
 * @property-read bool|null $canManageBots Optional. *True*, if other bots can be created to be controlled by the bot. Returned only in `getMe`.
 * @property-write bool $canManageBots
 * @property-read bool|null $supportsJoinRequestQueries Optional. *True*, if the bot supports join request queries and can be assigned to process them. Returned only in `getMe`.
 * @property-write bool $supportsJoinRequestQueries
 */
class User extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'is_bot' => [
                'type' => ['bool'],
                'required' => true,
            ],
            'first_name' => [
                'type' => ['string'],
                'required' => true,
            ],
            'last_name' => [
                'type' => ['string'],
            ],
            'username' => [
                'type' => ['string'],
            ],
            'language_code' => [
                'type' => ['string'],
            ],
            'is_premium' => [
                'type' => ['bool'],
            ],
            'added_to_attachment_menu' => [
                'type' => ['bool'],
            ],
            'can_join_groups' => [
                'type' => ['bool'],
            ],
            'can_read_all_group_messages' => [
                'type' => ['bool'],
            ],
            'supports_guest_queries' => [
                'type' => ['bool'],
            ],
            'supports_inline_queries' => [
                'type' => ['bool'],
            ],
            'can_connect_to_business' => [
                'type' => ['bool'],
            ],
            'has_main_web_app' => [
                'type' => ['bool'],
            ],
            'has_topics_enabled' => [
                'type' => ['bool'],
            ],
            'allows_users_to_create_topics' => [
                'type' => ['bool'],
            ],
            'can_manage_bots' => [
                'type' => ['bool'],
            ],
            'supports_join_request_queries' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Required. Unique identifier for this user or bot. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
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
     * Required. *True*, if this user is a bot
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsBot(): mixed
    {
        return $this->getFieldValue('is_bot');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsBot(mixed $value): static
    {
        return $this->setFieldValue('is_bot', $value);
    }

    /**
     * Required. User's or bot's first name
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
     * Optional. User's or bot's last name
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
     * Optional. User's or bot's username
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
     * Optional. [IETF language tag](https://en.wikipedia.org/wiki/IETF_language_tag) of the user's language
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getLanguageCode(): mixed
    {
        return $this->getFieldValue('language_code');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setLanguageCode(mixed $value): static
    {
        return $this->setFieldValue('language_code', $value);
    }

    /**
     * Optional. *True*, if this user is a Telegram Premium user
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsPremium(): mixed
    {
        return $this->getFieldValue('is_premium');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsPremium(mixed $value): static
    {
        return $this->setFieldValue('is_premium', $value);
    }

    /**
     * Optional. *True*, if this user added the bot to the attachment menu
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getAddedToAttachmentMenu(): mixed
    {
        return $this->getFieldValue('added_to_attachment_menu');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAddedToAttachmentMenu(mixed $value): static
    {
        return $this->setFieldValue('added_to_attachment_menu', $value);
    }

    /**
     * Optional. *True*, if the bot can be invited to groups. Returned only in `getMe`.
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getCanJoinGroups(): mixed
    {
        return $this->getFieldValue('can_join_groups');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCanJoinGroups(mixed $value): static
    {
        return $this->setFieldValue('can_join_groups', $value);
    }

    /**
     * Optional. *True*, if [privacy mode](https://core.telegram.org/bots/features#privacy-mode) is disabled for the bot. Returned only in `getMe`.
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getCanReadAllGroupMessages(): mixed
    {
        return $this->getFieldValue('can_read_all_group_messages');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCanReadAllGroupMessages(mixed $value): static
    {
        return $this->setFieldValue('can_read_all_group_messages', $value);
    }

    /**
     * Optional. *True*, if the bot supports guest queries from chats it is not a member of. Returned only in `getMe`.
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getSupportsGuestQueries(): mixed
    {
        return $this->getFieldValue('supports_guest_queries');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSupportsGuestQueries(mixed $value): static
    {
        return $this->setFieldValue('supports_guest_queries', $value);
    }

    /**
     * Optional. *True*, if the bot supports inline queries. Returned only in `getMe`.
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getSupportsInlineQueries(): mixed
    {
        return $this->getFieldValue('supports_inline_queries');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSupportsInlineQueries(mixed $value): static
    {
        return $this->setFieldValue('supports_inline_queries', $value);
    }

    /**
     * Optional. *True*, if the bot can be connected to a user account to manage it. Returned only in `getMe`.
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getCanConnectToBusiness(): mixed
    {
        return $this->getFieldValue('can_connect_to_business');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCanConnectToBusiness(mixed $value): static
    {
        return $this->setFieldValue('can_connect_to_business', $value);
    }

    /**
     * Optional. *True*, if the bot has a main Web App. Returned only in `getMe`.
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getHasMainWebApp(): mixed
    {
        return $this->getFieldValue('has_main_web_app');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setHasMainWebApp(mixed $value): static
    {
        return $this->setFieldValue('has_main_web_app', $value);
    }

    /**
     * Optional. *True*, if the bot has forum topic mode enabled in private chats. Returned only in `getMe`.
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getHasTopicsEnabled(): mixed
    {
        return $this->getFieldValue('has_topics_enabled');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setHasTopicsEnabled(mixed $value): static
    {
        return $this->setFieldValue('has_topics_enabled', $value);
    }

    /**
     * Optional. *True*, if the bot allows users to create and delete topics in private chats. Returned only in `getMe`.
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getAllowsUsersToCreateTopics(): mixed
    {
        return $this->getFieldValue('allows_users_to_create_topics');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAllowsUsersToCreateTopics(mixed $value): static
    {
        return $this->setFieldValue('allows_users_to_create_topics', $value);
    }

    /**
     * Optional. *True*, if other bots can be created to be controlled by the bot. Returned only in `getMe`.
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getCanManageBots(): mixed
    {
        return $this->getFieldValue('can_manage_bots');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCanManageBots(mixed $value): static
    {
        return $this->setFieldValue('can_manage_bots', $value);
    }

    /**
     * Optional. *True*, if the bot supports join request queries and can be assigned to process them. Returned only in `getMe`.
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getSupportsJoinRequestQueries(): mixed
    {
        return $this->getFieldValue('supports_join_request_queries');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSupportsJoinRequestQueries(mixed $value): static
    {
        return $this->setFieldValue('supports_join_request_queries', $value);
    }
}
