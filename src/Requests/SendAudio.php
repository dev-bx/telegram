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
 * For sending voice messages, use the [sendVoice](#sendvoice) method instead.
 * @property string $businessConnectionId
 * Unique identifier of the business connection on behalf of which the message will be sent
 * @property int|string $chatId
 * Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
 * @property int $messageThreadId
 * Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
 * @property Types\InputFile|string $audio
 * Audio file to send. Pass a file\_id as String to send an audio file that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get an audio file from the Internet, or upload a new one using multipart/form-data. [More information on Sending Files »](#sending-files)
 * @property string $caption
 * Audio caption, 0-1024 characters after entities parsing
 * @property string $parseMode
 * Mode for parsing entities in the audio caption. See [formatting options](#formatting-options) for more details.
 * @property Base\ArrayObject|Types\MessageEntity[] $captionEntities
 * A JSON-serialized list of special entities that appear in the caption, which can be specified instead of *parse\_mode*
 * @property int $duration
 * Duration of the audio in seconds
 * @property string $performer
 * Performer
 * @property string $title
 * Track name
 * @property Types\InputFile|string $thumbnail
 * Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. [More information on Sending Files »](#sending-files)</file_attach_name></file_attach_name>
 * @property bool $disableNotification
 * Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
 * @property bool $protectContent
 * Protects the contents of the sent message from forwarding and saving
 * @property bool $allowPaidBroadcast
 * Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
 * @property string $messageEffectId
 * Unique identifier of the message effect to be added to the message; for private chats only
 * @property Types\ReplyParameters $replyParameters
 * Description of the message to reply to
 * @property Types\InlineKeyboardMarkup|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply $replyMarkup
 * Additional interface options. A JSON-serialized object for an [inline keyboard](/bots/features#inline-keyboards), [custom reply keyboard](/bots/features#keyboards), instructions to remove a reply keyboard or to force a reply from the user
 * @method Base\BaseType send(Api $gateway = null)
 */
class SendAudio extends Base\Request
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
            'audio' => [
                'type' => [Types\InputFile::class, 'string'],
                'required' => true,
            ],
            'caption' => [
                'type' => ['string'],
            ],
            'parse_mode' => [
                'type' => ['string'],
            ],
            'caption_entities' => [
                'type' => [Types\MessageEntity::class],
                'isArray' => true,
            ],
            'duration' => [
                'type' => ['int'],
            ],
            'performer' => [
                'type' => ['string'],
            ],
            'title' => [
                'type' => ['string'],
            ],
            'thumbnail' => [
                'type' => [Types\InputFile::class, 'string'],
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
            'reply_markup' => [
                'type' => [Types\InlineKeyboardMarkup::class, Types\ReplyKeyboardMarkup::class, Types\ReplyKeyboardRemove::class, Types\ForceReply::class],
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
    * @return Types\InputFile|string
    */

    public function getAudio(): mixed
    {
        return $this->getFieldValue('audio');
    }

    /**
    * @param Types\InputFile|string $value
    * @return static
    */

    public function setAudio(mixed $value): static
    {
        return $this->setFieldValue('audio', $value);
    }

    /**
    * @return string
    */

    public function getCaption(): mixed
    {
        return $this->getFieldValue('caption');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setCaption(mixed $value): static
    {
        return $this->setFieldValue('caption', $value);
    }

    /**
    * @return string
    */

    public function getParseMode(): mixed
    {
        return $this->getFieldValue('parse_mode');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setParseMode(mixed $value): static
    {
        return $this->setFieldValue('parse_mode', $value);
    }

    /**
    * @return Base\ArrayObject|Types\MessageEntity[]
    */

    public function getCaptionEntities(): mixed
    {
        return $this->getFieldValue('caption_entities');
    }

    /**
    * @param Base\ArrayObject|Types\MessageEntity[] $value
    * @return static
    */

    public function setCaptionEntities(mixed $value): static
    {
        return $this->setFieldValue('caption_entities', $value);
    }

    /**
    * @return int
    */

    public function getDuration(): mixed
    {
        return $this->getFieldValue('duration');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setDuration(mixed $value): static
    {
        return $this->setFieldValue('duration', $value);
    }

    /**
    * @return string
    */

    public function getPerformer(): mixed
    {
        return $this->getFieldValue('performer');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setPerformer(mixed $value): static
    {
        return $this->setFieldValue('performer', $value);
    }

    /**
    * @return string
    */

    public function getTitle(): mixed
    {
        return $this->getFieldValue('title');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setTitle(mixed $value): static
    {
        return $this->setFieldValue('title', $value);
    }

    /**
    * @return Types\InputFile|string
    */

    public function getThumbnail(): mixed
    {
        return $this->getFieldValue('thumbnail');
    }

    /**
    * @param Types\InputFile|string $value
    * @return static
    */

    public function setThumbnail(mixed $value): static
    {
        return $this->setFieldValue('thumbnail', $value);
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

    /**
    * @return Types\InlineKeyboardMarkup|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply
    */

    public function getReplyMarkup(): mixed
    {
        return $this->getFieldValue('reply_markup');
    }

    /**
    * @param Types\InlineKeyboardMarkup|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply $value
    * @return static
    */

    public function setReplyMarkup(mixed $value): static
    {
        return $this->setFieldValue('reply_markup', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'SendAudio';
    }
}