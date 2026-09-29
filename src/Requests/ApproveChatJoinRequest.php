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
 * Use this method to approve a chat join request. The bot must be an administrator in the chat for this to work and must have the *can_invite_users* administrator right. Returns *True* on success.
 *
 * @link https://core.telegram.org/bots/api#approvechatjoinrequest
 *
 * @property-read int|string|null $chatId Required. Unique identifier for the target chat or username of the target channel in the format `@username`
 * @property-write int|string $chatId
 * @property-read int|null $userId Required. Unique identifier of the target user
 * @property-write int $userId
 *
 * @method Base\ParameterBool send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class ApproveChatJoinRequest extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'chat_id' => [
                'type' => ['int', 'string'],
                'required' => true,
            ],
            'user_id' => [
                'type' => ['int'],
                'required' => true,
            ],
            '@return' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Required. Unique identifier for the target chat or username of the target channel in the format `@username`
     *
     * @return int|string|null
     * @throws Base\TelegramException
     */
    public function getChatId(): mixed
    {
        return $this->getFieldValue('chat_id');
    }

    /**
     * @param int|string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setChatId(mixed $value): static
    {
        return $this->setFieldValue('chat_id', $value);
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

    protected function getRequestMethod(): string
    {
        return 'approveChatJoinRequest';
    }
}
