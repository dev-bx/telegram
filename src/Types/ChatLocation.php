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
 * Represents a location to which a chat is connected.
 *
 * @link https://core.telegram.org/bots/api#chatlocation
 *
 * @property-read Location|null $location Required. The location to which the supergroup is connected. Can't be a live location.
 * @property-write Location|array<string, mixed> $location
 * @property-read string|null $address Required. Location address; 1-64 characters, as defined by the chat owner
 * @property-write string $address
 */
class ChatLocation extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'location' => [
                'type' => [Location::class],
                'required' => true,
            ],
            'address' => [
                'type' => ['string'],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. The location to which the supergroup is connected. Can't be a live location.
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

    /**
     * Required. Location address; 1-64 characters, as defined by the chat owner
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
}
