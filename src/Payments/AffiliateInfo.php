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
 * Contains information about the affiliate that received a commission via this transaction.
 * @property Types\User $affiliateUser
 * *Optional*. The bot or the user that received an affiliate commission if it was received by a bot or a user
 * @property Types\Chat $affiliateChat
 * *Optional*. The chat that received an affiliate commission if it was received by a chat
 * @property int $commissionPerMille
 * The number of Telegram Stars received by the affiliate for each 1000 Telegram Stars received by the bot from referred users
 * @property int $amount
 * Integer amount of Telegram Stars received by the affiliate from the transaction, rounded to 0; can be negative for refunds
 * @property int $nanostarAmount
 * *Optional*. The number of 1/1000000000 shares of Telegram Stars received by the affiliate; from -999999999 to 999999999; can be negative for refunds
 */
class AffiliateInfo extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'affiliate_user' => [
				'type' => [Types\User::class],
			],
			'affiliate_chat' => [
				'type' => [Types\Chat::class],
			],
			'commission_per_mille' => [
				'type' => ['int'],
				'required' => true,
			],
			'amount' => [
				'type' => ['int'],
				'required' => true,
			],
			'nanostar_amount' => [
				'type' => ['int'],
			],
		];
	}
	/**
	* @return Types\User
	*/

	public function getAffiliateUser(): mixed
	{
		return $this->getFieldValue('affiliate_user');
	}

	/**
	* @param Types\User $value
	* @return static
	*/

	public function setAffiliateUser(mixed $value): static
	{
		return $this->setFieldValue('affiliate_user', $value);
	}

	/**
	* @return Types\Chat
	*/

	public function getAffiliateChat(): mixed
	{
		return $this->getFieldValue('affiliate_chat');
	}

	/**
	* @param Types\Chat $value
	* @return static
	*/

	public function setAffiliateChat(mixed $value): static
	{
		return $this->setFieldValue('affiliate_chat', $value);
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

	/**
	* @return int
	*/

	public function getAmount(): mixed
	{
		return $this->getFieldValue('amount');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setAmount(mixed $value): static
	{
		return $this->setFieldValue('amount', $value);
	}

	/**
	* @return int
	*/

	public function getNanostarAmount(): mixed
	{
		return $this->getFieldValue('nanostar_amount');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setNanostarAmount(mixed $value): static
	{
		return $this->setFieldValue('nanostar_amount', $value);
	}

}