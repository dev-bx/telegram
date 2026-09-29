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
 * This object describes the origin of a message. It can be one of
 *
 * - `MessageOriginUser`
 * - `MessageOriginHiddenUser`
 * - `MessageOriginChat`
 * - `MessageOriginChannel`
 *
 * @link https://core.telegram.org/bots/api#messageorigin
 *
 * Объединение: create() возвращает подходящий вариант — `MessageOriginUser`, `MessageOriginHiddenUser`, `MessageOriginChat`, `MessageOriginChannel`.
 */
class MessageOrigin extends Base\BaseType
{
    /**
     * @return list<class-string<MessageOriginUser|MessageOriginHiddenUser|MessageOriginChat|MessageOriginChannel>>
     */
    public static function getRelations(): array
    {
        return [
            MessageOriginUser::class,
            MessageOriginHiddenUser::class,
            MessageOriginChat::class,
            MessageOriginChannel::class,
        ];
    }

    /**
     * Создаёт вариант объединения, подходящий под значение (по полю-дискриминатору и обязательным полям).
     *
     * @return MessageOriginUser|MessageOriginHiddenUser|MessageOriginChat|MessageOriginChannel|null null — значение не подошло ни одному варианту (только в нестрогом режиме)
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
