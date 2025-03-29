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
 * This object represents information about an order.
 * @property string $name
 * *Optional*. User name
 * @property string $phoneNumber
 * *Optional*. User's phone number
 * @property string $email
 * *Optional*. User email
 * @property ShippingAddress $shippingAddress
 * *Optional*. User shipping address
 */
class OrderInfo extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'name' => [
				'type' => ['string'],
			],
			'phone_number' => [
				'type' => ['string'],
			],
			'email' => [
				'type' => ['string'],
			],
			'shipping_address' => [
				'type' => [ShippingAddress::class],
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
	* @return string
	*/

	public function getPhoneNumber(): mixed
	{
		return $this->getFieldValue('phone_number');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setPhoneNumber(mixed $value): static
	{
		return $this->setFieldValue('phone_number', $value);
	}

	/**
	* @return string
	*/

	public function getEmail(): mixed
	{
		return $this->getFieldValue('email');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setEmail(mixed $value): static
	{
		return $this->setFieldValue('email', $value);
	}

	/**
	* @return ShippingAddress
	*/

	public function getShippingAddress(): mixed
	{
		return $this->getFieldValue('shipping_address');
	}

	/**
	* @param ShippingAddress $value
	* @return static
	*/

	public function setShippingAddress(mixed $value): static
	{
		return $this->setFieldValue('shipping_address', $value);
	}

}