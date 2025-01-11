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
* Contains a list of Telegram Star transactions.
* @property Base\ArrayObject|StarTransaction[] $transactions
* The list of transactions
*/

class StarTransactions extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'transactions' => [
				'type' => [StarTransaction::class],
				'isArray' => true,
				'required' => true,
			],
		];
	}
	/**
	* @return Base\ArrayObject|StarTransaction[]
	*/

	public function getTransactions(): mixed
	{
		return $this->getFieldValue('transactions');
	}

	/**
	* @param Base\ArrayObject|StarTransaction[] $value
	* @return static
	*/

	public function setTransactions(mixed $value): static
	{
		return $this->setFieldValue('transactions', $value);
	}

}