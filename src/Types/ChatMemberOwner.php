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
* Represents a [chat member](#chatmember) that owns the chat and has all administrator privileges.
* @property string $status
* The member's status in the chat, always “creator”
* @property User $user
* Information about the user
* @property bool $isAnonymous
* *True*, if the user's presence in the chat is hidden
* @property string $customTitle
* *Optional*. Custom title for this user
*/

class ChatMemberOwner extends ChatMember
{
	public static function getFields(): array
	{
		return [
			'status' => [
				'type' => ['string'],
				'value' => 'creator',
				'required' => true,
			],
			'user' => [
				'type' => [User::class],
				'required' => true,
			],
			'is_anonymous' => [
				'type' => ['bool'],
				'required' => true,
			],
			'custom_title' => [
				'type' => ['string'],
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
	* @return bool
	*/

	public function getIsAnonymous(): mixed
	{
		return $this->getFieldValue('is_anonymous');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setIsAnonymous(mixed $value): static
	{
		return $this->setFieldValue('is_anonymous', $value);
	}

	/**
	* @return string
	*/

	public function getCustomTitle(): mixed
	{
		return $this->getFieldValue('custom_title');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setCustomTitle(mixed $value): static
	{
		return $this->setFieldValue('custom_title', $value);
	}

}