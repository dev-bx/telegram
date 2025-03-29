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
 * This object represents an inline button that switches the current user to inline mode in a chosen chat, with an optional default inline query.
 * @property string $query
 * *Optional*. The default inline query to be inserted in the input field. If left empty, only the bot's username will be inserted
 * @property bool $allowUserChats
 * *Optional*. True, if private chats with users can be chosen
 * @property bool $allowBotChats
 * *Optional*. True, if private chats with bots can be chosen
 * @property bool $allowGroupChats
 * *Optional*. True, if group and supergroup chats can be chosen
 * @property bool $allowChannelChats
 * *Optional*. True, if channel chats can be chosen
 */
class SwitchInlineQueryChosenChat extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'query' => [
				'type' => ['string'],
			],
			'allow_user_chats' => [
				'type' => ['bool'],
			],
			'allow_bot_chats' => [
				'type' => ['bool'],
			],
			'allow_group_chats' => [
				'type' => ['bool'],
			],
			'allow_channel_chats' => [
				'type' => ['bool'],
			],
		];
	}
	/**
	* @return string
	*/

	public function getQuery(): mixed
	{
		return $this->getFieldValue('query');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setQuery(mixed $value): static
	{
		return $this->setFieldValue('query', $value);
	}

	/**
	* @return bool
	*/

	public function getAllowUserChats(): mixed
	{
		return $this->getFieldValue('allow_user_chats');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setAllowUserChats(mixed $value): static
	{
		return $this->setFieldValue('allow_user_chats', $value);
	}

	/**
	* @return bool
	*/

	public function getAllowBotChats(): mixed
	{
		return $this->getFieldValue('allow_bot_chats');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setAllowBotChats(mixed $value): static
	{
		return $this->setFieldValue('allow_bot_chats', $value);
	}

	/**
	* @return bool
	*/

	public function getAllowGroupChats(): mixed
	{
		return $this->getFieldValue('allow_group_chats');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setAllowGroupChats(mixed $value): static
	{
		return $this->setFieldValue('allow_group_chats', $value);
	}

	/**
	* @return bool
	*/

	public function getAllowChannelChats(): mixed
	{
		return $this->getFieldValue('allow_channel_chats');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setAllowChannelChats(mixed $value): static
	{
		return $this->setFieldValue('allow_channel_chats', $value);
	}

}