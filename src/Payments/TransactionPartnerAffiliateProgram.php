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

namespace DevBX\Telegram\Payments;

use DevBX\Telegram\Base;
use DevBX\Telegram\Types;


/**
* Describes the affiliate program that issued the affiliate commission received via this transaction.
* @property string $type
* Type of the transaction partner, always “affiliate\_program”
* @property Types\User $sponsorUser
* *Optional*. Information about the bot that sponsored the affiliate program
* @property int $commissionPerMille
* The number of Telegram Stars received by the bot for each 1000 Telegram Stars received by the affiliate program sponsor from referred users
*/

class TransactionPartnerAffiliateProgram extends TransactionPartner
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => 'affiliate_program',
				'required' => true,
			],
			'sponsor_user' => [
				'type' => [Types\User::class],
			],
			'commission_per_mille' => [
				'type' => ['int'],
				'required' => true,
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
	* @return Types\User
	*/

	public function getSponsorUser(): mixed
	{
		return $this->getFieldValue('sponsor_user');
	}

	/**
	* @param Types\User $value
	* @return static
	*/

	public function setSponsorUser(mixed $value): static
	{
		return $this->setFieldValue('sponsor_user', $value);
	}

	/**
	* @return int
	*/

	public function getCommissionPerMille(): mixed
	{
		return $this->getFieldValue('commission_per_mille');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setCommissionPerMille(mixed $value): static
	{
		return $this->setFieldValue('commission_per_mille', $value);
	}

}