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
* The background is automatically filled based on the selected colors.
* @property string $type
* Type of the background, always “fill”
* @property BackgroundFill $fill
* The background fill
* @property int $darkThemeDimming
* Dimming of the background in dark themes, as a percentage; 0-100
*/

class BackgroundTypeFill extends BackgroundType
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => 'fill',
				'required' => true,
			],
			'fill' => [
				'type' => [BackgroundFill::class],
				'required' => true,
			],
			'dark_theme_dimming' => [
				'type' => ['int'],
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
	* @return BackgroundFill
	*/

	public function getFill(): mixed
	{
		return $this->getFieldValue('fill');
	}

	/**
	* @param BackgroundFill $value
	* @return static
	*/

	public function setFill(mixed $value): static
	{
		return $this->setFieldValue('fill', $value);
	}

	/**
	* @return int
	*/

	public function getDarkThemeDimming(): mixed
	{
		return $this->getFieldValue('dark_theme_dimming');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setDarkThemeDimming(mixed $value): static
	{
		return $this->setFieldValue('dark_theme_dimming', $value);
	}

}