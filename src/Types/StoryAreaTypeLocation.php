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
 * Describes a story area pointing to a location. Currently, a story can have up to 10 location areas.
 *
 * @link https://core.telegram.org/bots/api#storyareatypelocation
 *
 * @property-read string|null $type Required. Type of the area, always “location”
 * @property-write string $type
 * @property-read float|null $latitude Required. Location latitude in degrees
 * @property-write float|int $latitude
 * @property-read float|null $longitude Required. Location longitude in degrees
 * @property-write float|int $longitude
 * @property-read LocationAddress|null $address Optional. Address of the location
 * @property-write LocationAddress|array<string, mixed> $address
 */
class StoryAreaTypeLocation extends StoryAreaType
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
            'latitude' => [
                'type' => ['float'],
                'required' => true,
            ],
            'longitude' => [
                'type' => ['float'],
                'required' => true,
            ],
            'address' => [
                'type' => [LocationAddress::class],
            ],
        ];
    }

    /**
     * Required. Type of the area, always “location”
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
     * Optional. Address of the location
     *
     * @return LocationAddress|null
     * @throws Base\TelegramException
     */
    public function getAddress(): mixed
    {
        return $this->getFieldValue('address');
    }

    /**
     * @param LocationAddress|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAddress(mixed $value): static
    {
        return $this->setFieldValue('address', $value);
    }
}
