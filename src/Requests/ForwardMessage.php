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
 * Use this method to forward messages of any kind. Service messages and messages with protected content can't be forwarded. On success, the sent [Message](#message) is returned.
 * @property int|string $chatId
 * Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
 * @property int $messageThreadId
 * Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
 * @property int|string $fromChatId
 * Unique identifier for the chat where the original message was sent (or channel username in the format `@channelusername`)
 * @property int $videoStartTimestamp
 * New start timestamp for the forwarded video in the message
 * @property bool $disableNotification
 * Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
 * @property bool $protectContent
 * Protects the contents of the forwarded message from forwarding and saving
 * @property int $messageId
 * Message identifier in the chat specified in *from\_chat\_id*
 * @method Types\Message send(Api $gateway = null)
 */
class ForwardMessage extends Base\Request
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
            'video_start_timestamp' => [
                'type' => ['int'],
            ],
            'disable_notification' => [
                'type' => ['bool'],
            ],
            'protect_content' => [
                'type' => ['bool'],
            ],
            'message_id' => [
                'type' => ['int'],
                'required' => true,
            ],
            '@return' => [
                'type' => Types\Message::class,
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
    * @return int
    */

    public function getVideoStartTimestamp(): mixed
    {
        return $this->getFieldValue('video_start_timestamp');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setVideoStartTimestamp(mixed $value): static
    {
        return $this->setFieldValue('video_start_timestamp', $value);
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

    protected function getRequestMethod(): string
    {
        return 'ForwardMessage';
    }
}