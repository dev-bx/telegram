<?php

/**
 * @project Telegram Bot Api
 * @author Kubeev Ruslan <ruslan@dev-bx.ru>
 * @copyright 2025 Kubeev Ruslan
 * @license MIT
 * @link https://dev-bx.ru/
 *
 * This file is part of the project Telegram Bot Api Class Generator.
 */

namespace DevBX\Telegram\Requests;

use DevBX\Telegram\Base;
use DevBX\Telegram\Api;
use DevBX\Telegram\InlineMode;

/**
 * Stores a message that can be sent by a user of a Mini App. Returns a [PreparedInlineMessage](#preparedinlinemessage) object.
 * @property int $userId
 * Unique identifier of the target user that can use the prepared message
 * @property InlineMode\InlineQueryResult $result
 * A JSON-serialized object describing the message to be sent
 * @property bool $allowUserChats
 * Pass *True* if the message can be sent to private chats with users
 * @property bool $allowBotChats
 * Pass *True* if the message can be sent to private chats with bots
 * @property bool $allowGroupChats
 * Pass *True* if the message can be sent to group and supergroup chats
 * @property bool $allowChannelChats
 * Pass *True* if the message can be sent to channel chats
 * @method InlineMode\PreparedInlineMessage send(Api $gateway = null)
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
                'type' => InlineMode\PreparedInlineMessage::class,
            ],
        ];
    }

    /**
    * @return int
    */

    public function getUserId(): mixed
    {
        return $this->getFieldValue('user_id');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setUserId(mixed $value): static
    {
        return $this->setFieldValue('user_id', $value);
    }

    /**
    * @return InlineMode\InlineQueryResult
    */

    public function getResult(): mixed
    {
        return $this->getFieldValue('result');
    }

    /**
    * @param InlineMode\InlineQueryResult $value
    * @return static
    */

    public function setResult(mixed $value): static
    {
        return $this->setFieldValue('result', $value);
    }

    /**
    * @return bool
    */

    public function getAllowUserChats(): mixed
    {
        return $this->getFieldValue('allow_user_chats');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setAllowUserChats(mixed $value): static
    {
        return $this->setFieldValue('allow_user_chats', $value);
    }

    /**
    * @return bool
    */

    public function getAllowBotChats(): mixed
    {
        return $this->getFieldValue('allow_bot_chats');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setAllowBotChats(mixed $value): static
    {
        return $this->setFieldValue('allow_bot_chats', $value);
    }

    /**
    * @return bool
    */

    public function getAllowGroupChats(): mixed
    {
        return $this->getFieldValue('allow_group_chats');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setAllowGroupChats(mixed $value): static
    {
        return $this->setFieldValue('allow_group_chats', $value);
    }

    /**
    * @return bool
    */

    public function getAllowChannelChats(): mixed
    {
        return $this->getFieldValue('allow_channel_chats');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setAllowChannelChats(mixed $value): static
    {
        return $this->setFieldValue('allow_channel_chats', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'SavePreparedInlineMessage';
    }
}