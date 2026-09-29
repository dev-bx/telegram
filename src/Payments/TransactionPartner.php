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
 * This object describes the source of a transaction, or its recipient for outgoing transactions. Currently, it can be one of
 *
 * - `TransactionPartnerUser`
 * - `TransactionPartnerChat`
 * - `TransactionPartnerAffiliateProgram`
 * - `TransactionPartnerFragment`
 * - `TransactionPartnerTelegramAds`
 * - `TransactionPartnerTelegramApi`
 * - `TransactionPartnerOther`
 *
 * @link https://core.telegram.org/bots/api#transactionpartner
 *
 * Объединение: create() возвращает подходящий вариант — `TransactionPartnerUser`, `TransactionPartnerChat`, `TransactionPartnerAffiliateProgram`, `TransactionPartnerFragment`, `TransactionPartnerTelegramAds`, `TransactionPartnerTelegramApi`, `TransactionPartnerOther`.
 */
class TransactionPartner extends Base\BaseType
{
    /**
     * @return list<class-string<TransactionPartnerUser|TransactionPartnerChat|TransactionPartnerAffiliateProgram|TransactionPartnerFragment|TransactionPartnerTelegramAds|TransactionPartnerTelegramApi|TransactionPartnerOther>>
     */
    public static function getRelations(): array
    {
        return [
            TransactionPartnerUser::class,
            TransactionPartnerChat::class,
            TransactionPartnerAffiliateProgram::class,
            TransactionPartnerFragment::class,
            TransactionPartnerTelegramAds::class,
            TransactionPartnerTelegramApi::class,
            TransactionPartnerOther::class,
        ];
    }

    /**
     * Создаёт вариант объединения, подходящий под значение (по полю-дискриминатору и обязательным полям).
     *
     * @return TransactionPartnerUser|TransactionPartnerChat|TransactionPartnerAffiliateProgram|TransactionPartnerFragment|TransactionPartnerTelegramAds|TransactionPartnerTelegramApi|TransactionPartnerOther|null null — значение не подошло ни одному варианту (только в нестрогом режиме)
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
