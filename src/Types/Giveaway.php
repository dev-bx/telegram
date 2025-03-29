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
 * This object represents a message about a scheduled giveaway.
 * @property Base\ArrayObject|Chat[] $chats
 * The list of chats which the user must join to participate in the giveaway
 * @property int $winnersSelectionDate
 * Point in time (Unix timestamp) when winners of the giveaway will be selected
 * @property int $winnerCount
 * The number of users which are supposed to be selected as winners of the giveaway
 * @property bool $onlyNewMembers
 * *Optional*. *True*, if only users who join the chats after the giveaway started should be eligible to win
 * @property bool $hasPublicWinners
 * *Optional*. *True*, if the list of giveaway winners will be visible to everyone
 * @property string $prizeDescription
 * *Optional*. Description of additional giveaway prize
 * @property string[] $countryCodes
 * *Optional*. A list of two-letter [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes indicating the countries from which eligible users for the giveaway must come. If empty, then all users can participate in the giveaway. Users with a phone number that was bought on Fragment can always participate in giveaways.
 * @property int $prizeStarCount
 * *Optional*. The number of Telegram Stars to be split between giveaway winners; for Telegram Star giveaways only
 * @property int $premiumSubscriptionMonthCount
 * *Optional*. The number of months the Telegram Premium subscription won from the giveaway will be active for; for Telegram Premium giveaways only
 */
class Giveaway extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'chats' => [
				'type' => [Chat::class],
				'isArray' => true,
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
			'only_new_members' => [
				'type' => ['bool'],
			],
			'has_public_winners' => [
				'type' => ['bool'],
			],
			'prize_description' => [
				'type' => ['string'],
			],
			'country_codes' => [
				'type' => ['string'],
				'isArray' => true,
			],
			'prize_star_count' => [
				'type' => ['int'],
			],
			'premium_subscription_month_count' => [
				'type' => ['int'],
			],
		];
	}
	/**
	* @return Base\ArrayObject|Chat[]
	*/

	public function getChats(): mixed
	{
		return $this->getFieldValue('chats');
	}

	/**
	* @param Base\ArrayObject|Chat[] $value
	* @return static
	*/

	public function setChats(mixed $value): static
	{
		return $this->setFieldValue('chats', $value);
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

	public function getHasPublicWinners(): mixed
	{
		return $this->getFieldValue('has_public_winners');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setHasPublicWinners(mixed $value): static
	{
		return $this->setFieldValue('has_public_winners', $value);
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

	/**
	* @return string[]
	*/

	public function getCountryCodes(): mixed
	{
		return $this->getFieldValue('country_codes');
	}

	/**
	* @param string[] $value
	* @return static
	*/

	public function setCountryCodes(mixed $value): static
	{
		return $this->setFieldValue('country_codes', $value);
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

}