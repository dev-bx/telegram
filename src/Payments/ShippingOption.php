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

namespace DevBX\Telegram\Payments;

use DevBX\Telegram\Base;


/**
* This object represents one shipping option.
* @property string $id
* Shipping option identifier
* @property string $title
* Option title
* @property Base\ArrayObject|LabeledPrice[] $prices
* List of price portions
*/

class ShippingOption extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'id' => [
				'type' => ['string'],
				'required' => true,
			],
			'title' => [
				'type' => ['string'],
				'required' => true,
			],
			'prices' => [
				'type' => [LabeledPrice::class],
				'isArray' => true,
				'required' => true,
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
	* @return string
	*/

	public function getTitle(): mixed
	{
		return $this->getFieldValue('title');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setTitle(mixed $value): static
	{
		return $this->setFieldValue('title', $value);
	}

	/**
	* @return Base\ArrayObject|LabeledPrice[]
	*/

	public function getPrices(): mixed
	{
		return $this->getFieldValue('prices');
	}

	/**
	* @param Base\ArrayObject|LabeledPrice[] $value
	* @return static
	*/

	public function setPrices(mixed $value): static
	{
		return $this->setFieldValue('prices', $value);
	}

}