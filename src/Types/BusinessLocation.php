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
 * Contains information about the location of a Telegram Business account.
 * @property string $address
 * Address of the business
 * @property Location $location
 * *Optional*. Location of the business
 */
class BusinessLocation extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'address' => [
				'type' => ['string'],
				'required' => true,
			],
			'location' => [
				'type' => [Location::class],
			],
		];
	}
	/**
	* @return string
	*/

	public function getAddress(): mixed
	{
		return $this->getFieldValue('address');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setAddress(mixed $value): static
	{
		return $this->setFieldValue('address', $value);
	}

	/**
	* @return Location
	*/

	public function getLocation(): mixed
	{
		return $this->getFieldValue('location');
	}

	/**
	* @param Location $value
	* @return static
	*/

	public function setLocation(mixed $value): static
	{
		return $this->setFieldValue('location', $value);
	}

}