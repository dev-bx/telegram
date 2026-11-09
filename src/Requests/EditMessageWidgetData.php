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
 * Use this method to edit data of a widget in a message sent by the bot or via the bot (for inline bots). Public data of a shared widget can be changed at most once per second. On success, *True* is returned.
 *
 * @link https://core.telegram.org/bots/api#editmessagewidgetdata
 *
 * @property-read int|string|null $chatId Optional. Required if *inline_message_id* is not specified. Unique identifier for the target chat or username of the target supergroup in the format `@username`.
 * @property-write int|string $chatId
 * @property-read int|null $messageId Optional. Required if *inline_message_id* is not specified. Identifier of the message with the widget.
 * @property-write int $messageId
 * @property-read string|null $inlineMessageId Optional. Required if *chat_id* and *message_id* are not specified. Identifier of the inline message.
 * @property-write string $inlineMessageId
 * @property-read string|null $publicData Optional. New public data of the widget, 0-1024 bytes; pass an empty string to remove the public data. If omitted, then the public data isn't changed.
 * @property-write string $publicData
 * @property-read string|null $chatData Optional. New data of the widget, which is specific to the message, 0-1024 bytes; pass an empty string to remove the data. If omitted, then the data isn't changed.
 * @property-write string $chatData
 *
 * @method Base\ParameterBool send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class EditMessageWidgetData extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'chat_id' => [
                'type' => ['int', 'string'],
            ],
            'message_id' => [
                'type' => ['int'],
            ],
            'inline_message_id' => [
                'type' => ['string'],
            ],
            'public_data' => [
                'type' => ['string'],
            ],
            'chat_data' => [
                'type' => ['string'],
            ],
            '@return' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Optional. Required if *inline_message_id* is not specified. Unique identifier for the target chat or username of the target supergroup in the format `@username`.
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
     * Optional. Required if *inline_message_id* is not specified. Identifier of the message with the widget.
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getMessageId(): mixed
    {
        return $this->getFieldValue('message_id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setMessageId(mixed $value): static
    {
        return $this->setFieldValue('message_id', $value);
    }

    /**
     * Optional. Required if *chat_id* and *message_id* are not specified. Identifier of the inline message.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getInlineMessageId(): mixed
    {
        return $this->getFieldValue('inline_message_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setInlineMessageId(mixed $value): static
    {
        return $this->setFieldValue('inline_message_id', $value);
    }

    /**
     * Optional. New public data of the widget, 0-1024 bytes; pass an empty string to remove the public data. If omitted, then the public data isn't changed.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getPublicData(): mixed
    {
        return $this->getFieldValue('public_data');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPublicData(mixed $value): static
    {
        return $this->setFieldValue('public_data', $value);
    }

    /**
     * Optional. New data of the widget, which is specific to the message, 0-1024 bytes; pass an empty string to remove the data. If omitted, then the data isn't changed.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getChatData(): mixed
    {
        return $this->getFieldValue('chat_data');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setChatData(mixed $value): static
    {
        return $this->setFieldValue('chat_data', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'editMessageWidgetData';
    }
}
