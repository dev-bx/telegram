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
 * Contains a list of Telegram Star transactions.
 *
 * @link https://core.telegram.org/bots/api#startransactions
 *
 * @property-read Base\ArrayObject<StarTransaction> $transactions Required. The list of transactions
 * @property-write list<StarTransaction|array<string, mixed>>|Base\ArrayObject<StarTransaction> $transactions
 */
class StarTransactions extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'transactions' => [
                'type' => [StarTransaction::class],
                'isArray' => true,
                'required' => true,
            ],
        ];
    }

    /**
     * Required. The list of transactions
     *
     * @return Base\ArrayObject<StarTransaction>
     * @throws Base\TelegramException
     */
    public function getTransactions(): mixed
    {
        return $this->getFieldValue('transactions');
    }

    /**
     * @param list<StarTransaction|array<string, mixed>>|Base\ArrayObject<StarTransaction> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setTransactions(mixed $value): static
    {
        return $this->setFieldValue('transactions', $value);
    }
}
