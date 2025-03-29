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
 * This object represents a service message about a change in auto-delete timer settings.
 * @property int $messageAutoDeleteTime
 * New auto-delete time for messages in the chat; in seconds
 */
class MessageAutoDeleteTimerChanged extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'message_auto_delete_time' => [
				'type' => ['int'],
				'required' => true,
			],
		];
	}
	/**
	* @return int
	*/

	public function getMessageAutoDeleteTime(): mixed
	{
		return $this->getFieldValue('message_auto_delete_time');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setMessageAutoDeleteTime(mixed $value): static
	{
		return $this->setFieldValue('message_auto_delete_time', $value);
	}

}