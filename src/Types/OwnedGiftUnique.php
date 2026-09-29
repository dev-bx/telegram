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
 * Describes a unique gift received and owned by a user or a chat.
 *
 * @link https://core.telegram.org/bots/api#ownedgiftunique
 *
 * @property-read string|null $type Required. Type of the gift, always “unique”
 * @property-write string $type
 * @property-read UniqueGift|null $gift Required. Information about the unique gift
 * @property-write UniqueGift|array<string, mixed> $gift
 * @property-read string|null $ownedGiftId Optional. Unique identifier of the received gift for the bot; for gifts received on behalf of business accounts only
 * @property-write string $ownedGiftId
 * @property-read User|null $senderUser Optional. Sender of the gift if it is a known user
 * @property-write User|array<string, mixed> $senderUser
 * @property-read int|null $sendDate Required. Date the gift was sent in Unix time
 * @property-write int $sendDate
 * @property-read bool|null $isSaved Optional. *True*, if the gift is displayed on the account's profile page; for gifts received on behalf of business accounts only
 * @property-write bool $isSaved
 * @property-read bool|null $canBeTransferred Optional. *True*, if the gift can be transferred to another owner; for gifts received on behalf of business accounts only
 * @property-write bool $canBeTransferred
 * @property-read int|null $transferStarCount Optional. Number of Telegram Stars that must be paid to transfer the gift; omitted if the bot cannot transfer the gift
 * @property-write int $transferStarCount
 * @property-read int|null $nextTransferDate Optional. Point in time (Unix timestamp) when the gift can be transferred. If it is in the past, then the gift can be transferred now.
 * @property-write int $nextTransferDate
 */
class OwnedGiftUnique extends OwnedGift
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
            'type' => [
                'type' => ['string'],
                'value' => 'unique',
                'required' => true,
            ],
            'gift' => [
                'type' => [UniqueGift::class],
                'required' => true,
            ],
            'owned_gift_id' => [
                'type' => ['string'],
            ],
            'sender_user' => [
                'type' => [User::class],
            ],
            'send_date' => [
                'type' => ['int'],
                'required' => true,
            ],
            'is_saved' => [
                'type' => ['bool'],
            ],
            'can_be_transferred' => [
                'type' => ['bool'],
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
     * Required. Type of the gift, always “unique”
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getType(): mixed
    {
        return $this->getFieldValue('type');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setType(mixed $value): static
    {
        return $this->setFieldValue('type', $value);
    }

    /**
     * Required. Information about the unique gift
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
     * Optional. Unique identifier of the received gift for the bot; for gifts received on behalf of business accounts only
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
     * Optional. Sender of the gift if it is a known user
     *
     * @return User|null
     * @throws Base\TelegramException
     */
    public function getSenderUser(): mixed
    {
        return $this->getFieldValue('sender_user');
    }

    /**
     * @param User|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSenderUser(mixed $value): static
    {
        return $this->setFieldValue('sender_user', $value);
    }

    /**
     * Required. Date the gift was sent in Unix time
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getSendDate(): mixed
    {
        return $this->getFieldValue('send_date');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSendDate(mixed $value): static
    {
        return $this->setFieldValue('send_date', $value);
    }

    /**
     * Optional. *True*, if the gift is displayed on the account's profile page; for gifts received on behalf of business accounts only
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsSaved(): mixed
    {
        return $this->getFieldValue('is_saved');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsSaved(mixed $value): static
    {
        return $this->setFieldValue('is_saved', $value);
    }

    /**
     * Optional. *True*, if the gift can be transferred to another owner; for gifts received on behalf of business accounts only
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getCanBeTransferred(): mixed
    {
        return $this->getFieldValue('can_be_transferred');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCanBeTransferred(mixed $value): static
    {
        return $this->setFieldValue('can_be_transferred', $value);
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
