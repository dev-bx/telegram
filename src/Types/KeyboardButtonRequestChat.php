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
* This object defines the criteria used to request a suitable chat. Information about the selected chat will be shared with the bot when the corresponding button is pressed. The bot will be granted requested rights in the chat if appropriate. [More about requesting chats »](/bots/features#chat-and-user-selection).
* @property int $requestId
* Signed 32-bit identifier of the request, which will be received back in the [ChatShared](#chatshared) object. Must be unique within the message
* @property bool $chatIsChannel
* Pass *True* to request a channel chat, pass *False* to request a group or a supergroup chat.
* @property bool $chatIsForum
* *Optional*. Pass *True* to request a forum supergroup, pass *False* to request a non-forum chat. If not specified, no additional restrictions are applied.
* @property bool $chatHasUsername
* *Optional*. Pass *True* to request a supergroup or a channel with a username, pass *False* to request a chat without a username. If not specified, no additional restrictions are applied.
* @property bool $chatIsCreated
* *Optional*. Pass *True* to request a chat owned by the user. Otherwise, no additional restrictions are applied.
* @property ChatAdministratorRights $userAdministratorRights
* *Optional*. A JSON-serialized object listing the required administrator rights of the user in the chat. The rights must be a superset of *bot\_administrator\_rights*. If not specified, no additional restrictions are applied.
* @property ChatAdministratorRights $botAdministratorRights
* *Optional*. A JSON-serialized object listing the required administrator rights of the bot in the chat. The rights must be a subset of *user\_administrator\_rights*. If not specified, no additional restrictions are applied.
* @property bool $botIsMember
* *Optional*. Pass *True* to request a chat with the bot as a member. Otherwise, no additional restrictions are applied.
* @property bool $requestTitle
* *Optional*. Pass *True* to request the chat's title
* @property bool $requestUsername
* *Optional*. Pass *True* to request the chat's username
* @property bool $requestPhoto
* *Optional*. Pass *True* to request the chat's photo
*/

class KeyboardButtonRequestChat extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'request_id' => [
				'type' => ['int'],
				'required' => true,
			],
			'chat_is_channel' => [
				'type' => ['bool'],
				'required' => true,
			],
			'chat_is_forum' => [
				'type' => ['bool'],
			],
			'chat_has_username' => [
				'type' => ['bool'],
			],
			'chat_is_created' => [
				'type' => ['bool'],
			],
			'user_administrator_rights' => [
				'type' => [ChatAdministratorRights::class],
			],
			'bot_administrator_rights' => [
				'type' => [ChatAdministratorRights::class],
			],
			'bot_is_member' => [
				'type' => ['bool'],
			],
			'request_title' => [
				'type' => ['bool'],
			],
			'request_username' => [
				'type' => ['bool'],
			],
			'request_photo' => [
				'type' => ['bool'],
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
	* @return bool
	*/

	public function getChatIsChannel(): mixed
	{
		return $this->getFieldValue('chat_is_channel');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setChatIsChannel(mixed $value): static
	{
		return $this->setFieldValue('chat_is_channel', $value);
	}

	/**
	* @return bool
	*/

	public function getChatIsForum(): mixed
	{
		return $this->getFieldValue('chat_is_forum');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setChatIsForum(mixed $value): static
	{
		return $this->setFieldValue('chat_is_forum', $value);
	}

	/**
	* @return bool
	*/

	public function getChatHasUsername(): mixed
	{
		return $this->getFieldValue('chat_has_username');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setChatHasUsername(mixed $value): static
	{
		return $this->setFieldValue('chat_has_username', $value);
	}

	/**
	* @return bool
	*/

	public function getChatIsCreated(): mixed
	{
		return $this->getFieldValue('chat_is_created');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setChatIsCreated(mixed $value): static
	{
		return $this->setFieldValue('chat_is_created', $value);
	}

	/**
	* @return ChatAdministratorRights
	*/

	public function getUserAdministratorRights(): mixed
	{
		return $this->getFieldValue('user_administrator_rights');
	}

	/**
	* @param ChatAdministratorRights $value
	* @return static
	*/

	public function setUserAdministratorRights(mixed $value): static
	{
		return $this->setFieldValue('user_administrator_rights', $value);
	}

	/**
	* @return ChatAdministratorRights
	*/

	public function getBotAdministratorRights(): mixed
	{
		return $this->getFieldValue('bot_administrator_rights');
	}

	/**
	* @param ChatAdministratorRights $value
	* @return static
	*/

	public function setBotAdministratorRights(mixed $value): static
	{
		return $this->setFieldValue('bot_administrator_rights', $value);
	}

	/**
	* @return bool
	*/

	public function getBotIsMember(): mixed
	{
		return $this->getFieldValue('bot_is_member');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setBotIsMember(mixed $value): static
	{
		return $this->setFieldValue('bot_is_member', $value);
	}

	/**
	* @return bool
	*/

	public function getRequestTitle(): mixed
	{
		return $this->getFieldValue('request_title');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setRequestTitle(mixed $value): static
	{
		return $this->setFieldValue('request_title', $value);
	}

	/**
	* @return bool
	*/

	public function getRequestUsername(): mixed
	{
		return $this->getFieldValue('request_username');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setRequestUsername(mixed $value): static
	{
		return $this->setFieldValue('request_username', $value);
	}

	/**
	* @return bool
	*/

	public function getRequestPhoto(): mixed
	{
		return $this->getFieldValue('request_photo');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setRequestPhoto(mixed $value): static
	{
		return $this->setFieldValue('request_photo', $value);
	}

}