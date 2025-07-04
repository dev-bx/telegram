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
 * Describes the type of a clickable area on a story. Currently, it can be one of
 */
class StoryAreaType extends Base\BaseType
{
	public static function getRelations(): array
	{
		return [
			StoryAreaTypeLocation::class,
			StoryAreaTypeSuggestedReaction::class,
			StoryAreaTypeLink::class,
			StoryAreaTypeWeather::class,
			StoryAreaTypeUniqueGift::class,
		];
	}
	public static function getFields(): array
	{
		return [

		];
	}
}