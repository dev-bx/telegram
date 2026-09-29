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
 * The boost was obtained by the creation of a Telegram Premium or a Telegram Star giveaway. This boosts the chat 4 times for the duration of the corresponding Telegram Premium subscription for Telegram Premium giveaways and *prize_star_count* / 500 times for one year for Telegram Star giveaways.
 *
 * @link https://core.telegram.org/bots/api#chatboostsourcegiveaway
 *
 * @property-read string|null $source Required. Source of the boost, always “giveaway”
 * @property-write string $source
 * @property-read int|null $giveawayMessageId Required. Identifier of a message in the chat with the giveaway; the message could have been deleted already. May be 0 if the message isn't sent yet.
 * @property-write int $giveawayMessageId
 * @property-read User|null $user Optional. User that won the prize in the giveaway if any; for Telegram Premium giveaways only
 * @property-write User|array<string, mixed> $user
 * @property-read int|null $prizeStarCount Optional. The number of Telegram Stars to be split between giveaway winners; for Telegram Star giveaways only
 * @property-write int $prizeStarCount
 * @property-read bool|null $isUnclaimed Optional. *True*, if the giveaway was completed, but there was no user to win the prize
 * @property-write bool $isUnclaimed
 */
class ChatBoostSourceGiveaway extends ChatBoostSource
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
            'source' => [
                'type' => ['string'],
                'value' => 'giveaway',
                'required' => true,
            ],
            'giveaway_message_id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'user' => [
                'type' => [User::class],
            ],
            'prize_star_count' => [
                'type' => ['int'],
            ],
            'is_unclaimed' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Required. Source of the boost, always “giveaway”
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getSource(): mixed
    {
        return $this->getFieldValue('source');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSource(mixed $value): static
    {
        return $this->setFieldValue('source', $value);
    }

    /**
     * Required. Identifier of a message in the chat with the giveaway; the message could have been deleted already. May be 0 if the message isn't sent yet.
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getGiveawayMessageId(): mixed
    {
        return $this->getFieldValue('giveaway_message_id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setGiveawayMessageId(mixed $value): static
    {
        return $this->setFieldValue('giveaway_message_id', $value);
    }

    /**
     * Optional. User that won the prize in the giveaway if any; for Telegram Premium giveaways only
     *
     * @return User|null
     * @throws Base\TelegramException
     */
    public function getUser(): mixed
    {
        return $this->getFieldValue('user');
    }

    /**
     * @param User|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setUser(mixed $value): static
    {
        return $this->setFieldValue('user', $value);
    }

    /**
     * Optional. The number of Telegram Stars to be split between giveaway winners; for Telegram Star giveaways only
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getPrizeStarCount(): mixed
    {
        return $this->getFieldValue('prize_star_count');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPrizeStarCount(mixed $value): static
    {
        return $this->setFieldValue('prize_star_count', $value);
    }

    /**
     * Optional. *True*, if the giveaway was completed, but there was no user to win the prize
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsUnclaimed(): mixed
    {
        return $this->getFieldValue('is_unclaimed');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsUnclaimed(mixed $value): static
    {
        return $this->setFieldValue('is_unclaimed', $value);
    }
}
