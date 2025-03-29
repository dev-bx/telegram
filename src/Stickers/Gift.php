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

namespace DevBX\Telegram\Stickers;

use DevBX\Telegram\Base;


/**
 * This object represents a gift that can be sent by the bot.
 * @property string $id
 * Unique identifier of the gift
 * @property Sticker $sticker
 * The sticker that represents the gift
 * @property int $starCount
 * The number of Telegram Stars that must be paid to send the sticker
 * @property int $upgradeStarCount
 * *Optional*. The number of Telegram Stars that must be paid to upgrade the gift to a unique one
 * @property int $totalCount
 * *Optional*. The total number of the gifts of this type that can be sent; for limited gifts only
 * @property int $remainingCount
 * *Optional*. The number of remaining gifts of this type that can be sent; for limited gifts only
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
				'type' => [Sticker::class],
				'required' => true,
			],
			'star_count' => [
				'type' => ['int'],
				'required' => true,
			],
			'upgrade_star_count' => [
				'type' => ['int'],
			],
			'total_count' => [
				'type' => ['int'],
			],
			'remaining_count' => [
				'type' => ['int'],
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
	* @return Sticker
	*/

	public function getSticker(): mixed
	{
		return $this->getFieldValue('sticker');
	}

	/**
	* @param Sticker $value
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

}