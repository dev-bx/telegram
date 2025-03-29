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
 * This object represents changes in the status of a chat member.
 * @property Chat $chat
 * Chat the user belongs to
 * @property User $from
 * Performer of the action, which resulted in the change
 * @property int $date
 * Date the change was done in Unix time
 * @property ChatMember|ChatMemberOwner|ChatMemberAdministrator|ChatMemberMember|ChatMemberRestricted|ChatMemberLeft|ChatMemberBanned $oldChatMember
 * Previous information about the chat member
 * @property ChatMember|ChatMemberOwner|ChatMemberAdministrator|ChatMemberMember|ChatMemberRestricted|ChatMemberLeft|ChatMemberBanned $newChatMember
 * New information about the chat member
 * @property ChatInviteLink $inviteLink
 * *Optional*. Chat invite link, which was used by the user to join the chat; for joining by invite link events only.
 * @property bool $viaJoinRequest
 * *Optional*. True, if the user joined the chat after sending a direct join request without using an invite link and being approved by an administrator
 * @property bool $viaChatFolderInviteLink
 * *Optional*. True, if the user joined the chat via a chat folder invite link
 */
class ChatMemberUpdated extends Base\BaseType
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
			'date' => [
				'type' => ['int'],
				'required' => true,
			],
			'old_chat_member' => [
				'type' => [ChatMember::class],
				'required' => true,
			],
			'new_chat_member' => [
				'type' => [ChatMember::class],
				'required' => true,
			],
			'invite_link' => [
				'type' => [ChatInviteLink::class],
			],
			'via_join_request' => [
				'type' => ['bool'],
			],
			'via_chat_folder_invite_link' => [
				'type' => ['bool'],
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
	* @return ChatMember|ChatMemberOwner|ChatMemberAdministrator|ChatMemberMember|ChatMemberRestricted|ChatMemberLeft|ChatMemberBanned
	*/

	public function getOldChatMember(): mixed
	{
		return $this->getFieldValue('old_chat_member');
	}

	/**
	* @param ChatMember|ChatMemberOwner|ChatMemberAdministrator|ChatMemberMember|ChatMemberRestricted|ChatMemberLeft|ChatMemberBanned $value
	* @return static
	*/

	public function setOldChatMember(mixed $value): static
	{
		return $this->setFieldValue('old_chat_member', $value);
	}

	/**
	* @return ChatMember|ChatMemberOwner|ChatMemberAdministrator|ChatMemberMember|ChatMemberRestricted|ChatMemberLeft|ChatMemberBanned
	*/

	public function getNewChatMember(): mixed
	{
		return $this->getFieldValue('new_chat_member');
	}

	/**
	* @param ChatMember|ChatMemberOwner|ChatMemberAdministrator|ChatMemberMember|ChatMemberRestricted|ChatMemberLeft|ChatMemberBanned $value
	* @return static
	*/

	public function setNewChatMember(mixed $value): static
	{
		return $this->setFieldValue('new_chat_member', $value);
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

	/**
	* @return bool
	*/

	public function getViaJoinRequest(): mixed
	{
		return $this->getFieldValue('via_join_request');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setViaJoinRequest(mixed $value): static
	{
		return $this->setFieldValue('via_join_request', $value);
	}

	/**
	* @return bool
	*/

	public function getViaChatFolderInviteLink(): mixed
	{
		return $this->getFieldValue('via_chat_folder_invite_link');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setViaChatFolderInviteLink(mixed $value): static
	{
		return $this->setFieldValue('via_chat_folder_invite_link', $value);
	}

}