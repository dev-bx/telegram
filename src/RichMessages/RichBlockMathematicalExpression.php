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

namespace DevBX\Telegram\RichMessages;

use DevBX\Telegram\Base;


/**
 * A block with a mathematical expression in LaTeX format, corresponding to the custom HTML tag `<tg-math-block>`.
 * @property string $type
 * Type of the block, always “mathematical\_expression”
 * @property string $expression
 * The mathematical expression in LaTeX format
 */
class RichBlockMathematicalExpression extends RichBlock
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => 'mathematical_expression',
				'required' => true,
			],
			'expression' => [
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

	public function getExpression(): mixed
	{
		return $this->getFieldValue('expression');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setExpression(mixed $value): static
	{
		return $this->setFieldValue('expression', $value);
	}

}