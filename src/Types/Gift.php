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
use DevBX\Telegram\Stickers;

/**
 * This object represents a gift that can be sent by the bot.
 *
 * @link https://core.telegram.org/bots/api#gift
 *
 * @property-read string|null $id Required. Unique identifier of the gift
 * @property-write string $id
 * @property-read Stickers\Sticker|null $sticker Required. The sticker that represents the gift
 * @property-write Stickers\Sticker|array<string, mixed> $sticker
 * @property-read int|null $starCount Required. The number of Telegram Stars that must be paid to send the sticker
 * @property-write int $starCount
 * @property-read int|null $upgradeStarCount Optional. The number of Telegram Stars that must be paid to upgrade the gift to a unique one
 * @property-write int $upgradeStarCount
 * @property-read bool|null $isPremium Optional. *True*, if the gift can only be purchased by Telegram Premium subscribers
 * @property-write bool $isPremium
 * @property-read bool|null $hasColors Optional. *True*, if the gift can be used (after being upgraded) to customize a user's appearance
 * @property-write bool $hasColors
 * @property-read int|null $totalCount Optional. The total number of gifts of this type that can be sent by all users; for limited gifts only
 * @property-write int $totalCount
 * @property-read int|null $remainingCount Optional. The number of remaining gifts of this type that can be sent by all users; for limited gifts only
 * @property-write int $remainingCount
 * @property-read int|null $personalTotalCount Optional. The total number of gifts of this type that can be sent by the bot; for limited gifts only
 * @property-write int $personalTotalCount
 * @property-read int|null $personalRemainingCount Optional. The number of remaining gifts of this type that can be sent by the bot; for limited gifts only
 * @property-write int $personalRemainingCount
 * @property-read GiftBackground|null $background Optional. Background of the gift
 * @property-write GiftBackground|array<string, mixed> $background
 * @property-read int|null $uniqueGiftVariantCount Optional. The total number of different unique gifts that can be obtained by upgrading the gift
 * @property-write int $uniqueGiftVariantCount
 * @property-read Chat|null $publisherChat Optional. Information about the chat that published the gift
 * @property-write Chat|array<string, mixed> $publisherChat
 */
class Gift extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'sticker' => [
                'type' => [Stickers\Sticker::class],
                'required' => true,
            ],
            'star_count' => [
                'type' => ['int'],
                'required' => true,
            ],
            'upgrade_star_count' => [
                'type' => ['int'],
            ],
            'is_premium' => [
                'type' => ['bool'],
            ],
            'has_colors' => [
                'type' => ['bool'],
            ],
            'total_count' => [
                'type' => ['int'],
            ],
            'remaining_count' => [
                'type' => ['int'],
            ],
            'personal_total_count' => [
                'type' => ['int'],
            ],
            'personal_remaining_count' => [
                'type' => ['int'],
            ],
            'background' => [
                'type' => [GiftBackground::class],
            ],
            'unique_gift_variant_count' => [
                'type' => ['int'],
            ],
            'publisher_chat' => [
                'type' => [Chat::class],
            ],
        ];
    }

    /**
     * Required. Unique identifier of the gift
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getId(): mixed
    {
        return $this->getFieldValue('id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setId(mixed $value): static
    {
        return $this->setFieldValue('id', $value);
    }

    /**
     * Required. The sticker that represents the gift
     *
     * @return Stickers\Sticker|null
     * @throws Base\TelegramException
     */
    public function getSticker(): mixed
    {
        return $this->getFieldValue('sticker');
    }

    /**
     * @param Stickers\Sticker|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSticker(mixed $value): static
    {
        return $this->setFieldValue('sticker', $value);
    }

    /**
     * Required. The number of Telegram Stars that must be paid to send the sticker
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
     * Optional. The number of Telegram Stars that must be paid to upgrade the gift to a unique one
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getUpgradeStarCount(): mixed
    {
        return $this->getFieldValue('upgrade_star_count');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setUpgradeStarCount(mixed $value): static
    {
        return $this->setFieldValue('upgrade_star_count', $value);
    }

    /**
     * Optional. *True*, if the gift can only be purchased by Telegram Premium subscribers
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsPremium(): mixed
    {
        return $this->getFieldValue('is_premium');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsPremium(mixed $value): static
    {
        return $this->setFieldValue('is_premium', $value);
    }

    /**
     * Optional. *True*, if the gift can be used (after being upgraded) to customize a user's appearance
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getHasColors(): mixed
    {
        return $this->getFieldValue('has_colors');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setHasColors(mixed $value): static
    {
        return $this->setFieldValue('has_colors', $value);
    }

    /**
     * Optional. The total number of gifts of this type that can be sent by all users; for limited gifts only
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getTotalCount(): mixed
    {
        return $this->getFieldValue('total_count');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setTotalCount(mixed $value): static
    {
        return $this->setFieldValue('total_count', $value);
    }

    /**
     * Optional. The number of remaining gifts of this type that can be sent by all users; for limited gifts only
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getRemainingCount(): mixed
    {
        return $this->getFieldValue('remaining_count');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setRemainingCount(mixed $value): static
    {
        return $this->setFieldValue('remaining_count', $value);
    }

    /**
     * Optional. The total number of gifts of this type that can be sent by the bot; for limited gifts only
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getPersonalTotalCount(): mixed
    {
        return $this->getFieldValue('personal_total_count');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPersonalTotalCount(mixed $value): static
    {
        return $this->setFieldValue('personal_total_count', $value);
    }

    /**
     * Optional. The number of remaining gifts of this type that can be sent by the bot; for limited gifts only
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getPersonalRemainingCount(): mixed
    {
        return $this->getFieldValue('personal_remaining_count');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPersonalRemainingCount(mixed $value): static
    {
        return $this->setFieldValue('personal_remaining_count', $value);
    }

    /**
     * Optional. Background of the gift
     *
     * @return GiftBackground|null
     * @throws Base\TelegramException
     */
    public function getBackground(): mixed
    {
        return $this->getFieldValue('background');
    }

    /**
     * @param GiftBackground|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setBackground(mixed $value): static
    {
        return $this->setFieldValue('background', $value);
    }

    /**
     * Optional. The total number of different unique gifts that can be obtained by upgrading the gift
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getUniqueGiftVariantCount(): mixed
    {
        return $this->getFieldValue('unique_gift_variant_count');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setUniqueGiftVariantCount(mixed $value): static
    {
        return $this->setFieldValue('unique_gift_variant_count', $value);
    }

    /**
     * Optional. Information about the chat that published the gift
     *
     * @return Chat|null
     * @throws Base\TelegramException
     */
    public function getPublisherChat(): mixed
    {
        return $this->getFieldValue('publisher_chat');
    }

    /**
     * @param Chat|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPublisherChat(mixed $value): static
    {
        return $this->setFieldValue('publisher_chat', $value);
    }
}
