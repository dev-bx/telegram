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
 * Verifies a user [on behalf of the organization](https://telegram.org/verify#third-party-verification) which is represented by the bot. Returns *True* on success.
 * @property int $userId
 * Unique identifier of the target user
 * @property string $customDescription
 * Custom description for the verification; 0-70 characters. Must be empty if the organization isn't allowed to provide a custom verification description.
 * @method Base\BaseType send(Api $gateway = null)
 */
class VerifyUser extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'user_id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'custom_description' => [
                'type' => ['string'],
            ],
        ];
    }

    /**
    * @return int
    */

    public function getUserId(): mixed
    {
        return $this->getFieldValue('user_id');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setUserId(mixed $value): static
    {
        return $this->setFieldValue('user_id', $value);
    }

    /**
    * @return string
    */

    public function getCustomDescription(): mixed
    {
        return $this->getFieldValue('custom_description');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setCustomDescription(mixed $value): static
    {
        return $this->setFieldValue('custom_description', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'VerifyUser';
    }
}