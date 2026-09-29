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

/**
 * Represents the `InputMessageContent` of a location message to be sent as the result of an inline query.
 *
 * @link https://core.telegram.org/bots/api#inputlocationmessagecontent
 *
 * @property-read float|null $latitude Required. Latitude of the location in degrees
 * @property-write float|int $latitude
 * @property-read float|null $longitude Required. Longitude of the location in degrees
 * @property-write float|int $longitude
 * @property-read float|null $horizontalAccuracy Optional. The radius of uncertainty for the location, measured in meters; 0-1500
 * @property-write float|int $horizontalAccuracy
 * @property-read int|null $livePeriod Optional. Period in seconds during which the location can be updated, must be between 60 and 86400, or 0x7FFFFFFF for live locations that can be edited indefinitely
 * @property-write int $livePeriod
 * @property-read int|null $heading Optional. For live locations, a direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.
 * @property-write int $heading
 * @property-read int|null $proximityAlertRadius Optional. For live locations, a maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified.
 * @property-write int $proximityAlertRadius
 */
class InputLocationMessageContent extends InputMessageContent
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
            'latitude' => [
                'type' => ['float'],
                'required' => true,
            ],
            'longitude' => [
                'type' => ['float'],
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
        ];
    }

    /**
     * Required. Latitude of the location in degrees
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
     * Required. Longitude of the location in degrees
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
}
