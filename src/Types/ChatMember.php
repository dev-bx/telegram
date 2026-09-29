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
 * This object contains information about one member of a chat. Currently, the following 6 types of chat members are supported:
 *
 * - `ChatMemberOwner`
 * - `ChatMemberAdministrator`
 * - `ChatMemberMember`
 * - `ChatMemberRestricted`
 * - `ChatMemberLeft`
 * - `ChatMemberBanned`
 *
 * @link https://core.telegram.org/bots/api#chatmember
 *
 * Объединение: create() возвращает подходящий вариант — `ChatMemberOwner`, `ChatMemberAdministrator`, `ChatMemberMember`, `ChatMemberRestricted`, `ChatMemberLeft`, `ChatMemberBanned`.
 */
class ChatMember extends Base\BaseType
{
    /**
     * @return list<class-string<ChatMemberOwner|ChatMemberAdministrator|ChatMemberMember|ChatMemberRestricted|ChatMemberLeft|ChatMemberBanned>>
     */
    public static function getRelations(): array
    {
        return [
            ChatMemberOwner::class,
            ChatMemberAdministrator::class,
            ChatMemberMember::class,
            ChatMemberRestricted::class,
            ChatMemberLeft::class,
            ChatMemberBanned::class,
        ];
    }

    /**
     * Создаёт вариант объединения, подходящий под значение (по полю-дискриминатору и обязательным полям).
     *
     * @return ChatMemberOwner|ChatMemberAdministrator|ChatMemberMember|ChatMemberRestricted|ChatMemberLeft|ChatMemberBanned|null null — значение не подошло ни одному варианту (только в нестрогом режиме)
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
