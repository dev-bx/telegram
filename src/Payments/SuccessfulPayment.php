<?php

/**
 * @project Telegram Bot Api
 * @author Kubeev Ruslan <ruslan@dev-bx.ru>
 * @copyright 2026 Kubeev Ruslan
 * @license MIT
 * @link https://dev-bx.ru/
 *
 * This file is part of the project Telegram Bot Api Class Generator.
 */

namespace DevBX\Telegram\Payments;

use DevBX\Telegram\Base;

/**
 * This object contains basic information about a successful payment. Note that if the buyer initiates a chargeback with the relevant payment provider following this transaction, the funds may be debited from your balance. This is outside of Telegram's control.
 *
 * @link https://core.telegram.org/bots/api#successfulpayment
 *
 * @property-read string|null $currency Required. Three-letter ISO 4217 [currency](https://core.telegram.org/bots/payments#supported-currencies) code, or “XTR” for payments in [Telegram Stars](https://t.me/BotNews/90)
 * @property-write string $currency
 * @property-read int|null $totalAmount Required. Total price in the *smallest units* of the currency (integer, **not** float/double). For example, for a price of `US$ 1.45` pass `amount = 145`. See the *exp* parameter in [currencies.json](https://core.telegram.org/bots/payments/currencies.json), it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
 * @property-write int $totalAmount
 * @property-read string|null $invoicePayload Required. Bot-specified invoice payload
 * @property-write string $invoicePayload
 * @property-read int|null $subscriptionExpirationDate Optional. Expiration date of the subscription, in Unix time; for recurring payments only
 * @property-write int $subscriptionExpirationDate
 * @property-read bool|null $isRecurring Optional. *True*, if the payment is a recurring payment for a subscription
 * @property-write bool $isRecurring
 * @property-read bool|null $isFirstRecurring Optional. *True*, if the payment is the first payment for a subscription
 * @property-write bool $isFirstRecurring
 * @property-read string|null $shippingOptionId Optional. Identifier of the shipping option chosen by the user
 * @property-write string $shippingOptionId
 * @property-read OrderInfo|null $orderInfo Optional. Order information provided by the user
 * @property-write OrderInfo|array<string, mixed> $orderInfo
 * @property-read string|null $telegramPaymentChargeId Required. Telegram payment identifier
 * @property-write string $telegramPaymentChargeId
 * @property-read string|null $providerPaymentChargeId Required. Provider payment identifier
 * @property-write string $providerPaymentChargeId
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
     * Required. Three-letter ISO 4217 [currency](https://core.telegram.org/bots/payments#supported-currencies) code, or “XTR” for payments in [Telegram Stars](https://t.me/BotNews/90)
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getCurrency(): mixed
    {
        return $this->getFieldValue('currency');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCurrency(mixed $value): static
    {
        return $this->setFieldValue('currency', $value);
    }

    /**
     * Required. Total price in the *smallest units* of the currency (integer, **not** float/double). For example, for a price of `US$ 1.45` pass `amount = 145`. See the *exp* parameter in [currencies.json](https://core.telegram.org/bots/payments/currencies.json), it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getTotalAmount(): mixed
    {
        return $this->getFieldValue('total_amount');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setTotalAmount(mixed $value): static
    {
        return $this->setFieldValue('total_amount', $value);
    }

    /**
     * Required. Bot-specified invoice payload
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getInvoicePayload(): mixed
    {
        return $this->getFieldValue('invoice_payload');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setInvoicePayload(mixed $value): static
    {
        return $this->setFieldValue('invoice_payload', $value);
    }

    /**
     * Optional. Expiration date of the subscription, in Unix time; for recurring payments only
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getSubscriptionExpirationDate(): mixed
    {
        return $this->getFieldValue('subscription_expiration_date');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSubscriptionExpirationDate(mixed $value): static
    {
        return $this->setFieldValue('subscription_expiration_date', $value);
    }

    /**
     * Optional. *True*, if the payment is a recurring payment for a subscription
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsRecurring(): mixed
    {
        return $this->getFieldValue('is_recurring');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsRecurring(mixed $value): static
    {
        return $this->setFieldValue('is_recurring', $value);
    }

    /**
     * Optional. *True*, if the payment is the first payment for a subscription
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsFirstRecurring(): mixed
    {
        return $this->getFieldValue('is_first_recurring');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsFirstRecurring(mixed $value): static
    {
        return $this->setFieldValue('is_first_recurring', $value);
    }

    /**
     * Optional. Identifier of the shipping option chosen by the user
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getShippingOptionId(): mixed
    {
        return $this->getFieldValue('shipping_option_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setShippingOptionId(mixed $value): static
    {
        return $this->setFieldValue('shipping_option_id', $value);
    }

    /**
     * Optional. Order information provided by the user
     *
     * @return OrderInfo|null
     * @throws Base\TelegramException
     */
    public function getOrderInfo(): mixed
    {
        return $this->getFieldValue('order_info');
    }

    /**
     * @param OrderInfo|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setOrderInfo(mixed $value): static
    {
        return $this->setFieldValue('order_info', $value);
    }

    /**
     * Required. Telegram payment identifier
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getTelegramPaymentChargeId(): mixed
    {
        return $this->getFieldValue('telegram_payment_charge_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setTelegramPaymentChargeId(mixed $value): static
    {
        return $this->setFieldValue('telegram_payment_charge_id', $value);
    }

    /**
     * Required. Provider payment identifier
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getProviderPaymentChargeId(): mixed
    {
        return $this->getFieldValue('provider_payment_charge_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setProviderPaymentChargeId(mixed $value): static
    {
        return $this->setFieldValue('provider_payment_charge_id', $value);
    }
}
