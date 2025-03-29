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
 * Describes the birthdate of a user.
 * @property int $day
 * Day of the user's birth; 1-31
 * @property int $month
 * Month of the user's birth; 1-12
 * @property int $year
 * *Optional*. Year of the user's birth
 */
class Birthdate extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'day' => [
				'type' => ['int'],
				'required' => true,
			],
			'month' => [
				'type' => ['int'],
				'required' => true,
			],
			'year' => [
				'type' => ['int'],
			],
		];
	}
	/**
	* @return int
	*/

	public function getDay(): mixed
	{
		return $this->getFieldValue('day');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setDay(mixed $value): static
	{
		return $this->setFieldValue('day', $value);
	}

	/**
	* @return int
	*/

	public function getMonth(): mixed
	{
		return $this->getFieldValue('month');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setMonth(mixed $value): static
	{
		return $this->setFieldValue('month', $value);
	}

	/**
	* @return int
	*/

	public function getYear(): mixed
	{
		return $this->getFieldValue('year');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setYear(mixed $value): static
	{
		return $this->setFieldValue('year', $value);
	}

}