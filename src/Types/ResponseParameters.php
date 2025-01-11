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
* Describes why a request was unsuccessful.
* @property int $migrateToChatId
* *Optional*. The group has been migrated to a supergroup with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
* @property int $retryAfter
* *Optional*. In case of exceeding flood control, the number of seconds left to wait before the request can be repeated
*/

class ResponseParameters extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'migrate_to_chat_id' => [
				'type' => ['int'],
			],
			'retry_after' => [
				'type' => ['int'],
			],
		];
	}
	/**
	* @return int
	*/

	public function getMigrateToChatId(): mixed
	{
		return $this->getFieldValue('migrate_to_chat_id');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setMigrateToChatId(mixed $value): static
	{
		return $this->setFieldValue('migrate_to_chat_id', $value);
	}

	/**
	* @return int
	*/

	public function getRetryAfter(): mixed
	{
		return $this->getFieldValue('retry_after');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setRetryAfter(mixed $value): static
	{
		return $this->setFieldValue('retry_after', $value);
	}

}