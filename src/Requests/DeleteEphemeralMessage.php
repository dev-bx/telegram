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
 * Use this method to delete an ephemeral message. Note that it is not guaranteed that the user will receive the message deletion event, especially if they are offline. Returns *True* on success.
 *
 * @link https://core.telegram.org/bots/api#deleteephemeralmessage
 *
 * @property-read int|string|null $chatId Required. Unique identifier for the target chat or username of the target supergroup in the format `@username`
 * @property-write int|string $chatId
 * @property-read int|null $receiverUserId Required. Identifier of the user who received the message
 * @property-write int $receiverUserId
 * @property-read int|null $ephemeralMessageId Required. Identifier of the ephemeral message to delete
 * @property-write int $ephemeralMessageId
 *
 * @method Base\ParameterBool send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class DeleteEphemeralMessage extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'chat_id' => [
                'type' => ['int', 'string'],
                'required' => true,
            ],
            'receiver_user_id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'ephemeral_message_id' => [
                'type' => ['int'],
                'required' => true,
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
     * Required. Identifier of the user who received the message
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getReceiverUserId(): mixed
    {
        return $this->getFieldValue('receiver_user_id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setReceiverUserId(mixed $value): static
    {
        return $this->setFieldValue('receiver_user_id', $value);
    }

    /**
     * Required. Identifier of the ephemeral message to delete
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getEphemeralMessageId(): mixed
    {
        return $this->getFieldValue('ephemeral_message_id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setEphemeralMessageId(mixed $value): static
    {
        return $this->setFieldValue('ephemeral_message_id', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'deleteEphemeralMessage';
    }
}
