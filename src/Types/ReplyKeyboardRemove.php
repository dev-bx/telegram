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
 * Upon receiving a message with this object, Telegram clients will remove the current custom keyboard and display the default letter-keyboard. By default, custom keyboards are displayed until a new keyboard is sent by a bot. An exception is made for one-time keyboards that are hidden immediately after the user presses a button (see [ReplyKeyboardMarkup](#replykeyboardmarkup)). Not supported in channels and for messages sent on behalf of a Telegram Business account.
 * @property bool $removeKeyboard
 * Requests clients to remove the custom keyboard (user will not be able to summon this keyboard; if you want to hide the keyboard from sight but keep it accessible, use *one\_time\_keyboard* in [ReplyKeyboardMarkup](#replykeyboardmarkup))
 * @property bool $selective
 * *Optional*. Use this parameter if you want to remove the keyboard for specific users only. Targets: 1) users that are @mentioned in the *text* of the [Message](#message) object; 2) if the bot's message is a reply to a message in the same chat and forum topic, sender of the original message.  
  
*Example:* A user votes in a poll, bot returns confirmation message in reply to the vote and removes the keyboard for that user, while still showing the keyboard with poll options to users who haven't voted yet.
 */
class ReplyKeyboardRemove extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'remove_keyboard' => [
				'type' => ['bool'],
				'required' => true,
			],
			'selective' => [
				'type' => ['bool'],
			],
		];
	}
	/**
	* @return bool
	*/

	public function getRemoveKeyboard(): mixed
	{
		return $this->getFieldValue('remove_keyboard');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setRemoveKeyboard(mixed $value): static
	{
		return $this->setFieldValue('remove_keyboard', $value);
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