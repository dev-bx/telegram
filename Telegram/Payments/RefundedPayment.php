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
* This object contains basic information about a refunded payment.
* @property string $currency
* Three-letter ISO 4217 [currency](/bots/payments#supported-currencies) code, or “XTR” for payments in [Telegram Stars](https://t.me/BotNews/90). Currently, always “XTR”
* @property int $totalAmount
* Total refunded price in the *smallest units* of the currency (integer, **not** float/double). For example, for a price of `US$ 1.45`, `total_amount = 145`. See the *exp* parameter in [currencies.json](/bots/payments/currencies.json), it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
* @property string $invoicePayload
* Bot-specified invoice payload
* @property string $telegramPaymentChargeId
* Telegram payment identifier
* @property string $providerPaymentChargeId
* *Optional*. Provider payment identifier
*/

class RefundedPayment extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
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
			'telegram_payment_charge_id' => [
				'type' => ['string'],
				'required' => true,
			],
			'provider_payment_charge_id' => [
				'type' => ['string'],
			],
		];
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

	public function getTelegramPaymentChargeId(): mixed
	{
		return $this->getFieldValue('telegram_payment_charge_id');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setTelegramPaymentChargeId(mixed $value): static
	{
		return $this->setFieldValue('telegram_payment_charge_id', $value);
	}

	/**
	* @return string
	*/

	public function getProviderPaymentChargeId(): mixed
	{
		return $this->getFieldValue('provider_payment_charge_id');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setProviderPaymentChargeId(mixed $value): static
	{
		return $this->setFieldValue('provider_payment_charge_id', $value);
	}

}