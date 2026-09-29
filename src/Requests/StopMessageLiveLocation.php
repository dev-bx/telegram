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
 * Use this method to stop updating a live location message before *live_period* expires. On success, if the message is not an inline message, the edited `Message` is returned, otherwise *True* is returned.
 *
 * @link https://core.telegram.org/bots/api#stopmessagelivelocation
 *
 * @property-read string|null $businessConnectionId Optional. Unique identifier of the business connection on behalf of which the message to be edited was sent
 * @property-write string $businessConnectionId
 * @property-read int|string|null $chatId Optional. Required if *inline_message_id* is not specified. Unique identifier for the target chat or username of the target bot, supergroup or channel in the format `@username`.
 * @property-write int|string $chatId
 * @property-read int|null $messageId Optional. Required if *inline_message_id* is not specified. Identifier of the message with live location to stop.
 * @property-write int $messageId
 * @property-read string|null $inlineMessageId Optional. Required if *chat_id* and *message_id* are not specified. Identifier of the inline message.
 * @property-write string $inlineMessageId
 * @property-read Types\InlineKeyboardMarkup|null $replyMarkup Optional. A JSON-serialized object for a new [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards)
 * @property-write Types\InlineKeyboardMarkup|array<string, mixed> $replyMarkup
 *
 * @method Types\Message|bool send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class StopMessageLiveLocation extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'business_connection_id' => [
                'type' => ['string'],
            ],
            'chat_id' => [
                'type' => ['int', 'string'],
            ],
            'message_id' => [
                'type' => ['int'],
            ],
            'inline_message_id' => [
                'type' => ['string'],
            ],
            'reply_markup' => [
                'type' => [Types\InlineKeyboardMarkup::class],
            ],
            '@return' => [
                'type' => [Types\Message::class],
                'canReturnBool' => true,
            ],
        ];
    }

    /**
     * Optional. Unique identifier of the business connection on behalf of which the message to be edited was sent
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getBusinessConnectionId(): mixed
    {
        return $this->getFieldValue('business_connection_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setBusinessConnectionId(mixed $value): static
    {
        return $this->setFieldValue('business_connection_id', $value);
    }

    /**
     * Optional. Required if *inline_message_id* is not specified. Unique identifier for the target chat or username of the target bot, supergroup or channel in the format `@username`.
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
     * Optional. Required if *inline_message_id* is not specified. Identifier of the message with live location to stop.
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
     * Optional. A JSON-serialized object for a new [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards)
     *
     * @return Types\InlineKeyboardMarkup|null
     * @throws Base\TelegramException
     */
    public function getReplyMarkup(): mixed
    {
        return $this->getFieldValue('reply_markup');
    }

    /**
     * @param Types\InlineKeyboardMarkup|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setReplyMarkup(mixed $value): static
    {
        return $this->setFieldValue('reply_markup', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'stopMessageLiveLocation';
    }
}
