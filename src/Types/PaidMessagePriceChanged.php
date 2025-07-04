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
 * Describes a service message about a change in the price of paid messages within a chat.
 * @property int $paidMessageStarCount
 * The new number of Telegram Stars that must be paid by non-administrator users of the supergroup chat for each sent message
 */
class PaidMessagePriceChanged extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'paid_message_star_count' => [
				'type' => ['int'],
				'required' => true,
			],
		];
	}
	/**
	* @return int
	*/

	public function getPaidMessageStarCount(): mixed
	{
		return $this->getFieldValue('paid_message_star_count');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setPaidMessageStarCount(mixed $value): static
	{
		return $this->setFieldValue('paid_message_star_count', $value);
	}

}