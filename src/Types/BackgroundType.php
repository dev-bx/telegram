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
 * This object describes the type of a background. Currently, it can be one of
 *
 * - `BackgroundTypeFill`
 * - `BackgroundTypeWallpaper`
 * - `BackgroundTypePattern`
 * - `BackgroundTypeChatTheme`
 *
 * @link https://core.telegram.org/bots/api#backgroundtype
 *
 * Объединение: create() возвращает подходящий вариант — `BackgroundTypeFill`, `BackgroundTypeWallpaper`, `BackgroundTypePattern`, `BackgroundTypeChatTheme`.
 */
class BackgroundType extends Base\BaseType
{
    /**
     * @return list<class-string<BackgroundTypeFill|BackgroundTypeWallpaper|BackgroundTypePattern|BackgroundTypeChatTheme>>
     */
    public static function getRelations(): array
    {
        return [
            BackgroundTypeFill::class,
            BackgroundTypeWallpaper::class,
            BackgroundTypePattern::class,
            BackgroundTypeChatTheme::class,
        ];
    }

    /**
     * Создаёт вариант объединения, подходящий под значение (по полю-дискриминатору и обязательным полям).
     *
     * @return BackgroundTypeFill|BackgroundTypeWallpaper|BackgroundTypePattern|BackgroundTypeChatTheme|null null — значение не подошло ни одному варианту (только в нестрогом режиме)
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
