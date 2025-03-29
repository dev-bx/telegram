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
 * This object contains information about a user that was shared with the bot using a [KeyboardButtonRequestUsers](#keyboardbuttonrequestusers) button.
 * @property int $userId
 * Identifier of the shared user. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so 64-bit integers or double-precision float types are safe for storing these identifiers. The bot may not have access to the user and could be unable to use this identifier, unless the user is already known to the bot by some other means.
 * @property string $firstName
 * *Optional*. First name of the user, if the name was requested by the bot
 * @property string $lastName
 * *Optional*. Last name of the user, if the name was requested by the bot
 * @property string $username
 * *Optional*. Username of the user, if the username was requested by the bot
 * @property Base\ArrayObject|PhotoSize[] $photo
 * *Optional*. Available sizes of the chat photo, if the photo was requested by the bot
 */
class SharedUser extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'user_id' => [
				'type' => ['int'],
				'required' => true,
			],
			'first_name' => [
				'type' => ['string'],
			],
			'last_name' => [
				'type' => ['string'],
			],
			'username' => [
				'type' => ['string'],
			],
			'photo' => [
				'type' => [PhotoSize::class],
				'isArray' => true,
			],
		];
	}
	/**
	* @return int
	*/

	public function getUserId(): mixed
	{
		return $this->getFieldValue('user_id');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setUserId(mixed $value): static
	{
		return $this->setFieldValue('user_id', $value);
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
	* @return Base\ArrayObject|PhotoSize[]
	*/

	public function getPhoto(): mixed
	{
		return $this->getFieldValue('photo');
	}

	/**
	* @param Base\ArrayObject|PhotoSize[] $value
	* @return static
	*/

	public function setPhoto(mixed $value): static
	{
		return $this->setFieldValue('photo', $value);
	}

}