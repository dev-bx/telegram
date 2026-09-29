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

namespace DevBX\Telegram\InlineMode;

use DevBX\Telegram\Base;
use DevBX\Telegram\Types;

/**
 * Represents a link to a page containing an embedded video player or a video file. By default, this video file will be sent by the user with an optional caption. Alternatively, you can use *input_message_content* to send a message with the specified content instead of the video.
 *
 * If an InlineQueryResultVideo message contains an embedded video (e.g., YouTube), you **must** replace its content using *input_message_content*.
 *
 * @link https://core.telegram.org/bots/api#inlinequeryresultvideo
 *
 * @property-read string|null $type Required. Type of the result, must be *video*
 * @property-write string $type
 * @property-read string|null $id Required. Unique identifier for this result, 1-64 bytes
 * @property-write string $id
 * @property-read string|null $videoUrl Required. A valid URL for the embedded video player or video file
 * @property-write string $videoUrl
 * @property-read string|null $mimeType Required. MIME type of the content of the video URL, “text/html” or “video/mp4”
 * @property-write string $mimeType
 * @property-read string|null $thumbnailUrl Required. URL of the thumbnail (JPEG only) for the video
 * @property-write string $thumbnailUrl
 * @property-read string|null $title Required. Title for the result
 * @property-write string $title
 * @property-read string|null $caption Optional. Caption of the video to be sent, 0-1024 characters after entities parsing
 * @property-write string $caption
 * @property-read string|null $parseMode Optional. Mode for parsing entities in the video caption. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details.
 * @property-write string $parseMode
 * @property-read Base\ArrayObject<Types\MessageEntity> $captionEntities Optional. List of special entities that appear in the caption, which can be specified instead of *parse_mode*
 * @property-write list<Types\MessageEntity|array<string, mixed>>|Base\ArrayObject<Types\MessageEntity> $captionEntities
 * @property-read bool|null $showCaptionAboveMedia Optional. Pass *True* if the caption must be shown above the message media
 * @property-write bool $showCaptionAboveMedia
 * @property-read int|null $videoWidth Optional. Video width
 * @property-write int $videoWidth
 * @property-read int|null $videoHeight Optional. Video height
 * @property-write int $videoHeight
 * @property-read int|null $videoDuration Optional. Video duration in seconds
 * @property-write int $videoDuration
 * @property-read string|null $description Optional. Short description of the result
 * @property-write string $description
 * @property-read Types\InlineKeyboardMarkup|null $replyMarkup Optional. [Inline keyboard](https://core.telegram.org/bots/features#inline-keyboards) attached to the message
 * @property-write Types\InlineKeyboardMarkup|array<string, mixed> $replyMarkup
 * @property-read InputMessageContent|null $inputMessageContent Optional. Content of the message to be sent instead of the video. This field is **required** if InlineQueryResultVideo is used to send an HTML-page as a result (e.g., a YouTube video).
 * @property-write InputMessageContent|array<string, mixed> $inputMessageContent
 */
class InlineQueryResultVideo extends InlineQueryResult
{
    /**
     * @return static
     * @throws Base\TelegramException
     */
    public static function create(mixed $value = null, bool $ignoreUnknownFields = false): ?Base\BaseType
    {
        return static::createInstance($value, $ignoreUnknownFields);
    }

    public static function getFields(): array
    {
        return [
            'type' => [
                'type' => ['string'],
                'value' => 'video',
                'required' => true,
            ],
            'id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'video_url' => [
                'type' => ['string'],
                'required' => true,
            ],
            'mime_type' => [
                'type' => ['string'],
                'required' => true,
            ],
            'thumbnail_url' => [
                'type' => ['string'],
                'required' => true,
            ],
            'title' => [
                'type' => ['string'],
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
            'show_caption_above_media' => [
                'type' => ['bool'],
            ],
            'video_width' => [
                'type' => ['int'],
            ],
            'video_height' => [
                'type' => ['int'],
            ],
            'video_duration' => [
                'type' => ['int'],
            ],
            'description' => [
                'type' => ['string'],
            ],
            'reply_markup' => [
                'type' => [Types\InlineKeyboardMarkup::class],
            ],
            'input_message_content' => [
                'type' => [InputMessageContent::class],
            ],
        ];
    }

