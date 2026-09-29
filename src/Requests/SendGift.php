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
 * Sends a gift to the given user or channel chat. The gift can't be converted to Telegram Stars by the receiver. Returns *True* on success.
 *
 * @link https://core.telegram.org/bots/api#sendgift
 *
 * @property-read int|null $userId Optional. Required if *chat_id* is not specified. Unique identifier of the target user who will receive the gift.
 * @property-write int $userId
 * @property-read int|string|null $chatId Optional. Required if *user_id* is not specified. Unique identifier for the chat or username of the channel (in the format `@username`) that will receive the gift.
 * @property-write int|string $chatId
 * @property-read string|null $giftId Required. Identifier of the gift; limited gifts can't be sent to channel chats
 * @property-write string $giftId
 * @property-read bool|null $payForUpgrade Optional. Pass *True* to pay for the gift upgrade from the bot's balance, thereby making the upgrade free for the receiver
 * @property-write bool $payForUpgrade
 * @property-read string|null $text Optional. Text that will be shown along with the gift; 0-128 characters
 * @property-write string $text
 * @property-read string|null $textParseMode Optional. Mode for parsing entities in the text. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details. Entities other than “bold”, “italic”, “underline”, “strikethrough”, “spoiler”, “custom_emoji”, and “date_time” are ignored.
 * @property-write string $textParseMode
 * @property-read Base\ArrayObject<Types\MessageEntity> $textEntities Optional. A JSON-serialized list of special entities that appear in the gift text. It can be specified instead of *text_parse_mode*. Entities other than “bold”, “italic”, “underline”, “strikethrough”, “spoiler”, “custom_emoji”, and “date_time” are ignored.
 * @property-write list<Types\MessageEntity|array<string, mixed>>|Base\ArrayObject<Types\MessageEntity> $textEntities
 *
 * @method Base\ParameterBool send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
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
            '@return' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Optional. Required if *chat_id* is not specified. Unique identifier of the target user who will receive the gift.
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getUserId(): mixed
    {
        return $this->getFieldValue('user_id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setUserId(mixed $value): static
    {
        return $this->setFieldValue('user_id', $value);
    }

    /**
     * Optional. Required if *user_id* is not specified. Unique identifier for the chat or username of the channel (in the format `@username`) that will receive the gift.
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
     * Required. Identifier of the gift; limited gifts can't be sent to channel chats
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getGiftId(): mixed
    {
        return $this->getFieldValue('gift_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setGiftId(mixed $value): static
    {
        return $this->setFieldValue('gift_id', $value);
    }

    /**
     * Optional. Pass *True* to pay for the gift upgrade from the bot's balance, thereby making the upgrade free for the receiver
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getPayForUpgrade(): mixed
    {
        return $this->getFieldValue('pay_for_upgrade');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPayForUpgrade(mixed $value): static
    {
        return $this->setFieldValue('pay_for_upgrade', $value);
    }

    /**
     * Optional. Text that will be shown along with the gift; 0-128 characters
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
     * Optional. Mode for parsing entities in the text. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details. Entities other than “bold”, “italic”, “underline”, “strikethrough”, “spoiler”, “custom_emoji”, and “date_time” are ignored.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getTextParseMode(): mixed
    {
        return $this->getFieldValue('text_parse_mode');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setTextParseMode(mixed $value): static
    {
        return $this->setFieldValue('text_parse_mode', $value);
    }

    /**
     * Optional. A JSON-serialized list of special entities that appear in the gift text. It can be specified instead of *text_parse_mode*. Entities other than “bold”, “italic”, “underline”, “strikethrough”, “spoiler”, “custom_emoji”, and “date_time” are ignored.
     *
     * @return Base\ArrayObject<Types\MessageEntity>
     * @throws Base\TelegramException
     */
    public function getTextEntities(): mixed
    {
        return $this->getFieldValue('text_entities');
    }

    /**
     * @param list<Types\MessageEntity|array<string, mixed>>|Base\ArrayObject<Types\MessageEntity> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setTextEntities(mixed $value): static
    {
        return $this->setFieldValue('text_entities', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'sendGift';
    }
}
