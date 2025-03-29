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
 * The boost was obtained by the creation of a Telegram Premium or a Telegram Star giveaway. This boosts the chat 4 times for the duration of the corresponding Telegram Premium subscription for Telegram Premium giveaways and *prize\_star\_count* / 500 times for one year for Telegram Star giveaways.
 * @property string $source
 * Source of the boost, always “giveaway”
 * @property int $giveawayMessageId
 * Identifier of a message in the chat with the giveaway; the message could have been deleted already. May be 0 if the message isn't sent yet.
 * @property User $user
 * *Optional*. User that won the prize in the giveaway if any; for Telegram Premium giveaways only
 * @property int $prizeStarCount
 * *Optional*. The number of Telegram Stars to be split between giveaway winners; for Telegram Star giveaways only
 * @property bool $isUnclaimed
 * *Optional*. True, if the giveaway was completed, but there was no user to win the prize
 */
class ChatBoostSourceGiveaway extends ChatBoostSource
{
	public static function getFields(): array
	{
		return [
			'source' => [
				'type' => ['string'],
				'value' => 'giveaway',
				'required' => true,
			],
			'giveaway_message_id' => [
				'type' => ['int'],
				'required' => true,
			],
			'user' => [
				'type' => [User::class],
			],
			'prize_star_count' => [
				'type' => ['int'],
			],
			'is_unclaimed' => [
				'type' => ['bool'],
			],
		];
	}
	/**
	* @return string
	*/

	public function getSource(): mixed
	{
		return $this->getFieldValue('source');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setSource(mixed $value): static
	{
		return $this->setFieldValue('source', $value);
	}

	/**
	* @return int
	*/

	public function getGiveawayMessageId(): mixed
	{
		return $this->getFieldValue('giveaway_message_id');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setGiveawayMessageId(mixed $value): static
	{
		return $this->setFieldValue('giveaway_message_id', $value);
	}

	/**
	* @return User
	*/

	public function getUser(): mixed
	{
		return $this->getFieldValue('user');
	}

	/**
	* @param User $value
	* @return static
	*/

	public function setUser(mixed $value): static
	{
		return $this->setFieldValue('user', $value);
	}

	/**
	* @return int
	*/

	public function getPrizeStarCount(): mixed
	{
		return $this->getFieldValue('prize_star_count');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setPrizeStarCount(mixed $value): static
	{
		return $this->setFieldValue('prize_star_count', $value);
	}

	/**
	* @return bool
	*/

	public function getIsUnclaimed(): mixed
	{
		return $this->getFieldValue('is_unclaimed');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setIsUnclaimed(mixed $value): static
	{
		return $this->setFieldValue('is_unclaimed', $value);
	}

}