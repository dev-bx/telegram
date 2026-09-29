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
 * This object contains basic information about a refunded payment.
 *
 * @link https://core.telegram.org/bots/api#refundedpayment
 *
 * @property-read string|null $currency Required. Three-letter ISO 4217 [currency](https://core.telegram.org/bots/payments#supported-currencies) code, or “XTR” for payments in [Telegram Stars](https://t.me/BotNews/90). Currently, always “XTR”.
 * @property-write string $currency
 * @property-read int|null $totalAmount Required. Total refunded price in the *smallest units* of the currency (integer, **not** float/double). For example, for a price of `US$ 1.45`, `total_amount = 145`. See the *exp* parameter in [currencies.json](https://core.telegram.org/bots/payments/currencies.json), it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
 * @property-write int $totalAmount
 * @property-read string|null $invoicePayload Required. Bot-specified invoice payload
 * @property-write string $invoicePayload
 * @property-read string|null $telegramPaymentChargeId Required. Telegram payment identifier
 * @property-write string $telegramPaymentChargeId
 * @property-read string|null $providerPaymentChargeId Optional. Provider payment identifier
 * @property-write string $providerPaymentChargeId
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
     * Required. Three-letter ISO 4217 [currency](https://core.telegram.org/bots/payments#supported-currencies) code, or “XTR” for payments in [Telegram Stars](https://t.me/BotNews/90). Currently, always “XTR”.
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
     * Required. Total refunded price in the *smallest units* of the currency (integer, **not** float/double). For example, for a price of `US$ 1.45`, `total_amount = 145`. See the *exp* parameter in [currencies.json](https://core.telegram.org/bots/payments/currencies.json), it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
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
     * Optional. Provider payment identifier
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
