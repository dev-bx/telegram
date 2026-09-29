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
 * Use this method to unban a previously banned user in a supergroup or channel. The user will **not** return to the group or channel automatically, but will be able to join via link, etc. The bot must be an administrator for this to work. By default, this method guarantees that after the call the user is not a member of the chat, but will be able to join it. So if the user is a member of the chat they will also be **removed** from the chat. If you don't want this, use the parameter *only_if_banned*. Returns *True* on success.
 *
 * @link https://core.telegram.org/bots/api#unbanchatmember
 *
 * @property-read int|string|null $chatId Required. Unique identifier for the target group or username of the target supergroup or channel in the format `@username`
 * @property-write int|string $chatId
 * @property-read int|null $userId Required. Unique identifier of the target user
 * @property-write int $userId
 * @property-read bool|null $onlyIfBanned Optional. Do nothing if the user is not banned
 * @property-write bool $onlyIfBanned
 *
 * @method Base\ParameterBool send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class UnbanChatMember extends Base\Request
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
            'only_if_banned' => [
                'type' => ['bool'],
            ],
            '@return' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Required. Unique identifier for the target group or username of the target supergroup or channel in the format `@username`
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

    /**
     * Optional. Do nothing if the user is not banned
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getOnlyIfBanned(): mixed
    {
        return $this->getFieldValue('only_if_banned');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setOnlyIfBanned(mixed $value): static
    {
        return $this->setFieldValue('only_if_banned', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'unbanChatMember';
    }
}
