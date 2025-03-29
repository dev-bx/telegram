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
 * Use this method to edit captions of messages. On success, if the edited message is not an inline message, the edited [Message](#message) is returned, otherwise *True* is returned. Note that business messages that were not sent by the bot and do not contain an inline keyboard can only be edited within **48 hours** from the time they were sent.
 * @property string $businessConnectionId
 * Unique identifier of the business connection on behalf of which the message to be edited was sent
 * @property int|string $chatId
 * Required if *inline\_message\_id* is not specified. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
 * @property int $messageId
 * Required if *inline\_message\_id* is not specified. Identifier of the message to edit
 * @property string $inlineMessageId
 * Required if *chat\_id* and *message\_id* are not specified. Identifier of the inline message
 * @property string $caption
 * New caption of the message, 0-1024 characters after entities parsing
 * @property string $parseMode
 * Mode for parsing entities in the message caption. See [formatting options](#formatting-options) for more details.
 * @property Base\ArrayObject|Types\MessageEntity[] $captionEntities
 * A JSON-serialized list of special entities that appear in the caption, which can be specified instead of *parse\_mode*
 * @property bool $showCaptionAboveMedia
 * Pass *True*, if the caption must be shown above the message media. Supported only for animation, photo and video messages.
 * @property Types\InlineKeyboardMarkup $replyMarkup
 * A JSON-serialized object for an [inline keyboard](/bots/features#inline-keyboards).
 * @method Types\Message|bool send(Api $gateway = null)
 */
class EditMessageCaption extends Base\Request
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
            'caption' => [
                'type' => ['string'],
            ],
            'parse_mode' => [
                'type' => ['string'],
            ],
            'caption_entities' => [
                'type' => [Types\MessageEntity::class],
                'isArray' => true,
            ],
            'show_caption_above_media' => [
                'type' => ['bool'],
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
    * @return string
    */

    public function getCaption(): mixed
    {
        return $this->getFieldValue('caption');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setCaption(mixed $value): static
    {
        return $this->setFieldValue('caption', $value);
    }

    /**
    * @return string
    */

    public function getParseMode(): mixed
    {
        return $this->getFieldValue('parse_mode');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setParseMode(mixed $value): static
    {
        return $this->setFieldValue('parse_mode', $value);
    }

    /**
    * @return Base\ArrayObject|Types\MessageEntity[]
    */

    public function getCaptionEntities(): mixed
    {
        return $this->getFieldValue('caption_entities');
    }

    /**
    * @param Base\ArrayObject|Types\MessageEntity[] $value
    * @return static
    */

    public function setCaptionEntities(mixed $value): static
    {
        return $this->setFieldValue('caption_entities', $value);
    }

    /**
    * @return bool
    */

    public function getShowCaptionAboveMedia(): mixed
    {
        return $this->getFieldValue('show_caption_above_media');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setShowCaptionAboveMedia(mixed $value): static
    {
        return $this->setFieldValue('show_caption_above_media', $value);
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
        return 'EditMessageCaption';
    }
}