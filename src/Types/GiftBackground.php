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
 * This object describes the background of a gift.
 * @property int $centerColor
 * Center color of the background in RGB format
 * @property int $edgeColor
 * Edge color of the background in RGB format
 * @property int $textColor
 * Text color of the background in RGB format
 */
class GiftBackground extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'center_color' => [
				'type' => ['int'],
				'required' => true,
			],
			'edge_color' => [
				'type' => ['int'],
				'required' => true,
			],
			'text_color' => [
				'type' => ['int'],
				'required' => true,
			],
		];
	}
	/**
	* @return int
	*/

	public function getCenterColor(): mixed
	{
		return $this->getFieldValue('center_color');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setCenterColor(mixed $value): static
	{
		return $this->setFieldValue('center_color', $value);
	}

	/**
	* @return int
	*/

	public function getEdgeColor(): mixed
	{
		return $this->getFieldValue('edge_color');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setEdgeColor(mixed $value): static
	{
		return $this->setFieldValue('edge_color', $value);
	}

	/**
	* @return int
	*/

	public function getTextColor(): mixed
	{
		return $this->getFieldValue('text_color');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setTextColor(mixed $value): static
	{
		return $this->setFieldValue('text_color', $value);
	}

}