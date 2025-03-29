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
 * Describes the opening hours of a business.
 * @property string $timeZoneName
 * Unique name of the time zone for which the opening hours are defined
 * @property Base\ArrayObject|BusinessOpeningHoursInterval[] $openingHours
 * List of time intervals describing business opening hours
 */
class BusinessOpeningHours extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'time_zone_name' => [
				'type' => ['string'],
				'required' => true,
			],
			'opening_hours' => [
				'type' => [BusinessOpeningHoursInterval::class],
				'isArray' => true,
				'required' => true,
			],
		];
	}
	/**
	* @return string
	*/

	public function getTimeZoneName(): mixed
	{
		return $this->getFieldValue('time_zone_name');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setTimeZoneName(mixed $value): static
	{
		return $this->setFieldValue('time_zone_name', $value);
	}

	/**
	* @return Base\ArrayObject|BusinessOpeningHoursInterval[]
	*/

	public function getOpeningHours(): mixed
	{
		return $this->getFieldValue('opening_hours');
	}

	/**
	* @param Base\ArrayObject|BusinessOpeningHoursInterval[] $value
	* @return static
	*/

	public function setOpeningHours(mixed $value): static
	{
		return $this->setFieldValue('opening_hours', $value);
	}

}