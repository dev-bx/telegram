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

namespace DevBX\Telegram\Types;

use DevBX\Telegram\Base;

/**
 * Represents a venue to be sent.
 *
 * @link https://core.telegram.org/bots/api#inputmediavenue
 *
 * @property-read string|null $type Required. Type of the media, must be *venue*
 * @property-write string $type
 * @property-read float|null $latitude Required. Latitude of the location
 * @property-write float|int $latitude
 * @property-read float|null $longitude Required. Longitude of the location
 * @property-write float|int $longitude
 * @property-read string|null $title Required. Name of the venue
 * @property-write string $title
 * @property-read string|null $address Required. Address of the venue
 * @property-write string $address
 * @property-read string|null $foursquareId Optional. Foursquare identifier of the venue
 * @property-write string $foursquareId
 * @property-read string|null $foursquareType Optional. Foursquare type of the venue, if known. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
 * @property-write string $foursquareType
 * @property-read string|null $googlePlaceId Optional. Google Places identifier of the venue
 * @property-write string $googlePlaceId
 * @property-read string|null $googlePlaceType Optional. Google Places type of the venue. (See [supported types](https://developers.google.com/places/web-service/supported_types).)
 * @property-write string $googlePlaceType
 */
class InputMediaVenue extends InputPollOptionMedia
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
        ];
    }

    /**
     * Required. Type of the media, must be *venue*
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
     * Required. Latitude of the location
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
     * Required. Longitude of the location
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
     * Required. Name of the venue
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
     * Optional. Foursquare identifier of the venue
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
}
