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
 * Contains information about the location of a Telegram Business account.
 *
 * @link https://core.telegram.org/bots/api#businesslocation
 *
 * @property-read string|null $address Required. Address of the business
 * @property-write string $address
 * @property-read Location|null $location Optional. Location of the business
 * @property-write Location|array<string, mixed> $location
 */
class BusinessLocation extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'address' => [
                'type' => ['string'],
                'required' => true,
            ],
            'location' => [
                'type' => [Location::class],
            ],
        ];
    }

    /**
     * Required. Address of the business
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
     * Optional. Location of the business
     *
     * @return Location|null
     * @throws Base\TelegramException
     */
    public function getLocation(): mixed
    {
        return $this->getFieldValue('location');
    }

    /**
     * @param Location|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setLocation(mixed $value): static
    {
        return $this->setFieldValue('location', $value);
    }
}
