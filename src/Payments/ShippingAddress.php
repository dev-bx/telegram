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

namespace DevBX\Telegram\Payments;

use DevBX\Telegram\Base;

/**
 * This object represents a shipping address.
 *
 * @link https://core.telegram.org/bots/api#shippingaddress
 *
 * @property-read string|null $countryCode Required. Two-letter [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country code
 * @property-write string $countryCode
 * @property-read string|null $state Required. State, if applicable
 * @property-write string $state
 * @property-read string|null $city Required. City
 * @property-write string $city
 * @property-read string|null $streetLine1 Required. First line for the address
 * @property-write string $streetLine1
 * @property-read string|null $streetLine2 Required. Second line for the address
 * @property-write string $streetLine2
 * @property-read string|null $postCode Required. Address post code
 * @property-write string $postCode
 */
class ShippingAddress extends Base\BaseType
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
                'required' => true,
            ],
            'city' => [
                'type' => ['string'],
                'required' => true,
            ],
            'street_line1' => [
                'type' => ['string'],
                'required' => true,
            ],
            'street_line2' => [
                'type' => ['string'],
                'required' => true,
            ],
            'post_code' => [
                'type' => ['string'],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Two-letter [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country code
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
     * Required. State, if applicable
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
     * Required. City
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
     * Required. First line for the address
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getStreetLine1(): mixed
    {
        return $this->getFieldValue('street_line1');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setStreetLine1(mixed $value): static
    {
        return $this->setFieldValue('street_line1', $value);
    }

    /**
     * Required. Second line for the address
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getStreetLine2(): mixed
    {
        return $this->getFieldValue('street_line2');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setStreetLine2(mixed $value): static
    {
        return $this->setFieldValue('street_line2', $value);
    }

    /**
     * Required. Address post code
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getPostCode(): mixed
    {
        return $this->getFieldValue('post_code');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPostCode(mixed $value): static
    {
        return $this->setFieldValue('post_code', $value);
    }
}
