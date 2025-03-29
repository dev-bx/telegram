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
 * This object represents a boost added to a chat or changed.
 * @property Chat $chat
 * Chat which was boosted
 * @property ChatBoost $boost
 * Information about the chat boost
 */
class ChatBoostUpdated extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'chat' => [
				'type' => [Chat::class],
				'required' => true,
			],
			'boost' => [
				'type' => [ChatBoost::class],
				'required' => true,
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
	* @return ChatBoost
	*/

	public function getBoost(): mixed
	{
		return $this->getFieldValue('boost');
	}

	/**
	* @param ChatBoost $value
	* @return static
	*/

	public function setBoost(mixed $value): static
	{
		return $this->setFieldValue('boost', $value);
	}

}