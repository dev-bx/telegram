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
 * This object represents a chat background.
 * @property BackgroundType|BackgroundTypeFill|BackgroundTypeWallpaper|BackgroundTypePattern|BackgroundTypeChatTheme $type
 * Type of the background
 */
class ChatBackground extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => [BackgroundType::class],
				'required' => true,
			],
		];
	}
	/**
	* @return BackgroundType|BackgroundTypeFill|BackgroundTypeWallpaper|BackgroundTypePattern|BackgroundTypeChatTheme
	*/

	public function getType(): mixed
	{
		return $this->getFieldValue('type');
	}

	/**
	* @param BackgroundType|BackgroundTypeFill|BackgroundTypeWallpaper|BackgroundTypePattern|BackgroundTypeChatTheme $value
	* @return static
	*/

	public function setType(mixed $value): static
	{
		return $this->setFieldValue('type', $value);
	}

}