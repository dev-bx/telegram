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
 * Contains information about a suggested post.
 * @property string $state
 * State of the suggested post. Currently, it can be one of “pending”, “approved”, “declined”.
 * @property SuggestedPostPrice $price
 * *Optional*. Proposed price of the post. If the field is omitted, then the post is unpaid.
 * @property int $sendDate
 * *Optional*. Proposed send date of the post. If the field is omitted, then the post can be published at any time within 30 days at the sole discretion of the user or administrator who approves it.
 */
class SuggestedPostInfo extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'state' => [
				'type' => ['string'],
				'required' => true,
			],
			'price' => [
				'type' => [SuggestedPostPrice::class],
			],
			'send_date' => [
				'type' => ['int'],
			],
		];
	}
	/**
	* @return string
	*/

	public function getState(): mixed
	{
		return $this->getFieldValue('state');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setState(mixed $value): static
	{
		return $this->setFieldValue('state', $value);
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