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
 * Describes a Telegram Star transaction. Note that if the buyer initiates a chargeback with the payment provider from whom they acquired Stars (e.g., Apple, Google) following this transaction, the refunded Stars will be deducted from the bot's balance. This is outside of Telegram's control.
 *
 * @link https://core.telegram.org/bots/api#startransaction
 *
 * @property-read string|null $id Required. Unique identifier of the transaction. Coincides with the identifier of the original transaction for refund transactions. Coincides with *SuccessfulPayment.telegram_payment_charge_id* for successful incoming payments from users.
 * @property-write string $id
 * @property-read int|null $amount Required. Integer amount of Telegram Stars transferred by the transaction
 * @property-write int $amount
 * @property-read int|null $nanostarAmount Optional. The number of 1/1000000000 shares of Telegram Stars transferred by the transaction; from 0 to 999999999
 * @property-write int $nanostarAmount
 * @property-read int|null $date Required. Date the transaction was created in Unix time
 * @property-write int $date
 * @property-read TransactionPartner|null $source Optional. Source of an incoming transaction (e.g., a user purchasing goods or services, Fragment refunding a failed withdrawal). Only for incoming transactions.
 * @property-write TransactionPartner|array<string, mixed> $source
 * @property-read TransactionPartner|null $receiver Optional. Receiver of an outgoing transaction (e.g., a user for a purchase refund, Fragment for a withdrawal). Only for outgoing transactions.
 * @property-write TransactionPartner|array<string, mixed> $receiver
 */
class StarTransaction extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'amount' => [
                'type' => ['int'],
                'required' => true,
            ],
            'nanostar_amount' => [
                'type' => ['int'],
            ],
            'date' => [
                'type' => ['int'],
                'required' => true,
            ],
            'source' => [
                'type' => [TransactionPartner::class],
            ],
            'receiver' => [
                'type' => [TransactionPartner::class],
            ],
        ];
    }

    /**
     * Required. Unique identifier of the transaction. Coincides with the identifier of the original transaction for refund transactions. Coincides with *SuccessfulPayment.telegram_payment_charge_id* for successful incoming payments from users.
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
     * Required. Integer amount of Telegram Stars transferred by the transaction
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

    /**
     * Optional. The number of 1/1000000000 shares of Telegram Stars transferred by the transaction; from 0 to 999999999
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getNanostarAmount(): mixed
    {
        return $this->getFieldValue('nanostar_amount');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setNanostarAmount(mixed $value): static
    {
        return $this->setFieldValue('nanostar_amount', $value);
    }

    /**
     * Required. Date the transaction was created in Unix time
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getDate(): mixed
    {
        return $this->getFieldValue('date');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setDate(mixed $value): static
    {
        return $this->setFieldValue('date', $value);
    }

    /**
     * Optional. Source of an incoming transaction (e.g., a user purchasing goods or services, Fragment refunding a failed withdrawal). Only for incoming transactions.
     *
     * @return TransactionPartner|null
     * @throws Base\TelegramException
     */
    public function getSource(): mixed
    {
        return $this->getFieldValue('source');
    }

    /**
     * @param TransactionPartner|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSource(mixed $value): static
    {
        return $this->setFieldValue('source', $value);
    }

    /**
     * Optional. Receiver of an outgoing transaction (e.g., a user for a purchase refund, Fragment for a withdrawal). Only for outgoing transactions.
     *
     * @return TransactionPartner|null
     * @throws Base\TelegramException
     */
    public function getReceiver(): mixed
    {
        return $this->getFieldValue('receiver');
    }

    /**
     * @param TransactionPartner|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setReceiver(mixed $value): static
    {
        return $this->setFieldValue('receiver', $value);
    }
}
