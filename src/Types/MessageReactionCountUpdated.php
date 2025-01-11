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
* This object represents reaction changes on a message with anonymous reactions.
* @property Chat $chat
* The chat containing the message
* @property int $messageId
* Unique message identifier inside the chat
* @property int $date
* Date of the change in Unix time
* @property Base\ArrayObject|ReactionCount[] $reactions
* List of reactions that are present on the message
*/

class MessageReactionCountUpdated extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'chat' => [
				'type' => [Chat::class],
				'required' => true,
			],
			'message_id' => [
				'type' => ['int'],
				'required' => true,
			],
			'date' => [
				'type' => ['int'],
				'required' => true,
			],
			'reactions' => [
				'type' => [ReactionCount::class],
				'isArray' => true,
				'required' => true,
			],
		];
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
	* @return Base\ArrayObject|ReactionCount[]
	*/

	public function getReactions(): mixed
	{
		return $this->getFieldValue('reactions');
	}

	/**
	* @param Base\ArrayObject|ReactionCount[] $value
	* @return static
	*/

	public function setReactions(mixed $value): static
	{
		return $this->setFieldValue('reactions', $value);
	}

}