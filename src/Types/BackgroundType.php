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
 * This object describes the type of a background. Currently, it can be one of
 */
class BackgroundType extends Base\BaseType
{
	public static function getRelations(): array
	{
		return [
			BackgroundTypeFill::class,
			BackgroundTypeWallpaper::class,
			BackgroundTypePattern::class,
			BackgroundTypeChatTheme::class,
		];
	}
	public static function getFields(): array
	{
		return [

		];
	}
}