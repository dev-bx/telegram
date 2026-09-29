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
 * The message was originally sent to a channel chat.
 *
 * @link https://core.telegram.org/bots/api#messageoriginchannel
 *
 * @property-read string|null $type Required. Type of the message origin, always “channel”
 * @property-write string $type
 * @property-read int|null $date Required. Date the message was sent originally in Unix time
 * @property-write int $date
 * @property-read Chat|null $chat Required. Channel chat to which the message was originally sent
 * @property-write Chat|array<string, mixed> $chat
 * @property-read int|null $messageId Required. Unique message identifier inside the chat
 * @property-write int $messageId
 * @property-read string|null $authorSignature Optional. Signature of the original post author
 * @property-write string $authorSignature
 */
class MessageOriginChannel extends MessageOrigin
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
                'value' => 'channel',
                'required' => true,
            ],
            'date' => [
                'type' => ['int'],
                'required' => true,
            ],
            'chat' => [
                'type' => [Chat::class],
                'required' => true,
            ],
            'message_id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'author_signature' => [
                'type' => ['string'],
            ],
        ];
    }

    /**
     * Required. Type of the message origin, always “channel”
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
     * Required. Channel chat to which the message was originally sent
     *
     * @return Chat|null
     * @throws Base\TelegramException
     */
    public function getChat(): mixed
    {
        return $this->getFieldValue('chat');
    }

    /**
     * @param Chat|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setChat(mixed $value): static
    {
        return $this->setFieldValue('chat', $value);
    }

    /**
     * Required. Unique message identifier inside the chat
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
     * Optional. Signature of the original post author
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
