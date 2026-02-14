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
use DevBX\Telegram\Types;

/**
 * Use this method to get a list of profile audios for a user. Returns a [UserProfileAudios](#userprofileaudios) object.
 * @property int $userId
 * Unique identifier of the target user
 * @property int $offset
 * Sequential number of the first audio to be returned. By default, all audios are returned.
 * @property int $limit
 * Limits the number of audios to be retrieved. Values between 1-100 are accepted. Defaults to 100.
 * @method Types\UserProfileAudios send(Api $gateway = null)
 */
class GetUserProfileAudios extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'user_id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'offset' => [
                'type' => ['int'],
            ],
            'limit' => [
                'type' => ['int'],
            ],
            '@return' => [
                'type' => Types\UserProfileAudios::class,
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
    * @return int
    */

    public function getOffset(): mixed
    {
        return $this->getFieldValue('offset');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setOffset(mixed $value): static
    {
        return $this->setFieldValue('offset', $value);
    }

    /**
    * @return int
    */

    public function getLimit(): mixed
    {
        return $this->getFieldValue('limit');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setLimit(mixed $value): static
    {
        return $this->setFieldValue('limit', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'GetUserProfileAudios';
    }
}