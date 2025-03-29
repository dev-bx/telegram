<?php

/**
 * @project Telegram Bot Api
 * @author Kubeev Ruslan <ruslan@dev-bx.ru>
 * @copyright 2025 Kubeev Ruslan
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
 * Use this method to edit only the reply markup of messages. On success, if the edited message is not an inline message, the edited [Message](#message) is returned, otherwise *True* is returned. Note that business messages that were not sent by the bot and do not contain an inline keyboard can only be edited within **48 hours** from the time they were sent.
 * @property string $businessConnectionId
 * Unique identifier of the business connection on behalf of which the message to be edited was sent
 * @property int|string $chatId
 * Required if *inline\_message\_id* is not specified. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
 * @property int $messageId
 * Required if *inline\_message\_id* is not specified. Identifier of the message to edit
 * @property string $inlineMessageId
 * Required if *chat\_id* and *message\_id* are not specified. Identifier of the inline message
 * @property Types\InlineKeyboardMarkup $replyMarkup
 * A JSON-serialized object for an [inline keyboard](/bots/features#inline-keyboards).
 * @method Types\Message|bool send(Api $gateway = null)
 */
class EditMessageReplyMarkup extends Base\Request
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
                'type' => Types\Message::class,
                'canReturnBool' => true,
            ],
        ];
    }

    /**
    * @return string
    */

    public function getBusinessConnectionId(): mixed
    {
        return $this->getFieldValue('business_connection_id');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setBusinessConnectionId(mixed $value): static
    {
        return $this->setFieldValue('business_connection_id', $value);
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

    public function getMessageId(): mixed
    {
        return $this->getFieldValue('message_id');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setMessageId(mixed $value): static
    {
        return $this->setFieldValue('message_id', $value);
    }

    /**
    * @return string
    */

    public function getInlineMessageId(): mixed
    {
        return $this->getFieldValue('inline_message_id');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setInlineMessageId(mixed $value): static
    {
        return $this->setFieldValue('inline_message_id', $value);
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
        return 'EditMessageReplyMarkup';
    }
}