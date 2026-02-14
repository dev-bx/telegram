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
 * This object represents one button of the reply keyboard. At most one of the fields other than *text*, *icon\_custom\_emoji\_id*, and *style* must be used to specify the type of the button. For simple text buttons, *String* can be used instead of this object to specify the button text.
 * @property string $text
 * Text of the button. If none of the fields other than *text*, *icon\_custom\_emoji\_id*, and *style* are used, it will be sent as a message when the button is pressed
 * @property string $iconCustomEmojiId
 * *Optional*. Unique identifier of the custom emoji shown before the text of the button. Can only be used by bots that purchased additional usernames on [Fragment](https://fragment.com) or in the messages directly sent by the bot to private, group and supergroup chats if the owner of the bot has a Telegram Premium subscription.
 * @property string $style
 * *Optional*. Style of the button. Must be one of “danger” (red), “success” (green) or “primary” (blue). If omitted, then an app-specific style is used.
 * @property KeyboardButtonRequestUsers $requestUsers
 * *Optional*. If specified, pressing the button will open a list of suitable users. Identifiers of selected users will be sent to the bot in a “users\_shared” service message. Available in private chats only.
 * @property KeyboardButtonRequestChat $requestChat
 * *Optional*. If specified, pressing the button will open a list of suitable chats. Tapping on a chat will send its identifier to the bot in a “chat\_shared” service message. Available in private chats only.
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
				'required' => true,
			],
			'icon_custom_emoji_id' => [
				'type' => ['string'],
			],
			'style' => [
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
	* @return string
	*/

	public function getIconCustomEmojiId(): mixed
	{
		return $this->getFieldValue('icon_custom_emoji_id');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setIconCustomEmojiId(mixed $value): static
	{
		return $this->setFieldValue('icon_custom_emoji_id', $value);
	}

	/**
	* @return string
	*/

	public function getStyle(): mixed
	{
		return $this->getFieldValue('style');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setStyle(mixed $value): static
	{
		return $this->setFieldValue('style', $value);
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