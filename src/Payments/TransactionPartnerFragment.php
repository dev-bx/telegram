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
 * Describes a withdrawal transaction with Fragment.
 *
 * @link https://core.telegram.org/bots/api#transactionpartnerfragment
 *
 * @property-read string|null $type Required. Type of the transaction partner, always “fragment”
 * @property-write string $type
 * @property-read RevenueWithdrawalState|null $withdrawalState Optional. State of the transaction if the transaction is outgoing
 * @property-write RevenueWithdrawalState|array<string, mixed> $withdrawalState
 */
class TransactionPartnerFragment extends TransactionPartner
{
    /**
     * @return static
     * @throws Base\TelegramException
     */
    public static function create(mixed $value = null, bool $ignoreUnknownFields = false): ?Base\BaseType
    {
        return static::createInstance($value, $ignoreUnknownFields);
    }

    public static function getFields(): array
    {
        return [
            'type' => [
                'type' => ['string'],
                'value' => 'fragment',
                'required' => true,
            ],
            'withdrawal_state' => [
                'type' => [RevenueWithdrawalState::class],
            ],
        ];
    }

    /**
     * Required. Type of the transaction partner, always “fragment”
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getType(): mixed
    {
        return $this->getFieldValue('type');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setType(mixed $value): static
    {
        return $this->setFieldValue('type', $value);
    }

    /**
     * Optional. State of the transaction if the transaction is outgoing
     *
     * @return RevenueWithdrawalState|null
     * @throws Base\TelegramException
     */
    public function getWithdrawalState(): mixed
    {
        return $this->getFieldValue('withdrawal_state');
    }

    /**
     * @param RevenueWithdrawalState|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setWithdrawalState(mixed $value): static
    {
        return $this->setFieldValue('withdrawal_state', $value);
    }
}
