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
 * This object contains information about a chat boost.
 *
 * @link https://core.telegram.org/bots/api#chatboost
 *
 * @property-read string|null $boostId Required. Unique identifier of the boost
 * @property-write string $boostId
 * @property-read int|null $addDate Required. Point in time (Unix timestamp) when the chat was boosted
 * @property-write int $addDate
 * @property-read int|null $expirationDate Required. Point in time (Unix timestamp) when the boost will automatically expire, unless the booster's Telegram Premium subscription is prolonged
 * @property-write int $expirationDate
 * @property-read ChatBoostSource|null $source Required. Source of the added boost
 * @property-write ChatBoostSource|array<string, mixed> $source
 */
class ChatBoost extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'boost_id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'add_date' => [
                'type' => ['int'],
                'required' => true,
            ],
            'expiration_date' => [
                'type' => ['int'],
                'required' => true,
            ],
            'source' => [
                'type' => [ChatBoostSource::class],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Unique identifier of the boost
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getBoostId(): mixed
    {
        return $this->getFieldValue('boost_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setBoostId(mixed $value): static
    {
        return $this->setFieldValue('boost_id', $value);
    }

    /**
     * Required. Point in time (Unix timestamp) when the chat was boosted
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getAddDate(): mixed
    {
        return $this->getFieldValue('add_date');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAddDate(mixed $value): static
    {
        return $this->setFieldValue('add_date', $value);
    }

    /**
     * Required. Point in time (Unix timestamp) when the boost will automatically expire, unless the booster's Telegram Premium subscription is prolonged
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getExpirationDate(): mixed
    {
        return $this->getFieldValue('expiration_date');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setExpirationDate(mixed $value): static
    {
        return $this->setFieldValue('expiration_date', $value);
    }

    /**
     * Required. Source of the added boost
     *
     * @return ChatBoostSource|null
     * @throws Base\TelegramException
     */
    public function getSource(): mixed
    {
        return $this->getFieldValue('source');
    }

    /**
     * @param ChatBoostSource|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSource(mixed $value): static
    {
        return $this->setFieldValue('source', $value);
    }
}
