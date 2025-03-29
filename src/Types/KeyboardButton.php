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
 * **Note:***request\_users* and *request\_chat* options will only work in Telegram versions released after 3 February, 2023. Older clients will display *unsupported message*.
 * @property string $text
 * Text of the button. If none of the optional fields are used, it will be sent as a message when the button is pressed
 * @property KeyboardButtonRequestUsers $requestUsers
 * *Optional.* If specified, pressing the button will open a list of suitable users. Identifiers of selected users will be sent to the bot in a “users\_shared” service message. Available in private chats only.
 * @property KeyboardButtonRequestChat $requestChat
 * *Optional.* If specified, pressing the button will open a list of suitable chats. Tapping on a chat will send its identifier to the bot in a “chat\_shared” service message. Available in private chats only.
 * @property bool $requestContact
 * *Optional*. If *True*, the user's phone number will be sent as a contact when the button is pressed. Available in private chats only.
 * @property bool $requestLocation
 * *Optional*. If *True*, the user's current location will be sent when the button is pressed. Available in private chats only.
 * @property KeyboardButtonPollType $requestPoll
 * *Optional*. If specified, the user will be asked to create a poll and send it to the bot when the button is pressed. Available in private chats only.
 * @property WebAppInfo $webApp
 * *Optional*. If specified, the described [Web App](/bots/webapps) will be launched when the button is pressed. The Web App will be able to send a “web\_app\_data” service message. Available in private chats only.
 */
class KeyboardButton extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'text' => [
				'type' => ['string'],
			],
			'request_users' => [
				'type' => [KeyboardButtonRequestUsers::class],
			],
			'request_chat' => [
				'type' => [KeyboardButtonRequestChat::class],
			],
			'request_contact' => [
				'type' => ['bool'],
			],
			'request_location' => [
				'type' => ['bool'],
			],
			'request_poll' => [
				'type' => [KeyboardButtonPollType::class],
			],
			'web_app' => [
				'type' => [WebAppInfo::class],
			],
		];
	}
	/**
	* @return string
	*/

	public function getText(): mixed
	{
		return $this->getFieldValue('text');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setText(mixed $value): static
	{
		return $this->setFieldValue('text', $value);
	}

	/**
	* @return KeyboardButtonRequestUsers
	*/

	public function getRequestUsers(): mixed
	{
		return $this->getFieldValue('request_users');
	}

	/**
	* @param KeyboardButtonRequestUsers $value
	* @return static
	*/

	public function setRequestUsers(mixed $value): static
	{
		return $this->setFieldValue('request_users', $value);
	}

	/**
	* @return KeyboardButtonRequestChat
	*/

	public function getRequestChat(): mixed
	{
		return $this->getFieldValue('request_chat');
	}

	/**
	* @param KeyboardButtonRequestChat $value
	* @return static
	*/

	public function setRequestChat(mixed $value): static
	{
		return $this->setFieldValue('request_chat', $value);
	}

	/**
	* @return bool
	*/

	public function getRequestContact(): mixed
	{
		return $this->getFieldValue('request_contact');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setRequestContact(mixed $value): static
	{
		return $this->setFieldValue('request_contact', $value);
	}

	/**
	* @return bool
	*/

	public function getRequestLocation(): mixed
	{
		return $this->getFieldValue('request_location');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setRequestLocation(mixed $value): static
	{
		return $this->setFieldValue('request_location', $value);
	}

	/**
	* @return KeyboardButtonPollType
	*/

	public function getRequestPoll(): mixed
	{
		return $this->getFieldValue('request_poll');
	}

	/**
	* @param KeyboardButtonPollType $value
	* @return static
	*/

	public function setRequestPoll(mixed $value): static
	{
		return $this->setFieldValue('request_poll', $value);
	}

	/**
	* @return WebAppInfo
	*/

	public function getWebApp(): mixed
	{
		return $this->getFieldValue('web_app');
	}

	/**
	* @param WebAppInfo $value
	* @return static
	*/

	public function setWebApp(mixed $value): static
	{
		return $this->setFieldValue('web_app', $value);
	}

}