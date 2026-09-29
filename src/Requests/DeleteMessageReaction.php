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

/**
 * Use this method to remove a reaction from a message in a group or a supergroup chat. The bot must have the 'can\_delete\_messages' administrator right in the chat. Returns *True* on success.
 * @property int|string $chatId
 * Unique identifier for the target chat or username of the target supergroup in the format `@username`
 * @property int $messageId
 * Identifier of the target message
 * @property int $userId
 * Identifier of the user whose reaction will be removed, if the reaction was added by a user
 * @property int $actorChatId
 * Identifier of the chat whose reaction will be removed, if the reaction was added by a chat
 * @method Base\BaseType send(Api $gateway = null)
 */
class DeleteMessageReaction extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'chat_id' => [
                'type' => ['int', 'string'],
                'required' => true,
            ],
            'message_id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'user_id' => [
                'type' => ['int'],
            ],
            'actor_chat_id' => [
                'type' => ['int'],
            ],
        ];
    }

    /**
    * @return int|string
    */

    public function getChatId(): mixed
    {
        return $this->getFieldValue('chat_id');
    }

    /**
    * @param int|string $value
    * @return static
    */

    public function setChatId(mixed $value): static
    {
        return $this->setFieldValue('chat_id', $value);
    }

    /**
    * @return int
    */

    public function getMessageId(): mixed
    {
        return $this->getFieldValue('message_id');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setMessageId(mixed $value): static
    {
        return $this->setFieldValue('message_id', $value);
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
    * @return int
    */

    public function getActorChatId(): mixed
    {
        return $this->getFieldValue('actor_chat_id');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setActorChatId(mixed $value): static
    {
        return $this->setFieldValue('actor_chat_id', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'DeleteMessageReaction';
    }
}