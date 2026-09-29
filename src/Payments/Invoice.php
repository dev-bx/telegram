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
 * This object contains basic information about an invoice.
 *
 * @link https://core.telegram.org/bots/api#invoice
 *
 * @property-read string|null $title Required. Product name
 * @property-write string $title
 * @property-read string|null $description Required. Product description
 * @property-write string $description
 * @property-read string|null $startParameter Required. Unique bot deep-linking parameter that can be used to generate this invoice
 * @property-write string $startParameter
 * @property-read string|null $currency Required. Three-letter ISO 4217 [currency](https://core.telegram.org/bots/payments#supported-currencies) code, or “XTR” for payments in [Telegram Stars](https://t.me/BotNews/90)
 * @property-write string $currency
 * @property-read int|null $totalAmount Required. Total price in the *smallest units* of the currency (integer, **not** float/double). For example, for a price of `US$ 1.45` pass `amount = 145`. See the *exp* parameter in [currencies.json](https://core.telegram.org/bots/payments/currencies.json), it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
 * @property-write int $totalAmount
 */
class Invoice extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'title' => [
                'type' => ['string'],
                'required' => true,
            ],
            'description' => [
                'type' => ['string'],
                'required' => true,
            ],
            'start_parameter' => [
                'type' => ['string'],
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
        ];
    }

    /**
     * Required. Product name
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getTitle(): mixed
    {
        return $this->getFieldValue('title');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setTitle(mixed $value): static
    {
        return $this->setFieldValue('title', $value);
    }

    /**
     * Required. Product description
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getDescription(): mixed
    {
        return $this->getFieldValue('description');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setDescription(mixed $value): static
    {
        return $this->setFieldValue('description', $value);
    }

    /**
     * Required. Unique bot deep-linking parameter that can be used to generate this invoice
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getStartParameter(): mixed
    {
        return $this->getFieldValue('start_parameter');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setStartParameter(mixed $value): static
    {
        return $this->setFieldValue('start_parameter', $value);
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
}
