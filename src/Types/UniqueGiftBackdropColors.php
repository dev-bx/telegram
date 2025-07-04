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
 * This object describes the colors of the backdrop of a unique gift.
 * @property int $centerColor
 * The color in the center of the backdrop in RGB format
 * @property int $edgeColor
 * The color on the edges of the backdrop in RGB format
 * @property int $symbolColor
 * The color to be applied to the symbol in RGB format
 * @property int $textColor
 * The color for the text on the backdrop in RGB format
 */
class UniqueGiftBackdropColors extends Base\BaseType
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
			'symbol_color' => [
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

	public function getSymbolColor(): mixed
	{
		return $this->getFieldValue('symbol_color');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setSymbolColor(mixed $value): static
	{
		return $this->setFieldValue('symbol_color', $value);
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