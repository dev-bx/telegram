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
 * Describes a service message about the chat owner leaving the chat.
 * @property User $newOwner
 * *Optional*. The user which will be the new owner of the chat if the previous owner does not return to the chat
 */
class ChatOwnerLeft extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'new_owner' => [
				'type' => [User::class],
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