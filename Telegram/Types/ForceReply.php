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
* Upon receiving a message with this object, Telegram clients will display a reply interface to the user (act as if the user has selected the bot's message and tapped 'Reply'). This can be extremely useful if you want to create user-friendly step-by-step interfaces without having to sacrifice [privacy mode](/bots/features#privacy-mode). Not supported in channels and for messages sent on behalf of a Telegram Business account.
* @property bool $forceReply
* Shows reply interface to the user, as if they manually selected the bot's message and tapped 'Reply'
* @property string $inputFieldPlaceholder
* *Optional*. The placeholder to be shown in the input field when the reply is active; 1-64 characters
* @property bool $selective
* *Optional*. Use this parameter if you want to force reply from specific users only. Targets: 1) users that are @mentioned in the *text* of the [Message](#message) object; 2) if the bot's message is a reply to a message in the same chat and forum topic, sender of the original message.
*/

class ForceReply extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'force_reply' => [
				'type' => ['bool'],
				'required' => true,
			],
			'input_field_placeholder' => [
				'type' => ['string'],
			],
			'selective' => [
				'type' => ['bool'],
			],
		];
	}
	/**
	* @return bool
	*/

	public function getForceReply(): mixed
	{
		return $this->getFieldValue('force_reply');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setForceReply(mixed $value): static
	{
		return $this->setFieldValue('force_reply', $value);
	}

	/**
	* @return string
	*/

	public function getInputFieldPlaceholder(): mixed
	{
		return $this->getFieldValue('input_field_placeholder');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setInputFieldPlaceholder(mixed $value): static
	{
		return $this->setFieldValue('input_field_placeholder', $value);
	}

	/**
	* @return bool
	*/

	public function getSelective(): mixed
	{
		return $this->getFieldValue('selective');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setSelective(mixed $value): static
	{
		return $this->setFieldValue('selective', $value);
	}

}