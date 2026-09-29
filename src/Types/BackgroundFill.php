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
 * This object describes the way a background is filled based on the selected colors. Currently, it can be one of
 *
 * - `BackgroundFillSolid`
 * - `BackgroundFillGradient`
 * - `BackgroundFillFreeformGradient`
 *
 * @link https://core.telegram.org/bots/api#backgroundfill
 *
 * Объединение: create() возвращает подходящий вариант — `BackgroundFillSolid`, `BackgroundFillGradient`, `BackgroundFillFreeformGradient`.
 */
class BackgroundFill extends Base\BaseType
{
    /**
     * @return list<class-string<BackgroundFillSolid|BackgroundFillGradient|BackgroundFillFreeformGradient>>
     */
    public static function getRelations(): array
    {
        return [
            BackgroundFillSolid::class,
            BackgroundFillGradient::class,
            BackgroundFillFreeformGradient::class,
        ];
    }

    /**
     * Создаёт вариант объединения, подходящий под значение (по полю-дискриминатору и обязательным полям).
     *
     * @return BackgroundFillSolid|BackgroundFillGradient|BackgroundFillFreeformGradient|null null — значение не подошло ни одному варианту (только в нестрогом режиме)
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
