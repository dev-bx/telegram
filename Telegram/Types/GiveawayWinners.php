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
* This object represents a message about the completion of a giveaway with public winners.
* @property Chat $chat
* The chat that created the giveaway
* @property int $giveawayMessageId
* Identifier of the message with the giveaway in the chat
* @property int $winnersSelectionDate
* Point in time (Unix timestamp) when winners of the giveaway were selected
* @property int $winnerCount
* Total number of winners in the giveaway
* @property Base\ArrayObject|User[] $winners
* List of up to 100 winners of the giveaway
* @property int $additionalChatCount
* *Optional*. The number of other chats the user had to join in order to be eligible for the giveaway
* @property int $prizeStarCount
* *Optional*. The number of Telegram Stars that were split between giveaway winners; for Telegram Star giveaways only
* @property int $premiumSubscriptionMonthCount
* *Optional*. The number of months the Telegram Premium subscription won from the giveaway will be active for; for Telegram Premium giveaways only
* @property int $unclaimedPrizeCount
* *Optional*. Number of undistributed prizes
* @property bool $onlyNewMembers
* *Optional*. *True*, if only users who had joined the chats after the giveaway started were eligible to win
* @property bool $wasRefunded
* *Optional*. *True*, if the giveaway was canceled because the payment for it was refunded
* @property string $prizeDescription
* *Optional*. Description of additional giveaway prize
*/

class GiveawayWinners extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'chat' => [
				'type' => [Chat::class],
				'required' => true,
			],
			'giveaway_message_id' => [
				'type' => ['int'],
				'required' => true,
			],
			'winners_selection_date' => [
				'type' => ['int'],
				'required' => true,
			],
			'winner_count' => [
				'type' => ['int'],
				'required' => true,
			],
			'winners' => [
				'type' => [User::class],
				'isArray' => true,
				'required' => true,
			],
			'additional_chat_count' => [
				'type' => ['int'],
			],
			'prize_star_count' => [
				'type' => ['int'],
			],
			'premium_subscription_month_count' => [
				'type' => ['int'],
			],
			'unclaimed_prize_count' => [
				'type' => ['int'],
			],
			'only_new_members' => [
				'type' => ['bool'],
			],
			'was_refunded' => [
				'type' => ['bool'],
			],
			'prize_description' => [
				'type' => ['string'],
			],
		];
	}
	/**
	* @return Chat
	*/

	public function getChat(): mixed
	{
		return $this->getFieldValue('chat');
	}

	/**
	* @param Chat $value
	* @return static
	*/

	public function setChat(mixed $value): static
	{
		return $this->setFieldValue('chat', $value);
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
	* @return int
	*/

	public function getWinnersSelectionDate(): mixed
	{
		return $this->getFieldValue('winners_selection_date');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setWinnersSelectionDate(mixed $value): static
	{
		return $this->setFieldValue('winners_selection_date', $value);
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
	* @return Base\ArrayObject|User[]
	*/

	public function getWinners(): mixed
	{
		return $this->getFieldValue('winners');
	}

	/**
	* @param Base\ArrayObject|User[] $value
	* @return static
	*/

	public function setWinners(mixed $value): static
	{
		return $this->setFieldValue('winners', $value);
	}

	/**
	* @return int
	*/

	public function getAdditionalChatCount(): mixed
	{
		return $this->getFieldValue('additional_chat_count');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setAdditionalChatCount(mixed $value): static
	{
		return $this->setFieldValue('additional_chat_count', $value);
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
	* @return int
	*/

	public function getPremiumSubscriptionMonthCount(): mixed
	{
		return $this->getFieldValue('premium_subscription_month_count');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setPremiumSubscriptionMonthCount(mixed $value): static
	{
		return $this->setFieldValue('premium_subscription_month_count', $value);
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
	* @return bool
	*/

	public function getOnlyNewMembers(): mixed
	{
		return $this->getFieldValue('only_new_members');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setOnlyNewMembers(mixed $value): static
	{
		return $this->setFieldValue('only_new_members', $value);
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
	* @return string
	*/

	public function getPrizeDescription(): mixed
	{
		return $this->getFieldValue('prize_description');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setPrizeDescription(mixed $value): static
	{
		return $this->setFieldValue('prize_description', $value);
	}

}