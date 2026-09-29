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
 * This object represents a point on the map.
 *
 * @link https://core.telegram.org/bots/api#location
 *
 * @property-read float|null $latitude Required. Latitude as defined by the sender
 * @property-write float|int $latitude
 * @property-read float|null $longitude Required. Longitude as defined by the sender
 * @property-write float|int $longitude
 * @property-read float|null $horizontalAccuracy Optional. The radius of uncertainty for the location, measured in meters; 0-1500
 * @property-write float|int $horizontalAccuracy
 * @property-read int|null $livePeriod Optional. Time relative to the message sending date, during which the location can be updated; in seconds. For active live locations only.
 * @property-write int $livePeriod
 * @property-read int|null $heading Optional. The direction in which user is moving, in degrees; 1-360. For active live locations only.
 * @property-write int $heading
 * @property-read int|null $proximityAlertRadius Optional. The maximum distance for proximity alerts about approaching another chat member, in meters. For sent live locations only.
 * @property-write int $proximityAlertRadius
 */
class Location extends Base\BaseType
{
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
     * Required. Latitude as defined by the sender
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
     * Required. Longitude as defined by the sender
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
     * Optional. Time relative to the message sending date, during which the location can be updated; in seconds. For active live locations only.
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
     * Optional. The direction in which user is moving, in degrees; 1-360. For active live locations only.
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
     * Optional. The maximum distance for proximity alerts about approaching another chat member, in meters. For sent live locations only.
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
