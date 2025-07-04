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
 * Describes a unique gift received and owned by a user or a chat.
 * @property string $type
 * Type of the gift, always “unique”
 * @property UniqueGift $gift
 * Information about the unique gift
 * @property string $ownedGiftId
 * *Optional*. Unique identifier of the received gift for the bot; for gifts received on behalf of business accounts only
 * @property User $senderUser
 * *Optional*. Sender of the gift if it is a known user
 * @property int $sendDate
 * Date the gift was sent in Unix time
 * @property bool $isSaved
 * *Optional*. *True*, if the gift is displayed on the account's profile page; for gifts received on behalf of business accounts only
 * @property bool $canBeTransferred
 * *Optional*. *True*, if the gift can be transferred to another owner; for gifts received on behalf of business accounts only
 * @property int $transferStarCount
 * *Optional*. Number of Telegram Stars that must be paid to transfer the gift; omitted if the bot cannot transfer the gift
 * @property int $nextTransferDate
 * *Optional*. Point in time (Unix timestamp) when the gift can be transferred. If it is in the past, then the gift can be transferred now
 */
class OwnedGiftUnique extends OwnedGift
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => 'unique',
				'required' => true,
			],
			'gift' => [
				'type' => [UniqueGift::class],
				'required' => true,
			],
			'owned_gift_id' => [
				'type' => ['string'],
			],
			'sender_user' => [
				'type' => [User::class],
			],
			'send_date' => [
				'type' => ['int'],
				'required' => true,
			],
			'is_saved' => [
				'type' => ['bool'],
			],
			'can_be_transferred' => [
				'type' => ['bool'],
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
	* @return string
	*/

	public function getType(): mixed
	{
		return $this->getFieldValue('type');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setType(mixed $value): static
	{
		return $this->setFieldValue('type', $value);
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
	* @return User
	*/

	public function getSenderUser(): mixed
	{
		return $this->getFieldValue('sender_user');
	}

	/**
	* @param User $value
	* @return static
	*/

	public function setSenderUser(mixed $value): static
	{
		return $this->setFieldValue('sender_user', $value);
	}

	/**
	* @return int
	*/

	public function getSendDate(): mixed
	{
		return $this->getFieldValue('send_date');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setSendDate(mixed $value): static
	{
		return $this->setFieldValue('send_date', $value);
	}

	/**
	* @return bool
	*/

	public function getIsSaved(): mixed
	{
		return $this->getFieldValue('is_saved');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setIsSaved(mixed $value): static
	{
		return $this->setFieldValue('is_saved', $value);
	}

	/**
	* @return bool
	*/

	public function getCanBeTransferred(): mixed
	{
		return $this->getFieldValue('can_be_transferred');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setCanBeTransferred(mixed $value): static
	{
		return $this->setFieldValue('can_be_transferred', $value);
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