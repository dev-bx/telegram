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
 * Use this method to send a group of photos, videos, documents or audios as an album. Documents and audio files can be only grouped in an album with messages of the same type. On success, an array of [Messages](#message) that were sent is returned.
 * @property string $businessConnectionId
 * Unique identifier of the business connection on behalf of which the message will be sent
 * @property int|string $chatId
 * Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
 * @property int $messageThreadId
 * Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
 * @property Base\ArrayObject|Types\InputMediaAudio[]|Types\InputMediaDocument|Types\InputMediaPhoto|Types\InputMediaVideo $media
 * A JSON-serialized array describing messages to be sent, must include 2-10 items
 * @property bool $disableNotification
 * Sends messages [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
 * @property bool $protectContent
 * Protects the contents of the sent messages from forwarding and saving
 * @property bool $allowPaidBroadcast
 * Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
 * @property string $messageEffectId
 * Unique identifier of the message effect to be added to the message; for private chats only
 * @property Types\ReplyParameters $replyParameters
 * Description of the message to reply to
 * @method Base\BaseType send(Api $gateway = null)
 */
class SendMediaGroup extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'business_connection_id' => [
                'type' => ['string'],
            ],
            'chat_id' => [
                'type' => ['int', 'string'],
                'required' => true,
            ],
            'message_thread_id' => [
                'type' => ['int'],
            ],
            'media' => [
                'type' => [Types\InputMediaAudio::class, Types\InputMediaDocument::class, Types\InputMediaPhoto::class, Types\InputMediaVideo::class],
                'isArray' => true,
                'required' => true,
            ],
            'disable_notification' => [
                'type' => ['bool'],
            ],
            'protect_content' => [
                'type' => ['bool'],
            ],
            'allow_paid_broadcast' => [
                'type' => ['bool'],
            ],
            'message_effect_id' => [
                'type' => ['string'],
            ],
            'reply_parameters' => [
                'type' => [Types\ReplyParameters::class],
            ],
        ];
    }

    /**
    * @return string
    */

    public function getBusinessConnectionId(): mixed
    {
        return $this->getFieldValue('business_connection_id');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setBusinessConnectionId(mixed $value): static
    {
        return $this->setFieldValue('business_connection_id', $value);
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
    * @return Base\ArrayObject|Types\InputMediaAudio[]|Types\InputMediaDocument|Types\InputMediaPhoto|Types\InputMediaVideo
    */

    public function getMedia(): mixed
    {
        return $this->getFieldValue('media');
    }

    /**
    * @param Base\ArrayObject|Types\InputMediaAudio[]|Types\InputMediaDocument|Types\InputMediaPhoto|Types\InputMediaVideo $value
    * @return static
    */

    public function setMedia(mixed $value): static
    {
        return $this->setFieldValue('media', $value);
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
    * @return bool
    */

    public function getAllowPaidBroadcast(): mixed
    {
        return $this->getFieldValue('allow_paid_broadcast');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setAllowPaidBroadcast(mixed $value): static
    {
        return $this->setFieldValue('allow_paid_broadcast', $value);
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
    * @return Types\ReplyParameters
    */

    public function getReplyParameters(): mixed
    {
        return $this->getFieldValue('reply_parameters');
    }

    /**
    * @param Types\ReplyParameters $value
    * @return static
    */

    public function setReplyParameters(mixed $value): static
    {
        return $this->setFieldValue('reply_parameters', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'SendMediaGroup';
    }
}