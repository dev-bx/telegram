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
 * This object represents one shipping option.
 *
 * @link https://core.telegram.org/bots/api#shippingoption
 *
 * @property-read string|null $id Required. Shipping option identifier
 * @property-write string $id
 * @property-read string|null $title Required. Option title
 * @property-write string $title
 * @property-read Base\ArrayObject<LabeledPrice> $prices Required. List of price portions
 * @property-write list<LabeledPrice|array<string, mixed>>|Base\ArrayObject<LabeledPrice> $prices
 */
class ShippingOption extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'title' => [
                'type' => ['string'],
                'required' => true,
            ],
            'prices' => [
                'type' => [LabeledPrice::class],
                'isArray' => true,
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Shipping option identifier
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
     * Required. Option title
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
     * Required. List of price portions
     *
     * @return Base\ArrayObject<LabeledPrice>
     * @throws Base\TelegramException
     */
    public function getPrices(): mixed
    {
        return $this->getFieldValue('prices');
    }

    /**
     * @param list<LabeledPrice|array<string, mixed>>|Base\ArrayObject<LabeledPrice> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPrices(mixed $value): static
    {
        return $this->setFieldValue('prices', $value);
    }
}
