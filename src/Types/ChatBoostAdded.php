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
 * This object represents a service message about a user boosting a chat.
 * @property int $boostCount
 * Number of boosts added by the user
 */
class ChatBoostAdded extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'boost_count' => [
				'type' => ['int'],
				'required' => true,
			],
		];
	}
	/**
	* @return int
	*/

	public function getBoostCount(): mixed
	{
		return $this->getFieldValue('boost_count');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setBoostCount(mixed $value): static
	{
		return $this->setFieldValue('boost_count', $value);
	}

}