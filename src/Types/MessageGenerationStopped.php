<?php

/**
 * @project Telegram Bot Api
 * @author Kubeev Ruslan <ruslan@dev-bx.ru>
 * @copyright 2026 Kubeev Ruslan
 * @license MIT
 * @link https://dev-bx.ru/
 *
 * This file is part of the project Telegram Bot Api Class Generator.
 */

namespace DevBX\Telegram\Types;

use DevBX\Telegram\Base;


/**
 * This object describes an update about a user stopping message generation.
 * @property Chat $chat
 * Chat in which the message is generated
 * @property int $messageThreadId
 * *Optional*. Unique identifier of the message thread in which the message is generated
 * @property int $draftId
 * Unique identifier of the message draft which was stopped
 */
class MessageGenerationStopped extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'chat' => [
				'type' => [Chat::class],
				'required' => true,
			],
			'message_thread_id' => [
				'type' => ['int'],
			],
			'draft_id' => [
				'type' => ['int'],
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
	* @return int
	*/

	public function getMessageThreadId(): mixed
	{
		return $this->getFieldValue('message_thread_id');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setMessageThreadId(mixed $value): static
	{
		return $this->setFieldValue('message_thread_id', $value);
	}

	/**
	* @return int
	*/

	public function getDraftId(): mixed
	{
		return $this->getFieldValue('draft_id');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setDraftId(mixed $value): static
	{
		return $this->setFieldValue('draft_id', $value);
	}

}