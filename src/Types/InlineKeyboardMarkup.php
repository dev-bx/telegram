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
 * This object represents an [inline keyboard](/bots/features#inline-keyboards) that appears right next to the message it belongs to.
 * @property Base\ArrayOfArrayObject|InlineKeyboardButton[][] $inlineKeyboard
 * Array of button rows, each represented by an Array of [InlineKeyboardButton](#inlinekeyboardbutton) objects
 * @property bool $forceReply
 * *Optional*. Pass *True* if the reply interface must be shown to the user, as if they had manually selected the bot's message and tapped 'Reply'. The value of the field can't be changed when the inline keyboard is edited.
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
			'force_reply' => [
				'type' => ['bool'],
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

	/**
	* @return bool
	*/

	public function getForceReply(): mixed
	{
		return $this->getFieldValue('force_reply');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setForceReply(mixed $value): static
	{
		return $this->setFieldValue('force_reply', $value);
	}

}