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
 * @property int $receiverUserId
 * Identifier of the user who will receive the message. It is not guaranteed that the user will receive the message, especially if they are offline. See [here](#ephemeral-messages-and-commands) for more details.
 * @property string $callbackQueryId
 * *Optional*. Identifier of the callback query which triggered the message, if any
 * @property bool $replaceCallbackQueryMessage
 * *Optional*. Pass *True* if the ephemeral message must be shown in place of the original message. Must be *False* for callback queries from ephemeral messages, which must be edited using regular *editEphemeralMessage…* methods.
 */
class EphemeralMessageParameters extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'receiver_user_id' => [
				'type' => ['int'],
				'required' => true,
			],
			'callback_query_id' => [
				'type' => ['string'],
			],
			'replace_callback_query_message' => [
				'type' => ['bool'],
			],
		];
	}
	/**
	* @return int
	*/

	public function getReceiverUserId(): mixed
	{
		return $this->getFieldValue('receiver_user_id');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setReceiverUserId(mixed $value): static
	{
		return $this->setFieldValue('receiver_user_id', $value);
	}

	/**
	* @return string
	*/

	public function getCallbackQueryId(): mixed
	{
		return $this->getFieldValue('callback_query_id');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setCallbackQueryId(mixed $value): static
	{
		return $this->setFieldValue('callback_query_id', $value);
	}

	/**
	* @return bool
	*/

	public function getReplaceCallbackQueryMessage(): mixed
	{
		return $this->getFieldValue('replace_callback_query_message');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setReplaceCallbackQueryMessage(mixed $value): static
	{
		return $this->setFieldValue('replace_callback_query_message', $value);
	}

}