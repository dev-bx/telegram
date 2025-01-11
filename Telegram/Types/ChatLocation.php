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
* Represents a location to which a chat is connected.
* @property Location $location
* The location to which the supergroup is connected. Can't be a live location.
* @property string $address
* Location address; 1-64 characters, as defined by the chat owner
*/

class ChatLocation extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'location' => [
				'type' => [Location::class],
				'required' => true,
			],
			'address' => [
				'type' => ['string'],
				'required' => true,
			],
		];
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

}