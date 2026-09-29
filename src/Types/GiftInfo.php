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
 * Describes a service message about a regular gift that was sent or received.
 *
 * @link https://core.telegram.org/bots/api#giftinfo
 *
 * @property-read Gift|null $gift Required. Information about the gift
 * @property-write Gift|array<string, mixed> $gift
 * @property-read string|null $ownedGiftId Optional. Unique identifier of the received gift for the bot; only present for gifts received on behalf of business accounts
 * @property-write string $ownedGiftId
 * @property-read int|null $convertStarCount Optional. Number of Telegram Stars that can be claimed by the receiver by converting the gift; omitted if conversion to Telegram Stars is impossible
 * @property-write int $convertStarCount
 * @property-read int|null $prepaidUpgradeStarCount Optional. Number of Telegram Stars that were prepaid for the ability to upgrade the gift
 * @property-write int $prepaidUpgradeStarCount
 * @property-read bool|null $isUpgradeSeparate Optional. *True*, if the gift's upgrade was purchased after the gift was sent
 * @property-write bool $isUpgradeSeparate
 * @property-read bool|null $canBeUpgraded Optional. *True*, if the gift can be upgraded to a unique gift
 * @property-write bool $canBeUpgraded
 * @property-read string|null $text Optional. Text of the message that was added to the gift
 * @property-write string $text
 * @property-read Base\ArrayObject<MessageEntity> $entities Optional. Special entities that appear in the text
 * @property-write list<MessageEntity|array<string, mixed>>|Base\ArrayObject<MessageEntity> $entities
 * @property-read bool|null $isPrivate Optional. *True*, if the sender and gift text are shown only to the gift receiver; otherwise, everyone will be able to see them
 * @property-write bool $isPrivate
 * @property-read int|null $uniqueGiftNumber Optional. Unique number reserved for this gift when upgraded. See the *number* field in `UniqueGift`.
 * @property-write int $uniqueGiftNumber
 */
class GiftInfo extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'gift' => [
                'type' => [Gift::class],
                'required' => true,
            ],
            'owned_gift_id' => [
                'type' => ['string'],
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
            'can_be_upgraded' => [
                'type' => ['bool'],
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
            'unique_gift_number' => [
                'type' => ['int'],
            ],
        ];
    }

    /**
     * Required. Information about the gift
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
     * Optional. Number of Telegram Stars that can be claimed by the receiver by converting the gift; omitted if conversion to Telegram Stars is impossible
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
     * Optional. Number of Telegram Stars that were prepaid for the ability to upgrade the gift
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
     * Optional. *True*, if the gift's upgrade was purchased after the gift was sent
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
     * Optional. *True*, if the gift can be upgraded to a unique gift
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
