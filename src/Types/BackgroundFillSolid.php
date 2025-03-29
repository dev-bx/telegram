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
 * The background is filled using the selected color.
 * @property string $type
 * Type of the background fill, always “solid”
 * @property int $color
 * The color of the background fill in the RGB24 format
 */
class BackgroundFillSolid extends BackgroundFill
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => 'solid',
				'required' => true,
			],
			'color' => [
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
	* @return int
	*/

	public function getColor(): mixed
	{
		return $this->getFieldValue('color');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setColor(mixed $value): static
	{
		return $this->setFieldValue('color', $value);
	}

}