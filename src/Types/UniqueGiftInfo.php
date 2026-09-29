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
 * Describes a service message about a unique gift that was sent or received.
 *
 * @link https://core.telegram.org/bots/api#uniquegiftinfo
 *
 * @property-read UniqueGift|null $gift Required. Information about the gift
 * @property-write UniqueGift|array<string, mixed> $gift
 * @property-read string|null $origin Required. Origin of the gift. Currently, either “upgrade” for gifts upgraded from regular gifts, “transfer” for gifts transferred from other users or channels, “resale” for gifts bought from other users, “gifted_upgrade” for upgrades purchased after the gift was sent, or “offer” for gifts bought or sold through gift purchase offers.
 * @property-write string $origin
 * @property-read string|null $text Optional. Text of the message that was added to the gift
 * @property-write string $text
 * @property-read Base\ArrayObject<MessageEntity> $entities Optional. Special entities that appear in the text
 * @property-write list<MessageEntity|array<string, mixed>>|Base\ArrayObject<MessageEntity> $entities
 * @property-read bool|null $isPrivate Optional. *True*, if the sender and gift text are shown only to the gift receiver; otherwise, everyone will be able to see them
 * @property-write bool $isPrivate
 * @property-read string|null $lastResaleCurrency Optional. For gifts bought from other users, the currency in which the payment for the gift was done. Currently, one of “XTR” for Telegram Stars or “TON” for TON grams.
 * @property-write string $lastResaleCurrency
 * @property-read int|null $lastResaleAmount Optional. For gifts bought from other users, the price paid for the gift in either Telegram Stars or nanograms
 * @property-write int $lastResaleAmount
 * @property-read string|null $ownedGiftId Optional. Unique identifier of the received gift for the bot; only present for gifts received on behalf of business accounts
 * @property-write string $ownedGiftId
 * @property-read int|null $transferStarCount Optional. Number of Telegram Stars that must be paid to transfer the gift; omitted if the bot cannot transfer the gift
 * @property-write int $transferStarCount
 * @property-read int|null $nextTransferDate Optional. Point in time (Unix timestamp) when the gift can be transferred. If it is in the past, then the gift can be transferred now.
 * @property-write int $nextTransferDate
 */
class UniqueGiftInfo extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'gift' => [
                'type' => [UniqueGift::class],
                'required' => true,
            ],
            'origin' => [
                'type' => ['string'],
                'required' => true,
            ],
            'text' => [
                'type' => ['string'],
            ],
            'entities' => [
                'type' => [MessageEntity::class],
                'isArray' => true,
            ],
            'is_private' => [
                'type' => ['bool'],
            ],
            'last_resale_currency' => [
                'type' => ['string'],
            ],
            'last_resale_amount' => [
                'type' => ['int'],
            ],
            'owned_gift_id' => [
                'type' => ['string'],
            ],
            'transfer_star_count' => [
                'type' => ['int'],
            ],
            'next_transfer_date' => [
                'type' => ['int'],
            ],
        ];
    }

    /**
     * Required. Information about the gift
     *
     * @return UniqueGift|null
     * @throws Base\TelegramException
     */
    public function getGift(): mixed
    {
        return $this->getFieldValue('gift');
    }

    /**
     * @param UniqueGift|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setGift(mixed $value): static
    {
        return $this->setFieldValue('gift', $value);
    }

    /**
     * Required. Origin of the gift. Currently, either “upgrade” for gifts upgraded from regular gifts, “transfer” for gifts transferred from other users or channels, “resale” for gifts bought from other users, “gifted_upgrade” for upgrades purchased after the gift was sent, or “offer” for gifts bought or sold through gift purchase offers.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getOrigin(): mixed
    {
        return $this->getFieldValue('origin');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setOrigin(mixed $value): static
    {
        return $this->setFieldValue('origin', $value);
    }

    /**
     * Optional. Text of the message that was added to the gift
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
     * Optional. Special entities that appear in the text
     *
     * @return Base\ArrayObject<MessageEntity>
     * @throws Base\TelegramException
     */
    public function getEntities(): mixed
    {
        return $this->getFieldValue('entities');
    }

    /**
     * @param list<MessageEntity|array<string, mixed>>|Base\ArrayObject<MessageEntity> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setEntities(mixed $value): static
    {
        return $this->setFieldValue('entities', $value);
    }

    /**
     * Optional. *True*, if the sender and gift text are shown only to the gift receiver; otherwise, everyone will be able to see them
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsPrivate(): mixed
    {
        return $this->getFieldValue('is_private');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsPrivate(mixed $value): static
    {
        return $this->setFieldValue('is_private', $value);
    }

    /**
     * Optional. For gifts bought from other users, the currency in which the payment for the gift was done. Currently, one of “XTR” for Telegram Stars or “TON” for TON grams.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getLastResaleCurrency(): mixed
    {
        return $this->getFieldValue('last_resale_currency');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setLastResaleCurrency(mixed $value): static
    {
        return $this->setFieldValue('last_resale_currency', $value);
    }

    /**
     * Optional. For gifts bought from other users, the price paid for the gift in either Telegram Stars or nanograms
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getLastResaleAmount(): mixed
    {
        return $this->getFieldValue('last_resale_amount');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setLastResaleAmount(mixed $value): static
    {
        return $this->setFieldValue('last_resale_amount', $value);
    }

    /**
     * Optional. Unique identifier of the received gift for the bot; only present for gifts received on behalf of business accounts
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getOwnedGiftId(): mixed
    {
        return $this->getFieldValue('owned_gift_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setOwnedGiftId(mixed $value): static
    {
        return $this->setFieldValue('owned_gift_id', $value);
    }

    /**
     * Optional. Number of Telegram Stars that must be paid to transfer the gift; omitted if the bot cannot transfer the gift
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getTransferStarCount(): mixed
    {
        return $this->getFieldValue('transfer_star_count');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setTransferStarCount(mixed $value): static
    {
        return $this->setFieldValue('transfer_star_count', $value);
    }

    /**
     * Optional. Point in time (Unix timestamp) when the gift can be transferred. If it is in the past, then the gift can be transferred now.
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getNextTransferDate(): mixed
    {
        return $this->getFieldValue('next_transfer_date');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setNextTransferDate(mixed $value): static
    {
        return $this->setFieldValue('next_transfer_date', $value);
    }
}
