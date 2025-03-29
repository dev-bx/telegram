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
 * The background is a freeform gradient that rotates after every message in the chat.
 * @property string $type
 * Type of the background fill, always “freeform\_gradient”
 * @property int[] $colors
 * A list of the 3 or 4 base colors that are used to generate the freeform gradient in the RGB24 format
 */
class BackgroundFillFreeformGradient extends BackgroundFill
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => 'freeform_gradient',
				'required' => true,
			],
			'colors' => [
				'type' => ['int'],
				'isArray' => true,
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
	* @return int[]
	*/

	public function getColors(): mixed
	{
		return $this->getFieldValue('colors');
	}

	/**
	* @param int[] $value
	* @return static
	*/

	public function setColors(mixed $value): static
	{
		return $this->setFieldValue('colors', $value);
	}

}