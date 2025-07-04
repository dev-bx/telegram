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
 * Represents the rights of an administrator in a chat.
 * @property bool $isAnonymous
 * *True*, if the user's presence in the chat is hidden
 * @property bool $canManageChat
 * *True*, if the administrator can access the chat event log, get boost list, see hidden supergroup and channel members, report spam messages, ignore slow mode, and send messages to the chat without paying Telegram Stars. Implied by any other administrator privilege.
 * @property bool $canDeleteMessages
 * *True*, if the administrator can delete messages of other users
 * @property bool $canManageVideoChats
 * *True*, if the administrator can manage video chats
 * @property bool $canRestrictMembers
 * *True*, if the administrator can restrict, ban or unban chat members, or access supergroup statistics
 * @property bool $canPromoteMembers
 * *True*, if the administrator can add new administrators with a subset of their own privileges or demote administrators that they have promoted, directly or indirectly (promoted by administrators that were appointed by the user)
 * @property bool $canChangeInfo
 * *True*, if the user is allowed to change the chat title, photo and other settings
 * @property bool $canInviteUsers
 * *True*, if the user is allowed to invite new users to the chat
 * @property bool $canPostStories
 * *True*, if the administrator can post stories to the chat
 * @property bool $canEditStories
 * *True*, if the administrator can edit stories posted by other users, post stories to the chat page, pin chat stories, and access the chat's story archive
 * @property bool $canDeleteStories
 * *True*, if the administrator can delete stories posted by other users
 * @property bool $canPostMessages
 * *Optional*. *True*, if the administrator can post messages in the channel, approve suggested posts, or access channel statistics; for channels only
 * @property bool $canEditMessages
 * *Optional*. *True*, if the administrator can edit messages of other users and can pin messages; for channels only
 * @property bool $canPinMessages
 * *Optional*. *True*, if the user is allowed to pin messages; for groups and supergroups only
 * @property bool $canManageTopics
 * *Optional*. *True*, if the user is allowed to create, rename, close, and reopen forum topics; for supergroups only
 */
class ChatAdministratorRights extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'is_anonymous' => [
				'type' => ['bool'],
				'required' => true,
			],
			'can_manage_chat' => [
				'type' => ['bool'],
				'required' => true,
			],
			'can_delete_messages' => [
				'type' => ['bool'],
				'required' => true,
			],
			'can_manage_video_chats' => [
				'type' => ['bool'],
				'required' => true,
			],
			'can_restrict_members' => [
				'type' => ['bool'],
				'required' => true,
			],
			'can_promote_members' => [
				'type' => ['bool'],
				'required' => true,
			],
			'can_change_info' => [
				'type' => ['bool'],
				'required' => true,
			],
			'can_invite_users' => [
				'type' => ['bool'],
				'required' => true,
			],
			'can_post_stories' => [
				'type' => ['bool'],
				'required' => true,
			],
			'can_edit_stories' => [
				'type' => ['bool'],
				'required' => true,
			],
			'can_delete_stories' => [
				'type' => ['bool'],
				'required' => true,
			],
			'can_post_messages' => [
				'type' => ['bool'],
			],
			'can_edit_messages' => [
				'type' => ['bool'],
			],
			'can_pin_messages' => [
				'type' => ['bool'],
			],
			'can_manage_topics' => [
				'type' => ['bool'],
			],
		];
	}
	/**
	* @return bool
	*/

	public function getIsAnonymous(): mixed
	{
		return $this->getFieldValue('is_anonymous');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setIsAnonymous(mixed $value): static
	{
		return $this->setFieldValue('is_anonymous', $value);
	}

	/**
	* @return bool
	*/

	public function getCanManageChat(): mixed
	{
		return $this->getFieldValue('can_manage_chat');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setCanManageChat(mixed $value): static
	{
		return $this->setFieldValue('can_manage_chat', $value);
	}

	/**
	* @return bool
	*/

	public function getCanDeleteMessages(): mixed
	{
		return $this->getFieldValue('can_delete_messages');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setCanDeleteMessages(mixed $value): static
	{
		return $this->setFieldValue('can_delete_messages', $value);
	}

	/**
	* @return bool
	*/

	public function getCanManageVideoChats(): mixed
	{
		return $this->getFieldValue('can_manage_video_chats');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setCanManageVideoChats(mixed $value): static
	{
		return $this->setFieldValue('can_manage_video_chats', $value);
	}

	/**
	* @return bool
	*/

	public function getCanRestrictMembers(): mixed
	{
		return $this->getFieldValue('can_restrict_members');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setCanRestrictMembers(mixed $value): static
	{
		return $this->setFieldValue('can_restrict_members', $value);
	}

	/**
	* @return bool
	*/

	public function getCanPromoteMembers(): mixed
	{
		return $this->getFieldValue('can_promote_members');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setCanPromoteMembers(mixed $value): static
	{
		return $this->setFieldValue('can_promote_members', $value);
	}

	/**
	* @return bool
	*/

	public function getCanChangeInfo(): mixed
	{
		return $this->getFieldValue('can_change_info');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setCanChangeInfo(mixed $value): static
	{
		return $this->setFieldValue('can_change_info', $value);
	}

	/**
	* @return bool
	*/

	public function getCanInviteUsers(): mixed
	{
		return $this->getFieldValue('can_invite_users');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setCanInviteUsers(mixed $value): static
	{
		return $this->setFieldValue('can_invite_users', $value);
	}

	/**
	* @return bool
	*/

	public function getCanPostStories(): mixed
	{
		return $this->getFieldValue('can_post_stories');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setCanPostStories(mixed $value): static
	{
		return $this->setFieldValue('can_post_stories', $value);
	}

	/**
	* @return bool
	*/

	public function getCanEditStories(): mixed
	{
		return $this->getFieldValue('can_edit_stories');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setCanEditStories(mixed $value): static
	{
		return $this->setFieldValue('can_edit_stories', $value);
	}

	/**
	* @return bool
	*/

	public function getCanDeleteStories(): mixed
	{
		return $this->getFieldValue('can_delete_stories');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setCanDeleteStories(mixed $value): static
	{
		return $this->setFieldValue('can_delete_stories', $value);
	}

	/**
	* @return bool
	*/

	public function getCanPostMessages(): mixed
	{
		return $this->getFieldValue('can_post_messages');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setCanPostMessages(mixed $value): static
	{
		return $this->setFieldValue('can_post_messages', $value);
	}

	/**
	* @return bool
	*/

	public function getCanEditMessages(): mixed
	{
		return $this->getFieldValue('can_edit_messages');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setCanEditMessages(mixed $value): static
	{
		return $this->setFieldValue('can_edit_messages', $value);
	}

	/**
	* @return bool
	*/

	public function getCanPinMessages(): mixed
	{
		return $this->getFieldValue('can_pin_messages');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setCanPinMessages(mixed $value): static
	{
		return $this->setFieldValue('can_pin_messages', $value);
	}

	/**
	* @return bool
	*/

	public function getCanManageTopics(): mixed
	{
		return $this->getFieldValue('can_manage_topics');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setCanManageTopics(mixed $value): static
	{
		return $this->setFieldValue('can_manage_topics', $value);
	}

}