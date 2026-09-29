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
 * This object describes the state of a revenue withdrawal operation. Currently, it can be one of
 *
 * - `RevenueWithdrawalStatePending`
 * - `RevenueWithdrawalStateSucceeded`
 * - `RevenueWithdrawalStateFailed`
 *
 * @link https://core.telegram.org/bots/api#revenuewithdrawalstate
 *
 * Объединение: create() возвращает подходящий вариант — `RevenueWithdrawalStatePending`, `RevenueWithdrawalStateSucceeded`, `RevenueWithdrawalStateFailed`.
 */
class RevenueWithdrawalState extends Base\BaseType
{
    /**
     * @return list<class-string<RevenueWithdrawalStatePending|RevenueWithdrawalStateSucceeded|RevenueWithdrawalStateFailed>>
     */
    public static function getRelations(): array
    {
        return [
            RevenueWithdrawalStatePending::class,
            RevenueWithdrawalStateSucceeded::class,
            RevenueWithdrawalStateFailed::class,
        ];
    }

    /**
     * Создаёт вариант объединения, подходящий под значение (по полю-дискриминатору и обязательным полям).
     *
     * @return RevenueWithdrawalStatePending|RevenueWithdrawalStateSucceeded|RevenueWithdrawalStateFailed|null null — значение не подошло ни одному варианту (только в нестрогом режиме)
     * @throws Base\TelegramException
     */
    public static function create(mixed $value = null, bool $ignoreUnknownFields = false): ?Base\BaseType
    {
        return static::createFromRelations(static::getRelations(), $value, $ignoreUnknownFields);
    }

    public static function getFields(): array
    {
        return [];
    }
}
