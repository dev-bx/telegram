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
 * Describes a service message about an ownership change in the chat.
 * @property User $newOwner
 * The new owner of the chat
 */
class ChatOwnerChanged extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'new_owner' => [
				'type' => [User::class],
				'required' => true,
			],
		];
	}
	/**
	* @return User
	*/

	public function getNewOwner(): mixed
	{
		return $this->getFieldValue('new_owner');
	}

	/**
	* @param User $value
	* @return static
	*/

	public function setNewOwner(mixed $value): static
	{
		return $this->setFieldValue('new_owner', $value);
	}

}