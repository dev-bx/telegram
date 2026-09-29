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
 * Represents a link to an animated GIF file. By default, this animated GIF file will be sent by the user with optional caption. Alternatively, you can use *input_message_content* to send a message with the specified content instead of the animation.
 *
 * @link https://core.telegram.org/bots/api#inlinequeryresultgif
 *
 * @property-read string|null $type Required. Type of the result, must be *gif*
 * @property-write string $type
 * @property-read string|null $id Required. Unique identifier for this result, 1-64 bytes
 * @property-write string $id
 * @property-read string|null $gifUrl Required. A valid URL for the GIF file
 * @property-write string $gifUrl
 * @property-read int|null $gifWidth Optional. Width of the GIF
 * @property-write int $gifWidth
 * @property-read int|null $gifHeight Optional. Height of the GIF
 * @property-write int $gifHeight
 * @property-read int|null $gifDuration Optional. Duration of the GIF in seconds
 * @property-write int $gifDuration
 * @property-read string|null $thumbnailUrl Required. URL of the static (JPEG or GIF) or animated (MPEG4) thumbnail for the result
 * @property-write string $thumbnailUrl
 * @property-read string|null $thumbnailMimeType Optional. MIME type of the thumbnail, must be one of “image/jpeg”, “image/gif”, or “video/mp4”. Defaults to “image/jpeg”.
 * @property-write string $thumbnailMimeType
 * @property-read string|null $title Optional. Title for the result
 * @property-write string $title
 * @property-read string|null $caption Optional. Caption of the GIF file to be sent, 0-1024 characters after entities parsing
 * @property-write string $caption
 * @property-read string|null $parseMode Optional. Mode for parsing entities in the caption. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details.
 * @property-write string $parseMode
 * @property-read Base\ArrayObject<Types\MessageEntity> $captionEntities Optional. List of special entities that appear in the caption, which can be specified instead of *parse_mode*
 * @property-write list<Types\MessageEntity|array<string, mixed>>|Base\ArrayObject<Types\MessageEntity> $captionEntities
 * @property-read bool|null $showCaptionAboveMedia Optional. Pass *True* if the caption must be shown above the message media
 * @property-write bool $showCaptionAboveMedia
 * @property-read Types\InlineKeyboardMarkup|null $replyMarkup Optional. [Inline keyboard](https://core.telegram.org/bots/features#inline-keyboards) attached to the message
 * @property-write Types\InlineKeyboardMarkup|array<string, mixed> $replyMarkup
 * @property-read InputMessageContent|null $inputMessageContent Optional. Content of the message to be sent instead of the GIF animation
 * @property-write InputMessageContent|array<string, mixed> $inputMessageContent
 */
class InlineQueryResultGif extends InlineQueryResult
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
                'value' => 'gif',
                'required' => true,
            ],
            'id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'gif_url' => [
                'type' => ['string'],
                'required' => true,
            ],
            'gif_width' => [
                'type' => ['int'],
            ],
            'gif_height' => [
                'type' => ['int'],
            ],
            'gif_duration' => [
                'type' => ['int'],
            ],
            'thumbnail_url' => [
                'type' => ['string'],
                'required' => true,
            ],
            'thumbnail_mime_type' => [
                'type' => ['string'],
            ],
            'title' => [
                'type' => ['string'],
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
            'reply_markup' => [
                'type' => [Types\InlineKeyboardMarkup::class],
            ],
            'input_message_content' => [
                'type' => [InputMessageContent::class],
            ],
        ];
    }

    /**
     * Required. Type of the result, must be *gif*
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
     * Required. A valid URL for the GIF file
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getGifUrl(): mixed
    {
        return $this->getFieldValue('gif_url');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setGifUrl(mixed $value): static
    {
        return $this->setFieldValue('gif_url', $value);
    }

    /**
     * Optional. Width of the GIF
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getGifWidth(): mixed
    {
        return $this->getFieldValue('gif_width');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setGifWidth(mixed $value): static
    {
        return $this->setFieldValue('gif_width', $value);
    }

    /**
     * Optional. Height of the GIF
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getGifHeight(): mixed
    {
        return $this->getFieldValue('gif_height');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setGifHeight(mixed $value): static
    {
        return $this->setFieldValue('gif_height', $value);
    }

    /**
     * Optional. Duration of the GIF in seconds
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getGifDuration(): mixed
    {
        return $this->getFieldValue('gif_duration');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setGifDuration(mixed $value): static
    {
        return $this->setFieldValue('gif_duration', $value);
    }

    /**
     * Required. URL of the static (JPEG or GIF) or animated (MPEG4) thumbnail for the result
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
     * Optional. MIME type of the thumbnail, must be one of “image/jpeg”, “image/gif”, or “video/mp4”. Defaults to “image/jpeg”.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getThumbnailMimeType(): mixed
    {
        return $this->getFieldValue('thumbnail_mime_type');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setThumbnailMimeType(mixed $value): static
    {
        return $this->setFieldValue('thumbnail_mime_type', $value);
    }

    /**
     * Optional. Title for the result
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
     * Optional. Caption of the GIF file to be sent, 0-1024 characters after entities parsing
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
     * Optional. Mode for parsing entities in the caption. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details.
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
     * Optional. Content of the message to be sent instead of the GIF animation
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
