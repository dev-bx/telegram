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
 * This object represents an inline button that switches the current user to inline mode in a chosen chat, with an optional default inline query.
 *
 * @link https://core.telegram.org/bots/api#switchinlinequerychosenchat
 *
 * @property-read string|null $query Optional. The default inline query to be inserted in the input field. If left empty, only the bot's username will be inserted.
 * @property-write string $query
 * @property-read bool|null $allowUserChats Optional. *True*, if private chats with users can be chosen
 * @property-write bool $allowUserChats
 * @property-read bool|null $allowBotChats Optional. *True*, if private chats with bots can be chosen
 * @property-write bool $allowBotChats
 * @property-read bool|null $allowGroupChats Optional. *True*, if group and supergroup chats can be chosen
 * @property-write bool $allowGroupChats
 * @property-read bool|null $allowChannelChats Optional. *True*, if channel chats can be chosen
 * @property-write bool $allowChannelChats
 */
class SwitchInlineQueryChosenChat extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'query' => [
                'type' => ['string'],
            ],
            'allow_user_chats' => [
                'type' => ['bool'],
            ],
            'allow_bot_chats' => [
                'type' => ['bool'],
            ],
            'allow_group_chats' => [
                'type' => ['bool'],
            ],
            'allow_channel_chats' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Optional. The default inline query to be inserted in the input field. If left empty, only the bot's username will be inserted.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getQuery(): mixed
    {
        return $this->getFieldValue('query');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setQuery(mixed $value): static
    {
        return $this->setFieldValue('query', $value);
    }

    /**
     * Optional. *True*, if private chats with users can be chosen
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getAllowUserChats(): mixed
    {
        return $this->getFieldValue('allow_user_chats');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAllowUserChats(mixed $value): static
    {
        return $this->setFieldValue('allow_user_chats', $value);
    }

    /**
     * Optional. *True*, if private chats with bots can be chosen
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getAllowBotChats(): mixed
    {
        return $this->getFieldValue('allow_bot_chats');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAllowBotChats(mixed $value): static
    {
        return $this->setFieldValue('allow_bot_chats', $value);
    }

    /**
     * Optional. *True*, if group and supergroup chats can be chosen
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getAllowGroupChats(): mixed
    {
        return $this->getFieldValue('allow_group_chats');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAllowGroupChats(mixed $value): static
    {
        return $this->setFieldValue('allow_group_chats', $value);
    }

    /**
     * Optional. *True*, if channel chats can be chosen
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getAllowChannelChats(): mixed
    {
        return $this->getFieldValue('allow_channel_chats');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAllowChannelChats(mixed $value): static
    {
        return $this->setFieldValue('allow_channel_chats', $value);
    }
}
