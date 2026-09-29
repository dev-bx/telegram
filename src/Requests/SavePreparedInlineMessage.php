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

namespace DevBX\Telegram\Requests;

use DevBX\Telegram\Base;
use DevBX\Telegram\Api;
use DevBX\Telegram\InlineMode;
use DevBX\Telegram\Types;

/**
 * Stores a message that can be sent by a user of a Mini App. Returns a `PreparedInlineMessage` object.
 *
 * @link https://core.telegram.org/bots/api#savepreparedinlinemessage
 *
 * @property-read int|null $userId Required. Unique identifier of the target user that can use the prepared message
 * @property-write int $userId
 * @property-read InlineMode\InlineQueryResult|null $result Required. A JSON-serialized object describing the message to be sent
 * @property-write InlineMode\InlineQueryResult|array<string, mixed> $result
 * @property-read bool|null $allowUserChats Optional. Pass *True* if the message can be sent to private chats with users
 * @property-write bool $allowUserChats
 * @property-read bool|null $allowBotChats Optional. Pass *True* if the message can be sent to private chats with bots
 * @property-write bool $allowBotChats
 * @property-read bool|null $allowGroupChats Optional. Pass *True* if the message can be sent to group and supergroup chats
 * @property-write bool $allowGroupChats
 * @property-read bool|null $allowChannelChats Optional. Pass *True* if the message can be sent to channel chats
 * @property-write bool $allowChannelChats
 *
 * @method Types\PreparedInlineMessage send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class SavePreparedInlineMessage extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'user_id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'result' => [
                'type' => [InlineMode\InlineQueryResult::class],
                'required' => true,
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
            '@return' => [
                'type' => [Types\PreparedInlineMessage::class],
            ],
        ];
    }

    /**
     * Required. Unique identifier of the target user that can use the prepared message
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getUserId(): mixed
    {
        return $this->getFieldValue('user_id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setUserId(mixed $value): static
    {
        return $this->setFieldValue('user_id', $value);
    }

    /**
     * Required. A JSON-serialized object describing the message to be sent
     *
     * @return InlineMode\InlineQueryResult|null
     * @throws Base\TelegramException
     */
    public function getResult(): mixed
    {
        return $this->getFieldValue('result');
    }

    /**
     * @param InlineMode\InlineQueryResult|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setResult(mixed $value): static
    {
        return $this->setFieldValue('result', $value);
    }

    /**
     * Optional. Pass *True* if the message can be sent to private chats with users
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
     * Optional. Pass *True* if the message can be sent to private chats with bots
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
     * Optional. Pass *True* if the message can be sent to group and supergroup chats
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
     * Optional. Pass *True* if the message can be sent to channel chats
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

    protected function getRequestMethod(): string
    {
        return 'savePreparedInlineMessage';
    }
}
