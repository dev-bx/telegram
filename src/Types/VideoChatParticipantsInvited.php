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
 * This object represents a service message about new members invited to a video chat.
 * @property Base\ArrayObject|User[] $users
 * New members that were invited to the video chat
 */
class VideoChatParticipantsInvited extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'users' => [
				'type' => [User::class],
				'isArray' => true,
				'required' => true,
			],
		];
	}
	/**
	* @return Base\ArrayObject|User[]
	*/

	public function getUsers(): mixed
	{
		return $this->getFieldValue('users');
	}

	/**
	* @param Base\ArrayObject|User[] $value
	* @return static
	*/

	public function setUsers(mixed $value): static
	{
		return $this->setFieldValue('users', $value);
	}

}