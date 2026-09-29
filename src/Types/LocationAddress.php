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
 * Describes the physical address of a location.
 *
 * @link https://core.telegram.org/bots/api#locationaddress
 *
 * @property-read string|null $countryCode Required. The two-letter ISO 3166-1 alpha-2 country code of the country where the location is located
 * @property-write string $countryCode
 * @property-read string|null $state Optional. State of the location
 * @property-write string $state
 * @property-read string|null $city Optional. City of the location
 * @property-write string $city
 * @property-read string|null $street Optional. Street address of the location
 * @property-write string $street
 */
class LocationAddress extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'country_code' => [
                'type' => ['string'],
                'required' => true,
            ],
            'state' => [
                'type' => ['string'],
            ],
            'city' => [
                'type' => ['string'],
            ],
            'street' => [
                'type' => ['string'],
            ],
        ];
    }

    /**
     * Required. The two-letter ISO 3166-1 alpha-2 country code of the country where the location is located
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getCountryCode(): mixed
    {
        return $this->getFieldValue('country_code');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCountryCode(mixed $value): static
    {
        return $this->setFieldValue('country_code', $value);
    }

    /**
     * Optional. State of the location
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getState(): mixed
    {
        return $this->getFieldValue('state');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setState(mixed $value): static
    {
        return $this->setFieldValue('state', $value);
    }

    /**
     * Optional. City of the location
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getCity(): mixed
    {
        return $this->getFieldValue('city');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCity(mixed $value): static
    {
        return $this->setFieldValue('city', $value);
    }

    /**
     * Optional. Street address of the location
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getStreet(): mixed
    {
        return $this->getFieldValue('street');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setStreet(mixed $value): static
    {
        return $this->setFieldValue('street', $value);
    }
}
