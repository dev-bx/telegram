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
* Represents the [scope](#botcommandscope) of bot commands, covering all private chats.
* @property string $type
* Scope type, must be *all\_private\_chats*
*/

class BotCommandScopeAllPrivateChats extends BotCommandScope
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => 'all_private_chats',
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

}