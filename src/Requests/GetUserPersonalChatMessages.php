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
 * Use this method to get the last messages from the personal chat (i.e., the chat currently added to their profile) of a given user. On success, an Array of `Message` objects is returned.
 *
 * @link https://core.telegram.org/bots/api#getuserpersonalchatmessages
 *
 * @property-read int|null $userId Required. Unique identifier for the target user
 * @property-write int $userId
 * @property-read int|null $limit Required. The maximum number of messages to return; 1-20
 * @property-write int $limit
 *
 * @method Base\ArrayObject<Types\Message> send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class GetUserPersonalChatMessages extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'user_id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'limit' => [
                'type' => ['int'],
                'required' => true,
            ],
            '@return' => [
                'type' => [Types\Message::class],
                'isArray' => true,
            ],
        ];
    }

    /**
     * Required. Unique identifier for the target user
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
     * Required. The maximum number of messages to return; 1-20
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
        return 'getUserPersonalChatMessages';
    }
}
