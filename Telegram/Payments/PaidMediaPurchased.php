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

namespace DevBX\Telegram\Payments;

use DevBX\Telegram\Base;
use DevBX\Telegram\Types;


/**
* This object contains information about a paid media purchase.
* @property Types\User $from
* User who purchased the media
* @property string $paidMediaPayload
* Bot-specified paid media payload
*/

class PaidMediaPurchased extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'from' => [
				'type' => [Types\User::class],
				'required' => true,
			],
			'paid_media_payload' => [
				'type' => ['string'],
				'required' => true,
			],
		];
	}
	/**
	* @return Types\User
	*/

	public function getFrom(): mixed
	{
		return $this->getFieldValue('from');
	}

	/**
	* @param Types\User $value
	* @return static
	*/

	public function setFrom(mixed $value): static
	{
		return $this->setFieldValue('from', $value);
	}

	/**
	* @return string
	*/

	public function getPaidMediaPayload(): mixed
	{
		return $this->getFieldValue('paid_media_payload');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setPaidMediaPayload(mixed $value): static
	{
		return $this->setFieldValue('paid_media_payload', $value);
	}

}