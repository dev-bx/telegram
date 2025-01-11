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
* Represents the default [scope](#botcommandscope) of bot commands. Default commands are used if no commands with a [narrower scope](#determining-list-of-commands) are specified for the user.
* @property string $type
* Scope type, must be *default*
*/

class BotCommandScopeDefault extends BotCommandScope
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => 'default',
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