    /**
     * Required. Type of the result, must be *video*
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getType(): mixed
    {
        return $this->getFieldValue('type');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setType(mixed $value): static
    {
        return $this->setFieldValue('type', $value);
    }

    /**
     * Required. Unique identifier for this result, 1-64 bytes
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getId(): mixed
    {
        return $this->getFieldValue('id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setId(mixed $value): static
    {
        return $this->setFieldValue('id', $value);
    }

    /**
     * Required. A valid URL for the embedded video player or video file
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getVideoUrl(): mixed
    {
        return $this->getFieldValue('video_url');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setVideoUrl(mixed $value): static
    {
        return $this->setFieldValue('video_url', $value);
    }

    /**
     * Required. MIME type of the content of the video URL, “text/html” or “video/mp4”
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getMimeType(): mixed
    {
        return $this->getFieldValue('mime_type');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setMimeType(mixed $value): static
    {
        return $this->setFieldValue('mime_type', $value);
    }

    /**
     * Required. URL of the thumbnail (JPEG only) for the video
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getThumbnailUrl(): mixed
    {
        return $this->getFieldValue('thumbnail_url');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setThumbnailUrl(mixed $value): static
    {
        return $this->setFieldValue('thumbnail_url', $value);
    }

    /**
     * Required. Title for the result
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getTitle(): mixed
    {
        return $this->getFieldValue('title');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setTitle(mixed $value): static
    {
        return $this->setFieldValue('title', $value);
    }

    /**
     * Optional. Caption of the video to be sent, 0-1024 characters after entities parsing
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
     * Optional. List of special entities that appear in the caption, which can be specified instead of *parse_mode*
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
     * Optional. Video width
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getVideoWidth(): mixed
    {
        return $this->getFieldValue('video_width');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setVideoWidth(mixed $value): static
    {
        return $this->setFieldValue('video_width', $value);
    }

    /**
     * Optional. Video height
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getVideoHeight(): mixed
    {
        return $this->getFieldValue('video_height');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setVideoHeight(mixed $value): static
    {
        return $this->setFieldValue('video_height', $value);
    }

    /**
     * Optional. Video duration in seconds
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getVideoDuration(): mixed
    {
        return $this->getFieldValue('video_duration');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setVideoDuration(mixed $value): static
    {
        return $this->setFieldValue('video_duration', $value);
    }

    /**
     * Optional. Short description of the result
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getDescription(): mixed
    {
        return $this->getFieldValue('description');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setDescription(mixed $value): static
    {
        return $this->setFieldValue('description', $value);
    }

    /**
     * Optional. [Inline keyboard](https://core.telegram.org/bots/features#inline-keyboards) attached to the message
     *
     * @return Types\InlineKeyboardMarkup|null
     * @throws Base\TelegramException
     */
    public function getReplyMarkup(): mixed
    {
        return $this->getFieldValue('reply_markup');
    }

    /**
     * @param Types\InlineKeyboardMarkup|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setReplyMarkup(mixed $value): static
    {
        return $this->setFieldValue('reply_markup', $value);
    }

    /**
     * Optional. Content of the message to be sent instead of the video. This field is **required** if InlineQueryResultVideo is used to send an HTML-page as a result (e.g., a YouTube video).
     *
     * @return InputMessageContent|null
     * @throws Base\TelegramException
     */
    public function getInputMessageContent(): mixed
    {
        return $this->getFieldValue('input_message_content');
    }

    /**
     * @param InputMessageContent|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setInputMessageContent(mixed $value): static
    {
        return $this->setFieldValue('input_message_content', $value);
    }
}
