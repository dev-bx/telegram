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
 * Describes the type of a clickable area on a story. Currently, it can be one of
 *
 * - `StoryAreaTypeLocation`
 * - `StoryAreaTypeSuggestedReaction`
 * - `StoryAreaTypeLink`
 * - `StoryAreaTypeWeather`
 * - `StoryAreaTypeUniqueGift`
 *
 * @link https://core.telegram.org/bots/api#storyareatype
 *
 * Объединение: create() возвращает подходящий вариант — `StoryAreaTypeLocation`, `StoryAreaTypeSuggestedReaction`, `StoryAreaTypeLink`, `StoryAreaTypeWeather`, `StoryAreaTypeUniqueGift`.
 */
class StoryAreaType extends Base\BaseType
{
    /**
     * @return list<class-string<StoryAreaTypeLocation|StoryAreaTypeSuggestedReaction|StoryAreaTypeLink|StoryAreaTypeWeather|StoryAreaTypeUniqueGift>>
     */
    public static function getRelations(): array
    {
        return [
            StoryAreaTypeLocation::class,
            StoryAreaTypeSuggestedReaction::class,
            StoryAreaTypeLink::class,
            StoryAreaTypeWeather::class,
            StoryAreaTypeUniqueGift::class,
        ];
    }

    /**
     * Создаёт вариант объединения, подходящий под значение (по полю-дискриминатору и обязательным полям).
     *
     * @return StoryAreaTypeLocation|StoryAreaTypeSuggestedReaction|StoryAreaTypeLink|StoryAreaTypeWeather|StoryAreaTypeUniqueGift|null null — значение не подошло ни одному варианту (только в нестрогом режиме)
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
