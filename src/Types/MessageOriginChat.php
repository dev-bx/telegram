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
 * The message was originally sent on behalf of a chat to a group chat.
 *
 * @link https://core.telegram.org/bots/api#messageoriginchat
 *
 * @property-read string|null $type Required. Type of the message origin, always “chat”
 * @property-write string $type
 * @property-read int|null $date Required. Date the message was sent originally in Unix time
 * @property-write int $date
 * @property-read Chat|null $senderChat Required. Chat that sent the message originally
 * @property-write Chat|array<string, mixed> $senderChat
 * @property-read string|null $authorSignature Optional. For messages originally sent by an anonymous chat administrator, original message author signature
 * @property-write string $authorSignature
 */
class MessageOriginChat extends MessageOrigin
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
            'type' => [
                'type' => ['string'],
                'value' => 'chat',
                'required' => true,
            ],
            'date' => [
                'type' => ['int'],
                'required' => true,
            ],
            'sender_chat' => [
                'type' => [Chat::class],
                'required' => true,
            ],
            'author_signature' => [
                'type' => ['string'],
            ],
        ];
    }

    /**
     * Required. Type of the message origin, always “chat”
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getType(): mixed
    {
        return $this->getFieldValue('type');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setType(mixed $value): static
    {
        return $this->setFieldValue('type', $value);
    }

    /**
     * Required. Date the message was sent originally in Unix time
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getDate(): mixed
    {
        return $this->getFieldValue('date');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setDate(mixed $value): static
    {
        return $this->setFieldValue('date', $value);
    }

    /**
     * Required. Chat that sent the message originally
     *
     * @return Chat|null
     * @throws Base\TelegramException
     */
    public function getSenderChat(): mixed
    {
        return $this->getFieldValue('sender_chat');
    }

    /**
     * @param Chat|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSenderChat(mixed $value): static
    {
        return $this->setFieldValue('sender_chat', $value);
    }

    /**
     * Optional. For messages originally sent by an anonymous chat administrator, original message author signature
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getAuthorSignature(): mixed
    {
        return $this->getFieldValue('author_signature');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAuthorSignature(mixed $value): static
    {
        return $this->setFieldValue('author_signature', $value);
    }
}
