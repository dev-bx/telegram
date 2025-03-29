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
 * This object represents a unique message identifier.
 * @property int $messageId
 * Unique message identifier. In specific instances (e.g., message containing a video sent to a big chat), the server might automatically schedule a message instead of sending it immediately. In such cases, this field will be 0 and the relevant message will be unusable until it is actually sent
 */
class MessageId extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'message_id' => [
				'type' => ['int'],
				'required' => true,
			],
		];
	}
	/**
	* @return int
	*/

	public function getMessageId(): mixed
	{
		return $this->getFieldValue('message_id');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setMessageId(mixed $value): static
	{
		return $this->setFieldValue('message_id', $value);
	}

}