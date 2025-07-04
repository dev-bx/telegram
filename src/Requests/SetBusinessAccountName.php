<?php

/**
 * @project Telegram Bot Api
 * @author Kubeev Ruslan <ruslan@dev-bx.ru>
 * @copyright 2025 Kubeev Ruslan
 * @license MIT
 * @link https://dev-bx.ru/
 *
 * This file is part of the project Telegram Bot Api Class Generator.
 */

namespace DevBX\Telegram\Requests;

use DevBX\Telegram\Base;
use DevBX\Telegram\Api;

/**
 * Changes the first and last name of a managed business account. Requires the *can\_change\_name* business bot right. Returns *True* on success.
 * @property string $businessConnectionId
 * Unique identifier of the business connection
 * @property string $firstName
 * The new value of the first name for the business account; 1-64 characters
 * @property string $lastName
 * The new value of the last name for the business account; 0-64 characters
 * @method Base\BaseType send(Api $gateway = null)
 */
class SetBusinessAccountName extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'business_connection_id' => [
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
        ];
    }

    /**
    * @return string
    */

    public function getBusinessConnectionId(): mixed
    {
        return $this->getFieldValue('business_connection_id');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setBusinessConnectionId(mixed $value): static
    {
        return $this->setFieldValue('business_connection_id', $value);
    }

    /**
    * @return string
    */

    public function getFirstName(): mixed
    {
        return $this->getFieldValue('first_name');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setFirstName(mixed $value): static
    {
        return $this->setFieldValue('first_name', $value);
    }

    /**
    * @return string
    */

    public function getLastName(): mixed
    {
        return $this->getFieldValue('last_name');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setLastName(mixed $value): static
    {
        return $this->setFieldValue('last_name', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'SetBusinessAccountName';
    }
}