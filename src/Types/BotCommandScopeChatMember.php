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
 * Represents the [scope](#botcommandscope) of bot commands, covering a specific member of a group or supergroup chat.
 * @property string $type
 * Scope type, must be *chat\_member*
 * @property int|string $chatId
 * Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
 * @property int $userId
 * Unique identifier of the target user
 */
class BotCommandScopeChatMember extends BotCommandScope
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => 'chat_member',
				'required' => true,
			],
			'chat_id' => [
				'type' => ['int', 'string'],
				'required' => true,
			],
			'user_id' => [
				'type' => ['int'],
				'required' => true,
			],
		];
	}
	/**
	* @return string
	*/

	public function getType(): mixed
	{
		return $this->getFieldValue('type');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setType(mixed $value): static
	{
		return $this->setFieldValue('type', $value);
	}

	/**
	* @return int|string
	*/

	public function getChatId(): mixed
	{
		return $this->getFieldValue('chat_id');
	}

	/**
	* @param int|string $value
	* @return static
	*/

	public function setChatId(mixed $value): static
	{
		return $this->setFieldValue('chat_id', $value);
	}

	/**
	* @return int
	*/

	public function getUserId(): mixed
	{
		return $this->getFieldValue('user_id');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setUserId(mixed $value): static
	{
		return $this->setFieldValue('user_id', $value);
	}

}