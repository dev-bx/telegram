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
 * This object defines the criteria used to request suitable users. Information about the selected users will be shared with the bot when the corresponding button is pressed. [More about requesting users »](/bots/features#chat-and-user-selection)
 * @property int $requestId
 * Signed 32-bit identifier of the request that will be received back in the [UsersShared](#usersshared) object. Must be unique within the message
 * @property bool $userIsBot
 * *Optional*. Pass *True* to request bots, pass *False* to request regular users. If not specified, no additional restrictions are applied.
 * @property bool $userIsPremium
 * *Optional*. Pass *True* to request premium users, pass *False* to request non-premium users. If not specified, no additional restrictions are applied.
 * @property int $maxQuantity
 * *Optional*. The maximum number of users to be selected; 1-10. Defaults to 1.
 * @property bool $requestName
 * *Optional*. Pass *True* to request the users' first and last names
 * @property bool $requestUsername
 * *Optional*. Pass *True* to request the users' usernames
 * @property bool $requestPhoto
 * *Optional*. Pass *True* to request the users' photos
 */
class KeyboardButtonRequestUsers extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'request_id' => [
				'type' => ['int'],
				'required' => true,
			],
			'user_is_bot' => [
				'type' => ['bool'],
			],
			'user_is_premium' => [
				'type' => ['bool'],
			],
			'max_quantity' => [
				'type' => ['int'],
			],
			'request_name' => [
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

	public function getUserIsBot(): mixed
	{
		return $this->getFieldValue('user_is_bot');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setUserIsBot(mixed $value): static
	{
		return $this->setFieldValue('user_is_bot', $value);
	}

	/**
	* @return bool
	*/

	public function getUserIsPremium(): mixed
	{
		return $this->getFieldValue('user_is_premium');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setUserIsPremium(mixed $value): static
	{
		return $this->setFieldValue('user_is_premium', $value);
	}

	/**
	* @return int
	*/

	public function getMaxQuantity(): mixed
	{
		return $this->getFieldValue('max_quantity');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setMaxQuantity(mixed $value): static
	{
		return $this->setFieldValue('max_quantity', $value);
	}

	/**
	* @return bool
	*/

	public function getRequestName(): mixed
	{
		return $this->getFieldValue('request_name');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setRequestName(mixed $value): static
	{
		return $this->setFieldValue('request_name', $value);
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