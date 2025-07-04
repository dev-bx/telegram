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
 * Describes a service message about a unique gift that was sent or received.
 * @property UniqueGift $gift
 * Information about the gift
 * @property string $origin
 * Origin of the gift. Currently, either “upgrade” for gifts upgraded from regular gifts, “transfer” for gifts transferred from other users or channels, or “resale” for gifts bought from other users
 * @property int $lastResaleStarCount
 * *Optional*. For gifts bought from other users, the price paid for the gift
 * @property string $ownedGiftId
 * *Optional*. Unique identifier of the received gift for the bot; only present for gifts received on behalf of business accounts
 * @property int $transferStarCount
 * *Optional*. Number of Telegram Stars that must be paid to transfer the gift; omitted if the bot cannot transfer the gift
 * @property int $nextTransferDate
 * *Optional*. Point in time (Unix timestamp) when the gift can be transferred. If it is in the past, then the gift can be transferred now
 */
class UniqueGiftInfo extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'gift' => [
				'type' => [UniqueGift::class],
				'required' => true,
			],
			'origin' => [
				'type' => ['string'],
				'required' => true,
			],
			'last_resale_star_count' => [
				'type' => ['int'],
			],
			'owned_gift_id' => [
				'type' => ['string'],
			],
			'transfer_star_count' => [
				'type' => ['int'],
			],
			'next_transfer_date' => [
				'type' => ['int'],
			],
		];
	}
	/**
	* @return UniqueGift
	*/

	public function getGift(): mixed
	{
		return $this->getFieldValue('gift');
	}

	/**
	* @param UniqueGift $value
	* @return static
	*/

	public function setGift(mixed $value): static
	{
		return $this->setFieldValue('gift', $value);
	}

	/**
	* @return string
	*/

	public function getOrigin(): mixed
	{
		return $this->getFieldValue('origin');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setOrigin(mixed $value): static
	{
		return $this->setFieldValue('origin', $value);
	}

	/**
	* @return int
	*/

	public function getLastResaleStarCount(): mixed
	{
		return $this->getFieldValue('last_resale_star_count');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setLastResaleStarCount(mixed $value): static
	{
		return $this->setFieldValue('last_resale_star_count', $value);
	}

	/**
	* @return string
	*/

	public function getOwnedGiftId(): mixed
	{
		return $this->getFieldValue('owned_gift_id');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setOwnedGiftId(mixed $value): static
	{
		return $this->setFieldValue('owned_gift_id', $value);
	}

	/**
	* @return int
	*/

	public function getTransferStarCount(): mixed
	{
		return $this->getFieldValue('transfer_star_count');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setTransferStarCount(mixed $value): static
	{
		return $this->setFieldValue('transfer_star_count', $value);
	}

	/**
	* @return int
	*/

	public function getNextTransferDate(): mixed
	{
		return $this->getFieldValue('next_transfer_date');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setNextTransferDate(mixed $value): static
	{
		return $this->setFieldValue('next_transfer_date', $value);
	}

}