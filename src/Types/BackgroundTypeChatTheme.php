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
 * The background is taken directly from a built-in chat theme.
 * @property string $type
 * Type of the background, always “chat\_theme”
 * @property string $themeName
 * Name of the chat theme, which is usually an emoji
 */
class BackgroundTypeChatTheme extends BackgroundType
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => 'chat_theme',
				'required' => true,
			],
			'theme_name' => [
				'type' => ['string'],
				'required' => true,
			],
		];
	}
	/**
	* @return string
	*/

	public function getType(): mixed
	{
		return $this->getFieldValue('type');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setType(mixed $value): static
	{
		return $this->setFieldValue('type', $value);
	}

	/**
	* @return string
	*/

	public function getThemeName(): mixed
	{
		return $this->getFieldValue('theme_name');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setThemeName(mixed $value): static
	{
		return $this->setFieldValue('theme_name', $value);
	}

}