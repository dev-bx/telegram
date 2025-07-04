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
 * Describes the position of a clickable area within a story.
 * @property float $xPercentage
 * The abscissa of the area's center, as a percentage of the media width
 * @property float $yPercentage
 * The ordinate of the area's center, as a percentage of the media height
 * @property float $widthPercentage
 * The width of the area's rectangle, as a percentage of the media width
 * @property float $heightPercentage
 * The height of the area's rectangle, as a percentage of the media height
 * @property float $rotationAngle
 * The clockwise rotation angle of the rectangle, in degrees; 0-360
 * @property float $cornerRadiusPercentage
 * The radius of the rectangle corner rounding, as a percentage of the media width
 */
class StoryAreaPosition extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'x_percentage' => [
				'type' => ['float'],
				'required' => true,
			],
			'y_percentage' => [
				'type' => ['float'],
				'required' => true,
			],
			'width_percentage' => [
				'type' => ['float'],
				'required' => true,
			],
			'height_percentage' => [
				'type' => ['float'],
				'required' => true,
			],
			'rotation_angle' => [
				'type' => ['float'],
				'required' => true,
			],
			'corner_radius_percentage' => [
				'type' => ['float'],
				'required' => true,
			],
		];
	}
	/**
	* @return float
	*/

	public function getXPercentage(): mixed
	{
		return $this->getFieldValue('x_percentage');
	}

	/**
	* @param float $value
	* @return static
	*/

	public function setXPercentage(mixed $value): static
	{
		return $this->setFieldValue('x_percentage', $value);
	}

	/**
	* @return float
	*/

	public function getYPercentage(): mixed
	{
		return $this->getFieldValue('y_percentage');
	}

	/**
	* @param float $value
	* @return static
	*/

	public function setYPercentage(mixed $value): static
	{
		return $this->setFieldValue('y_percentage', $value);
	}

	/**
	* @return float
	*/

	public function getWidthPercentage(): mixed
	{
		return $this->getFieldValue('width_percentage');
	}

	/**
	* @param float $value
	* @return static
	*/

	public function setWidthPercentage(mixed $value): static
	{
		return $this->setFieldValue('width_percentage', $value);
	}

	/**
	* @return float
	*/

	public function getHeightPercentage(): mixed
	{
		return $this->getFieldValue('height_percentage');
	}

	/**
	* @param float $value
	* @return static
	*/

	public function setHeightPercentage(mixed $value): static
	{
		return $this->setFieldValue('height_percentage', $value);
	}

	/**
	* @return float
	*/

	public function getRotationAngle(): mixed
	{
		return $this->getFieldValue('rotation_angle');
	}

	/**
	* @param float $value
	* @return static
	*/

	public function setRotationAngle(mixed $value): static
	{
		return $this->setFieldValue('rotation_angle', $value);
	}

	/**
	* @return float
	*/

	public function getCornerRadiusPercentage(): mixed
	{
		return $this->getFieldValue('corner_radius_percentage');
	}

	/**
	* @param float $value
	* @return static
	*/

	public function setCornerRadiusPercentage(mixed $value): static
	{
		return $this->setFieldValue('corner_radius_percentage', $value);
	}

}