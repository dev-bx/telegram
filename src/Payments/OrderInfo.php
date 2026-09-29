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
 * This object represents information about an order.
 *
 * @link https://core.telegram.org/bots/api#orderinfo
 *
 * @property-read string|null $name Optional. User name
 * @property-write string $name
 * @property-read string|null $phoneNumber Optional. User's phone number
 * @property-write string $phoneNumber
 * @property-read string|null $email Optional. User email
 * @property-write string $email
 * @property-read ShippingAddress|null $shippingAddress Optional. User shipping address
 * @property-write ShippingAddress|array<string, mixed> $shippingAddress
 */
class OrderInfo extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'name' => [
                'type' => ['string'],
            ],
            'phone_number' => [
                'type' => ['string'],
            ],
            'email' => [
                'type' => ['string'],
            ],
            'shipping_address' => [
                'type' => [ShippingAddress::class],
            ],
        ];
    }

    /**
     * Optional. User name
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getName(): mixed
    {
        return $this->getFieldValue('name');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setName(mixed $value): static
    {
        return $this->setFieldValue('name', $value);
    }

    /**
     * Optional. User's phone number
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getPhoneNumber(): mixed
    {
        return $this->getFieldValue('phone_number');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPhoneNumber(mixed $value): static
    {
        return $this->setFieldValue('phone_number', $value);
    }

    /**
     * Optional. User email
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getEmail(): mixed
    {
        return $this->getFieldValue('email');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setEmail(mixed $value): static
    {
        return $this->setFieldValue('email', $value);
    }

    /**
     * Optional. User shipping address
     *
     * @return ShippingAddress|null
     * @throws Base\TelegramException
     */
    public function getShippingAddress(): mixed
    {
        return $this->getFieldValue('shipping_address');
    }

    /**
     * @param ShippingAddress|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setShippingAddress(mixed $value): static
    {
        return $this->setFieldValue('shipping_address', $value);
    }
}
