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
 * Describes an amount of Telegram Stars.
 * @property int $amount
 * Integer amount of Telegram Stars, rounded to 0; can be negative
 * @property int $nanostarAmount
 * *Optional*. The number of 1/1000000000 shares of Telegram Stars; from -999999999 to 999999999; can be negative if and only if *amount* is non-positive
 */
class StarAmount extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'amount' => [
				'type' => ['int'],
				'required' => true,
			],
			'nanostar_amount' => [
				'type' => ['int'],
			],
		];
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

	/**
	* @return int
	*/

	public function getNanostarAmount(): mixed
	{
		return $this->getFieldValue('nanostar_amount');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setNanostarAmount(mixed $value): static
	{
		return $this->setFieldValue('nanostar_amount', $value);
	}

}