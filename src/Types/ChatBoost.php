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
* This object contains information about a chat boost.
* @property string $boostId
* Unique identifier of the boost
* @property int $addDate
* Point in time (Unix timestamp) when the chat was boosted
* @property int $expirationDate
* Point in time (Unix timestamp) when the boost will automatically expire, unless the booster's Telegram Premium subscription is prolonged
* @property ChatBoostSource|ChatBoostSourcePremium|ChatBoostSourceGiftCode|ChatBoostSourceGiveaway $source
* Source of the added boost
*/

class ChatBoost extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'boost_id' => [
				'type' => ['string'],
				'required' => true,
			],
			'add_date' => [
				'type' => ['int'],
				'required' => true,
			],
			'expiration_date' => [
				'type' => ['int'],
				'required' => true,
			],
			'source' => [
				'type' => [ChatBoostSource::class],
				'required' => true,
			],
		];
	}
	/**
	* @return string
	*/

	public function getBoostId(): mixed
	{
		return $this->getFieldValue('boost_id');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setBoostId(mixed $value): static
	{
		return $this->setFieldValue('boost_id', $value);
	}

	/**
	* @return int
	*/

	public function getAddDate(): mixed
	{
		return $this->getFieldValue('add_date');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setAddDate(mixed $value): static
	{
		return $this->setFieldValue('add_date', $value);
	}

	/**
	* @return int
	*/

	public function getExpirationDate(): mixed
	{
		return $this->getFieldValue('expiration_date');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setExpirationDate(mixed $value): static
	{
		return $this->setFieldValue('expiration_date', $value);
	}

	/**
	* @return ChatBoostSource|ChatBoostSourcePremium|ChatBoostSourceGiftCode|ChatBoostSourceGiveaway
	*/

	public function getSource(): mixed
	{
		return $this->getFieldValue('source');
	}

	/**
	* @param ChatBoostSource|ChatBoostSourcePremium|ChatBoostSourceGiftCode|ChatBoostSourceGiveaway $value
	* @return static
	*/

	public function setSource(mixed $value): static
	{
		return $this->setFieldValue('source', $value);
	}

}