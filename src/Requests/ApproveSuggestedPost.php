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
 * Use this method to approve a suggested post in a direct messages chat. The bot must have the 'can\_post\_messages' administrator right in the corresponding channel chat. Returns *True* on success.
 * @property int $chatId
 * Unique identifier for the target direct messages chat
 * @property int $messageId
 * Identifier of a suggested post message to approve
 * @property int $sendDate
 * Point in time (Unix timestamp) when the post is expected to be published; omit if the date has already been specified when the suggested post was created. If specified, then the date must be not more than 2678400 seconds (30 days) in the future
 * @method Base\BaseType send(Api $gateway = null)
 */
class ApproveSuggestedPost extends Base\Request
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
            'send_date' => [
                'type' => ['int'],
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
    * @return int
    */

    public function getSendDate(): mixed
    {
        return $this->getFieldValue('send_date');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setSendDate(mixed $value): static
    {
        return $this->setFieldValue('send_date', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'ApproveSuggestedPost';
    }
}