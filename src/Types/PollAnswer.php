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
* This object represents an answer of a user in a non-anonymous poll.
* @property string $pollId
* Unique poll identifier
* @property Chat $voterChat
* *Optional*. The chat that changed the answer to the poll, if the voter is anonymous
* @property User $user
* *Optional*. The user that changed the answer to the poll, if the voter isn't anonymous
* @property int[] $optionIds
* 0-based identifiers of chosen answer options. May be empty if the vote was retracted.
*/

class PollAnswer extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'poll_id' => [
				'type' => ['string'],
				'required' => true,
			],
			'voter_chat' => [
				'type' => [Chat::class],
			],
			'user' => [
				'type' => [User::class],
			],
			'option_ids' => [
				'type' => ['int'],
				'isArray' => true,
				'required' => true,
			],
		];
	}
	/**
	* @return string
	*/

	public function getPollId(): mixed
	{
		return $this->getFieldValue('poll_id');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setPollId(mixed $value): static
	{
		return $this->setFieldValue('poll_id', $value);
	}

	/**
	* @return Chat
	*/

	public function getVoterChat(): mixed
	{
		return $this->getFieldValue('voter_chat');
	}

	/**
	* @param Chat $value
	* @return static
	*/

	public function setVoterChat(mixed $value): static
	{
		return $this->setFieldValue('voter_chat', $value);
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
	* @return int[]
	*/

	public function getOptionIds(): mixed
	{
		return $this->getFieldValue('option_ids');
	}

	/**
	* @param int[] $value
	* @return static
	*/

	public function setOptionIds(mixed $value): static
	{
		return $this->setFieldValue('option_ids', $value);
	}

}