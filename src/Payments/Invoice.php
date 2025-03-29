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
 * This object contains basic information about an invoice.
 * @property string $title
 * Product name
 * @property string $description
 * Product description
 * @property string $startParameter
 * Unique bot deep-linking parameter that can be used to generate this invoice
 * @property string $currency
 * Three-letter ISO 4217 [currency](/bots/payments#supported-currencies) code, or “XTR” for payments in [Telegram Stars](https://t.me/BotNews/90)
 * @property int $totalAmount
 * Total price in the *smallest units* of the currency (integer, **not** float/double). For example, for a price of `US$ 1.45` pass `amount = 145`. See the *exp* parameter in [currencies.json](/bots/payments/currencies.json), it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
 */
class Invoice extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'title' => [
				'type' => ['string'],
				'required' => true,
			],
			'description' => [
				'type' => ['string'],
				'required' => true,
			],
			'start_parameter' => [
				'type' => ['string'],
				'required' => true,
			],
			'currency' => [
				'type' => ['string'],
				'required' => true,
			],
			'total_amount' => [
				'type' => ['int'],
				'required' => true,
			],
		];
	}
	/**
	* @return string
	*/

	public function getTitle(): mixed
	{
		return $this->getFieldValue('title');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setTitle(mixed $value): static
	{
		return $this->setFieldValue('title', $value);
	}

	/**
	* @return string
	*/

	public function getDescription(): mixed
	{
		return $this->getFieldValue('description');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setDescription(mixed $value): static
	{
		return $this->setFieldValue('description', $value);
	}

	/**
	* @return string
	*/

	public function getStartParameter(): mixed
	{
		return $this->getFieldValue('start_parameter');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setStartParameter(mixed $value): static
	{
		return $this->setFieldValue('start_parameter', $value);
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

	public function getTotalAmount(): mixed
	{
		return $this->getFieldValue('total_amount');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setTotalAmount(mixed $value): static
	{
		return $this->setFieldValue('total_amount', $value);
	}

}