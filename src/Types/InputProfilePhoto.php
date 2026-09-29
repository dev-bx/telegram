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
 * This object describes a profile photo to set. Currently, it can be one of
 *
 * - `InputProfilePhotoStatic`
 * - `InputProfilePhotoAnimated`
 *
 * @link https://core.telegram.org/bots/api#inputprofilephoto
 *
 * Объединение: create() возвращает подходящий вариант — `InputProfilePhotoStatic`, `InputProfilePhotoAnimated`.
 */
class InputProfilePhoto extends Base\BaseType
{
    /**
     * @return list<class-string<InputProfilePhotoStatic|InputProfilePhotoAnimated>>
     */
    public static function getRelations(): array
    {
        return [
            InputProfilePhotoStatic::class,
            InputProfilePhotoAnimated::class,
        ];
    }

    /**
     * Создаёт вариант объединения, подходящий под значение (по полю-дискриминатору и обязательным полям).
     *
     * @return InputProfilePhotoStatic|InputProfilePhotoAnimated|null null — значение не подошло ни одному варианту (только в нестрогом режиме)
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
