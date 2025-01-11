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
* The message was originally sent to a channel chat.
* @property string $type
* Type of the message origin, always “channel”
* @property int $date
* Date the message was sent originally in Unix time
* @property Chat $chat
* Channel chat to which the message was originally sent
* @property int $messageId
* Unique message identifier inside the chat
* @property string $authorSignature
* *Optional*. Signature of the original post author
*/

class MessageOriginChannel extends MessageOrigin
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => '��channel�',
				'required' => true,
			],
			'date' => [
				'type' => ['int'],
				'required' => true,
			],
			'chat' => [
				'type' => [Chat::class],
				'required' => true,
			],
			'message_id' => [
				'type' => ['int'],
				'required' => true,
			],
			'author_signature' => [
				'type' => ['string'],
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
	* @return Chat
	*/

	public function getChat(): mixed
	{
		return $this->getFieldValue('chat');
	}

	/**
	* @param Chat $value
	* @return static
	*/

	public function setChat(mixed $value): static
	{
		return $this->setFieldValue('chat', $value);
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

	/**
	* @return string
	*/

	public function getAuthorSignature(): mixed
	{
		return $this->getFieldValue('author_signature');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setAuthorSignature(mixed $value): static
	{
		return $this->setFieldValue('author_signature', $value);
	}

}