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
 * @property string $id
 * Unique identifier of the gift
 * @property Stickers\Sticker $sticker
 * The sticker that represents the gift
 * @property int $starCount
 * The number of Telegram Stars that must be paid to send the sticker
 * @property int $upgradeStarCount
 * *Optional*. The number of Telegram Stars that must be paid to upgrade the gift to a unique one
 * @property bool $isPremium
 * *Optional*. *True*, if the gift can only be purchased by Telegram Premium subscribers
 * @property bool $hasColors
 * *Optional*. *True*, if the gift can be used (after being upgraded) to customize a user's appearance
 * @property int $totalCount
 * *Optional*. The total number of gifts of this type that can be sent by all users; for limited gifts only
 * @property int $remainingCount
 * *Optional*. The number of remaining gifts of this type that can be sent by all users; for limited gifts only
 * @property int $personalTotalCount
 * *Optional*. The total number of gifts of this type that can be sent by the bot; for limited gifts only
 * @property int $personalRemainingCount
 * *Optional*. The number of remaining gifts of this type that can be sent by the bot; for limited gifts only
 * @property GiftBackground $background
 * *Optional*. Background of the gift
 * @property int $uniqueGiftVariantCount
 * *Optional*. The total number of different unique gifts that can be obtained by upgrading the gift
 * @property Chat $publisherChat
 * *Optional*. Information about the chat that published the gift
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
	* @return string
	*/

	public function getId(): mixed
	{
		return $this->getFieldValue('id');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setId(mixed $value): static
	{
		return $this->setFieldValue('id', $value);
	}

	/**
	* @return Stickers\Sticker
	*/

	public function getSticker(): mixed
	{
		return $this->getFieldValue('sticker');
	}

	/**
	* @param Stickers\Sticker $value
	* @return static
	*/

	public function setSticker(mixed $value): static
	{
		return $this->setFieldValue('sticker', $value);
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
	* @return int
	*/

	public function getUpgradeStarCount(): mixed
	{
		return $this->getFieldValue('upgrade_star_count');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setUpgradeStarCount(mixed $value): static
	{
		return $this->setFieldValue('upgrade_star_count', $value);
	}

	/**
	* @return bool
	*/

	public function getIsPremium(): mixed
	{
		return $this->getFieldValue('is_premium');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setIsPremium(mixed $value): static
	{
		return $this->setFieldValue('is_premium', $value);
	}

	/**
	* @return bool
	*/

	public function getHasColors(): mixed
	{
		return $this->getFieldValue('has_colors');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setHasColors(mixed $value): static
	{
		return $this->setFieldValue('has_colors', $value);
	}

	/**
	* @return int
	*/

	public function getTotalCount(): mixed
	{
		return $this->getFieldValue('total_count');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setTotalCount(mixed $value): static
	{
		return $this->setFieldValue('total_count', $value);
	}

	/**
	* @return int
	*/

	public function getRemainingCount(): mixed
	{
		return $this->getFieldValue('remaining_count');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setRemainingCount(mixed $value): static
	{
		return $this->setFieldValue('remaining_count', $value);
	}

	/**
	* @return int
	*/

	public function getPersonalTotalCount(): mixed
	{
		return $this->getFieldValue('personal_total_count');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setPersonalTotalCount(mixed $value): static
	{
		return $this->setFieldValue('personal_total_count', $value);
	}

	/**
	* @return int
	*/

	public function getPersonalRemainingCount(): mixed
	{
		return $this->getFieldValue('personal_remaining_count');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setPersonalRemainingCount(mixed $value): static
	{
		return $this->setFieldValue('personal_remaining_count', $value);
	}

	/**
	* @return GiftBackground
	*/

	public function getBackground(): mixed
	{
		return $this->getFieldValue('background');
	}

	/**
	* @param GiftBackground $value
	* @return static
	*/

	public function setBackground(mixed $value): static
	{
		return $this->setFieldValue('background', $value);
	}

	/**
	* @return int
	*/

	public function getUniqueGiftVariantCount(): mixed
	{
		return $this->getFieldValue('unique_gift_variant_count');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setUniqueGiftVariantCount(mixed $value): static
	{
		return $this->setFieldValue('unique_gift_variant_count', $value);
	}

	/**
	* @return Chat
	*/

	public function getPublisherChat(): mixed
	{
		return $this->getFieldValue('publisher_chat');
	}

	/**
	* @param Chat $value
	* @return static
	*/

	public function setPublisherChat(mixed $value): static
	{
		return $this->setFieldValue('publisher_chat', $value);
	}

}