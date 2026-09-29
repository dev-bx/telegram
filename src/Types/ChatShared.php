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
 * This object contains information about a chat that was shared with the bot using a `KeyboardButtonRequestChat` button.
 *
 * @link https://core.telegram.org/bots/api#chatshared
 *
 * @property-read int|null $requestId Required. Identifier of the request
 * @property-write int $requestId
 * @property-read int|null $chatId Required. Identifier of the shared chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier. The bot may not have access to the chat and could be unable to use this identifier, unless the chat is already known to the bot by some other means.
 * @property-write int $chatId
 * @property-read string|null $title Optional. Title of the chat, if the title was requested by the bot
 * @property-write string $title
 * @property-read string|null $username Optional. Username of the chat, if the username was requested by the bot and available
 * @property-write string $username
 * @property-read Base\ArrayObject<PhotoSize> $photo Optional. Available sizes of the chat photo, if the photo was requested by the bot
 * @property-write list<PhotoSize|array<string, mixed>>|Base\ArrayObject<PhotoSize> $photo
 */
class ChatShared extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'request_id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'chat_id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'title' => [
                'type' => ['string'],
            ],
            'username' => [
                'type' => ['string'],
            ],
            'photo' => [
                'type' => [PhotoSize::class],
                'isArray' => true,
            ],
        ];
    }

    /**
     * Required. Identifier of the request
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getRequestId(): mixed
    {
        return $this->getFieldValue('request_id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setRequestId(mixed $value): static
    {
        return $this->setFieldValue('request_id', $value);
    }

    /**
     * Required. Identifier of the shared chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier. The bot may not have access to the chat and could be unable to use this identifier, unless the chat is already known to the bot by some other means.
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getChatId(): mixed
    {
        return $this->getFieldValue('chat_id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setChatId(mixed $value): static
    {
        return $this->setFieldValue('chat_id', $value);
    }

    /**
     * Optional. Title of the chat, if the title was requested by the bot
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getTitle(): mixed
    {
        return $this->getFieldValue('title');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setTitle(mixed $value): static
    {
        return $this->setFieldValue('title', $value);
    }

    /**
     * Optional. Username of the chat, if the username was requested by the bot and available
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getUsername(): mixed
    {
        return $this->getFieldValue('username');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setUsername(mixed $value): static
    {
        return $this->setFieldValue('username', $value);
    }

    /**
     * Optional. Available sizes of the chat photo, if the photo was requested by the bot
     *
     * @return Base\ArrayObject<PhotoSize>
     * @throws Base\TelegramException
     */
    public function getPhoto(): mixed
    {
        return $this->getFieldValue('photo');
    }

    /**
     * @param list<PhotoSize|array<string, mixed>>|Base\ArrayObject<PhotoSize> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPhoto(mixed $value): static
    {
        return $this->setFieldValue('photo', $value);
    }
}
