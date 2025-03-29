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
 * This object describes the origin of a message. It can be one of
 */
class MessageOrigin extends Base\BaseType
{
	public static function getRelations(): array
	{
		return [
			MessageOriginUser::class,
			MessageOriginHiddenUser::class,
			MessageOriginChat::class,
			MessageOriginChannel::class,
		];
	}
	public static function getFields(): array
	{
		return [

		];
	}
}