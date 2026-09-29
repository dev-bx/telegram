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

namespace DevBX\Telegram\Types;

use DevBX\Telegram\Base;

/**
 * Describes the price of a suggested post.
 *
 * @link https://core.telegram.org/bots/api#suggestedpostprice
 *
 * @property-read string|null $currency Required. Currency in which the post will be paid. Currently, must be one of “XTR” for Telegram Stars or “TON” for TON grams.
 * @property-write string $currency
 * @property-read int|null $amount Required. The amount of the currency that will be paid for the post in the *smallest units* of the currency, i.e. Telegram Stars or nanograms. Currently, price in Telegram Stars must be between 5 and 100000, and price in nanograms must be between 10000000 and 10000000000000.
 * @property-write int $amount
 */
class SuggestedPostPrice extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'currency' => [
                'type' => ['string'],
                'required' => true,
            ],
            'amount' => [
                'type' => ['int'],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Currency in which the post will be paid. Currently, must be one of “XTR” for Telegram Stars or “TON” for TON grams.
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
     * Required. The amount of the currency that will be paid for the post in the *smallest units* of the currency, i.e. Telegram Stars or nanograms. Currently, price in Telegram Stars must be between 5 and 100000, and price in nanograms must be between 10000000 and 10000000000000.
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getAmount(): mixed
    {
        return $this->getFieldValue('amount');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAmount(mixed $value): static
    {
        return $this->setFieldValue('amount', $value);
    }
}
