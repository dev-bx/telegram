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
* This object represents a chat.
* @property int $id
* Unique identifier for this chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
* @property string $type
* Type of the chat, can be either “private”, “group”, “supergroup” or “channel”
* @property string $title
* *Optional*. Title, for supergroups, channels and group chats
* @property string $username
* *Optional*. Username, for private chats, supergroups and channels if available
* @property string $firstName
* *Optional*. First name of the other party in a private chat
* @property string $lastName
* *Optional*. Last name of the other party in a private chat
* @property bool $isForum
* *Optional*. *True*, if the supergroup chat is a forum (has [topics](https://telegram.org/blog/topics-in-groups-collectible-usernames#topics-in-groups) enabled)
*/

class Chat extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'id' => [
				'type' => ['int'],
				'required' => true,
			],
			'type' => [
				'type' => ['string'],
				'required' => true,
			],
			'title' => [
				'type' => ['string'],
			],
			'username' => [
				'type' => ['string'],
			],
			'first_name' => [
				'type' => ['string'],
			],
			'last_name' => [
				'type' => ['string'],
			],
			'is_forum' => [
				'type' => ['bool'],
			],
		];
	}
	/**
	* @return int
	*/

	public function getId(): mixed
	{
		return $this->getFieldValue('id');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setId(mixed $value): static
	{
		return $this->setFieldValue('id', $value);
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

	/**
	* @return string
	*/

	public function getTitle(): mixed
	{
		return $this->getFieldValue('title');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setTitle(mixed $value): static
	{
		return $this->setFieldValue('title', $value);
	}

	/**
	* @return string
	*/

	public function getUsername(): mixed
	{
		return $this->getFieldValue('username');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setUsername(mixed $value): static
	{
		return $this->setFieldValue('username', $value);
	}

	/**
	* @return string
	*/

	public function getFirstName(): mixed
	{
		return $this->getFieldValue('first_name');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setFirstName(mixed $value): static
	{
		return $this->setFieldValue('first_name', $value);
	}

	/**
	* @return string
	*/

	public function getLastName(): mixed
	{
		return $this->getFieldValue('last_name');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setLastName(mixed $value): static
	{
		return $this->setFieldValue('last_name', $value);
	}

	/**
	* @return bool
	*/

	public function getIsForum(): mixed
	{
		return $this->getFieldValue('is_forum');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setIsForum(mixed $value): static
	{
		return $this->setFieldValue('is_forum', $value);
	}

}