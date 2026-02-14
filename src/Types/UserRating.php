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
 * This object describes the rating of a user based on their Telegram Star spendings.
 * @property int $level
 * Current level of the user, indicating their reliability when purchasing digital goods and services. A higher level suggests a more trustworthy customer; a negative level is likely reason for concern.
 * @property int $rating
 * Numerical value of the user's rating; the higher the rating, the better
 * @property int $currentLevelRating
 * The rating value required to get the current level
 * @property int $nextLevelRating
 * *Optional*. The rating value required to get to the next level; omitted if the maximum level was reached
 */
class UserRating extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'level' => [
				'type' => ['int'],
				'required' => true,
			],
			'rating' => [
				'type' => ['int'],
				'required' => true,
			],
			'current_level_rating' => [
				'type' => ['int'],
				'required' => true,
			],
			'next_level_rating' => [
				'type' => ['int'],
			],
		];
	}
	/**
	* @return int
	*/

	public function getLevel(): mixed
	{
		return $this->getFieldValue('level');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setLevel(mixed $value): static
	{
		return $this->setFieldValue('level', $value);
	}

	/**
	* @return int
	*/

	public function getRating(): mixed
	{
		return $this->getFieldValue('rating');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setRating(mixed $value): static
	{
		return $this->setFieldValue('rating', $value);
	}

	/**
	* @return int
	*/

	public function getCurrentLevelRating(): mixed
	{
		return $this->getFieldValue('current_level_rating');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setCurrentLevelRating(mixed $value): static
	{
		return $this->setFieldValue('current_level_rating', $value);
	}

	/**
	* @return int
	*/

	public function getNextLevelRating(): mixed
	{
		return $this->getFieldValue('next_level_rating');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setNextLevelRating(mixed $value): static
	{
		return $this->setFieldValue('next_level_rating', $value);
	}

}