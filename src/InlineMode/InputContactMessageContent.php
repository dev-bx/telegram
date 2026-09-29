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
 * Represents the `InputMessageContent` of a contact message to be sent as the result of an inline query.
 *
 * @link https://core.telegram.org/bots/api#inputcontactmessagecontent
 *
 * @property-read string|null $phoneNumber Required. Contact's phone number
 * @property-write string $phoneNumber
 * @property-read string|null $firstName Required. Contact's first name
 * @property-write string $firstName
 * @property-read string|null $lastName Optional. Contact's last name
 * @property-write string $lastName
 * @property-read string|null $vcard Optional. Additional data about the contact in the form of a [vCard](https://en.wikipedia.org/wiki/VCard), 0-2048 bytes
 * @property-write string $vcard
 */
class InputContactMessageContent extends InputMessageContent
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
            'phone_number' => [
                'type' => ['string'],
                'required' => true,
            ],
            'first_name' => [
                'type' => ['string'],
                'required' => true,
            ],
            'last_name' => [
                'type' => ['string'],
            ],
            'vcard' => [
                'type' => ['string'],
            ],
        ];
    }

    /**
     * Required. Contact's phone number
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
     * Required. Contact's first name
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getFirstName(): mixed
    {
        return $this->getFieldValue('first_name');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setFirstName(mixed $value): static
    {
        return $this->setFieldValue('first_name', $value);
    }

    /**
     * Optional. Contact's last name
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getLastName(): mixed
    {
        return $this->getFieldValue('last_name');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setLastName(mixed $value): static
    {
        return $this->setFieldValue('last_name', $value);
    }

    /**
     * Optional. Additional data about the contact in the form of a [vCard](https://en.wikipedia.org/wiki/VCard), 0-2048 bytes
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getVcard(): mixed
    {
        return $this->getFieldValue('vcard');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setVcard(mixed $value): static
    {
        return $this->setFieldValue('vcard', $value);
    }
}
