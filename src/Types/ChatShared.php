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
* This object contains information about a chat that was shared with the bot using a [KeyboardButtonRequestChat](#keyboardbuttonrequestchat) button.
* @property int $requestId
* Identifier of the request
* @property int $chatId
* Identifier of the shared chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier. The bot may not have access to the chat and could be unable to use this identifier, unless the chat is already known to the bot by some other means.
* @property string $title
* *Optional*. Title of the chat, if the title was requested by the bot.
* @property string $username
* *Optional*. Username of the chat, if the username was requested by the bot and available.
* @property Base\ArrayObject|PhotoSize[] $photo
* *Optional*. Available sizes of the chat photo, if the photo was requested by the bot
*/

class ChatShared extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'request_id' => [
				'type' => ['int'],
				'required' => true,
			],
			'chat_id' => [
				'type' => ['int'],
				'required' => true,
			],
			'title' => [
				'type' => ['string'],
			],
			'username' => [
				'type' => ['string'],
			],
			'photo' => [
				'type' => [PhotoSize::class],
				'isArray' => true,
			],
		];
	}
	/**
	* @return int
	*/

	public function getRequestId(): mixed
	{
		return $this->getFieldValue('request_id');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setRequestId(mixed $value): static
	{
		return $this->setFieldValue('request_id', $value);
	}

	/**
	* @return int
	*/

	public function getChatId(): mixed
	{
		return $this->getFieldValue('chat_id');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setChatId(mixed $value): static
	{
		return $this->setFieldValue('chat_id', $value);
	}

	/**
	* @return string
	*/

	public function getTitle(): mixed
	{
		return $this->getFieldValue('title');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setTitle(mixed $value): static
	{
		return $this->setFieldValue('title', $value);
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
	* @return Base\ArrayObject|PhotoSize[]
	*/

	public function getPhoto(): mixed
	{
		return $this->getFieldValue('photo');
	}

	/**
	* @param Base\ArrayObject|PhotoSize[] $value
	* @return static
	*/

	public function setPhoto(mixed $value): static
	{
		return $this->setFieldValue('photo', $value);
	}

}