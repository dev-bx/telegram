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


/**
 * This object describes the backdrop of a unique gift.
 * @property string $name
 * Name of the backdrop
 * @property UniqueGiftBackdropColors $colors
 * Colors of the backdrop
 * @property int $rarityPerMille
 * The number of unique gifts that receive this backdrop for every 1000 gifts upgraded
 */
class UniqueGiftBackdrop extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'name' => [
				'type' => ['string'],
				'required' => true,
			],
			'colors' => [
				'type' => [UniqueGiftBackdropColors::class],
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
	* @return UniqueGiftBackdropColors
	*/

	public function getColors(): mixed
	{
		return $this->getFieldValue('colors');
	}

	/**
	* @param UniqueGiftBackdropColors $value
	* @return static
	*/

	public function setColors(mixed $value): static
	{
		return $this->setFieldValue('colors', $value);
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