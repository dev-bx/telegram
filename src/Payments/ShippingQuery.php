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
use DevBX\Telegram\Types;


/**
 * This object contains information about an incoming shipping query.
 * @property string $id
 * Unique query identifier
 * @property Types\User $from
 * User who sent the query
 * @property string $invoicePayload
 * Bot-specified invoice payload
 * @property ShippingAddress $shippingAddress
 * User specified shipping address
 */
class ShippingQuery extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'id' => [
				'type' => ['string'],
				'required' => true,
			],
			'from' => [
				'type' => [Types\User::class],
				'required' => true,
			],
			'invoice_payload' => [
				'type' => ['string'],
				'required' => true,
			],
			'shipping_address' => [
				'type' => [ShippingAddress::class],
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
	* @return Types\User
	*/

	public function getFrom(): mixed
	{
		return $this->getFieldValue('from');
	}

	/**
	* @param Types\User $value
	* @return static
	*/

	public function setFrom(mixed $value): static
	{
		return $this->setFieldValue('from', $value);
	}

	/**
	* @return string
	*/

	public function getInvoicePayload(): mixed
	{
		return $this->getFieldValue('invoice_payload');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setInvoicePayload(mixed $value): static
	{
		return $this->setFieldValue('invoice_payload', $value);
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