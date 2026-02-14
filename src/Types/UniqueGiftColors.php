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
 * This object contains information about the color scheme for a user's name, message replies and link previews based on a unique gift.
 * @property string $modelCustomEmojiId
 * Custom emoji identifier of the unique gift's model
 * @property string $symbolCustomEmojiId
 * Custom emoji identifier of the unique gift's symbol
 * @property int $lightThemeMainColor
 * Main color used in light themes; RGB format
 * @property int[] $lightThemeOtherColors
 * List of 1-3 additional colors used in light themes; RGB format
 * @property int $darkThemeMainColor
 * Main color used in dark themes; RGB format
 * @property int[] $darkThemeOtherColors
 * List of 1-3 additional colors used in dark themes; RGB format
 */
class UniqueGiftColors extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'model_custom_emoji_id' => [
				'type' => ['string'],
				'required' => true,
			],
			'symbol_custom_emoji_id' => [
				'type' => ['string'],
				'required' => true,
			],
			'light_theme_main_color' => [
				'type' => ['int'],
				'required' => true,
			],
			'light_theme_other_colors' => [
				'type' => ['int'],
				'isArray' => true,
				'required' => true,
			],
			'dark_theme_main_color' => [
				'type' => ['int'],
				'required' => true,
			],
			'dark_theme_other_colors' => [
				'type' => ['int'],
				'isArray' => true,
				'required' => true,
			],
		];
	}
	/**
	* @return string
	*/

	public function getModelCustomEmojiId(): mixed
	{
		return $this->getFieldValue('model_custom_emoji_id');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setModelCustomEmojiId(mixed $value): static
	{
		return $this->setFieldValue('model_custom_emoji_id', $value);
	}

	/**
	* @return string
	*/

	public function getSymbolCustomEmojiId(): mixed
	{
		return $this->getFieldValue('symbol_custom_emoji_id');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setSymbolCustomEmojiId(mixed $value): static
	{
		return $this->setFieldValue('symbol_custom_emoji_id', $value);
	}

	/**
	* @return int
	*/

	public function getLightThemeMainColor(): mixed
	{
		return $this->getFieldValue('light_theme_main_color');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setLightThemeMainColor(mixed $value): static
	{
		return $this->setFieldValue('light_theme_main_color', $value);
	}

	/**
	* @return int[]
	*/

	public function getLightThemeOtherColors(): mixed
	{
		return $this->getFieldValue('light_theme_other_colors');
	}

	/**
	* @param int[] $value
	* @return static
	*/

	public function setLightThemeOtherColors(mixed $value): static
	{
		return $this->setFieldValue('light_theme_other_colors', $value);
	}

	/**
	* @return int
	*/

	public function getDarkThemeMainColor(): mixed
	{
		return $this->getFieldValue('dark_theme_main_color');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setDarkThemeMainColor(mixed $value): static
	{
		return $this->setFieldValue('dark_theme_main_color', $value);
	}

	/**
	* @return int[]
	*/

	public function getDarkThemeOtherColors(): mixed
	{
		return $this->getFieldValue('dark_theme_other_colors');
	}

	/**
	* @param int[] $value
	* @return static
	*/

	public function setDarkThemeOtherColors(mixed $value): static
	{
		return $this->setFieldValue('dark_theme_other_colors', $value);
	}

}