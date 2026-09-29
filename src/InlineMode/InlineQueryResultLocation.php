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
 * Represents a location on a map. By default, the location will be sent by the user. Alternatively, you can use *input_message_content* to send a message with the specified content instead of the location.
 *
 * @link https://core.telegram.org/bots/api#inlinequeryresultlocation
 *
 * @property-read string|null $type Required. Type of the result, must be *location*
 * @property-write string $type
 * @property-read string|null $id Required. Unique identifier for this result, 1-64 Bytes
 * @property-write string $id
 * @property-read float|null $latitude Required. Location latitude in degrees
 * @property-write float|int $latitude
 * @property-read float|null $longitude Required. Location longitude in degrees
 * @property-write float|int $longitude
 * @property-read string|null $title Required. Location title
 * @property-write string $title
 * @property-read float|null $horizontalAccuracy Optional. The radius of uncertainty for the location, measured in meters; 0-1500
 * @property-write float|int $horizontalAccuracy
 * @property-read int|null $livePeriod Optional. Period in seconds during which the location can be updated, must be between 60 and 86400, or 0x7FFFFFFF for live locations that can be edited indefinitely
 * @property-write int $livePeriod
 * @property-read int|null $heading Optional. For live locations, a direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.
 * @property-write int $heading
 * @property-read int|null $proximityAlertRadius Optional. For live locations, a maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified.
 * @property-write int $proximityAlertRadius
 * @property-read Types\InlineKeyboardMarkup|null $replyMarkup Optional. [Inline keyboard](https://core.telegram.org/bots/features#inline-keyboards) attached to the message
 * @property-write Types\InlineKeyboardMarkup|array<string, mixed> $replyMarkup
 * @property-read InputMessageContent|null $inputMessageContent Optional. Content of the message to be sent instead of the location
 * @property-write InputMessageContent|array<string, mixed> $inputMessageContent
 * @property-read string|null $thumbnailUrl Optional. Url of the thumbnail for the result
 * @property-write string $thumbnailUrl
 * @property-read int|null $thumbnailWidth Optional. Thumbnail width
 * @property-write int $thumbnailWidth
 * @property-read int|null $thumbnailHeight Optional. Thumbnail height
 * @property-write int $thumbnailHeight
 */
class InlineQueryResultLocation extends InlineQueryResult
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
                'value' => 'location',
                'required' => true,
            ],
            'id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'latitude' => [
                'type' => ['float'],
                'required' => true,
            ],
            'longitude' => [
                'type' => ['float'],
                'required' => true,
            ],
            'title' => [
                'type' => ['string'],
                'required' => true,
            ],
            'horizontal_accuracy' => [
                'type' => ['float'],
            ],
            'live_period' => [
                'type' => ['int'],
            ],
            'heading' => [
                'type' => ['int'],
            ],
            'proximity_alert_radius' => [
                'type' => ['int'],
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
     * Required. Type of the result, must be *location*
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
     * Required. Unique identifier for this result, 1-64 Bytes
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
     * Required. Location latitude in degrees
     *
     * @return float|null
     * @throws Base\TelegramException
     */
    public function getLatitude(): mixed
    {
        return $this->getFieldValue('latitude');
    }

    /**
     * @param float|int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setLatitude(mixed $value): static
    {
        return $this->setFieldValue('latitude', $value);
    }

    /**
     * Required. Location longitude in degrees
     *
     * @return float|null
     * @throws Base\TelegramException
     */
    public function getLongitude(): mixed
    {
        return $this->getFieldValue('longitude');
    }

    /**
     * @param float|int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setLongitude(mixed $value): static
    {
        return $this->setFieldValue('longitude', $value);
    }

    /**
     * Required. Location title
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
     * Optional. The radius of uncertainty for the location, measured in meters; 0-1500
     *
     * @return float|null
     * @throws Base\TelegramException
     */
    public function getHorizontalAccuracy(): mixed
    {
        return $this->getFieldValue('horizontal_accuracy');
    }

    /**
     * @param float|int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setHorizontalAccuracy(mixed $value): static
    {
        return $this->setFieldValue('horizontal_accuracy', $value);
    }

    /**
     * Optional. Period in seconds during which the location can be updated, must be between 60 and 86400, or 0x7FFFFFFF for live locations that can be edited indefinitely
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getLivePeriod(): mixed
    {
        return $this->getFieldValue('live_period');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setLivePeriod(mixed $value): static
    {
        return $this->setFieldValue('live_period', $value);
    }

    /**
     * Optional. For live locations, a direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getHeading(): mixed
    {
        return $this->getFieldValue('heading');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setHeading(mixed $value): static
    {
        return $this->setFieldValue('heading', $value);
    }

    /**
     * Optional. For live locations, a maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified.
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getProximityAlertRadius(): mixed
    {
        return $this->getFieldValue('proximity_alert_radius');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setProximityAlertRadius(mixed $value): static
    {
        return $this->setFieldValue('proximity_alert_radius', $value);
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
     * Optional. Content of the message to be sent instead of the location
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
     * Optional. Url of the thumbnail for the result
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
