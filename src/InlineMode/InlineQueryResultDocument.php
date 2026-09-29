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
 * Represents a link to a file. By default, this file will be sent by the user with an optional caption. Alternatively, you can use *input_message_content* to send a message with the specified content instead of the file. Currently, only **.PDF** and **.ZIP** files can be sent using this method.
 *
 * @link https://core.telegram.org/bots/api#inlinequeryresultdocument
 *
 * @property-read string|null $type Required. Type of the result, must be *document*
 * @property-write string $type
 * @property-read string|null $id Required. Unique identifier for this result, 1-64 bytes
 * @property-write string $id
 * @property-read string|null $title Required. Title for the result
 * @property-write string $title
 * @property-read string|null $caption Optional. Caption of the document to be sent, 0-1024 characters after entities parsing
 * @property-write string $caption
 * @property-read string|null $parseMode Optional. Mode for parsing entities in the document caption. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details.
 * @property-write string $parseMode
 * @property-read Base\ArrayObject<Types\MessageEntity> $captionEntities Optional. List of special entities that appear in the caption, which can be specified instead of *parse_mode*
 * @property-write list<Types\MessageEntity|array<string, mixed>>|Base\ArrayObject<Types\MessageEntity> $captionEntities
 * @property-read string|null $documentUrl Required. A valid URL for the file
 * @property-write string $documentUrl
 * @property-read string|null $mimeType Required. MIME type of the content of the file, either “application/pdf” or “application/zip”
 * @property-write string $mimeType
 * @property-read string|null $description Optional. Short description of the result
 * @property-write string $description
 * @property-read Types\InlineKeyboardMarkup|null $replyMarkup Optional. [Inline keyboard](https://core.telegram.org/bots/features#inline-keyboards) attached to the message
 * @property-write Types\InlineKeyboardMarkup|array<string, mixed> $replyMarkup
 * @property-read InputMessageContent|null $inputMessageContent Optional. Content of the message to be sent instead of the file
 * @property-write InputMessageContent|array<string, mixed> $inputMessageContent
 * @property-read string|null $thumbnailUrl Optional. URL of the thumbnail (JPEG only) for the file
 * @property-write string $thumbnailUrl
 * @property-read int|null $thumbnailWidth Optional. Thumbnail width
 * @property-write int $thumbnailWidth
 * @property-read int|null $thumbnailHeight Optional. Thumbnail height
 * @property-write int $thumbnailHeight
 */
class InlineQueryResultDocument extends InlineQueryResult
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
                'value' => 'document',
                'required' => true,
            ],
            'id' => [
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
            'document_url' => [
                'type' => ['string'],
                'required' => true,
            ],
            'mime_type' => [
                'type' => ['string'],
                'required' => true,
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
            'thumbnail_url' => [
                'type' => ['string'],
            ],
            'thumbnail_width' => [
                'type' => ['int'],
            ],
            'thumbnail_height' => [
                'type' => ['int'],
            ],
        ];
    }

    /**
     * Required. Type of the result, must be *document*
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
     * Optional. Caption of the document to be sent, 0-1024 characters after entities parsing
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
     * Optional. Mode for parsing entities in the document caption. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details.
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
     * Required. A valid URL for the file
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getDocumentUrl(): mixed
    {
        return $this->getFieldValue('document_url');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setDocumentUrl(mixed $value): static
    {
        return $this->setFieldValue('document_url', $value);
    }

    /**
     * Required. MIME type of the content of the file, either “application/pdf” or “application/zip”
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
     * Optional. Content of the message to be sent instead of the file
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

    /**
     * Optional. URL of the thumbnail (JPEG only) for the file
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
     * Optional. Thumbnail width
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getThumbnailWidth(): mixed
    {
        return $this->getFieldValue('thumbnail_width');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setThumbnailWidth(mixed $value): static
    {
        return $this->setFieldValue('thumbnail_width', $value);
    }

    /**
     * Optional. Thumbnail height
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getThumbnailHeight(): mixed
    {
        return $this->getFieldValue('thumbnail_height');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setThumbnailHeight(mixed $value): static
    {
        return $this->setFieldValue('thumbnail_height', $value);
    }
}
