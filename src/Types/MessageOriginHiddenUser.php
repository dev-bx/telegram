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
 * The message was originally sent by an unknown user.
 * @property string $type
 * Type of the message origin, always “hidden\_user”
 * @property int $date
 * Date the message was sent originally in Unix time
 * @property string $senderUserName
 * Name of the user that sent the message originally
 */
class MessageOriginHiddenUser extends MessageOrigin
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => 'hidden_user',
				'required' => true,
			],
			'date' => [
				'type' => ['int'],
				'required' => true,
			],
			'sender_user_name' => [
				'type' => ['string'],
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
	* @return string
	*/

	public function getSenderUserName(): mixed
	{
		return $this->getFieldValue('sender_user_name');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setSenderUserName(mixed $value): static
	{
		return $this->setFieldValue('sender_user_name', $value);
	}

}