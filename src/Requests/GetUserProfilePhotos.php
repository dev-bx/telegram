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
use DevBX\Telegram\Types;

/**
 * Use this method to get a list of profile pictures for a user. Returns a [UserProfilePhotos](#userprofilephotos) object.
 * @property int $userId
 * Unique identifier of the target user
 * @property int $offset
 * Sequential number of the first photo to be returned. By default, all photos are returned.
 * @property int $limit
 * Limits the number of photos to be retrieved. Values between 1-100 are accepted. Defaults to 100.
 * @method Types\UserProfilePhotos send(Api $gateway = null)
 */
class GetUserProfilePhotos extends Base\Request
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
                'type' => Types\UserProfilePhotos::class,
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
        return 'GetUserProfilePhotos';
    }
}