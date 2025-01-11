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
* Represents a [chat member](#chatmember) that is under certain restrictions in the chat. Supergroups only.
* @property string $status
* The member's status in the chat, always “restricted”
* @property User $user
* Information about the user
* @property bool $isMember
* *True*, if the user is a member of the chat at the moment of the request
* @property bool $canSendMessages
* *True*, if the user is allowed to send text messages, contacts, giveaways, giveaway winners, invoices, locations and venues
* @property bool $canSendAudios
* *True*, if the user is allowed to send audios
* @property bool $canSendDocuments
* *True*, if the user is allowed to send documents
* @property bool $canSendPhotos
* *True*, if the user is allowed to send photos
* @property bool $canSendVideos
* *True*, if the user is allowed to send videos
* @property bool $canSendVideoNotes
* *True*, if the user is allowed to send video notes
* @property bool $canSendVoiceNotes
* *True*, if the user is allowed to send voice notes
* @property bool $canSendPolls
* *True*, if the user is allowed to send polls
* @property bool $canSendOtherMessages
* *True*, if the user is allowed to send animations, games, stickers and use inline bots
* @property bool $canAddWebPagePreviews
* *True*, if the user is allowed to add web page previews to their messages
* @property bool $canChangeInfo
* *True*, if the user is allowed to change the chat title, photo and other settings
* @property bool $canInviteUsers
* *True*, if the user is allowed to invite new users to the chat
* @property bool $canPinMessages
* *True*, if the user is allowed to pin messages
* @property bool $canManageTopics
* *True*, if the user is allowed to create forum topics
* @property int $untilDate
* Date when restrictions will be lifted for this user; Unix time. If 0, then the user is restricted forever
*/

class ChatMemberRestricted extends ChatMember
{
	public static function getFields(): array
	{
		return [
			'status' => [
				'type' => ['string'],
				'value' => '��restricted�',
				'required' => true,
			],
			'user' => [
				'type' => [User::class],
				'required' => true,
			],
			'is_member' => [
				'type' => ['bool'],
				'required' => true,
			],
			'can_send_messages' => [
				'type' => ['bool'],
				'required' => true,
			],
			'can_send_audios' => [
				'type' => ['bool'],
				'required' => true,
			],
			'can_send_documents' => [
				'type' => ['bool'],
				'required' => true,
			],
			'can_send_photos' => [
				'type' => ['bool'],
				'required' => true,
			],
			'can_send_videos' => [
				'type' => ['bool'],
				'required' => true,
			],
			'can_send_video_notes' => [
				'type' => ['bool'],
				'required' => true,
			],
			'can_send_voice_notes' => [
				'type' => ['bool'],
				'required' => true,
			],
			'can_send_polls' => [
				'type' => ['bool'],
				'required' => true,
			],
			'can_send_other_messages' => [
				'type' => ['bool'],
				'required' => true,
			],
			'can_add_web_page_previews' => [
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
			'can_pin_messages' => [
				'type' => ['bool'],
				'required' => true,
			],
			'can_manage_topics' => [
				'type' => ['bool'],
				'required' => true,
			],
			'until_date' => [
				'type' => ['int'],
				'required' => true,
			],
		];
	}
	/**
	* @return string
	*/

	public function getStatus(): mixed
	{
		return $this->getFieldValue('status');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setStatus(mixed $value): static
	{
		return $this->setFieldValue('status', $value);
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
	* @return bool
	*/

	public function getIsMember(): mixed
	{
		return $this->getFieldValue('is_member');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setIsMember(mixed $value): static
	{
		return $this->setFieldValue('is_member', $value);
	}

	/**
	* @return bool
	*/

	public function getCanSendMessages(): mixed
	{
		return $this->getFieldValue('can_send_messages');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setCanSendMessages(mixed $value): static
	{
		return $this->setFieldValue('can_send_messages', $value);
	}

	/**
	* @return bool
	*/

	public function getCanSendAudios(): mixed
	{
		return $this->getFieldValue('can_send_audios');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setCanSendAudios(mixed $value): static
	{
		return $this->setFieldValue('can_send_audios', $value);
	}

	/**
	* @return bool
	*/

	public function getCanSendDocuments(): mixed
	{
		return $this->getFieldValue('can_send_documents');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setCanSendDocuments(mixed $value): static
	{
		return $this->setFieldValue('can_send_documents', $value);
	}

	/**
	* @return bool
	*/

	public function getCanSendPhotos(): mixed
	{
		return $this->getFieldValue('can_send_photos');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setCanSendPhotos(mixed $value): static
	{
		return $this->setFieldValue('can_send_photos', $value);
	}

	/**
	* @return bool
	*/

	public function getCanSendVideos(): mixed
	{
		return $this->getFieldValue('can_send_videos');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setCanSendVideos(mixed $value): static
	{
		return $this->setFieldValue('can_send_videos', $value);
	}

	/**
	* @return bool
	*/

	public function getCanSendVideoNotes(): mixed
	{
		return $this->getFieldValue('can_send_video_notes');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setCanSendVideoNotes(mixed $value): static
	{
		return $this->setFieldValue('can_send_video_notes', $value);
	}

	/**
	* @return bool
	*/

	public function getCanSendVoiceNotes(): mixed
	{
		return $this->getFieldValue('can_send_voice_notes');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setCanSendVoiceNotes(mixed $value): static
	{
		return $this->setFieldValue('can_send_voice_notes', $value);
	}

	/**
	* @return bool
	*/

	public function getCanSendPolls(): mixed
	{
		return $this->getFieldValue('can_send_polls');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setCanSendPolls(mixed $value): static
	{
		return $this->setFieldValue('can_send_polls', $value);
	}

	/**
	* @return bool
	*/

	public function getCanSendOtherMessages(): mixed
	{
		return $this->getFieldValue('can_send_other_messages');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setCanSendOtherMessages(mixed $value): static
	{
		return $this->setFieldValue('can_send_other_messages', $value);
	}

	/**
	* @return bool
	*/

	public function getCanAddWebPagePreviews(): mixed
	{
		return $this->getFieldValue('can_add_web_page_previews');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setCanAddWebPagePreviews(mixed $value): static
	{
		return $this->setFieldValue('can_add_web_page_previews', $value);
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

	/**
	* @return int
	*/

	public function getUntilDate(): mixed
	{
		return $this->getFieldValue('until_date');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setUntilDate(mixed $value): static
	{
		return $this->setFieldValue('until_date', $value);
	}

}