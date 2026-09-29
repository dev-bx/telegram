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
 * This object describes the paid media to be sent. Currently, it can be one of
 *
 * - `InputPaidMediaLivePhoto`
 * - `InputPaidMediaPhoto`
 * - `InputPaidMediaVideo`
 *
 * @link https://core.telegram.org/bots/api#inputpaidmedia
 *
 * Объединение: create() возвращает подходящий вариант — `InputPaidMediaLivePhoto`, `InputPaidMediaPhoto`, `InputPaidMediaVideo`.
 */
class InputPaidMedia extends Base\BaseType
{
    /**
     * @return list<class-string<InputPaidMediaLivePhoto|InputPaidMediaPhoto|InputPaidMediaVideo>>
     */
    public static function getRelations(): array
    {
        return [
            InputPaidMediaLivePhoto::class,
            InputPaidMediaPhoto::class,
            InputPaidMediaVideo::class,
        ];
    }

    /**
     * Создаёт вариант объединения, подходящий под значение (по полю-дискриминатору и обязательным полям).
     *
     * @return InputPaidMediaLivePhoto|InputPaidMediaPhoto|InputPaidMediaVideo|null null — значение не подошло ни одному варианту (только в нестрогом режиме)
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
