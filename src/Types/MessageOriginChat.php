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
* The message was originally sent on behalf of a chat to a group chat.
* @property string $type
* Type of the message origin, always “chat”
* @property int $date
* Date the message was sent originally in Unix time
* @property Chat $senderChat
* Chat that sent the message originally
* @property string $authorSignature
* *Optional*. For messages originally sent by an anonymous chat administrator, original message author signature
*/

class MessageOriginChat extends MessageOrigin
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => 'chat',
				'required' => true,
			],
			'date' => [
				'type' => ['int'],
				'required' => true,
			],
			'sender_chat' => [
				'type' => [Chat::class],
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

	public function getSenderChat(): mixed
	{
		return $this->getFieldValue('sender_chat');
	}

	/**
	* @param Chat $value
	* @return static
	*/

	public function setSenderChat(mixed $value): static
	{
		return $this->setFieldValue('sender_chat', $value);
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