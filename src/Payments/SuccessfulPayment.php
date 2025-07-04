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
 * This object contains basic information about a successful payment. Note that if the buyer initiates a chargeback with the relevant payment provider following this transaction, the funds may be debited from your balance. This is outside of Telegram's control.
 * @property string $currency
 * Three-letter ISO 4217 [currency](/bots/payments#supported-currencies) code, or “XTR” for payments in [Telegram Stars](https://t.me/BotNews/90)
 * @property int $totalAmount
 * Total price in the *smallest units* of the currency (integer, **not** float/double). For example, for a price of `US$ 1.45` pass `amount = 145`. See the *exp* parameter in [currencies.json](/bots/payments/currencies.json), it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
 * @property string $invoicePayload
 * Bot-specified invoice payload
 * @property int $subscriptionExpirationDate
 * *Optional*. Expiration date of the subscription, in Unix time; for recurring payments only
 * @property bool $isRecurring
 * *Optional*. *True*, if the payment is a recurring payment for a subscription
 * @property bool $isFirstRecurring
 * *Optional*. *True*, if the payment is the first payment for a subscription
 * @property string $shippingOptionId
 * *Optional*. Identifier of the shipping option chosen by the user
 * @property OrderInfo $orderInfo
 * *Optional*. Order information provided by the user
 * @property string $telegramPaymentChargeId
 * Telegram payment identifier
 * @property string $providerPaymentChargeId
 * Provider payment identifier
 */
class SuccessfulPayment extends Base\BaseType
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
			'subscription_expiration_date' => [
				'type' => ['int'],
			],
			'is_recurring' => [
				'type' => ['bool'],
			],
			'is_first_recurring' => [
				'type' => ['bool'],
			],
			'shipping_option_id' => [
				'type' => ['string'],
			],
			'order_info' => [
				'type' => [OrderInfo::class],
			],
			'telegram_payment_charge_id' => [
				'type' => ['string'],
				'required' => true,
			],
			'provider_payment_charge_id' => [
				'type' => ['string'],
				'required' => true,
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
	* @return int
	*/

	public function getSubscriptionExpirationDate(): mixed
	{
		return $this->getFieldValue('subscription_expiration_date');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setSubscriptionExpirationDate(mixed $value): static
	{
		return $this->setFieldValue('subscription_expiration_date', $value);
	}

	/**
	* @return bool
	*/

	public function getIsRecurring(): mixed
	{
		return $this->getFieldValue('is_recurring');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setIsRecurring(mixed $value): static
	{
		return $this->setFieldValue('is_recurring', $value);
	}

	/**
	* @return bool
	*/

	public function getIsFirstRecurring(): mixed
	{
		return $this->getFieldValue('is_first_recurring');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setIsFirstRecurring(mixed $value): static
	{
		return $this->setFieldValue('is_first_recurring', $value);
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