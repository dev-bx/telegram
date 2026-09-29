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

namespace DevBX\Telegram\Types;

use DevBX\Telegram\Base;

/**
 *
 * @link https://core.telegram.org/bots/api#ephemeralmessageparameters
 *
 * @property-read int|null $receiverUserId Required. Identifier of the user who will receive the message. It is not guaranteed that the user will receive the message, especially if they are offline. See [here](https://core.telegram.org/bots/api#ephemeral-messages-and-commands) for more details.
 * @property-write int $receiverUserId
 * @property-read string|null $callbackQueryId Optional. Identifier of the callback query which triggered the message, if any
 * @property-write string $callbackQueryId
 * @property-read bool|null $replaceCallbackQueryMessage Optional. Pass *True* if the ephemeral message must be shown in place of the original message. Must be *False* for callback queries from ephemeral messages, which must be edited using regular *editEphemeralMessage…* methods.
 * @property-write bool $replaceCallbackQueryMessage
 */
class EphemeralMessageParameters extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'receiver_user_id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'callback_query_id' => [
                'type' => ['string'],
            ],
            'replace_callback_query_message' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Required. Identifier of the user who will receive the message. It is not guaranteed that the user will receive the message, especially if they are offline. See [here](https://core.telegram.org/bots/api#ephemeral-messages-and-commands) for more details.
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
     * Optional. Identifier of the callback query which triggered the message, if any
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getCallbackQueryId(): mixed
    {
        return $this->getFieldValue('callback_query_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCallbackQueryId(mixed $value): static
    {
        return $this->setFieldValue('callback_query_id', $value);
    }

    /**
     * Optional. Pass *True* if the ephemeral message must be shown in place of the original message. Must be *False* for callback queries from ephemeral messages, which must be edited using regular *editEphemeralMessage…* methods.
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getReplaceCallbackQueryMessage(): mixed
    {
        return $this->getFieldValue('replace_callback_query_message');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setReplaceCallbackQueryMessage(mixed $value): static
    {
        return $this->setFieldValue('replace_callback_query_message', $value);
    }
}
