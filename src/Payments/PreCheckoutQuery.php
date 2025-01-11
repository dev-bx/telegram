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
* This object contains information about an incoming pre-checkout query.
* @property string $id
* Unique query identifier
* @property Types\User $from
* User who sent the query
* @property string $currency
* Three-letter ISO 4217 [currency](/bots/payments#supported-currencies) code, or “XTR” for payments in [Telegram Stars](https://t.me/BotNews/90)
* @property int $totalAmount
* Total price in the *smallest units* of the currency (integer, **not** float/double). For example, for a price of `US$ 1.45` pass `amount = 145`. See the *exp* parameter in [currencies.json](/bots/payments/currencies.json), it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
* @property string $invoicePayload
* Bot-specified invoice payload
* @property string $shippingOptionId
* *Optional*. Identifier of the shipping option chosen by the user
* @property OrderInfo $orderInfo
* *Optional*. Order information provided by the user
*/

class PreCheckoutQuery extends Base\BaseType
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
			'currency' => [
				'type' => ['string'],
				'required' => true,
			],
			'total_amount' => [
				'type' => ['int'],
				'required' => true,
			],
			'invoice_payload' => [
				'type' => ['string'],
				'required' => true,
			],
			'shipping_option_id' => [
				'type' => ['string'],
			],
			'order_info' => [
				'type' => [OrderInfo::class],
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

	public function getCurrency(): mixed
	{
		return $this->getFieldValue('currency');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setCurrency(mixed $value): static
	{
		return $this->setFieldValue('currency', $value);
	}

	/**
	* @return int
	*/

	public function getTotalAmount(): mixed
	{
		return $this->getFieldValue('total_amount');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setTotalAmount(mixed $value): static
	{
		return $this->setFieldValue('total_amount', $value);
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
	* @return string
	*/

	public function getShippingOptionId(): mixed
	{
		return $this->getFieldValue('shipping_option_id');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setShippingOptionId(mixed $value): static
	{
		return $this->setFieldValue('shipping_option_id', $value);
	}

	/**
	* @return OrderInfo
	*/

	public function getOrderInfo(): mixed
	{
		return $this->getFieldValue('order_info');
	}

	/**
	* @param OrderInfo $value
	* @return static
	*/

	public function setOrderInfo(mixed $value): static
	{
		return $this->setFieldValue('order_info', $value);
	}

}