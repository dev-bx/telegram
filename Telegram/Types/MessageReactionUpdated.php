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
* This object represents a change of a reaction on a message performed by a user.
* @property Chat $chat
* The chat containing the message the user reacted to
* @property int $messageId
* Unique identifier of the message inside the chat
* @property User $user
* *Optional*. The user that changed the reaction, if the user isn't anonymous
* @property Chat $actorChat
* *Optional*. The chat on behalf of which the reaction was changed, if the user is anonymous
* @property int $date
* Date of the change in Unix time
* @property Base\ArrayObject|ReactionType[] $oldReaction
* Previous list of reaction types that were set by the user
* @property Base\ArrayObject|ReactionType[] $newReaction
* New list of reaction types that have been set by the user
*/

class MessageReactionUpdated extends Base\BaseType
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
			'user' => [
				'type' => [User::class],
			],
			'actor_chat' => [
				'type' => [Chat::class],
			],
			'date' => [
				'type' => ['int'],
				'required' => true,
			],
			'old_reaction' => [
				'type' => [ReactionType::class],
				'isArray' => true,
				'required' => true,
			],
			'new_reaction' => [
				'type' => [ReactionType::class],
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

	/**
	* @return Chat
	*/

	public function getActorChat(): mixed
	{
		return $this->getFieldValue('actor_chat');
	}

	/**
	* @param Chat $value
	* @return static
	*/

	public function setActorChat(mixed $value): static
	{
		return $this->setFieldValue('actor_chat', $value);
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
	* @return Base\ArrayObject|ReactionType[]
	*/

	public function getOldReaction(): mixed
	{
		return $this->getFieldValue('old_reaction');
	}

	/**
	* @param Base\ArrayObject|ReactionType[] $value
	* @return static
	*/

	public function setOldReaction(mixed $value): static
	{
		return $this->setFieldValue('old_reaction', $value);
	}

	/**
	* @return Base\ArrayObject|ReactionType[]
	*/

	public function getNewReaction(): mixed
	{
		return $this->getFieldValue('new_reaction');
	}

	/**
	* @param Base\ArrayObject|ReactionType[] $value
	* @return static
	*/

	public function setNewReaction(mixed $value): static
	{
		return $this->setFieldValue('new_reaction', $value);
	}

}