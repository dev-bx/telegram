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
 * This object represents the content of a poll option to be sent. It should be one of
 */
class InputPollOptionMedia extends Base\BaseType
{
	public static function getRelations(): array
	{
		return [
			InputMediaAnimation::class,
			InputMediaLink::class,
			InputMediaLivePhoto::class,
			InputMediaLocation::class,
			InputMediaPhoto::class,
			InputMediaSticker::class,
			InputMediaVenue::class,
			InputMediaVideo::class,
		];
	}
	public static function getFields(): array
	{
		return [

		];
	}
}