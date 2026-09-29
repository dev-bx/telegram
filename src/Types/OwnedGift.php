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
 * This object describes a gift received and owned by a user or a chat. Currently, it can be one of
 *
 * - `OwnedGiftRegular`
 * - `OwnedGiftUnique`
 *
 * @link https://core.telegram.org/bots/api#ownedgift
 *
 * Объединение: create() возвращает подходящий вариант — `OwnedGiftRegular`, `OwnedGiftUnique`.
 */
class OwnedGift extends Base\BaseType
{
    /**
     * @return list<class-string<OwnedGiftRegular|OwnedGiftUnique>>
     */
    public static function getRelations(): array
    {
        return [
            OwnedGiftRegular::class,
            OwnedGiftUnique::class,
        ];
    }

    /**
     * Создаёт вариант объединения, подходящий под значение (по полю-дискриминатору и обязательным полям).
     *
     * @return OwnedGiftRegular|OwnedGiftUnique|null null — значение не подошло ни одному варианту (только в нестрогом режиме)
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
