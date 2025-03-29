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
 * This object represents a [custom keyboard](/bots/features#keyboards) with reply options (see [Introduction to bots](/bots/features#keyboards) for details and examples). Not supported in channels and for messages sent on behalf of a Telegram Business account.
 * @property Base\ArrayOfArrayObject|KeyboardButton[][] $keyboard
 * Array of button rows, each represented by an Array of [KeyboardButton](#keyboardbutton) objects
 * @property bool $isPersistent
 * *Optional*. Requests clients to always show the keyboard when the regular keyboard is hidden. Defaults to *false*, in which case the custom keyboard can be hidden and opened with a keyboard icon.
 * @property bool $resizeKeyboard
 * *Optional*. Requests clients to resize the keyboard vertically for optimal fit (e.g., make the keyboard smaller if there are just two rows of buttons). Defaults to *false*, in which case the custom keyboard is always of the same height as the app's standard keyboard.
 * @property bool $oneTimeKeyboard
 * *Optional*. Requests clients to hide the keyboard as soon as it's been used. The keyboard will still be available, but clients will automatically display the usual letter-keyboard in the chat - the user can press a special button in the input field to see the custom keyboard again. Defaults to *false*.
 * @property string $inputFieldPlaceholder
 * *Optional*. The placeholder to be shown in the input field when the keyboard is active; 1-64 characters
 * @property bool $selective
 * *Optional*. Use this parameter if you want to show the keyboard to specific users only. Targets: 1) users that are @mentioned in the *text* of the [Message](#message) object; 2) if the bot's message is a reply to a message in the same chat and forum topic, sender of the original message.  
  
*Example:* A user requests to change the bot's language, bot replies to the request with a keyboard to select the new language. Other users in the group don't see the keyboard.
 */
class ReplyKeyboardMarkup extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'keyboard' => [
				'type' => [KeyboardButton::class],
				'isArray' => 'matrix',
				'required' => true,
			],
			'is_persistent' => [
				'type' => ['bool'],
			],
			'resize_keyboard' => [
				'type' => ['bool'],
			],
			'one_time_keyboard' => [
				'type' => ['bool'],
			],
			'input_field_placeholder' => [
				'type' => ['string'],
			],
			'selective' => [
				'type' => ['bool'],
			],
		];
	}
	/**
	* @return Base\ArrayOfArrayObject|KeyboardButton[][]
	*/

	public function getKeyboard(): mixed
	{
		return $this->getFieldValue('keyboard');
	}

	/**
	* @param Base\ArrayOfArrayObject|KeyboardButton[][] $value
	* @return static
	*/

	public function setKeyboard(mixed $value): static
	{
		return $this->setFieldValue('keyboard', $value);
	}

	/**
	* @return bool
	*/

	public function getIsPersistent(): mixed
	{
		return $this->getFieldValue('is_persistent');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setIsPersistent(mixed $value): static
	{
		return $this->setFieldValue('is_persistent', $value);
	}

	/**
	* @return bool
	*/

	public function getResizeKeyboard(): mixed
	{
		return $this->getFieldValue('resize_keyboard');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setResizeKeyboard(mixed $value): static
	{
		return $this->setFieldValue('resize_keyboard', $value);
	}

	/**
	* @return bool
	*/

	public function getOneTimeKeyboard(): mixed
	{
		return $this->getFieldValue('one_time_keyboard');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setOneTimeKeyboard(mixed $value): static
	{
		return $this->setFieldValue('one_time_keyboard', $value);
	}

	/**
	* @return string
	*/

	public function getInputFieldPlaceholder(): mixed
	{
		return $this->getFieldValue('input_field_placeholder');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setInputFieldPlaceholder(mixed $value): static
	{
		return $this->setFieldValue('input_field_placeholder', $value);
	}

	/**
	* @return bool
	*/

	public function getSelective(): mixed
	{
		return $this->getFieldValue('selective');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setSelective(mixed $value): static
	{
		return $this->setFieldValue('selective', $value);
	}

}