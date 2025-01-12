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
* The message was originally sent by a known user.
* @property string $type
* Type of the message origin, always “user”
* @property int $date
* Date the message was sent originally in Unix time
* @property User $senderUser
* User that sent the message originally
*/

class MessageOriginUser extends MessageOrigin
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => 'user',
				'required' => true,
			],
			'date' => [
				'type' => ['int'],
				'required' => true,
			],
			'sender_user' => [
				'type' => [User::class],
				'required' => true,
			],
		];
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
	* @return User
	*/

	public function getSenderUser(): mixed
	{
		return $this->getFieldValue('sender_user');
	}

	/**
	* @param User $value
	* @return static
	*/

	public function setSenderUser(mixed $value): static
	{
		return $this->setFieldValue('sender_user', $value);
	}

}