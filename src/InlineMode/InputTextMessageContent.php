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

namespace DevBX\Telegram\InlineMode;

use DevBX\Telegram\Base;
use DevBX\Telegram\Types;

/**
 * Represents the `InputMessageContent` of a text message to be sent as the result of an inline query.
 *
 * @link https://core.telegram.org/bots/api#inputtextmessagecontent
 *
 * @property-read string|null $messageText Required. Text of the message to be sent, 1-4096 characters
 * @property-write string $messageText
 * @property-read string|null $parseMode Optional. Mode for parsing entities in the message text. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details.
 * @property-write string $parseMode
 * @property-read Base\ArrayObject<Types\MessageEntity> $entities Optional. List of special entities that appear in message text, which can be specified instead of *parse_mode*
 * @property-write list<Types\MessageEntity|array<string, mixed>>|Base\ArrayObject<Types\MessageEntity> $entities
 * @property-read Types\LinkPreviewOptions|null $linkPreviewOptions Optional. Link preview generation options for the message
 * @property-write Types\LinkPreviewOptions|array<string, mixed> $linkPreviewOptions
 */
class InputTextMessageContent extends InputMessageContent
{
    /**
     * @return static
     * @throws Base\TelegramException
     */
    public static function create(mixed $value = null, bool $ignoreUnknownFields = false): ?Base\BaseType
    {
        return static::createInstance($value, $ignoreUnknownFields);
    }

    public static function getFields(): array
    {
        return [
            'message_text' => [
                'type' => ['string'],
                'required' => true,
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
        ];
    }

    /**
     * Required. Text of the message to be sent, 1-4096 characters
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getMessageText(): mixed
    {
        return $this->getFieldValue('message_text');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setMessageText(mixed $value): static
    {
        return $this->setFieldValue('message_text', $value);
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
     * Optional. List of special entities that appear in message text, which can be specified instead of *parse_mode*
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
}
