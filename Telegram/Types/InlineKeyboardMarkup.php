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
* This object represents an [inline keyboard](/bots/features#inline-keyboards) that appears right next to the message it belongs to.
* @property Base\ArrayOfArrayObject|InlineKeyboardButton[][] $inlineKeyboard
* Array of button rows, each represented by an Array of [InlineKeyboardButton](#inlinekeyboardbutton) objects
*/

class InlineKeyboardMarkup extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'inline_keyboard' => [
				'type' => [InlineKeyboardButton::class],
				'isArray' => 'matrix',
				'required' => true,
			],
		];
	}
	/**
	* @return Base\ArrayOfArrayObject|InlineKeyboardButton[][]
	*/

	public function getInlineKeyboard(): mixed
	{
		return $this->getFieldValue('inline_keyboard');
	}

	/**
	* @param Base\ArrayOfArrayObject|InlineKeyboardButton[][] $value
	* @return static
	*/

	public function setInlineKeyboard(mixed $value): static
	{
		return $this->setFieldValue('inline_keyboard', $value);
	}

}