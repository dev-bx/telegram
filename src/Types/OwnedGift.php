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
 * This object describes a gift received and owned by a user or a chat. Currently, it can be one of
 */
class OwnedGift extends Base\BaseType
{
	public static function getRelations(): array
	{
		return [
			OwnedGiftRegular::class,
			OwnedGiftUnique::class,
		];
	}
	public static function getFields(): array
	{
		return [

		];
	}
}