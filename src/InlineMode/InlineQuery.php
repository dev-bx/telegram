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
 * This object represents an incoming inline query. When the user sends an empty query, your bot could return some default or trending results.
 *
 * @link https://core.telegram.org/bots/api#inlinequery
 *
 * @property-read string|null $id Required. Unique identifier for this query
 * @property-write string $id
 * @property-read Types\User|null $from Required. Sender
 * @property-write Types\User|array<string, mixed> $from
 * @property-read string|null $query Required. Text of the query (up to 256 characters)
 * @property-write string $query
 * @property-read string|null $offset Required. Offset of the results to be returned, can be controlled by the bot
 * @property-write string $offset
 * @property-read string|null $chatType Optional. Type of the chat from which the inline query was sent. Can be either “sender” for a private chat with the inline query sender, “private”, “group”, “supergroup”, or “channel”. The chat type should be always known for requests sent from official clients and most third-party clients, unless the request was sent from a secret chat.
 * @property-write string $chatType
 * @property-read Types\Location|null $location Optional. Sender location, only for bots that request user location
 * @property-write Types\Location|array<string, mixed> $location
 */
class InlineQuery extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'from' => [
                'type' => [Types\User::class],
                'required' => true,
            ],
            'query' => [
                'type' => ['string'],
                'required' => true,
            ],
            'offset' => [
                'type' => ['string'],
                'required' => true,
            ],
            'chat_type' => [
                'type' => ['string'],
            ],
            'location' => [
                'type' => [Types\Location::class],
            ],
        ];
    }

    /**
     * Required. Unique identifier for this query
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getId(): mixed
    {
        return $this->getFieldValue('id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setId(mixed $value): static
    {
        return $this->setFieldValue('id', $value);
    }

    /**
     * Required. Sender
     *
     * @return Types\User|null
     * @throws Base\TelegramException
     */
    public function getFrom(): mixed
    {
        return $this->getFieldValue('from');
    }

    /**
     * @param Types\User|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setFrom(mixed $value): static
    {
        return $this->setFieldValue('from', $value);
    }

    /**
     * Required. Text of the query (up to 256 characters)
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getQuery(): mixed
    {
        return $this->getFieldValue('query');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setQuery(mixed $value): static
    {
        return $this->setFieldValue('query', $value);
    }

    /**
     * Required. Offset of the results to be returned, can be controlled by the bot
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getOffset(): mixed
    {
        return $this->getFieldValue('offset');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setOffset(mixed $value): static
    {
        return $this->setFieldValue('offset', $value);
    }

    /**
     * Optional. Type of the chat from which the inline query was sent. Can be either “sender” for a private chat with the inline query sender, “private”, “group”, “supergroup”, or “channel”. The chat type should be always known for requests sent from official clients and most third-party clients, unless the request was sent from a secret chat.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getChatType(): mixed
    {
        return $this->getFieldValue('chat_type');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setChatType(mixed $value): static
    {
        return $this->setFieldValue('chat_type', $value);
    }

    /**
     * Optional. Sender location, only for bots that request user location
     *
     * @return Types\Location|null
     * @throws Base\TelegramException
     */
    public function getLocation(): mixed
    {
        return $this->getFieldValue('location');
    }

    /**
     * @param Types\Location|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setLocation(mixed $value): static
    {
        return $this->setFieldValue('location', $value);
    }
}
