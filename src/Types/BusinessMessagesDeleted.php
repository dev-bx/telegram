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
 * This object is received when messages are deleted from a connected business account.
 * @property string $businessConnectionId
 * Unique identifier of the business connection
 * @property Chat $chat
 * Information about a chat in the business account. The bot may not have access to the chat or the corresponding user.
 * @property int[] $messageIds
 * The list of identifiers of deleted messages in the chat of the business account
 */
class BusinessMessagesDeleted extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'business_connection_id' => [
				'type' => ['string'],
				'required' => true,
			],
			'chat' => [
				'type' => [Chat::class],
				'required' => true,
			],
			'message_ids' => [
				'type' => ['int'],
				'isArray' => true,
				'required' => true,
			],
		];
	}
	/**
	* @return string
	*/

	public function getBusinessConnectionId(): mixed
	{
		return $this->getFieldValue('business_connection_id');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setBusinessConnectionId(mixed $value): static
	{
		return $this->setFieldValue('business_connection_id', $value);
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
	* @return int[]
	*/

	public function getMessageIds(): mixed
	{
		return $this->getFieldValue('message_ids');
	}

	/**
	* @param int[] $value
	* @return static
	*/

	public function setMessageIds(mixed $value): static
	{
		return $this->setFieldValue('message_ids', $value);
	}

}