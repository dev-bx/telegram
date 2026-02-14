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
 * Describes the price of a suggested post.
 * @property string $currency
 * Currency in which the post will be paid. Currently, must be one of “XTR” for Telegram Stars or “TON” for toncoins
 * @property int $amount
 * The amount of the currency that will be paid for the post in the *smallest units* of the currency, i.e. Telegram Stars or nanotoncoins. Currently, price in Telegram Stars must be between 5 and 100000, and price in nanotoncoins must be between 10000000 and 10000000000000.
 */
class SuggestedPostPrice extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'currency' => [
				'type' => ['string'],
				'required' => true,
			],
			'amount' => [
				'type' => ['int'],
				'required' => true,
			],
		];
	}
	/**
	* @return string
	*/

	public function getCurrency(): mixed
	{
		return $this->getFieldValue('currency');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setCurrency(mixed $value): static
	{
		return $this->setFieldValue('currency', $value);
	}

	/**
	* @return int
	*/

	public function getAmount(): mixed
	{
		return $this->getFieldValue('amount');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setAmount(mixed $value): static
	{
		return $this->setFieldValue('amount', $value);
	}

}