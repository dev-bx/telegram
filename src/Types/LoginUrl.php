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
 * This object represents a parameter of the inline keyboard button used to automatically authorize a user. It serves as a great replacement for the [Telegram Login Widget](/widgets/login) when the user is coming from Telegram. All the user needs to do is tap/click a button and confirm that they want to log in:
 * @property string $url
 * An HTTPS URL to be opened with user authorization data added to the query string when the button is pressed. If the user refuses to provide authorization data, the original URL without information about the user will be opened. The data added is the same as described in [Receiving authorization data](/widgets/login#receiving-authorization-data).  
  
**NOTE:** You **must** always check the hash of the received data to verify the authentication and the integrity of the data as described in [Checking authorization](/widgets/login#checking-authorization).
 * @property string $forwardText
 * *Optional*. New text of the button in forwarded messages
 * @property string $botUsername
 * *Optional*. Username of a bot, which will be used for user authorization; not supported in [RichMessageButton](#richmessagebutton). See [Setting up a bot](/widgets/login#setting-up-a-bot) for more details. If not specified, the current bot's username will be assumed. The *url*'s domain must be the same as the domain linked with the bot. See [Linking your domain to the bot](/widgets/login#linking-your-domain-to-the-bot) for more details.
 * @property bool $requestWriteAccess
 * *Optional*. Pass *True* to request the permission for your bot to send messages to the user
 */
class LoginUrl extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'url' => [
				'type' => ['string'],
				'required' => true,
			],
			'forward_text' => [
				'type' => ['string'],
			],
			'bot_username' => [
				'type' => ['string'],
			],
			'request_write_access' => [
				'type' => ['bool'],
			],
		];
	}
	/**
	* @return string
	*/

	public function getUrl(): mixed
	{
		return $this->getFieldValue('url');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setUrl(mixed $value): static
	{
		return $this->setFieldValue('url', $value);
	}

	/**
	* @return string
	*/

	public function getForwardText(): mixed
	{
		return $this->getFieldValue('forward_text');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setForwardText(mixed $value): static
	{
		return $this->setFieldValue('forward_text', $value);
	}

	/**
	* @return string
	*/

	public function getBotUsername(): mixed
	{
		return $this->getFieldValue('bot_username');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setBotUsername(mixed $value): static
	{
		return $this->setFieldValue('bot_username', $value);
	}

	/**
	* @return bool
	*/

	public function getRequestWriteAccess(): mixed
	{
		return $this->getFieldValue('request_write_access');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setRequestWriteAccess(mixed $value): static
	{
		return $this->setFieldValue('request_write_access', $value);
	}

}