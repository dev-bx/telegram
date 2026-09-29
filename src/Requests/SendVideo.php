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
 * Use this method to send video files, Telegram clients support MPEG4 videos (other formats may be sent as `Document`). On success, the sent `Message` is returned. Bots can currently send video files of up to 50 MB in size, this limit may be changed in the future.
 *
 * @link https://core.telegram.org/bots/api#sendvideo
 *
 * @property-read string|null $businessConnectionId Optional. Unique identifier of the business connection on behalf of which the message will be sent
 * @property-write string $businessConnectionId
 * @property-read int|string|null $chatId Required. Unique identifier for the target chat or username of the target bot, supergroup or channel in the format `@username`
 * @property-write int|string $chatId
 * @property-read int|null $messageThreadId Optional. Unique identifier for the target message thread (topic) of a forum; for forum supergroups and private chats of bots with forum topic mode enabled only
 * @property-write int $messageThreadId
 * @property-read int|null $directMessagesTopicId Optional. Identifier of the direct messages topic to which the message will be sent; required if the message is sent to a direct messages chat
 * @property-write int $directMessagesTopicId
 * @property-read Types\EphemeralMessageParameters|null $ephemeralMessageParameters Optional. A JSON-serialized object containing the parameters of the ephemeral message to send
 * @property-write Types\EphemeralMessageParameters|array<string, mixed> $ephemeralMessageParameters
 * @property-read array<string, mixed>|string|null $video Required. Video to send. Pass a file_id as String to send a video that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get a video from the Internet, or upload a new video using multipart/form-data. [More information on Sending Files »](https://core.telegram.org/bots/api#sending-files)
 * @property-write Types\InputFile|array{filename?: string, content?: string, resource?: resource, contentType?: string}|string $video
 * @property-read int|null $duration Optional. Duration of sent video in seconds
 * @property-write int $duration
 * @property-read int|null $width Optional. Video width
 * @property-write int $width
 * @property-read int|null $height Optional. Video height
 * @property-write int $height
 * @property-read array<string, mixed>|string|null $thumbnail Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. [More information on Sending Files »](https://core.telegram.org/bots/api#sending-files)
 * @property-write Types\InputFile|array{filename?: string, content?: string, resource?: resource, contentType?: string}|string $thumbnail
 * @property-read array<string, mixed>|string|null $cover Optional. Cover for the video in the message. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. [More information on Sending Files »](https://core.telegram.org/bots/api#sending-files)
 * @property-write Types\InputFile|array{filename?: string, content?: string, resource?: resource, contentType?: string}|string $cover
 * @property-read int|null $startTimestamp Optional. Start timestamp for the video in the message
 * @property-write int $startTimestamp
 * @property-read string|null $caption Optional. Video caption (may also be used when resending videos by *file_id*), 0-1024 characters after entities parsing
 * @property-write string $caption
 * @property-read string|null $parseMode Optional. Mode for parsing entities in the video caption. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details.
 * @property-write string $parseMode
 * @property-read Base\ArrayObject<Types\MessageEntity> $captionEntities Optional. A JSON-serialized list of special entities that appear in the caption, which can be specified instead of *parse_mode*
 * @property-write list<Types\MessageEntity|array<string, mixed>>|Base\ArrayObject<Types\MessageEntity> $captionEntities
 * @property-read bool|null $showCaptionAboveMedia Optional. Pass *True* if the caption must be shown above the message media
 * @property-write bool $showCaptionAboveMedia
 * @property-read bool|null $hasSpoiler Optional. Pass *True* if the video needs to be covered with a spoiler animation
 * @property-write bool $hasSpoiler
 * @property-read bool|null $supportsStreaming Optional. Pass *True* if the uploaded video is suitable for streaming
 * @property-write bool $supportsStreaming
 * @property-read bool|null $disableNotification Optional. Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
 * @property-write bool $disableNotification
 * @property-read bool|null $protectContent Optional. Protects the contents of the sent message from forwarding and saving
 * @property-write bool $protectContent
 * @property-read bool|null $allowPaidBroadcast Optional. Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance.
 * @property-write bool $allowPaidBroadcast
 * @property-read string|null $messageEffectId Optional. Unique identifier of the message effect to be added to the message; for private chats only
 * @property-write string $messageEffectId
 * @property-read Types\SuggestedPostParameters|null $suggestedPostParameters Optional. A JSON-serialized object containing the parameters of the suggested post to send; for direct messages chats only. If the message is sent as a reply to another suggested post, then that suggested post is automatically declined.
 * @property-write Types\SuggestedPostParameters|array<string, mixed> $suggestedPostParameters
 * @property-read Types\ReplyParameters|null $replyParameters Optional. Description of the message to reply to
 * @property-write Types\ReplyParameters|array<string, mixed> $replyParameters
 * @property-read Types\InlineKeyboardMarkup|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply|null $replyMarkup Optional. Additional interface options. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards), [custom reply keyboard](https://core.telegram.org/bots/features#keyboards), instructions to remove a reply keyboard or to force a reply from the user.
 * @property-write Types\InlineKeyboardMarkup|array<string, mixed>|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply $replyMarkup
 *
 * @method Types\Message send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class SendVideo extends Base\Request
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
            'direct_messages_topic_id' => [
                'type' => ['int'],
            ],
            'ephemeral_message_parameters' => [
                'type' => [Types\EphemeralMessageParameters::class],
            ],
            'video' => [
                'type' => ['string', Types\InputFile::class],
                'required' => true,
            ],
            'duration' => [
                'type' => ['int'],
            ],
            'width' => [
                'type' => ['int'],
            ],
            'height' => [
                'type' => ['int'],
            ],
            'thumbnail' => [
                'type' => ['string', Types\InputFile::class],
            ],
            'cover' => [
                'type' => ['string', Types\InputFile::class],
            ],
            'start_timestamp' => [
                'type' => ['int'],
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
            'show_caption_above_media' => [
                'type' => ['bool'],
            ],
            'has_spoiler' => [
                'type' => ['bool'],
            ],
            'supports_streaming' => [
                'type' => ['bool'],
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
            'suggested_post_parameters' => [
                'type' => [Types\SuggestedPostParameters::class],
            ],
            'reply_parameters' => [
                'type' => [Types\ReplyParameters::class],
            ],
            'reply_markup' => [
                'type' => [Types\InlineKeyboardMarkup::class, Types\ReplyKeyboardMarkup::class, Types\ReplyKeyboardRemove::class, Types\ForceReply::class],
            ],
            '@return' => [
                'type' => [Types\Message::class],
            ],
        ];
    }

    /**
     * Optional. Unique identifier of the business connection on behalf of which the message will be sent
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getBusinessConnectionId(): mixed
    {
        return $this->getFieldValue('business_connection_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setBusinessConnectionId(mixed $value): static
    {
        return $this->setFieldValue('business_connection_id', $value);
    }

    /**
     * Required. Unique identifier for the target chat or username of the target bot, supergroup or channel in the format `@username`
     *
     * @return int|string|null
     * @throws Base\TelegramException
     */
    public function getChatId(): mixed
    {
        return $this->getFieldValue('chat_id');
    }

    /**
     * @param int|string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setChatId(mixed $value): static
    {
        return $this->setFieldValue('chat_id', $value);
    }

    /**
     * Optional. Unique identifier for the target message thread (topic) of a forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getMessageThreadId(): mixed
    {
        return $this->getFieldValue('message_thread_id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setMessageThreadId(mixed $value): static
    {
        return $this->setFieldValue('message_thread_id', $value);
    }

    /**
     * Optional. Identifier of the direct messages topic to which the message will be sent; required if the message is sent to a direct messages chat
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getDirectMessagesTopicId(): mixed
    {
        return $this->getFieldValue('direct_messages_topic_id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setDirectMessagesTopicId(mixed $value): static
    {
        return $this->setFieldValue('direct_messages_topic_id', $value);
    }

    /**
     * Optional. A JSON-serialized object containing the parameters of the ephemeral message to send
     *
     * @return Types\EphemeralMessageParameters|null
     * @throws Base\TelegramException
     */
    public function getEphemeralMessageParameters(): mixed
    {
        return $this->getFieldValue('ephemeral_message_parameters');
    }

    /**
     * @param Types\EphemeralMessageParameters|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setEphemeralMessageParameters(mixed $value): static
    {
        return $this->setFieldValue('ephemeral_message_parameters', $value);
    }

    /**
     * Required. Video to send. Pass a file_id as String to send a video that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get a video from the Internet, or upload a new video using multipart/form-data. [More information on Sending Files »](https://core.telegram.org/bots/api#sending-files)
     *
     * @return array<string, mixed>|string|null
     * @throws Base\TelegramException
     */
    public function getVideo(): mixed
    {
        return $this->getFieldValue('video');
    }

    /**
     * @param Types\InputFile|array{filename?: string, content?: string, resource?: resource, contentType?: string}|string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setVideo(mixed $value): static
    {
        return $this->setFieldValue('video', $value);
    }

    /**
     * Optional. Duration of sent video in seconds
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getDuration(): mixed
    {
        return $this->getFieldValue('duration');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setDuration(mixed $value): static
    {
        return $this->setFieldValue('duration', $value);
    }

    /**
     * Optional. Video width
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getWidth(): mixed
    {
        return $this->getFieldValue('width');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setWidth(mixed $value): static
    {
        return $this->setFieldValue('width', $value);
    }

    /**
     * Optional. Video height
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getHeight(): mixed
    {
        return $this->getFieldValue('height');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setHeight(mixed $value): static
    {
        return $this->setFieldValue('height', $value);
    }

    /**
     * Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. [More information on Sending Files »](https://core.telegram.org/bots/api#sending-files)
     *
     * @return array<string, mixed>|string|null
     * @throws Base\TelegramException
     */
    public function getThumbnail(): mixed
    {
        return $this->getFieldValue('thumbnail');
    }

    /**
     * @param Types\InputFile|array{filename?: string, content?: string, resource?: resource, contentType?: string}|string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setThumbnail(mixed $value): static
    {
        return $this->setFieldValue('thumbnail', $value);
    }

    /**
     * Optional. Cover for the video in the message. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. [More information on Sending Files »](https://core.telegram.org/bots/api#sending-files)
     *
     * @return array<string, mixed>|string|null
     * @throws Base\TelegramException
     */
    public function getCover(): mixed
    {
        return $this->getFieldValue('cover');
    }

    /**
     * @param Types\InputFile|array{filename?: string, content?: string, resource?: resource, contentType?: string}|string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCover(mixed $value): static
    {
        return $this->setFieldValue('cover', $value);
    }

    /**
     * Optional. Start timestamp for the video in the message
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getStartTimestamp(): mixed
    {
        return $this->getFieldValue('start_timestamp');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setStartTimestamp(mixed $value): static
    {
        return $this->setFieldValue('start_timestamp', $value);
    }

    /**
     * Optional. Video caption (may also be used when resending videos by *file_id*), 0-1024 characters after entities parsing
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getCaption(): mixed
    {
        return $this->getFieldValue('caption');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCaption(mixed $value): static
    {
        return $this->setFieldValue('caption', $value);
    }

    /**
     * Optional. Mode for parsing entities in the video caption. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getParseMode(): mixed
    {
        return $this->getFieldValue('parse_mode');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setParseMode(mixed $value): static
    {
        return $this->setFieldValue('parse_mode', $value);
    }

    /**
     * Optional. A JSON-serialized list of special entities that appear in the caption, which can be specified instead of *parse_mode*
     *
     * @return Base\ArrayObject<Types\MessageEntity>
     * @throws Base\TelegramException
     */
    public function getCaptionEntities(): mixed
    {
        return $this->getFieldValue('caption_entities');
    }

    /**
     * @param list<Types\MessageEntity|array<string, mixed>>|Base\ArrayObject<Types\MessageEntity> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCaptionEntities(mixed $value): static
    {
        return $this->setFieldValue('caption_entities', $value);
    }

    /**
     * Optional. Pass *True* if the caption must be shown above the message media
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getShowCaptionAboveMedia(): mixed
    {
        return $this->getFieldValue('show_caption_above_media');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setShowCaptionAboveMedia(mixed $value): static
    {
        return $this->setFieldValue('show_caption_above_media', $value);
    }

    /**
     * Optional. Pass *True* if the video needs to be covered with a spoiler animation
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getHasSpoiler(): mixed
    {
        return $this->getFieldValue('has_spoiler');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setHasSpoiler(mixed $value): static
    {
        return $this->setFieldValue('has_spoiler', $value);
    }

    /**
     * Optional. Pass *True* if the uploaded video is suitable for streaming
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getSupportsStreaming(): mixed
    {
        return $this->getFieldValue('supports_streaming');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSupportsStreaming(mixed $value): static
    {
        return $this->setFieldValue('supports_streaming', $value);
    }

    /**
     * Optional. Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getDisableNotification(): mixed
    {
        return $this->getFieldValue('disable_notification');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setDisableNotification(mixed $value): static
    {
        return $this->setFieldValue('disable_notification', $value);
    }

    /**
     * Optional. Protects the contents of the sent message from forwarding and saving
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getProtectContent(): mixed
    {
        return $this->getFieldValue('protect_content');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setProtectContent(mixed $value): static
    {
        return $this->setFieldValue('protect_content', $value);
    }

    /**
     * Optional. Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance.
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getAllowPaidBroadcast(): mixed
    {
        return $this->getFieldValue('allow_paid_broadcast');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAllowPaidBroadcast(mixed $value): static
    {
        return $this->setFieldValue('allow_paid_broadcast', $value);
    }

    /**
     * Optional. Unique identifier of the message effect to be added to the message; for private chats only
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getMessageEffectId(): mixed
    {
        return $this->getFieldValue('message_effect_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setMessageEffectId(mixed $value): static
    {
        return $this->setFieldValue('message_effect_id', $value);
    }

    /**
     * Optional. A JSON-serialized object containing the parameters of the suggested post to send; for direct messages chats only. If the message is sent as a reply to another suggested post, then that suggested post is automatically declined.
     *
     * @return Types\SuggestedPostParameters|null
     * @throws Base\TelegramException
     */
    public function getSuggestedPostParameters(): mixed
    {
        return $this->getFieldValue('suggested_post_parameters');
    }

    /**
     * @param Types\SuggestedPostParameters|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSuggestedPostParameters(mixed $value): static
    {
        return $this->setFieldValue('suggested_post_parameters', $value);
    }

    /**
     * Optional. Description of the message to reply to
     *
     * @return Types\ReplyParameters|null
     * @throws Base\TelegramException
     */
    public function getReplyParameters(): mixed
    {
        return $this->getFieldValue('reply_parameters');
    }

    /**
     * @param Types\ReplyParameters|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setReplyParameters(mixed $value): static
    {
        return $this->setFieldValue('reply_parameters', $value);
    }

    /**
     * Optional. Additional interface options. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards), [custom reply keyboard](https://core.telegram.org/bots/features#keyboards), instructions to remove a reply keyboard or to force a reply from the user.
     *
     * @return Types\InlineKeyboardMarkup|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply|null
     * @throws Base\TelegramException
     */
    public function getReplyMarkup(): mixed
    {
        return $this->getFieldValue('reply_markup');
    }

    /**
     * @param Types\InlineKeyboardMarkup|array<string, mixed>|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setReplyMarkup(mixed $value): static
    {
        return $this->setFieldValue('reply_markup', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'sendVideo';
    }
}
