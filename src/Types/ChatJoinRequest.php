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
 * Represents a join request sent to a chat.
 * @property Chat $chat
 * Chat to which the request was sent
 * @property User $from
 * User that sent the join request
 * @property int $userChatId
 * Identifier of a private chat with the user who sent the join request. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier. The bot can use this identifier for 5 minutes to send messages until the join request is processed, assuming no other administrator contacted the user.
 * @property int $date
 * Date the request was sent in Unix time
 * @property string $bio
 * *Optional*. Bio of the user.
 * @property ChatInviteLink $inviteLink
 * *Optional*. Chat invite link that was used by the user to send the join request
 */
class ChatJoinRequest extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'chat' => [
				'type' => [Chat::class],
				'required' => true,
			],
			'from' => [
				'type' => [User::class],
				'required' => true,
			],
			'user_chat_id' => [
				'type' => ['int'],
				'required' => true,
			],
			'date' => [
				'type' => ['int'],
				'required' => true,
			],
			'bio' => [
				'type' => ['string'],
			],
			'invite_link' => [
				'type' => [ChatInviteLink::class],
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
	* @return User
	*/

	public function getFrom(): mixed
	{
		return $this->getFieldValue('from');
	}

	/**
	* @param User $value
	* @return static
	*/

	public function setFrom(mixed $value): static
	{
		return $this->setFieldValue('from', $value);
	}

	/**
	* @return int
	*/

	public function getUserChatId(): mixed
	{
		return $this->getFieldValue('user_chat_id');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setUserChatId(mixed $value): static
	{
		return $this->setFieldValue('user_chat_id', $value);
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

	public function getBio(): mixed
	{
		return $this->getFieldValue('bio');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setBio(mixed $value): static
	{
		return $this->setFieldValue('bio', $value);
	}

	/**
	* @return ChatInviteLink
	*/

	public function getInviteLink(): mixed
	{
		return $this->getFieldValue('invite_link');
	}

	/**
	* @param ChatInviteLink $value
	* @return static
	*/

	public function setInviteLink(mixed $value): static
	{
		return $this->setFieldValue('invite_link', $value);
	}

}