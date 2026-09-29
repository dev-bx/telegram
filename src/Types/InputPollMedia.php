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
 * This object represents the content of a poll description or a quiz explanation to be sent. It should be one of
 */
class InputPollMedia extends Base\BaseType
{
	public static function getRelations(): array
	{
		return [
			InputMediaAnimation::class,
			InputMediaAudio::class,
			InputMediaDocument::class,
			InputMediaLivePhoto::class,
			InputMediaLocation::class,
			InputMediaPhoto::class,
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