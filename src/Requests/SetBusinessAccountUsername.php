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
 * Changes the username of a managed business account. Requires the *can\_change\_username* business bot right. Returns *True* on success.
 * @property string $businessConnectionId
 * Unique identifier of the business connection
 * @property string $username
 * The new value of the username for the business account; 0-32 characters
 * @method Base\BaseType send(Api $gateway = null)
 */
class SetBusinessAccountUsername extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'business_connection_id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'username' => [
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

    public function getUsername(): mixed
    {
        return $this->getFieldValue('username');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setUsername(mixed $value): static
    {
        return $this->setFieldValue('username', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'SetBusinessAccountUsername';
    }
}