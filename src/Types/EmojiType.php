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
 * This object describes an emoji. Currently, it can be one of
 *
 * - `EmojiTypeEmoji`
 * - `EmojiTypeCustomEmoji`
 *
 * @link https://core.telegram.org/bots/api#emojitype
 *
 * Объединение: create() возвращает подходящий вариант — `EmojiTypeEmoji`, `EmojiTypeCustomEmoji`.
 */
class EmojiType extends Base\BaseType
{
    /**
     * @return list<class-string<EmojiTypeEmoji|EmojiTypeCustomEmoji>>
     */
    public static function getRelations(): array
    {
        return [
            EmojiTypeEmoji::class,
            EmojiTypeCustomEmoji::class,
        ];
    }

    /**
     * Создаёт вариант объединения, подходящий под значение (по полю-дискриминатору и обязательным полям).
     *
     * @return EmojiTypeEmoji|EmojiTypeCustomEmoji|null null — значение не подошло ни одному варианту (только в нестрогом режиме)
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
