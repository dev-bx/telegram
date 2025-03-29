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
 * This object represents a service message about the completion of a giveaway without public winners.
 * @property int $winnerCount
 * Number of winners in the giveaway
 * @property int $unclaimedPrizeCount
 * *Optional*. Number of undistributed prizes
 * @property Message $giveawayMessage
 * *Optional*. Message with the giveaway that was completed, if it wasn't deleted
 * @property bool $isStarGiveaway
 * *Optional*. *True*, if the giveaway is a Telegram Star giveaway. Otherwise, currently, the giveaway is a Telegram Premium giveaway.
 */
class GiveawayCompleted extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'winner_count' => [
				'type' => ['int'],
				'required' => true,
			],
			'unclaimed_prize_count' => [
				'type' => ['int'],
			],
			'giveaway_message' => [
				'type' => [Message::class],
			],
			'is_star_giveaway' => [
				'type' => ['bool'],
			],
		];
	}
	/**
	* @return int
	*/

	public function getWinnerCount(): mixed
	{
		return $this->getFieldValue('winner_count');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setWinnerCount(mixed $value): static
	{
		return $this->setFieldValue('winner_count', $value);
	}

	/**
	* @return int
	*/

	public function getUnclaimedPrizeCount(): mixed
	{
		return $this->getFieldValue('unclaimed_prize_count');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setUnclaimedPrizeCount(mixed $value): static
	{
		return $this->setFieldValue('unclaimed_prize_count', $value);
	}

	/**
	* @return Message
	*/

	public function getGiveawayMessage(): mixed
	{
		return $this->getFieldValue('giveaway_message');
	}

	/**
	* @param Message $value
	* @return static
	*/

	public function setGiveawayMessage(mixed $value): static
	{
		return $this->setFieldValue('giveaway_message', $value);
	}

	/**
	* @return bool
	*/

	public function getIsStarGiveaway(): mixed
	{
		return $this->getFieldValue('is_star_giveaway');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setIsStarGiveaway(mixed $value): static
	{
		return $this->setFieldValue('is_star_giveaway', $value);
	}

}