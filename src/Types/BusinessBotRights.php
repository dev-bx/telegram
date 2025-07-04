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
 * Represents the rights of a business bot.
 * @property bool $canReply
 * *Optional*. *True*, if the bot can send and edit messages in the private chats that had incoming messages in the last 24 hours
 * @property bool $canReadMessages
 * *Optional*. *True*, if the bot can mark incoming private messages as read
 * @property bool $canDeleteSentMessages
 * *Optional*. *True*, if the bot can delete messages sent by the bot
 * @property bool $canDeleteAllMessages
 * *Optional*. *True*, if the bot can delete all private messages in managed chats
 * @property bool $canEditName
 * *Optional*. *True*, if the bot can edit the first and last name of the business account
 * @property bool $canEditBio
 * *Optional*. *True*, if the bot can edit the bio of the business account
 * @property bool $canEditProfilePhoto
 * *Optional*. *True*, if the bot can edit the profile photo of the business account
 * @property bool $canEditUsername
 * *Optional*. *True*, if the bot can edit the username of the business account
 * @property bool $canChangeGiftSettings
 * *Optional*. *True*, if the bot can change the privacy settings pertaining to gifts for the business account
 * @property bool $canViewGiftsAndStars
 * *Optional*. *True*, if the bot can view gifts and the amount of Telegram Stars owned by the business account
 * @property bool $canConvertGiftsToStars
 * *Optional*. *True*, if the bot can convert regular gifts owned by the business account to Telegram Stars
 * @property bool $canTransferAndUpgradeGifts
 * *Optional*. *True*, if the bot can transfer and upgrade gifts owned by the business account
 * @property bool $canTransferStars
 * *Optional*. *True*, if the bot can transfer Telegram Stars received by the business account to its own account, or use them to upgrade and transfer gifts
 * @property bool $canManageStories
 * *Optional*. *True*, if the bot can post, edit and delete stories on behalf of the business account
 */
class BusinessBotRights extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'can_reply' => [
				'type' => ['bool'],
			],
			'can_read_messages' => [
				'type' => ['bool'],
			],
			'can_delete_sent_messages' => [
				'type' => ['bool'],
			],
			'can_delete_all_messages' => [
				'type' => ['bool'],
			],
			'can_edit_name' => [
				'type' => ['bool'],
			],
			'can_edit_bio' => [
				'type' => ['bool'],
			],
			'can_edit_profile_photo' => [
				'type' => ['bool'],
			],
			'can_edit_username' => [
				'type' => ['bool'],
			],
			'can_change_gift_settings' => [
				'type' => ['bool'],
			],
			'can_view_gifts_and_stars' => [
				'type' => ['bool'],
			],
			'can_convert_gifts_to_stars' => [
				'type' => ['bool'],
			],
			'can_transfer_and_upgrade_gifts' => [
				'type' => ['bool'],
			],
			'can_transfer_stars' => [
				'type' => ['bool'],
			],
			'can_manage_stories' => [
				'type' => ['bool'],
			],
		];
	}
	/**
	* @return bool
	*/

	public function getCanReply(): mixed
	{
		return $this->getFieldValue('can_reply');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setCanReply(mixed $value): static
	{
		return $this->setFieldValue('can_reply', $value);
	}

	/**
	* @return bool
	*/

	public function getCanReadMessages(): mixed
	{
		return $this->getFieldValue('can_read_messages');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setCanReadMessages(mixed $value): static
	{
		return $this->setFieldValue('can_read_messages', $value);
	}

	/**
	* @return bool
	*/

	public function getCanDeleteSentMessages(): mixed
	{
		return $this->getFieldValue('can_delete_sent_messages');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setCanDeleteSentMessages(mixed $value): static
	{
		return $this->setFieldValue('can_delete_sent_messages', $value);
	}

	/**
	* @return bool
	*/

	public function getCanDeleteAllMessages(): mixed
	{
		return $this->getFieldValue('can_delete_all_messages');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setCanDeleteAllMessages(mixed $value): static
	{
		return $this->setFieldValue('can_delete_all_messages', $value);
	}

	/**
	* @return bool
	*/

	public function getCanEditName(): mixed
	{
		return $this->getFieldValue('can_edit_name');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setCanEditName(mixed $value): static
	{
		return $this->setFieldValue('can_edit_name', $value);
	}

	/**
	* @return bool
	*/

	public function getCanEditBio(): mixed
	{
		return $this->getFieldValue('can_edit_bio');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setCanEditBio(mixed $value): static
	{
		return $this->setFieldValue('can_edit_bio', $value);
	}

	/**
	* @return bool
	*/

	public function getCanEditProfilePhoto(): mixed
	{
		return $this->getFieldValue('can_edit_profile_photo');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setCanEditProfilePhoto(mixed $value): static
	{
		return $this->setFieldValue('can_edit_profile_photo', $value);
	}

	/**
	* @return bool
	*/

	public function getCanEditUsername(): mixed
	{
		return $this->getFieldValue('can_edit_username');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setCanEditUsername(mixed $value): static
	{
		return $this->setFieldValue('can_edit_username', $value);
	}

	/**
	* @return bool
	*/

	public function getCanChangeGiftSettings(): mixed
	{
		return $this->getFieldValue('can_change_gift_settings');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setCanChangeGiftSettings(mixed $value): static
	{
		return $this->setFieldValue('can_change_gift_settings', $value);
	}

	/**
	* @return bool
	*/

	public function getCanViewGiftsAndStars(): mixed
	{
		return $this->getFieldValue('can_view_gifts_and_stars');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setCanViewGiftsAndStars(mixed $value): static
	{
		return $this->setFieldValue('can_view_gifts_and_stars', $value);
	}

	/**
	* @return bool
	*/

	public function getCanConvertGiftsToStars(): mixed
	{
		return $this->getFieldValue('can_convert_gifts_to_stars');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setCanConvertGiftsToStars(mixed $value): static
	{
		return $this->setFieldValue('can_convert_gifts_to_stars', $value);
	}

	/**
	* @return bool
	*/

	public function getCanTransferAndUpgradeGifts(): mixed
	{
		return $this->getFieldValue('can_transfer_and_upgrade_gifts');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setCanTransferAndUpgradeGifts(mixed $value): static
	{
		return $this->setFieldValue('can_transfer_and_upgrade_gifts', $value);
	}

	/**
	* @return bool
	*/

	public function getCanTransferStars(): mixed
	{
		return $this->getFieldValue('can_transfer_stars');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setCanTransferStars(mixed $value): static
	{
		return $this->setFieldValue('can_transfer_stars', $value);
	}

	/**
	* @return bool
	*/

	public function getCanManageStories(): mixed
	{
		return $this->getFieldValue('can_manage_stories');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setCanManageStories(mixed $value): static
	{
		return $this->setFieldValue('can_manage_stories', $value);
	}

}