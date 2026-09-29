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
 * Gifts a Telegram Premium subscription to the given user. Returns *True* on success.
 *
 * @link https://core.telegram.org/bots/api#giftpremiumsubscription
 *
 * @property-read int|null $userId Required. Unique identifier of the target user who will receive a Telegram Premium subscription
 * @property-write int $userId
 * @property-read int|null $monthCount Required. Number of months the Telegram Premium subscription will be active for the user; must be one of 3, 6, or 12
 * @property-write int $monthCount
 * @property-read int|null $starCount Required. Number of Telegram Stars to pay for the Telegram Premium subscription; must be 1000 for 3 months, 1500 for 6 months, and 2500 for 12 months
 * @property-write int $starCount
 * @property-read string|null $text Optional. Text that will be shown along with the service message about the subscription; 0-128 characters
 * @property-write string $text
 * @property-read string|null $textParseMode Optional. Mode for parsing entities in the text. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details. Entities other than “bold”, “italic”, “underline”, “strikethrough”, “spoiler”, “custom_emoji”, and “date_time” are ignored.
 * @property-write string $textParseMode
 * @property-read Base\ArrayObject<Types\MessageEntity> $textEntities Optional. A JSON-serialized list of special entities that appear in the gift text. It can be specified instead of *text_parse_mode*. Entities other than “bold”, “italic”, “underline”, “strikethrough”, “spoiler”, “custom_emoji”, and “date_time” are ignored.
 * @property-write list<Types\MessageEntity|array<string, mixed>>|Base\ArrayObject<Types\MessageEntity> $textEntities
 *
 * @method Base\ParameterBool send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class GiftPremiumSubscription extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'user_id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'month_count' => [
                'type' => ['int'],
                'required' => true,
            ],
            'star_count' => [
                'type' => ['int'],
                'required' => true,
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
     * Required. Unique identifier of the target user who will receive a Telegram Premium subscription
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
     * Required. Number of months the Telegram Premium subscription will be active for the user; must be one of 3, 6, or 12
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getMonthCount(): mixed
    {
        return $this->getFieldValue('month_count');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setMonthCount(mixed $value): static
    {
        return $this->setFieldValue('month_count', $value);
    }

    /**
     * Required. Number of Telegram Stars to pay for the Telegram Premium subscription; must be 1000 for 3 months, 1500 for 6 months, and 2500 for 12 months
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getStarCount(): mixed
    {
        return $this->getFieldValue('star_count');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setStarCount(mixed $value): static
    {
        return $this->setFieldValue('star_count', $value);
    }

    /**
     * Optional. Text that will be shown along with the service message about the subscription; 0-128 characters
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
        return 'giftPremiumSubscription';
    }
}
