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
 * This object describes the source of a chat boost. It can be one of
 *
 * - `ChatBoostSourcePremium`
 * - `ChatBoostSourceGiftCode`
 * - `ChatBoostSourceGiveaway`
 *
 * @link https://core.telegram.org/bots/api#chatboostsource
 *
 * Объединение: create() возвращает подходящий вариант — `ChatBoostSourcePremium`, `ChatBoostSourceGiftCode`, `ChatBoostSourceGiveaway`.
 */
class ChatBoostSource extends Base\BaseType
{
    /**
     * @return list<class-string<ChatBoostSourcePremium|ChatBoostSourceGiftCode|ChatBoostSourceGiveaway>>
     */
    public static function getRelations(): array
    {
        return [
            ChatBoostSourcePremium::class,
            ChatBoostSourceGiftCode::class,
            ChatBoostSourceGiveaway::class,
        ];
    }

    /**
     * Создаёт вариант объединения, подходящий под значение (по полю-дискриминатору и обязательным полям).
     *
     * @return ChatBoostSourcePremium|ChatBoostSourceGiftCode|ChatBoostSourceGiveaway|null null — значение не подошло ни одному варианту (только в нестрогом режиме)
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
