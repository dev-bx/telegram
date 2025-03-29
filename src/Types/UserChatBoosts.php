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
 * This object represents a list of boosts added to a chat by a user.
 * @property Base\ArrayObject|ChatBoost[] $boosts
 * The list of boosts added to the chat by the user
 */
class UserChatBoosts extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'boosts' => [
				'type' => [ChatBoost::class],
				'isArray' => true,
				'required' => true,
			],
		];
	}
	/**
	* @return Base\ArrayObject|ChatBoost[]
	*/

	public function getBoosts(): mixed
	{
		return $this->getFieldValue('boosts');
	}

	/**
	* @param Base\ArrayObject|ChatBoost[] $value
	* @return static
	*/

	public function setBoosts(mixed $value): static
	{
		return $this->setFieldValue('boosts', $value);
	}

}