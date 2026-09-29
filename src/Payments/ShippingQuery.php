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
 * This object contains information about an incoming shipping query.
 *
 * @link https://core.telegram.org/bots/api#shippingquery
 *
 * @property-read string|null $id Required. Unique query identifier
 * @property-write string $id
 * @property-read Types\User|null $from Required. User who sent the query
 * @property-write Types\User|array<string, mixed> $from
 * @property-read string|null $invoicePayload Required. Bot-specified invoice payload
 * @property-write string $invoicePayload
 * @property-read ShippingAddress|null $shippingAddress Required. User specified shipping address
 * @property-write ShippingAddress|array<string, mixed> $shippingAddress
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
     * Required. User specified shipping address
     *
     * @return ShippingAddress|null
     * @throws Base\TelegramException
     */
    public function getShippingAddress(): mixed
    {
        return $this->getFieldValue('shipping_address');
    }

    /**
     * @param ShippingAddress|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setShippingAddress(mixed $value): static
    {
        return $this->setFieldValue('shipping_address', $value);
    }
}
