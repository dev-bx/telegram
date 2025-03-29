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
 * This object contains information about one member of a chat. Currently, the following 6 types of chat members are supported:
 */
class ChatMember extends Base\BaseType
{
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
	public static function getFields(): array
	{
		return [

		];
	}
}