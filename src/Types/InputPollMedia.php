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
 * This object represents the content of a poll description or a quiz explanation to be sent. It should be one of
 *
 * - `InputMediaAnimation`
 * - `InputMediaAudio`
 * - `InputMediaDocument`
 * - `InputMediaLivePhoto`
 * - `InputMediaLocation`
 * - `InputMediaPhoto`
 * - `InputMediaVenue`
 * - `InputMediaVideo`
 *
 * @link https://core.telegram.org/bots/api#inputpollmedia
 *
 * Объединение: create() возвращает подходящий вариант — `InputMediaAnimation`, `InputMediaAudio`, `InputMediaDocument`, `InputMediaLivePhoto`, `InputMediaLocation`, `InputMediaPhoto`, `InputMediaVenue`, `InputMediaVideo`.
 */
class InputPollMedia extends Base\BaseType
{
    /**
     * @return list<class-string<InputMediaAnimation|InputMediaAudio|InputMediaDocument|InputMediaLivePhoto|InputMediaLocation|InputMediaPhoto|InputMediaVenue|InputMediaVideo>>
     */
    public static function getRelations(): array
    {
        return [
            InputMediaAnimation::class,
            InputMediaAudio::class,
            InputMediaDocument::class,
            InputMediaLivePhoto::class,
            InputMediaLocation::class,
            InputMediaPhoto::class,
            InputMediaVenue::class,
            InputMediaVideo::class,
        ];
    }

    /**
     * Создаёт вариант объединения, подходящий под значение (по полю-дискриминатору и обязательным полям).
     *
     * @return InputMediaAnimation|InputMediaAudio|InputMediaDocument|InputMediaLivePhoto|InputMediaLocation|InputMediaPhoto|InputMediaVenue|InputMediaVideo|null null — значение не подошло ни одному варианту (только в нестрогом режиме)
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
