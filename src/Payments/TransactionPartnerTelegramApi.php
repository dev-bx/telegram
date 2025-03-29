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


/**
 * Describes a transaction with payment for [paid broadcasting](#paid-broadcasts).
 * @property string $type
 * Type of the transaction partner, always “telegram\_api”
 * @property int $requestCount
 * The number of successful requests that exceeded regular limits and were therefore billed
 */
class TransactionPartnerTelegramApi extends TransactionPartner
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => 'telegram_api',
				'required' => true,
			],
			'request_count' => [
				'type' => ['int'],
				'required' => true,
			],
		];
	}
	/**
	* @return string
	*/

	public function getType(): mixed
	{
		return $this->getFieldValue('type');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setType(mixed $value): static
	{
		return $this->setFieldValue('type', $value);
	}

	/**
	* @return int
	*/

	public function getRequestCount(): mixed
	{
		return $this->getFieldValue('request_count');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setRequestCount(mixed $value): static
	{
		return $this->setFieldValue('request_count', $value);
	}

}