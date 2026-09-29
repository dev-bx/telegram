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
 * This object represents the scope to which bot commands are applied. Currently, the following 7 scopes are supported:
 *
 * - `BotCommandScopeDefault`
 * - `BotCommandScopeAllPrivateChats`
 * - `BotCommandScopeAllGroupChats`
 * - `BotCommandScopeAllChatAdministrators`
 * - `BotCommandScopeChat`
 * - `BotCommandScopeChatAdministrators`
 * - `BotCommandScopeChatMember`
 *
 * @link https://core.telegram.org/bots/api#botcommandscope
 *
 * Объединение: create() возвращает подходящий вариант — `BotCommandScopeDefault`, `BotCommandScopeAllPrivateChats`, `BotCommandScopeAllGroupChats`, `BotCommandScopeAllChatAdministrators`, `BotCommandScopeChat`, `BotCommandScopeChatAdministrators`, `BotCommandScopeChatMember`.
 */
class BotCommandScope extends Base\BaseType
{
    /**
     * @return list<class-string<BotCommandScopeDefault|BotCommandScopeAllPrivateChats|BotCommandScopeAllGroupChats|BotCommandScopeAllChatAdministrators|BotCommandScopeChat|BotCommandScopeChatAdministrators|BotCommandScopeChatMember>>
     */
    public static function getRelations(): array
    {
        return [
            BotCommandScopeDefault::class,
            BotCommandScopeAllPrivateChats::class,
            BotCommandScopeAllGroupChats::class,
            BotCommandScopeAllChatAdministrators::class,
            BotCommandScopeChat::class,
            BotCommandScopeChatAdministrators::class,
            BotCommandScopeChatMember::class,
        ];
    }

    /**
     * Создаёт вариант объединения, подходящий под значение (по полю-дискриминатору и обязательным полям).
     *
     * @return BotCommandScopeDefault|BotCommandScopeAllPrivateChats|BotCommandScopeAllGroupChats|BotCommandScopeAllChatAdministrators|BotCommandScopeChat|BotCommandScopeChatAdministrators|BotCommandScopeChatMember|null null — значение не подошло ни одному варианту (только в нестрогом режиме)
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
