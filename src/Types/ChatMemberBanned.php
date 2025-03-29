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
 * Represents a [chat member](#chatmember) that was banned in the chat and can't return to the chat or view chat messages.
 * @property string $status
 * The member's status in the chat, always “kicked”
 * @property User $user
 * Information about the user
 * @property int $untilDate
 * Date when restrictions will be lifted for this user; Unix time. If 0, then the user is banned forever
 */
class ChatMemberBanned extends ChatMember
{
	public static function getFields(): array
	{
		return [
			'status' => [
				'type' => ['string'],
				'value' => 'kicked',
				'required' => true,
			],
			'user' => [
				'type' => [User::class],
				'required' => true,
			],
			'until_date' => [
				'type' => ['int'],
				'required' => true,
			],
		];
	}
	/**
	* @return string
	*/

	public function getStatus(): mixed
	{
		return $this->getFieldValue('status');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setStatus(mixed $value): static
	{
		return $this->setFieldValue('status', $value);
	}

	/**
	* @return User
	*/

	public function getUser(): mixed
	{
		return $this->getFieldValue('user');
	}

	/**
	* @param User $value
	* @return static
	*/

	public function setUser(mixed $value): static
	{
		return $this->setFieldValue('user', $value);
	}

	/**
	* @return int
	*/

	public function getUntilDate(): mixed
	{
		return $this->getFieldValue('until_date');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setUntilDate(mixed $value): static
	{
		return $this->setFieldValue('until_date', $value);
	}

}