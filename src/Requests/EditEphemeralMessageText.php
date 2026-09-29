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
use DevBX\Telegram\RichMessages;
use DevBX\Telegram\Types;

/**
 * Use this method to edit an ephemeral text or rich message. Note that it is not guaranteed that the user will receive the message edit event, especially if they are offline. On success, *True* is returned.
 *
 * @link https://core.telegram.org/bots/api#editephemeralmessagetext
 *
 * @property-read int|string|null $chatId Required. Unique identifier for the target chat or username of the target supergroup in the format `@username`
 * @property-write int|string $chatId
 * @property-read int|null $receiverUserId Required. Identifier of the user who received the message
 * @property-write int $receiverUserId
 * @property-read int|null $ephemeralMessageId Required. Identifier of the ephemeral message to edit
 * @property-write int $ephemeralMessageId
 * @property-read string|null $text Optional. New text of the message, 1-4096 characters after entity parsing; required if *rich_message* isn't specified
 * @property-write string $text
 * @property-read string|null $parseMode Optional. Mode for parsing entities in the message text. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details.
 * @property-write string $parseMode
 * @property-read Base\ArrayObject<Types\MessageEntity> $entities Optional. A JSON-serialized list of special entities that appear in message text, which can be specified instead of *parse_mode*
 * @property-write list<Types\MessageEntity|array<string, mixed>>|Base\ArrayObject<Types\MessageEntity> $entities
 * @property-read RichMessages\InputRichMessage|null $richMessage Optional. New rich content of the message; required if *text* isn't specified
 * @property-write RichMessages\InputRichMessage|array<string, mixed> $richMessage
 * @property-read Types\LinkPreviewOptions|null $linkPreviewOptions Optional. Link preview generation options for the message
 * @property-write Types\LinkPreviewOptions|array<string, mixed> $linkPreviewOptions
 * @property-read Types\InlineKeyboardMarkup|null $replyMarkup Optional. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards)
 * @property-write Types\InlineKeyboardMarkup|array<string, mixed> $replyMarkup
 *
 * @method Base\ParameterBool send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class EditEphemeralMessageText extends Base\Request
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
            'text' => [
                'type' => ['string'],
            ],
            'parse_mode' => [
                'type' => ['string'],
            ],
            'entities' => [
                'type' => [Types\MessageEntity::class],
                'isArray' => true,
            ],
            'rich_message' => [
                'type' => [RichMessages\InputRichMessage::class],
            ],
            'link_preview_options' => [
                'type' => [Types\LinkPreviewOptions::class],
            ],
            'reply_markup' => [
                'type' => [Types\InlineKeyboardMarkup::class],
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
     * Required. Identifier of the ephemeral message to edit
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

    /**
     * Optional. New text of the message, 1-4096 characters after entity parsing; required if *rich_message* isn't specified
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getText(): mixed
    {
        return $this->getFieldValue('text');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setText(mixed $value): static
    {
        return $this->setFieldValue('text', $value);
    }

    /**
     * Optional. Mode for parsing entities in the message text. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getParseMode(): mixed
    {
        return $this->getFieldValue('parse_mode');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setParseMode(mixed $value): static
    {
        return $this->setFieldValue('parse_mode', $value);
    }

    /**
     * Optional. A JSON-serialized list of special entities that appear in message text, which can be specified instead of *parse_mode*
     *
     * @return Base\ArrayObject<Types\MessageEntity>
     * @throws Base\TelegramException
     */
    public function getEntities(): mixed
    {
        return $this->getFieldValue('entities');
    }

    /**
     * @param list<Types\MessageEntity|array<string, mixed>>|Base\ArrayObject<Types\MessageEntity> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setEntities(mixed $value): static
    {
        return $this->setFieldValue('entities', $value);
    }

    /**
     * Optional. New rich content of the message; required if *text* isn't specified
     *
     * @return RichMessages\InputRichMessage|null
     * @throws Base\TelegramException
     */
    public function getRichMessage(): mixed
    {
        return $this->getFieldValue('rich_message');
    }

    /**
     * @param RichMessages\InputRichMessage|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setRichMessage(mixed $value): static
    {
        return $this->setFieldValue('rich_message', $value);
    }

    /**
     * Optional. Link preview generation options for the message
     *
     * @return Types\LinkPreviewOptions|null
     * @throws Base\TelegramException
     */
    public function getLinkPreviewOptions(): mixed
    {
        return $this->getFieldValue('link_preview_options');
    }

    /**
     * @param Types\LinkPreviewOptions|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setLinkPreviewOptions(mixed $value): static
    {
        return $this->setFieldValue('link_preview_options', $value);
    }

    /**
     * Optional. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards)
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
        return 'editEphemeralMessageText';
    }
}
