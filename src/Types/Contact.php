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
 * This object represents a phone contact.
 *
 * @link https://core.telegram.org/bots/api#contact
 *
 * @property-read string|null $phoneNumber Required. Contact's phone number
 * @property-write string $phoneNumber
 * @property-read string|null $firstName Required. Contact's first name
 * @property-write string $firstName
 * @property-read string|null $lastName Optional. Contact's last name
 * @property-write string $lastName
 * @property-read int|null $userId Optional. Contact's user identifier in Telegram. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
 * @property-write int $userId
 * @property-read string|null $vcard Optional. Additional data about the contact in the form of a [vCard](https://en.wikipedia.org/wiki/VCard)
 * @property-write string $vcard
 */
class Contact extends Base\BaseType
{
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
            'user_id' => [
                'type' => ['int'],
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
     * Optional. Contact's user identifier in Telegram. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getUserId(): mixed
    {
        return $this->getFieldValue('user_id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setUserId(mixed $value): static
    {
        return $this->setFieldValue('user_id', $value);
    }

    /**
     * Optional. Additional data about the contact in the form of a [vCard](https://en.wikipedia.org/wiki/VCard)
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
