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
 * Use this method to remove up to 10000 recent reactions in a group or a supergroup chat added by a given user or chat. The bot must have the 'can_delete_messages' administrator right in the chat. Returns *True* on success.
 *
 * @link https://core.telegram.org/bots/api#deleteallmessagereactions
 *
 * @property-read int|string|null $chatId Required. Unique identifier for the target chat or username of the target supergroup in the format `@username`
 * @property-write int|string $chatId
 * @property-read int|null $userId Optional. Identifier of the user whose reactions will be removed, if the reactions were added by a user
 * @property-write int $userId
 * @property-read int|null $actorChatId Optional. Identifier of the chat whose reactions will be removed, if the reactions were added by a chat
 * @property-write int $actorChatId
 *
 * @method Base\ParameterBool send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class DeleteAllMessageReactions extends Base\Request
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
            ],
            'actor_chat_id' => [
                'type' => ['int'],
            ],
            '@return' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Required. Unique identifier for the target chat or username of the target supergroup in the format `@username`
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
     * Optional. Identifier of the user whose reactions will be removed, if the reactions were added by a user
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
     * Optional. Identifier of the chat whose reactions will be removed, if the reactions were added by a chat
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getActorChatId(): mixed
    {
        return $this->getFieldValue('actor_chat_id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setActorChatId(mixed $value): static
    {
        return $this->setFieldValue('actor_chat_id', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'deleteAllMessageReactions';
    }
}
