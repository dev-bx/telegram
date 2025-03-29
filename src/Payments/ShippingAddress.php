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
 * This object represents a shipping address.
 * @property string $countryCode
 * Two-letter [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country code
 * @property string $state
 * State, if applicable
 * @property string $city
 * City
 * @property string $streetLine1
 * First line for the address
 * @property string $streetLine2
 * Second line for the address
 * @property string $postCode
 * Address post code
 */
class ShippingAddress extends Base\BaseType
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
				'required' => true,
			],
			'city' => [
				'type' => ['string'],
				'required' => true,
			],
			'street_line1' => [
				'type' => ['string'],
				'required' => true,
			],
			'street_line2' => [
				'type' => ['string'],
				'required' => true,
			],
			'post_code' => [
				'type' => ['string'],
				'required' => true,
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

	public function getStreetLine1(): mixed
	{
		return $this->getFieldValue('street_line1');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setStreetLine1(mixed $value): static
	{
		return $this->setFieldValue('street_line1', $value);
	}

	/**
	* @return string
	*/

	public function getStreetLine2(): mixed
	{
		return $this->getFieldValue('street_line2');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setStreetLine2(mixed $value): static
	{
		return $this->setFieldValue('street_line2', $value);
	}

	/**
	* @return string
	*/

	public function getPostCode(): mixed
	{
		return $this->getFieldValue('post_code');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setPostCode(mixed $value): static
	{
		return $this->setFieldValue('post_code', $value);
	}

}