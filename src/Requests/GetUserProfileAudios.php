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
 * Use this method to get a list of profile audios for a user. Returns a `UserProfileAudios` object.
 *
 * @link https://core.telegram.org/bots/api#getuserprofileaudios
 *
 * @property-read int|null $userId Required. Unique identifier of the target user
 * @property-write int $userId
 * @property-read int|null $offset Optional. Sequential number of the first audio to be returned. By default, all audios are returned.
 * @property-write int $offset
 * @property-read int|null $limit Optional. Limits the number of audios to be retrieved. Values between 1-100 are accepted. Defaults to 100.
 * @property-write int $limit
 *
 * @method Types\UserProfileAudios send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
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
                'type' => [Types\UserProfileAudios::class],
            ],
        ];
    }

    /**
     * Required. Unique identifier of the target user
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
     * Optional. Sequential number of the first audio to be returned. By default, all audios are returned.
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getOffset(): mixed
    {
        return $this->getFieldValue('offset');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setOffset(mixed $value): static
    {
        return $this->setFieldValue('offset', $value);
    }

    /**
     * Optional. Limits the number of audios to be retrieved. Values between 1-100 are accepted. Defaults to 100.
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getLimit(): mixed
    {
        return $this->getFieldValue('limit');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setLimit(mixed $value): static
    {
        return $this->setFieldValue('limit', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'getUserProfileAudios';
    }
}
