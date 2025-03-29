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

/**
 * Use this method to unban a previously banned channel chat in a supergroup or channel. The bot must be an administrator for this to work and must have the appropriate administrator rights. Returns *True* on success.
 * @property int|string $chatId
 * Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
 * @property int $senderChatId
 * Unique identifier of the target sender chat
 * @method Base\BaseType send(Api $gateway = null)
 */
class UnbanChatSenderChat extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'chat_id' => [
                'type' => ['int', 'string'],
                'required' => true,
            ],
            'sender_chat_id' => [
                'type' => ['int'],
                'required' => true,
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

    public function getSenderChatId(): mixed
    {
        return $this->getFieldValue('sender_chat_id');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setSenderChatId(mixed $value): static
    {
        return $this->setFieldValue('sender_chat_id', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'UnbanChatSenderChat';
    }
}