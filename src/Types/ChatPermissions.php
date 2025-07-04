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
 * Describes actions that a non-administrator user is allowed to take in a chat.
 * @property bool $canSendMessages
 * *Optional*. *True*, if the user is allowed to send text messages, contacts, giveaways, giveaway winners, invoices, locations and venues
 * @property bool $canSendAudios
 * *Optional*. *True*, if the user is allowed to send audios
 * @property bool $canSendDocuments
 * *Optional*. *True*, if the user is allowed to send documents
 * @property bool $canSendPhotos
 * *Optional*. *True*, if the user is allowed to send photos
 * @property bool $canSendVideos
 * *Optional*. *True*, if the user is allowed to send videos
 * @property bool $canSendVideoNotes
 * *Optional*. *True*, if the user is allowed to send video notes
 * @property bool $canSendVoiceNotes
 * *Optional*. *True*, if the user is allowed to send voice notes
 * @property bool $canSendPolls
 * *Optional*. *True*, if the user is allowed to send polls and checklists
 * @property bool $canSendOtherMessages
 * *Optional*. *True*, if the user is allowed to send animations, games, stickers and use inline bots
 * @property bool $canAddWebPagePreviews
 * *Optional*. *True*, if the user is allowed to add web page previews to their messages
 * @property bool $canChangeInfo
 * *Optional*. *True*, if the user is allowed to change the chat title, photo and other settings. Ignored in public supergroups
 * @property bool $canInviteUsers
 * *Optional*. *True*, if the user is allowed to invite new users to the chat
 * @property bool $canPinMessages
 * *Optional*. *True*, if the user is allowed to pin messages. Ignored in public supergroups
 * @property bool $canManageTopics
 * *Optional*. *True*, if the user is allowed to create forum topics. If omitted defaults to the value of can\_pin\_messages
 */
class ChatPermissions extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'can_send_messages' => [
				'type' => ['bool'],
			],
			'can_send_audios' => [
				'type' => ['bool'],
			],
			'can_send_documents' => [
				'type' => ['bool'],
			],
			'can_send_photos' => [
				'type' => ['bool'],
			],
			'can_send_videos' => [
				'type' => ['bool'],
			],
			'can_send_video_notes' => [
				'type' => ['bool'],
			],
			'can_send_voice_notes' => [
				'type' => ['bool'],
			],
			'can_send_polls' => [
				'type' => ['bool'],
			],
			'can_send_other_messages' => [
				'type' => ['bool'],
			],
			'can_add_web_page_previews' => [
				'type' => ['bool'],
			],
			'can_change_info' => [
				'type' => ['bool'],
			],
			'can_invite_users' => [
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

}