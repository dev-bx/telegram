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
 * Describes the connection of the bot with a business account.
 * @property string $id
 * Unique identifier of the business connection
 * @property User $user
 * Business account user that created the business connection
 * @property int $userChatId
 * Identifier of a private chat with the user who created the business connection. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
 * @property int $date
 * Date the connection was established in Unix time
 * @property bool $canReply
 * True, if the bot can act on behalf of the business account in chats that were active in the last 24 hours
 * @property bool $isEnabled
 * True, if the connection is active
 */
class BusinessConnection extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'id' => [
				'type' => ['string'],
				'required' => true,
			],
			'user' => [
				'type' => [User::class],
				'required' => true,
			],
			'user_chat_id' => [
				'type' => ['int'],
				'required' => true,
			],
			'date' => [
				'type' => ['int'],
				'required' => true,
			],
			'can_reply' => [
				'type' => ['bool'],
				'required' => true,
			],
			'is_enabled' => [
				'type' => ['bool'],
				'required' => true,
			],
		];
	}
	/**
	* @return string
	*/

	public function getId(): mixed
	{
		return $this->getFieldValue('id');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setId(mixed $value): static
	{
		return $this->setFieldValue('id', $value);
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

	public function getUserChatId(): mixed
	{
		return $this->getFieldValue('user_chat_id');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setUserChatId(mixed $value): static
	{
		return $this->setFieldValue('user_chat_id', $value);
	}

	/**
	* @return int
	*/

	public function getDate(): mixed
	{
		return $this->getFieldValue('date');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setDate(mixed $value): static
	{
		return $this->setFieldValue('date', $value);
	}

	/**
	* @return bool
	*/

	public function getCanReply(): mixed
	{
		return $this->getFieldValue('can_reply');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setCanReply(mixed $value): static
	{
		return $this->setFieldValue('can_reply', $value);
	}

	/**
	* @return bool
	*/

	public function getIsEnabled(): mixed
	{
		return $this->getFieldValue('is_enabled');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setIsEnabled(mixed $value): static
	{
		return $this->setFieldValue('is_enabled', $value);
	}

}