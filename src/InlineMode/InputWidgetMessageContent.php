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
 * Represents the `InputMessageContent` of a message with an [HTML widget](https://core.telegram.org/bots/widgets) to be sent as the result of an inline query. Currently, widgets can't be sent in response to inline queries in the production environment.
 *
 * @link https://core.telegram.org/bots/api#inputwidgetmessagecontent
 *
 * @property-read string|null $html Required. HTML code of the widget, 1-32768 bytes. The code must not exceed 4096 bytes when compressed by zlib with the maximum compression level.
 * @property-write string $html
 * @property-read int|null $width Optional. Width of the widget in logical pixels; omit if the widget must occupy the whole width of the message bubble. The width is clamped by the app to the range from 200 to the maximum width of the message bubble.
 * @property-write int $width
 * @property-read int|null $height Optional. Height of the widget in logical pixels; omit if the height of the widget isn't fixed. The height is clamped by the app to the range 50-600.
 * @property-write int $height
 * @property-read string|null $publicData Optional. Public data of the widget, 0-1024 bytes, which will be available wherever the widget is shown. If the widget is shared, then all messages with it will have the same public data.
 * @property-write string $publicData
 * @property-read string|null $chatData Optional. Data of the widget, which is specific to the message, 0-1024 bytes
 * @property-write string $chatData
 * @property-read string|null $caption Optional. Widget caption, 0-1024 characters after entities parsing
 * @property-write string $caption
 * @property-read string|null $parseMode Optional. Mode for parsing entities in the widget caption. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details.
 * @property-write string $parseMode
 * @property-read Base\ArrayObject<Types\MessageEntity> $captionEntities Optional. List of special entities that appear in the caption, which can be specified instead of *parse_mode*
 * @property-write list<Types\MessageEntity|array<string, mixed>>|Base\ArrayObject<Types\MessageEntity> $captionEntities
 * @property-read bool|null $showCaptionAboveMedia Optional. Pass *True* if the caption must be shown above the widget
 * @property-write bool $showCaptionAboveMedia
 * @property-read bool|null $allowQueries Optional. Pass *True* to allow the widget to send queries to the bot
 * @property-write bool $allowQueries
 * @property-read bool|null $isShared Optional. Pass *True* to create a shared widget. Each message sent from the result creates a separate shared widget, whose identifier is received by the bot only in the field *widget_id* of queries from the widget. To send an existing shared widget in response to an inline query, use `InputSharedWidgetMessageContent` instead.
 * @property-write bool $isShared
 */
class InputWidgetMessageContent extends InputMessageContent
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
            'html' => [
                'type' => ['string'],
                'required' => true,
            ],
            'width' => [
                'type' => ['int'],
            ],
            'height' => [
                'type' => ['int'],
            ],
            'public_data' => [
                'type' => ['string'],
            ],
            'chat_data' => [
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
            'allow_queries' => [
                'type' => ['bool'],
            ],
            'is_shared' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Required. HTML code of the widget, 1-32768 bytes. The code must not exceed 4096 bytes when compressed by zlib with the maximum compression level.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getHtml(): mixed
    {
        return $this->getFieldValue('html');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setHtml(mixed $value): static
    {
        return $this->setFieldValue('html', $value);
    }

    /**
     * Optional. Width of the widget in logical pixels; omit if the widget must occupy the whole width of the message bubble. The width is clamped by the app to the range from 200 to the maximum width of the message bubble.
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
     * Optional. Height of the widget in logical pixels; omit if the height of the widget isn't fixed. The height is clamped by the app to the range 50-600.
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
     * Optional. Public data of the widget, 0-1024 bytes, which will be available wherever the widget is shown. If the widget is shared, then all messages with it will have the same public data.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getPublicData(): mixed
    {
        return $this->getFieldValue('public_data');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPublicData(mixed $value): static
    {
        return $this->setFieldValue('public_data', $value);
    }

    /**
     * Optional. Data of the widget, which is specific to the message, 0-1024 bytes
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getChatData(): mixed
    {
        return $this->getFieldValue('chat_data');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setChatData(mixed $value): static
    {
        return $this->setFieldValue('chat_data', $value);
    }

    /**
     * Optional. Widget caption, 0-1024 characters after entities parsing
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
     * Optional. Mode for parsing entities in the widget caption. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details.
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
     * Optional. Pass *True* if the caption must be shown above the widget
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
     * Optional. Pass *True* to allow the widget to send queries to the bot
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getAllowQueries(): mixed
    {
        return $this->getFieldValue('allow_queries');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAllowQueries(mixed $value): static
    {
        return $this->setFieldValue('allow_queries', $value);
    }

    /**
     * Optional. Pass *True* to create a shared widget. Each message sent from the result creates a separate shared widget, whose identifier is received by the bot only in the field *widget_id* of queries from the widget. To send an existing shared widget in response to an inline query, use `InputSharedWidgetMessageContent` instead.
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsShared(): mixed
    {
        return $this->getFieldValue('is_shared');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsShared(mixed $value): static
    {
        return $this->setFieldValue('is_shared', $value);
    }
}
