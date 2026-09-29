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
 * Describes a regular gift owned by a user or a chat.
 *
 * @link https://core.telegram.org/bots/api#ownedgiftregular
 *
 * @property-read string|null $type Required. Type of the gift, always “regular”
 * @property-write string $type
 * @property-read Gift|null $gift Required. Information about the regular gift
 * @property-write Gift|array<string, mixed> $gift
 * @property-read string|null $ownedGiftId Optional. Unique identifier of the gift for the bot; for gifts received on behalf of business accounts only
 * @property-write string $ownedGiftId
 * @property-read User|null $senderUser Optional. Sender of the gift if it is a known user
 * @property-write User|array<string, mixed> $senderUser
 * @property-read int|null $sendDate Required. Date the gift was sent in Unix time
 * @property-write int $sendDate
 * @property-read string|null $text Optional. Text of the message that was added to the gift
 * @property-write string $text
 * @property-read Base\ArrayObject<MessageEntity> $entities Optional. Special entities that appear in the text
 * @property-write list<MessageEntity|array<string, mixed>>|Base\ArrayObject<MessageEntity> $entities
 * @property-read bool|null $isPrivate Optional. *True*, if the sender and gift text are shown only to the gift receiver; otherwise, everyone will be able to see them
 * @property-write bool $isPrivate
 * @property-read bool|null $isSaved Optional. *True*, if the gift is displayed on the account's profile page; for gifts received on behalf of business accounts only
 * @property-write bool $isSaved
 * @property-read bool|null $canBeUpgraded Optional. *True*, if the gift can be upgraded to a unique gift; for gifts received on behalf of business accounts only
 * @property-write bool $canBeUpgraded
 * @property-read bool|null $wasRefunded Optional. *True*, if the gift was refunded and isn't available anymore
 * @property-write bool $wasRefunded
 * @property-read int|null $convertStarCount Optional. Number of Telegram Stars that can be claimed by the receiver instead of the gift; omitted if the gift cannot be converted to Telegram Stars; for gifts received on behalf of business accounts only
 * @property-write int $convertStarCount
 * @property-read int|null $prepaidUpgradeStarCount Optional. Number of Telegram Stars that were paid for the ability to upgrade the gift
 * @property-write int $prepaidUpgradeStarCount
 * @property-read bool|null $isUpgradeSeparate Optional. *True*, if the gift's upgrade was purchased after the gift was sent; for gifts received on behalf of business accounts only
 * @property-write bool $isUpgradeSeparate
 * @property-read int|null $uniqueGiftNumber Optional. Unique number reserved for this gift when upgraded. See the *number* field in `UniqueGift`.
 * @property-write int $uniqueGiftNumber
 */
class OwnedGiftRegular extends OwnedGift
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
                'value' => 'regular',
                'required' => true,
            ],
            'gift' => [
                'type' => [Gift::class],
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
            'is_saved' => [
                'type' => ['bool'],
            ],
            'can_be_upgraded' => [
                'type' => ['bool'],
            ],
            'was_refunded' => [
                'type' => ['bool'],
            ],
            'convert_star_count' => [
                'type' => ['int'],
            ],
            'prepaid_upgrade_star_count' => [
                'type' => ['int'],
            ],
            'is_upgrade_separate' => [
                'type' => ['bool'],
            ],
            'unique_gift_number' => [
                'type' => ['int'],
            ],
        ];
    }

    /**
     * Required. Type of the gift, always “regular”
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
     * Required. Information about the regular gift
     *
     * @return Gift|null
     * @throws Base\TelegramException
     */
    public function getGift(): mixed
    {
        return $this->getFieldValue('gift');
    }

    /**
     * @param Gift|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setGift(mixed $value): static
    {
        return $this->setFieldValue('gift', $value);
    }

    /**
     * Optional. Unique identifier of the gift for the bot; for gifts received on behalf of business accounts only
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
     * Optional. *True*, if the gift can be upgraded to a unique gift; for gifts received on behalf of business accounts only
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getCanBeUpgraded(): mixed
    {
        return $this->getFieldValue('can_be_upgraded');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCanBeUpgraded(mixed $value): static
    {
        return $this->setFieldValue('can_be_upgraded', $value);
    }

    /**
     * Optional. *True*, if the gift was refunded and isn't available anymore
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getWasRefunded(): mixed
    {
        return $this->getFieldValue('was_refunded');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setWasRefunded(mixed $value): static
    {
        return $this->setFieldValue('was_refunded', $value);
    }

    /**
     * Optional. Number of Telegram Stars that can be claimed by the receiver instead of the gift; omitted if the gift cannot be converted to Telegram Stars; for gifts received on behalf of business accounts only
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getConvertStarCount(): mixed
    {
        return $this->getFieldValue('convert_star_count');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setConvertStarCount(mixed $value): static
    {
        return $this->setFieldValue('convert_star_count', $value);
    }

    /**
     * Optional. Number of Telegram Stars that were paid for the ability to upgrade the gift
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getPrepaidUpgradeStarCount(): mixed
    {
        return $this->getFieldValue('prepaid_upgrade_star_count');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPrepaidUpgradeStarCount(mixed $value): static
    {
        return $this->setFieldValue('prepaid_upgrade_star_count', $value);
    }

    /**
     * Optional. *True*, if the gift's upgrade was purchased after the gift was sent; for gifts received on behalf of business accounts only
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsUpgradeSeparate(): mixed
    {
        return $this->getFieldValue('is_upgrade_separate');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsUpgradeSeparate(mixed $value): static
    {
        return $this->setFieldValue('is_upgrade_separate', $value);
    }

    /**
     * Optional. Unique number reserved for this gift when upgraded. See the *number* field in `UniqueGift`.
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getUniqueGiftNumber(): mixed
    {
        return $this->getFieldValue('unique_gift_number');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setUniqueGiftNumber(mixed $value): static
    {
        return $this->setFieldValue('unique_gift_number', $value);
    }
}
