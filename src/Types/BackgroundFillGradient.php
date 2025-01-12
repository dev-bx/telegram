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
* The background is a gradient fill.
* @property string $type
* Type of the background fill, always “gradient”
* @property int $topColor
* Top color of the gradient in the RGB24 format
* @property int $bottomColor
* Bottom color of the gradient in the RGB24 format
* @property int $rotationAngle
* Clockwise rotation angle of the background fill in degrees; 0-359
*/

class BackgroundFillGradient extends BackgroundFill
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => 'gradient',
				'required' => true,
			],
			'top_color' => [
				'type' => ['int'],
				'required' => true,
			],
			'bottom_color' => [
				'type' => ['int'],
				'required' => true,
			],
			'rotation_angle' => [
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

	public function getTopColor(): mixed
	{
		return $this->getFieldValue('top_color');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setTopColor(mixed $value): static
	{
		return $this->setFieldValue('top_color', $value);
	}

	/**
	* @return int
	*/

	public function getBottomColor(): mixed
	{
		return $this->getFieldValue('bottom_color');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setBottomColor(mixed $value): static
	{
		return $this->setFieldValue('bottom_color', $value);
	}

	/**
	* @return int
	*/

	public function getRotationAngle(): mixed
	{
		return $this->getFieldValue('rotation_angle');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setRotationAngle(mixed $value): static
	{
		return $this->setFieldValue('rotation_angle', $value);
	}

}