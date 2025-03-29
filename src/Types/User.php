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
 * This object represents a Telegram user or bot.
 * @property int $id
 * Unique identifier for this user or bot. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
 * @property bool $isBot
 * *True*, if this user is a bot
 * @property string $firstName
 * User's or bot's first name
 * @property string $lastName
 * *Optional*. User's or bot's last name
 * @property string $username
 * *Optional*. User's or bot's username
 * @property string $languageCode
 * *Optional*. [IETF language tag](https://en.wikipedia.org/wiki/IETF_language_tag) of the user's language
 * @property bool $isPremium
 * *Optional*. *True*, if this user is a Telegram Premium user
 * @property bool $addedToAttachmentMenu
 * *Optional*. *True*, if this user added the bot to the attachment menu
 * @property bool $canJoinGroups
 * *Optional*. *True*, if the bot can be invited to groups. Returned only in [getMe](#getme).
 * @property bool $canReadAllGroupMessages
 * *Optional*. *True*, if [privacy mode](/bots/features#privacy-mode) is disabled for the bot. Returned only in [getMe](#getme).
 * @property bool $supportsInlineQueries
 * *Optional*. *True*, if the bot supports inline queries. Returned only in [getMe](#getme).
 * @property bool $canConnectToBusiness
 * *Optional*. *True*, if the bot can be connected to a Telegram Business account to receive its messages. Returned only in [getMe](#getme).
 * @property bool $hasMainWebApp
 * *Optional*. *True*, if the bot has a main Web App. Returned only in [getMe](#getme).
 */
class User extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'id' => [
				'type' => ['int'],
				'required' => true,
			],
			'is_bot' => [
				'type' => ['bool'],
				'required' => true,
			],
			'first_name' => [
				'type' => ['string'],
				'required' => true,
			],
			'last_name' => [
				'type' => ['string'],
			],
			'username' => [
				'type' => ['string'],
			],
			'language_code' => [
				'type' => ['string'],
			],
			'is_premium' => [
				'type' => ['bool'],
			],
			'added_to_attachment_menu' => [
				'type' => ['bool'],
			],
			'can_join_groups' => [
				'type' => ['bool'],
			],
			'can_read_all_group_messages' => [
				'type' => ['bool'],
			],
			'supports_inline_queries' => [
				'type' => ['bool'],
			],
			'can_connect_to_business' => [
				'type' => ['bool'],
			],
			'has_main_web_app' => [
				'type' => ['bool'],
			],
		];
	}
	/**
	* @return int
	*/

	public function getId(): mixed
	{
		return $this->getFieldValue('id');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setId(mixed $value): static
	{
		return $this->setFieldValue('id', $value);
	}

	/**
	* @return bool
	*/

	public function getIsBot(): mixed
	{
		return $this->getFieldValue('is_bot');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setIsBot(mixed $value): static
	{
		return $this->setFieldValue('is_bot', $value);
	}

	/**
	* @return string
	*/

	public function getFirstName(): mixed
	{
		return $this->getFieldValue('first_name');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setFirstName(mixed $value): static
	{
		return $this->setFieldValue('first_name', $value);
	}

	/**
	* @return string
	*/

	public function getLastName(): mixed
	{
		return $this->getFieldValue('last_name');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setLastName(mixed $value): static
	{
		return $this->setFieldValue('last_name', $value);
	}

	/**
	* @return string
	*/

	public function getUsername(): mixed
	{
		return $this->getFieldValue('username');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setUsername(mixed $value): static
	{
		return $this->setFieldValue('username', $value);
	}

	/**
	* @return string
	*/

	public function getLanguageCode(): mixed
	{
		return $this->getFieldValue('language_code');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setLanguageCode(mixed $value): static
	{
		return $this->setFieldValue('language_code', $value);
	}

	/**
	* @return bool
	*/

	public function getIsPremium(): mixed
	{
		return $this->getFieldValue('is_premium');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setIsPremium(mixed $value): static
	{
		return $this->setFieldValue('is_premium', $value);
	}

	/**
	* @return bool
	*/

	public function getAddedToAttachmentMenu(): mixed
	{
		return $this->getFieldValue('added_to_attachment_menu');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setAddedToAttachmentMenu(mixed $value): static
	{
		return $this->setFieldValue('added_to_attachment_menu', $value);
	}

	/**
	* @return bool
	*/

	public function getCanJoinGroups(): mixed
	{
		return $this->getFieldValue('can_join_groups');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setCanJoinGroups(mixed $value): static
	{
		return $this->setFieldValue('can_join_groups', $value);
	}

	/**
	* @return bool
	*/

	public function getCanReadAllGroupMessages(): mixed
	{
		return $this->getFieldValue('can_read_all_group_messages');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setCanReadAllGroupMessages(mixed $value): static
	{
		return $this->setFieldValue('can_read_all_group_messages', $value);
	}

	/**
	* @return bool
	*/

	public function getSupportsInlineQueries(): mixed
	{
		return $this->getFieldValue('supports_inline_queries');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setSupportsInlineQueries(mixed $value): static
	{
		return $this->setFieldValue('supports_inline_queries', $value);
	}

	/**
	* @return bool
	*/

	public function getCanConnectToBusiness(): mixed
	{
		return $this->getFieldValue('can_connect_to_business');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setCanConnectToBusiness(mixed $value): static
	{
		return $this->setFieldValue('can_connect_to_business', $value);
	}

	/**
	* @return bool
	*/

	public function getHasMainWebApp(): mixed
	{
		return $this->getFieldValue('has_main_web_app');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setHasMainWebApp(mixed $value): static
	{
		return $this->setFieldValue('has_main_web_app', $value);
	}

}