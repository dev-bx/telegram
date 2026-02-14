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
 * Use this method to decline a suggested post in a direct messages chat. The bot must have the 'can\_manage\_direct\_messages' administrator right in the corresponding channel chat. Returns *True* on success.
 * @property int $chatId
 * Unique identifier for the target direct messages chat
 * @property int $messageId
 * Identifier of a suggested post message to decline
 * @property string $comment
 * Comment for the creator of the suggested post; 0-128 characters
 * @method Base\BaseType send(Api $gateway = null)
 */
class DeclineSuggestedPost extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'chat_id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'message_id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'comment' => [
                'type' => ['string'],
            ],
        ];
    }

    /**
    * @return int
    */

    public function getChatId(): mixed
    {
        return $this->getFieldValue('chat_id');
    }

    /**
    * @param int $value
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
    * @return string
    */

    public function getComment(): mixed
    {
        return $this->getFieldValue('comment');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setComment(mixed $value): static
    {
        return $this->setFieldValue('comment', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'DeclineSuggestedPost';
    }
}