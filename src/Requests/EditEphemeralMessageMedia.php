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
 * Use this method to edit the media of an ephemeral message. Note that it is not guaranteed that the user will receive the message edit event, especially if they are offline. On success, *True* is returned.
 * @property int|string $chatId
 * Unique identifier for the target chat or username of the target supergroup in the format `@username`
 * @property int $receiverUserId
 * Identifier of the user who received the message
 * @property int $ephemeralMessageId
 * Identifier of the ephemeral message to edit
 * @property Types\InputMedia $media
 * A JSON-serialized object for the new media content of the message
 * @property Types\InlineKeyboardMarkup $replyMarkup
 * A JSON-serialized object for an [inline keyboard](/bots/features#inline-keyboards)
 * @method Base\BaseType send(Api $gateway = null)
 */
class EditEphemeralMessageMedia extends Base\Request
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
            'media' => [
                'type' => [Types\InputMedia::class],
                'required' => true,
            ],
            'reply_markup' => [
                'type' => [Types\InlineKeyboardMarkup::class],
            ],
        ];
    }

    /**
    * @return int|string
    */

    public function getChatId(): mixed
    {
        return $this->getFieldValue('chat_id');
    }

    /**
    * @param int|string $value
    * @return static
    */

    public function setChatId(mixed $value): static
    {
        return $this->setFieldValue('chat_id', $value);
    }

    /**
    * @return int
    */

    public function getReceiverUserId(): mixed
    {
        return $this->getFieldValue('receiver_user_id');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setReceiverUserId(mixed $value): static
    {
        return $this->setFieldValue('receiver_user_id', $value);
    }

    /**
    * @return int
    */

    public function getEphemeralMessageId(): mixed
    {
        return $this->getFieldValue('ephemeral_message_id');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setEphemeralMessageId(mixed $value): static
    {
        return $this->setFieldValue('ephemeral_message_id', $value);
    }

    /**
    * @return Types\InputMedia
    */

    public function getMedia(): mixed
    {
        return $this->getFieldValue('media');
    }

    /**
    * @param Types\InputMedia $value
    * @return static
    */

    public function setMedia(mixed $value): static
    {
        return $this->setFieldValue('media', $value);
    }

    /**
    * @return Types\InlineKeyboardMarkup
    */

    public function getReplyMarkup(): mixed
    {
        return $this->getFieldValue('reply_markup');
    }

    /**
    * @param Types\InlineKeyboardMarkup $value
    * @return static
    */

    public function setReplyMarkup(mixed $value): static
    {
        return $this->setFieldValue('reply_markup', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'EditEphemeralMessageMedia';
    }
}