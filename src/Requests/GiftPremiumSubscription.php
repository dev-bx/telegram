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
 * Gifts a Telegram Premium subscription to the given user. Returns *True* on success.
 * @property int $userId
 * Unique identifier of the target user who will receive a Telegram Premium subscription
 * @property int $monthCount
 * Number of months the Telegram Premium subscription will be active for the user; must be one of 3, 6, or 12
 * @property int $starCount
 * Number of Telegram Stars to pay for the Telegram Premium subscription; must be 1000 for 3 months, 1500 for 6 months, and 2500 for 12 months
 * @property string $text
 * Text that will be shown along with the service message about the subscription; 0-128 characters
 * @property string $textParseMode
 * Mode for parsing entities in the text. See [formatting options](#formatting-options) for more details. Entities other than “bold”, “italic”, “underline”, “strikethrough”, “spoiler”, and “custom\_emoji” are ignored.
 * @property Base\ArrayObject|Types\MessageEntity[] $textEntities
 * A JSON-serialized list of special entities that appear in the gift text. It can be specified instead of *text\_parse\_mode*. Entities other than “bold”, “italic”, “underline”, “strikethrough”, “spoiler”, and “custom\_emoji” are ignored.
 * @method Base\BaseType send(Api $gateway = null)
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
    * @return int
    */

    public function getMonthCount(): mixed
    {
        return $this->getFieldValue('month_count');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setMonthCount(mixed $value): static
    {
        return $this->setFieldValue('month_count', $value);
    }

    /**
    * @return int
    */

    public function getStarCount(): mixed
    {
        return $this->getFieldValue('star_count');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setStarCount(mixed $value): static
    {
        return $this->setFieldValue('star_count', $value);
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
        return 'GiftPremiumSubscription';
    }
}