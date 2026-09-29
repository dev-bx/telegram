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
 * This object describes paid media. Currently, it can be one of
 *
 * - `PaidMediaLivePhoto`
 * - `PaidMediaPhoto`
 * - `PaidMediaPreview`
 * - `PaidMediaVideo`
 *
 * @link https://core.telegram.org/bots/api#paidmedia
 *
 * Объединение: create() возвращает подходящий вариант — `PaidMediaLivePhoto`, `PaidMediaPhoto`, `PaidMediaPreview`, `PaidMediaVideo`.
 */
class PaidMedia extends Base\BaseType
{
    /**
     * @return list<class-string<PaidMediaLivePhoto|PaidMediaPhoto|PaidMediaPreview|PaidMediaVideo>>
     */
    public static function getRelations(): array
    {
        return [
            PaidMediaLivePhoto::class,
            PaidMediaPhoto::class,
            PaidMediaPreview::class,
            PaidMediaVideo::class,
        ];
    }

    /**
     * Создаёт вариант объединения, подходящий под значение (по полю-дискриминатору и обязательным полям).
     *
     * @return PaidMediaLivePhoto|PaidMediaPhoto|PaidMediaPreview|PaidMediaVideo|null null — значение не подошло ни одному варианту (только в нестрогом режиме)
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
