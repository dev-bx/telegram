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
* The boost was obtained by subscribing to Telegram Premium or by gifting a Telegram Premium subscription to another user.
* @property string $source
* Source of the boost, always “premium”
* @property User $user
* User that boosted the chat
*/

class ChatBoostSourcePremium extends ChatBoostSource
{
	public static function getFields(): array
	{
		return [
			'source' => [
				'type' => ['string'],
				'value' => '��premium�',
				'required' => true,
			],
			'user' => [
				'type' => [User::class],
				'required' => true,
			],
		];
	}
	/**
	* @return string
	*/

	public function getSource(): mixed
	{
		return $this->getFieldValue('source');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setSource(mixed $value): static
	{
		return $this->setFieldValue('source', $value);
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

}