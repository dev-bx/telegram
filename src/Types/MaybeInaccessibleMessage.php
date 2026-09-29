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
 * This object describes a message that can be inaccessible to the bot. It can be one of
 *
 * - `Message`
 * - `InaccessibleMessage`
 *
 * @link https://core.telegram.org/bots/api#maybeinaccessiblemessage
 *
 * Объединение: create() возвращает подходящий вариант — `Message`, `InaccessibleMessage`.
 */
class MaybeInaccessibleMessage extends Base\BaseType
{
    /**
     * @return list<class-string<Message|InaccessibleMessage>>
     */
    public static function getRelations(): array
    {
        return [
            Message::class,
            InaccessibleMessage::class,
        ];
    }

    /**
     * Создаёт вариант объединения, подходящий под значение (по полю-дискриминатору и обязательным полям).
     *
     * @return Message|InaccessibleMessage|null null — значение не подошло ни одному варианту (только в нестрогом режиме)
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
