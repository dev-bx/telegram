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

namespace DevBX\Telegram\Requests;

use DevBX\Telegram\Base;
use DevBX\Telegram\Api;

/**
 * Use this method to change the access settings of a managed bot. Returns *True* on success.
 * @property int $userId
 * User identifier of the managed bot whose access settings will be changed
 * @property bool $isAccessRestricted
 * Pass *True* if only selected users can access the bot. The bot's owner can always access it.
 * @property int[] $addedUserIds
 * A JSON-serialized list of up to 10 identifiers of users who will have access to the bot in addition to its owner. Ignored if *is\_access\_restricted* is *False*.
 * @method Base\BaseType send(Api $gateway = null)
 */
class SetManagedBotAccessSettings extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'user_id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'is_access_restricted' => [
                'type' => ['bool'],
                'required' => true,
            ],
            'added_user_ids' => [
                'type' => ['int'],
                'isArray' => true,
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
    * @return bool
    */

    public function getIsAccessRestricted(): mixed
    {
        return $this->getFieldValue('is_access_restricted');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setIsAccessRestricted(mixed $value): static
    {
        return $this->setFieldValue('is_access_restricted', $value);
    }

    /**
    * @return int[]
    */

    public function getAddedUserIds(): mixed
    {
        return $this->getFieldValue('added_user_ids');
    }

    /**
    * @param int[] $value
    * @return static
    */

    public function setAddedUserIds(mixed $value): static
    {
        return $this->setFieldValue('added_user_ids', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'SetManagedBotAccessSettings';
    }
}