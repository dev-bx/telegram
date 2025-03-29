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
 * If a menu button other than [MenuButtonDefault](#menubuttondefault) is set for a private chat, then it is applied in the chat. Otherwise the default menu button is applied. By default, the menu button opens the list of bot commands.
 */
class MenuButton extends Base\BaseType
{
	public static function getRelations(): array
	{
		return [
			MenuButtonCommands::class,
			MenuButtonWebApp::class,
			MenuButtonDefault::class,
		];
	}
	public static function getFields(): array
	{
		return [

		];
	}
}