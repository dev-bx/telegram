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
 * Describes a service message about a regular gift that was sent or received.
 * @property Gift $gift
 * Information about the gift
 * @property string $ownedGiftId
 * *Optional*. Unique identifier of the received gift for the bot; only present for gifts received on behalf of business accounts
 * @property int $convertStarCount
 * *Optional*. Number of Telegram Stars that can be claimed by the receiver by converting the gift; omitted if conversion to Telegram Stars is impossible
 * @property int $prepaidUpgradeStarCount
 * *Optional*. Number of Telegram Stars that were prepaid by the sender for the ability to upgrade the gift
 * @property bool $canBeUpgraded
 * *Optional*. *True*, if the gift can be upgraded to a unique gift
 * @property string $text
 * *Optional*. Text of the message that was added to the gift
 * @property Base\ArrayObject|MessageEntity[] $entities
 * *Optional*. Special entities that appear in the text
 * @property bool $isPrivate
 * *Optional*. *True*, if the sender and gift text are shown only to the gift receiver; otherwise, everyone will be able to see them
 */
class GiftInfo extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'gift' => [
				'type' => [Gift::class],
				'required' => true,
			],
			'owned_gift_id' => [
				'type' => ['string'],
			],
			'convert_star_count' => [
				'type' => ['int'],
			],
			'prepaid_upgrade_star_count' => [
				'type' => ['int'],
			],
			'can_be_upgraded' => [
				'type' => ['bool'],
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
		];
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

}