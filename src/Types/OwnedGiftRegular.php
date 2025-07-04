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
 * Describes a regular gift owned by a user or a chat.
 * @property string $type
 * Type of the gift, always “regular”
 * @property Gift $gift
 * Information about the regular gift
 * @property string $ownedGiftId
 * *Optional*. Unique identifier of the gift for the bot; for gifts received on behalf of business accounts only
 * @property User $senderUser
 * *Optional*. Sender of the gift if it is a known user
 * @property int $sendDate
 * Date the gift was sent in Unix time
 * @property string $text
 * *Optional*. Text of the message that was added to the gift
 * @property Base\ArrayObject|MessageEntity[] $entities
 * *Optional*. Special entities that appear in the text
 * @property bool $isPrivate
 * *Optional*. *True*, if the sender and gift text are shown only to the gift receiver; otherwise, everyone will be able to see them
 * @property bool $isSaved
 * *Optional*. *True*, if the gift is displayed on the account's profile page; for gifts received on behalf of business accounts only
 * @property bool $canBeUpgraded
 * *Optional*. *True*, if the gift can be upgraded to a unique gift; for gifts received on behalf of business accounts only
 * @property bool $wasRefunded
 * *Optional*. *True*, if the gift was refunded and isn't available anymore
 * @property int $convertStarCount
 * *Optional*. Number of Telegram Stars that can be claimed by the receiver instead of the gift; omitted if the gift cannot be converted to Telegram Stars
 * @property int $prepaidUpgradeStarCount
 * *Optional*. Number of Telegram Stars that were paid by the sender for the ability to upgrade the gift
 */
class OwnedGiftRegular extends OwnedGift
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => 'regular',
				'required' => true,
			],
			'gift' => [
				'type' => [Gift::class],
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
			'text' => [
				'type' => ['string'],
			],
			'entities' => [
				'type' => [MessageEntity::class],
				'isArray' => true,
			],
			'is_private' => [
				'type' => ['bool'],
			],
			'is_saved' => [
				'type' => ['bool'],
			],
			'can_be_upgraded' => [
				'type' => ['bool'],
			],
			'was_refunded' => [
				'type' => ['bool'],
			],
			'convert_star_count' => [
				'type' => ['int'],
			],
			'prepaid_upgrade_star_count' => [
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
	* @return Gift
	*/

	public function getGift(): mixed
	{
		return $this->getFieldValue('gift');
	}

	/**
	* @param Gift $value
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
	* @return string
	*/

	public function getText(): mixed
	{
		return $this->getFieldValue('text');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setText(mixed $value): static
	{
		return $this->setFieldValue('text', $value);
	}

	/**
	* @return Base\ArrayObject|MessageEntity[]
	*/

	public function getEntities(): mixed
	{
		return $this->getFieldValue('entities');
	}

	/**
	* @param Base\ArrayObject|MessageEntity[] $value
	* @return static
	*/

	public function setEntities(mixed $value): static
	{
		return $this->setFieldValue('entities', $value);
	}

	/**
	* @return bool
	*/

	public function getIsPrivate(): mixed
	{
		return $this->getFieldValue('is_private');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setIsPrivate(mixed $value): static
	{
		return $this->setFieldValue('is_private', $value);
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

	public function getCanBeUpgraded(): mixed
	{
		return $this->getFieldValue('can_be_upgraded');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setCanBeUpgraded(mixed $value): static
	{
		return $this->setFieldValue('can_be_upgraded', $value);
	}

	/**
	* @return bool
	*/

	public function getWasRefunded(): mixed
	{
		return $this->getFieldValue('was_refunded');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setWasRefunded(mixed $value): static
	{
		return $this->setFieldValue('was_refunded', $value);
	}

	/**
	* @return int
	*/

	public function getConvertStarCount(): mixed
	{
		return $this->getFieldValue('convert_star_count');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setConvertStarCount(mixed $value): static
	{
		return $this->setFieldValue('convert_star_count', $value);
	}

	/**
	* @return int
	*/

	public function getPrepaidUpgradeStarCount(): mixed
	{
		return $this->getFieldValue('prepaid_upgrade_star_count');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setPrepaidUpgradeStarCount(mixed $value): static
	{
		return $this->setFieldValue('prepaid_upgrade_star_count', $value);
	}

}