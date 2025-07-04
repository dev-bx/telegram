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
 * Changes the bio of a managed business account. Requires the *can\_change\_bio* business bot right. Returns *True* on success.
 * @property string $businessConnectionId
 * Unique identifier of the business connection
 * @property string $bio
 * The new value of the bio for the business account; 0-140 characters
 * @method Base\BaseType send(Api $gateway = null)
 */
class SetBusinessAccountBio extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'business_connection_id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'bio' => [
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

    public function getBio(): mixed
    {
        return $this->getFieldValue('bio');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setBio(mixed $value): static
    {
        return $this->setFieldValue('bio', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'SetBusinessAccountBio';
    }
}