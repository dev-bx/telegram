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
* This object contains information about the users whose identifiers were shared with the bot using a [KeyboardButtonRequestUsers](#keyboardbuttonrequestusers) button.
* @property int $requestId
* Identifier of the request
* @property Base\ArrayObject|SharedUser[] $users
* Information about users shared with the bot.
*/

class UsersShared extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'request_id' => [
				'type' => ['int'],
				'required' => true,
			],
			'users' => [
				'type' => [SharedUser::class],
				'isArray' => true,
				'required' => true,
			],
		];
	}
	/**
	* @return int
	*/

	public function getRequestId(): mixed
	{
		return $this->getFieldValue('request_id');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setRequestId(mixed $value): static
	{
		return $this->setFieldValue('request_id', $value);
	}

	/**
	* @return Base\ArrayObject|SharedUser[]
	*/

	public function getUsers(): mixed
	{
		return $this->getFieldValue('users');
	}

	/**
	* @param Base\ArrayObject|SharedUser[] $value
	* @return static
	*/

	public function setUsers(mixed $value): static
	{
		return $this->setFieldValue('users', $value);
	}

}