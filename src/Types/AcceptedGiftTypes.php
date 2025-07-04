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
 * This object describes the types of gifts that can be gifted to a user or a chat.
 * @property bool $unlimitedGifts
 * *True*, if unlimited regular gifts are accepted
 * @property bool $limitedGifts
 * *True*, if limited regular gifts are accepted
 * @property bool $uniqueGifts
 * *True*, if unique gifts or gifts that can be upgraded to unique for free are accepted
 * @property bool $premiumSubscription
 * *True*, if a Telegram Premium subscription is accepted
 */
class AcceptedGiftTypes extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'unlimited_gifts' => [
				'type' => ['bool'],
				'required' => true,
			],
			'limited_gifts' => [
				'type' => ['bool'],
				'required' => true,
			],
			'unique_gifts' => [
				'type' => ['bool'],
				'required' => true,
			],
			'premium_subscription' => [
				'type' => ['bool'],
				'required' => true,
			],
		];
	}
	/**
	* @return bool
	*/

	public function getUnlimitedGifts(): mixed
	{
		return $this->getFieldValue('unlimited_gifts');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setUnlimitedGifts(mixed $value): static
	{
		return $this->setFieldValue('unlimited_gifts', $value);
	}

	/**
	* @return bool
	*/

	public function getLimitedGifts(): mixed
	{
		return $this->getFieldValue('limited_gifts');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setLimitedGifts(mixed $value): static
	{
		return $this->setFieldValue('limited_gifts', $value);
	}

	/**
	* @return bool
	*/

	public function getUniqueGifts(): mixed
	{
		return $this->getFieldValue('unique_gifts');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setUniqueGifts(mixed $value): static
	{
		return $this->setFieldValue('unique_gifts', $value);
	}

	/**
	* @return bool
	*/

	public function getPremiumSubscription(): mixed
	{
		return $this->getFieldValue('premium_subscription');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setPremiumSubscription(mixed $value): static
	{
		return $this->setFieldValue('premium_subscription', $value);
	}

}