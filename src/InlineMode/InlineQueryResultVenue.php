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
 * Represents a venue. By default, the venue will be sent by the user. Alternatively, you can use *input_message_content* to send a message with the specified content instead of the venue.
 *
 * @link https://core.telegram.org/bots/api#inlinequeryresultvenue
 *
 * @property-read string|null $type Required. Type of the result, must be *venue*
 * @property-write string $type
 * @property-read string|null $id Required. Unique identifier for this result, 1-64 Bytes
 * @property-write string $id
 * @property-read float|null $latitude Required. Latitude of the venue location in degrees
 * @property-write float|int $latitude
 * @property-read float|null $longitude Required. Longitude of the venue location in degrees
 * @property-write float|int $longitude
 * @property-read string|null $title Required. Title of the venue
 * @property-write string $title
 * @property-read string|null $address Required. Address of the venue
 * @property-write string $address
 * @property-read string|null $foursquareId Optional. Foursquare identifier of the venue if known
 * @property-write string $foursquareId
 * @property-read string|null $foursquareType Optional. Foursquare type of the venue, if known. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
 * @property-write string $foursquareType
 * @property-read string|null $googlePlaceId Optional. Google Places identifier of the venue
 * @property-write string $googlePlaceId
 * @property-read string|null $googlePlaceType Optional. Google Places type of the venue. (See [supported types](https://developers.google.com/places/web-service/supported_types).)
 * @property-write string $googlePlaceType
 * @property-read Types\InlineKeyboardMarkup|null $replyMarkup Optional. [Inline keyboard](https://core.telegram.org/bots/features#inline-keyboards) attached to the message
 * @property-write Types\InlineKeyboardMarkup|array<string, mixed> $replyMarkup
 * @property-read InputMessageContent|null $inputMessageContent Optional. Content of the message to be sent instead of the venue
 * @property-write InputMessageContent|array<string, mixed> $inputMessageContent
 * @property-read string|null $thumbnailUrl Optional. Url of the thumbnail for the result
 * @property-write string $thumbnailUrl
 * @property-read int|null $thumbnailWidth Optional. Thumbnail width
 * @property-write int $thumbnailWidth
 * @property-read int|null $thumbnailHeight Optional. Thumbnail height
 * @property-write int $thumbnailHeight
 */
class InlineQueryResultVenue extends InlineQueryResult
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
                'value' => 'venue',
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
            'address' => [
                'type' => ['string'],
                'required' => true,
            ],
            'foursquare_id' => [
                'type' => ['string'],
            ],
            'foursquare_type' => [
                'type' => ['string'],
            ],
            'google_place_id' => [
                'type' => ['string'],
            ],
            'google_place_type' => [
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
     * Required. Type of the result, must be *venue*
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
     * Required. Latitude of the venue location in degrees
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
     * Required. Longitude of the venue location in degrees
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
     * Required. Title of the venue
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
     * Required. Address of the venue
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getAddress(): mixed
    {
        return $this->getFieldValue('address');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAddress(mixed $value): static
    {
        return $this->setFieldValue('address', $value);
    }

    /**
     * Optional. Foursquare identifier of the venue if known
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getFoursquareId(): mixed
    {
        return $this->getFieldValue('foursquare_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setFoursquareId(mixed $value): static
    {
        return $this->setFieldValue('foursquare_id', $value);
    }

    /**
     * Optional. Foursquare type of the venue, if known. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getFoursquareType(): mixed
    {
        return $this->getFieldValue('foursquare_type');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setFoursquareType(mixed $value): static
    {
        return $this->setFieldValue('foursquare_type', $value);
    }

    /**
     * Optional. Google Places identifier of the venue
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getGooglePlaceId(): mixed
    {
        return $this->getFieldValue('google_place_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setGooglePlaceId(mixed $value): static
    {
        return $this->setFieldValue('google_place_id', $value);
    }

    /**
     * Optional. Google Places type of the venue. (See [supported types](https://developers.google.com/places/web-service/supported_types).)
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getGooglePlaceType(): mixed
    {
        return $this->getFieldValue('google_place_type');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setGooglePlaceType(mixed $value): static
    {
        return $this->setFieldValue('google_place_type', $value);
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
     * Optional. Content of the message to be sent instead of the venue
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
