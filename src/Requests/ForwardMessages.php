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
use DevBX\Telegram\Types;

/**
 * Use this method to forward multiple messages of any kind. If some of the specified messages can't be found or forwarded, they are skipped. Service messages and messages with protected content can't be forwarded. Album grouping is kept for forwarded messages. On success, an array of [MessageId](#messageid) of the sent messages is returned.
 * @property int|string $chatId
 * Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
 * @property int $messageThreadId
 * Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
 * @property int|string $fromChatId
 * Unique identifier for the chat where the original messages were sent (or channel username in the format `@channelusername`)
 * @property int[] $messageIds
 * A JSON-serialized list of 1-100 identifiers of messages in the chat *from\_chat\_id* to forward. The identifiers must be specified in a strictly increasing order.
 * @property bool $disableNotification
 * Sends the messages [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
 * @property bool $protectContent
 * Protects the contents of the forwarded messages from forwarding and saving
 * @method Types\MessageId[]|Base\BaseType send(Api $gateway = null)
 */
class ForwardMessages extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'chat_id' => [
                'type' => ['int', 'string'],
                'required' => true,
            ],
            'message_thread_id' => [
                'type' => ['int'],
            ],
            'from_chat_id' => [
                'type' => ['int', 'string'],
                'required' => true,
            ],
            'message_ids' => [
                'type' => ['int'],
                'isArray' => true,
                'required' => true,
            ],
            'disable_notification' => [
                'type' => ['bool'],
            ],
            'protect_content' => [
                'type' => ['bool'],
            ],
            '@return' => [
                'type' => Types\MessageId::class,
                'isArray' => true,
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

    public function getMessageThreadId(): mixed
    {
        return $this->getFieldValue('message_thread_id');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setMessageThreadId(mixed $value): static
    {
        return $this->setFieldValue('message_thread_id', $value);
    }

    /**
    * @return int|string
    */

    public function getFromChatId(): mixed
    {
        return $this->getFieldValue('from_chat_id');
    }

    /**
    * @param int|string $value
    * @return static
    */

    public function setFromChatId(mixed $value): static
    {
        return $this->setFieldValue('from_chat_id', $value);
    }

    /**
    * @return int[]
    */

    public function getMessageIds(): mixed
    {
        return $this->getFieldValue('message_ids');
    }

    /**
    * @param int[] $value
    * @return static
    */

    public function setMessageIds(mixed $value): static
    {
        return $this->setFieldValue('message_ids', $value);
    }

    /**
    * @return bool
    */

    public function getDisableNotification(): mixed
    {
        return $this->getFieldValue('disable_notification');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setDisableNotification(mixed $value): static
    {
        return $this->setFieldValue('disable_notification', $value);
    }

    /**
    * @return bool
    */

    public function getProtectContent(): mixed
    {
        return $this->getFieldValue('protect_content');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setProtectContent(mixed $value): static
    {
        return $this->setFieldValue('protect_content', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'ForwardMessages';
    }
}