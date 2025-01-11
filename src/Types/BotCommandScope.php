<?php

/**
 * @project Telegram Bot Api
 * @author Kubeev Ruslan <ruslan@dev-bx.ru>
 * @copyright 2025 Kubeev Ruslan
 * @license MIT
 * @link https://dev-bx.ru/
 *
 * This file is part of the project Telegram Bot Api Class Generator.
 */

namespace DevBX\Telegram\Types;

use DevBX\Telegram\Base;


/**
* This object represents the scope to which bot commands are applied. Currently, the following 7 scopes are supported:
*/

class BotCommandScope extends Base\BaseType
{
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
	public static function getFields(): array
	{
		return [

		];
	}
}