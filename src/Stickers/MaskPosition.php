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

namespace DevBX\Telegram\Stickers;

use DevBX\Telegram\Base;


/**
 * This object describes the position on faces where a mask should be placed by default.
 * @property string $point
 * The part of the face relative to which the mask should be placed. One of “forehead”, “eyes”, “mouth”, or “chin”.
 * @property float $xShift
 * Shift by X-axis measured in widths of the mask scaled to the face size, from left to right. For example, choosing -1.0 will place mask just to the left of the default mask position.
 * @property float $yShift
 * Shift by Y-axis measured in heights of the mask scaled to the face size, from top to bottom. For example, 1.0 will place the mask just below the default mask position.
 * @property float $scale
 * Mask scaling coefficient. For example, 2.0 means double size.
 */
class MaskPosition extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'point' => [
				'type' => ['string'],
				'required' => true,
			],
			'x_shift' => [
				'type' => ['float'],
				'required' => true,
			],
			'y_shift' => [
				'type' => ['float'],
				'required' => true,
			],
			'scale' => [
				'type' => ['float'],
				'required' => true,
			],
		];
	}
	/**
	* @return string
	*/

	public function getPoint(): mixed
	{
		return $this->getFieldValue('point');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setPoint(mixed $value): static
	{
		return $this->setFieldValue('point', $value);
	}

	/**
	* @return float
	*/

	public function getXShift(): mixed
	{
		return $this->getFieldValue('x_shift');
	}

	/**
	* @param float $value
	* @return static
	*/

	public function setXShift(mixed $value): static
	{
		return $this->setFieldValue('x_shift', $value);
	}

	/**
	* @return float
	*/

	public function getYShift(): mixed
	{
		return $this->getFieldValue('y_shift');
	}

	/**
	* @param float $value
	* @return static
	*/

	public function setYShift(mixed $value): static
	{
		return $this->setFieldValue('y_shift', $value);
	}

	/**
	* @return float
	*/

	public function getScale(): mixed
	{
		return $this->getFieldValue('scale');
	}

	/**
	* @param float $value
	* @return static
	*/

	public function setScale(mixed $value): static
	{
		return $this->setFieldValue('scale', $value);
	}

}