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
 * Use this method to edit text, rich and [game](https://core.telegram.org/bots/api#games) messages. On success, if the edited message is not an inline message, the edited `Message` is returned, otherwise *True* is returned. Note that business messages that were not sent by the bot and do not contain an inline keyboard can only be edited within **48 hours** from the time they were sent.
 *
 * @link https://core.telegram.org/bots/api#editmessagetext
 *
 * @property-read string|null $businessConnectionId Optional. Unique identifier of the business connection on behalf of which the message to be edited was sent
 * @property-write string $businessConnectionId
 * @property-read int|string|null $chatId Optional. Required if *inline_message_id* is not specified. Unique identifier for the target chat or username of the target bot, supergroup or channel in the format `@username`.
 * @property-write int|string $chatId
 * @property-read int|null $messageId Optional. Required if *inline_message_id* is not specified. Identifier of the message to edit.
 * @property-write int $messageId
 * @property-read string|null $inlineMessageId Optional. Required if *chat_id* and *message_id* are not specified. Identifier of the inline message.
 * @property-write string $inlineMessageId
 * @property-read string|null $text Optional. New text of the message, 1-4096 characters after entity parsing; required if *rich_message* isn't specified
 * @property-write string $text
 * @property-read string|null $parseMode Optional. Mode for parsing entities in the message text. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details.
 * @property-write string $parseMode
 * @property-read Base\ArrayObject<Types\MessageEntity> $entities Optional. A JSON-serialized list of special entities that appear in message text, which can be specified instead of *parse_mode*
 * @property-write list<Types\MessageEntity|array<string, mixed>>|Base\ArrayObject<Types\MessageEntity> $entities
 * @property-read Types\LinkPreviewOptions|null $linkPreviewOptions Optional. Link preview generation options for the message
 * @property-write Types\LinkPreviewOptions|array<string, mixed> $linkPreviewOptions
 * @property-read RichMessages\InputRichMessage|null $richMessage Optional. New rich content of the message; required if *text* isn't specified. Direct upload of new files and explicit upload of files by a URL isn't supported when an inline message is edited.
 * @property-write RichMessages\InputRichMessage|array<string, mixed> $richMessage
 * @property-read Types\InlineKeyboardMarkup|null $replyMarkup Optional. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards)
 * @property-write Types\InlineKeyboardMarkup|array<string, mixed> $replyMarkup
 *
 * @method Types\Message|bool send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class EditMessageText extends Base\Request
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
            'link_preview_options' => [
                'type' => [Types\LinkPreviewOptions::class],
            ],
            'rich_message' => [
                'type' => [RichMessages\InputRichMessage::class],
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
     * Optional. Required if *inline_message_id* is not specified. Identifier of the message to edit.
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
     * Optional. New rich content of the message; required if *text* isn't specified. Direct upload of new files and explicit upload of files by a URL isn't supported when an inline message is edited.
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
        return 'editMessageText';
    }
}
