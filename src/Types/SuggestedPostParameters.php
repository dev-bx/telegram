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
 * Contains parameters of a post that is being suggested by the bot.
 * @property SuggestedPostPrice $price
 * *Optional*. Proposed price for the post. If the field is omitted, then the post is unpaid.
 * @property int $sendDate
 * *Optional*. Proposed send date of the post. If specified, then the date must be between 300 second and 2678400 seconds (30 days) in the future. If the field is omitted, then the post can be published at any time within 30 days at the sole discretion of the user who approves it.
 */
class SuggestedPostParameters extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'price' => [
				'type' => [SuggestedPostPrice::class],
			],
			'send_date' => [
				'type' => ['int'],
			],
		];
	}
	/**
	* @return SuggestedPostPrice
	*/

	public function getPrice(): mixed
	{
		return $this->getFieldValue('price');
	}

	/**
	* @param SuggestedPostPrice $value
	* @return static
	*/

	public function setPrice(mixed $value): static
	{
		return $this->setFieldValue('price', $value);
	}

	/**
	* @return int
	*/

	public function getSendDate(): mixed
	{
		return $this->getFieldValue('send_date');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setSendDate(mixed $value): static
	{
		return $this->setFieldValue('send_date', $value);
	}

}