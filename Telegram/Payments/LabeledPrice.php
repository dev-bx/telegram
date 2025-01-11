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
* This object represents a portion of the price for goods or services.
* @property string $label
* Portion label
* @property int $amount
* Price of the product in the *smallest units* of the [currency](/bots/payments#supported-currencies) (integer, **not** float/double). For example, for a price of `US$ 1.45` pass `amount = 145`. See the *exp* parameter in [currencies.json](/bots/payments/currencies.json), it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
*/

class LabeledPrice extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'label' => [
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

	public function getLabel(): mixed
	{
		return $this->getFieldValue('label');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setLabel(mixed $value): static
	{
		return $this->setFieldValue('label', $value);
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