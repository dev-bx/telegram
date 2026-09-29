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
use DevBX\Telegram\Types;

/**
 * This object contains information about an incoming pre-checkout query.
 *
 * @link https://core.telegram.org/bots/api#precheckoutquery
 *
 * @property-read string|null $id Required. Unique query identifier
 * @property-write string $id
 * @property-read Types\User|null $from Required. User who sent the query
 * @property-write Types\User|array<string, mixed> $from
 * @property-read string|null $currency Required. Three-letter ISO 4217 [currency](https://core.telegram.org/bots/payments#supported-currencies) code, or “XTR” for payments in [Telegram Stars](https://t.me/BotNews/90)
 * @property-write string $currency
 * @property-read int|null $totalAmount Required. Total price in the *smallest units* of the currency (integer, **not** float/double). For example, for a price of `US$ 1.45` pass `amount = 145`. See the *exp* parameter in [currencies.json](https://core.telegram.org/bots/payments/currencies.json), it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
 * @property-write int $totalAmount
 * @property-read string|null $invoicePayload Required. Bot-specified invoice payload
 * @property-write string $invoicePayload
 * @property-read string|null $shippingOptionId Optional. Identifier of the shipping option chosen by the user
 * @property-write string $shippingOptionId
 * @property-read OrderInfo|null $orderInfo Optional. Order information provided by the user
 * @property-write OrderInfo|array<string, mixed> $orderInfo
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
     * Required. Unique query identifier
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getId(): mixed
    {
        return $this->getFieldValue('id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setId(mixed $value): static
    {
        return $this->setFieldValue('id', $value);
    }

    /**
     * Required. User who sent the query
     *
     * @return Types\User|null
     * @throws Base\TelegramException
     */
    public function getFrom(): mixed
    {
        return $this->getFieldValue('from');
    }

    /**
     * @param Types\User|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setFrom(mixed $value): static
    {
        return $this->setFieldValue('from', $value);
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
}
