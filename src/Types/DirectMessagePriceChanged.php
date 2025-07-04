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
 * Describes a service message about a change in the price of direct messages sent to a channel chat.
 * @property bool $areDirectMessagesEnabled
 * *True*, if direct messages are enabled for the channel chat; false otherwise
 * @property int $directMessageStarCount
 * *Optional*. The new number of Telegram Stars that must be paid by users for each direct message sent to the channel. Does not apply to users who have been exempted by administrators. Defaults to 0.
 */
class DirectMessagePriceChanged extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'are_direct_messages_enabled' => [
				'type' => ['bool'],
				'required' => true,
			],
			'direct_message_star_count' => [
				'type' => ['int'],
			],
		];
	}
	/**
	* @return bool
	*/

	public function getAreDirectMessagesEnabled(): mixed
	{
		return $this->getFieldValue('are_direct_messages_enabled');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setAreDirectMessagesEnabled(mixed $value): static
	{
		return $this->setFieldValue('are_direct_messages_enabled', $value);
	}

	/**
	* @return int
	*/

	public function getDirectMessageStarCount(): mixed
	{
		return $this->getFieldValue('direct_message_star_count');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setDirectMessageStarCount(mixed $value): static
	{
		return $this->setFieldValue('direct_message_star_count', $value);
	}

}