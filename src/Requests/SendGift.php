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
 * Sends a gift to the given user or channel chat. The gift can't be converted to Telegram Stars by the receiver. Returns *True* on success.
 * @property int $userId
 * Required if *chat\_id* is not specified. Unique identifier of the target user who will receive the gift.
 * @property int|string $chatId
 * Required if *user\_id* is not specified. Unique identifier for the chat or username of the channel (in the format `@channelusername`) that will receive the gift.
 * @property string $giftId
 * Identifier of the gift
 * @property bool $payForUpgrade
 * Pass *True* to pay for the gift upgrade from the bot's balance, thereby making the upgrade free for the receiver
 * @property string $text
 * Text that will be shown along with the gift; 0-128 characters
 * @property string $textParseMode
 * Mode for parsing entities in the text. See [formatting options](#formatting-options) for more details. Entities other than “bold”, “italic”, “underline”, “strikethrough”, “spoiler”, and “custom\_emoji” are ignored.
 * @property Base\ArrayObject|Types\MessageEntity[] $textEntities
 * A JSON-serialized list of special entities that appear in the gift text. It can be specified instead of *text\_parse\_mode*. Entities other than “bold”, “italic”, “underline”, “strikethrough”, “spoiler”, and “custom\_emoji” are ignored.
 * @method Base\BaseType send(Api $gateway = null)
 */
class SendGift extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'user_id' => [
                'type' => ['int'],
            ],
            'chat_id' => [
                'type' => ['int', 'string'],
            ],
            'gift_id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'pay_for_upgrade' => [
                'type' => ['bool'],
            ],
            'text' => [
                'type' => ['string'],
            ],
            'text_parse_mode' => [
                'type' => ['string'],
            ],
            'text_entities' => [
                'type' => [Types\MessageEntity::class],
                'isArray' => true,
            ],
        ];
    }

    /**
    * @return int
    */

    public function getUserId(): mixed
    {
        return $this->getFieldValue('user_id');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setUserId(mixed $value): static
    {
        return $this->setFieldValue('user_id', $value);
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
    * @return string
    */

    public function getGiftId(): mixed
    {
        return $this->getFieldValue('gift_id');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setGiftId(mixed $value): static
    {
        return $this->setFieldValue('gift_id', $value);
    }

    /**
    * @return bool
    */

    public function getPayForUpgrade(): mixed
    {
        return $this->getFieldValue('pay_for_upgrade');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setPayForUpgrade(mixed $value): static
    {
        return $this->setFieldValue('pay_for_upgrade', $value);
    }

    /**
    * @return string
    */

    public function getText(): mixed
    {
        return $this->getFieldValue('text');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setText(mixed $value): static
    {
        return $this->setFieldValue('text', $value);
    }

    /**
    * @return string
    */

    public function getTextParseMode(): mixed
    {
        return $this->getFieldValue('text_parse_mode');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setTextParseMode(mixed $value): static
    {
        return $this->setFieldValue('text_parse_mode', $value);
    }

    /**
    * @return Base\ArrayObject|Types\MessageEntity[]
    */

    public function getTextEntities(): mixed
    {
        return $this->getFieldValue('text_entities');
    }

    /**
    * @param Base\ArrayObject|Types\MessageEntity[] $value
    * @return static
    */

    public function setTextEntities(mixed $value): static
    {
        return $this->setFieldValue('text_entities', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'SendGift';
    }
}