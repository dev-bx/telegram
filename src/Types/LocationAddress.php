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
 * Describes the physical address of a location.
 * @property string $countryCode
 * The two-letter ISO 3166-1 alpha-2 country code of the country where the location is located
 * @property string $state
 * *Optional*. State of the location
 * @property string $city
 * *Optional*. City of the location
 * @property string $street
 * *Optional*. Street address of the location
 */
class LocationAddress extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'country_code' => [
				'type' => ['string'],
				'required' => true,
			],
			'state' => [
				'type' => ['string'],
			],
			'city' => [
				'type' => ['string'],
			],
			'street' => [
				'type' => ['string'],
			],
		];
	}
	/**
	* @return string
	*/

	public function getCountryCode(): mixed
	{
		return $this->getFieldValue('country_code');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setCountryCode(mixed $value): static
	{
		return $this->setFieldValue('country_code', $value);
	}

	/**
	* @return string
	*/

	public function getState(): mixed
	{
		return $this->getFieldValue('state');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setState(mixed $value): static
	{
		return $this->setFieldValue('state', $value);
	}

	/**
	* @return string
	*/

	public function getCity(): mixed
	{
		return $this->getFieldValue('city');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setCity(mixed $value): static
	{
		return $this->setFieldValue('city', $value);
	}

	/**
	* @return string
	*/

	public function getStreet(): mixed
	{
		return $this->getFieldValue('street');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setStreet(mixed $value): static
	{
		return $this->setFieldValue('street', $value);
	}

}