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

namespace DevBX\Telegram\Types;

use DevBX\Telegram\Base;
use DevBX\Telegram\Stickers;


/**
 * This object describes the model of a unique gift.
 * @property string $name
 * Name of the model
 * @property Stickers\Sticker $sticker
 * The sticker that represents the unique gift
 * @property int $rarityPerMille
 * The number of unique gifts that receive this model for every 1000 gifts upgraded
 */
class UniqueGiftModel extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'name' => [
				'type' => ['string'],
				'required' => true,
			],
			'sticker' => [
				'type' => [Stickers\Sticker::class],
				'required' => true,
			],
			'rarity_per_mille' => [
				'type' => ['int'],
				'required' => true,
			],
		];
	}
	/**
	* @return string
	*/

	public function getName(): mixed
	{
		return $this->getFieldValue('name');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setName(mixed $value): static
	{
		return $this->setFieldValue('name', $value);
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

	public function getRarityPerMille(): mixed
	{
		return $this->getFieldValue('rarity_per_mille');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setRarityPerMille(mixed $value): static
	{
		return $this->setFieldValue('rarity_per_mille', $value);
	}

}