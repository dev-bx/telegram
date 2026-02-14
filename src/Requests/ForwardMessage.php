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
use DevBX\Telegram\Types;

/**
 * Use this method to forward messages of any kind. Service messages and messages with protected content can't be forwarded. On success, the sent [Message](#message) is returned.
 * @property int|string $chatId
 * Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
 * @property int $messageThreadId
 * Unique identifier for the target message thread (topic) of a forum; for forum supergroups and private chats of bots with forum topic mode enabled only
 * @property int $directMessagesTopicId
 * Identifier of the direct messages topic to which the message will be forwarded; required if the message is forwarded to a direct messages chat
 * @property int|string $fromChatId
 * Unique identifier for the chat where the original message was sent (or channel username in the format `@channelusername`)
 * @property int $videoStartTimestamp
 * New start timestamp for the forwarded video in the message
 * @property bool $disableNotification
 * Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
 * @property bool $protectContent
 * Protects the contents of the forwarded message from forwarding and saving
 * @property string $messageEffectId
 * Unique identifier of the message effect to be added to the message; only available when forwarding to private chats
 * @property Types\SuggestedPostParameters $suggestedPostParameters
 * A JSON-serialized object containing the parameters of the suggested post to send; for direct messages chats only
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
            'direct_messages_topic_id' => [
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
            'message_effect_id' => [
                'type' => ['string'],
            ],
            'suggested_post_parameters' => [
                'type' => [Types\SuggestedPostParameters::class],
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
    * @return int
    */

    public function getDirectMessagesTopicId(): mixed
    {
        return $this->getFieldValue('direct_messages_topic_id');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setDirectMessagesTopicId(mixed $value): static
    {
        return $this->setFieldValue('direct_messages_topic_id', $value);
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
    * @return string
    */

    public function getMessageEffectId(): mixed
    {
        return $this->getFieldValue('message_effect_id');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setMessageEffectId(mixed $value): static
    {
        return $this->setFieldValue('message_effect_id', $value);
    }

    /**
    * @return Types\SuggestedPostParameters
    */

    public function getSuggestedPostParameters(): mixed
    {
        return $this->getFieldValue('suggested_post_parameters');
    }

    /**
    * @param Types\SuggestedPostParameters $value
    * @return static
    */

    public function setSuggestedPostParameters(mixed $value): static
    {
        return $this->setFieldValue('suggested_post_parameters', $value);
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