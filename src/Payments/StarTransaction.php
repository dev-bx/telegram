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


/**
 * Describes a Telegram Star transaction. Note that if the buyer initiates a chargeback with the payment provider from whom they acquired Stars (e.g., Apple, Google) following this transaction, the refunded Stars will be deducted from the bot's balance. This is outside of Telegram's control.
 * @property string $id
 * Unique identifier of the transaction. Coincides with the identifier of the original transaction for refund transactions. Coincides with *SuccessfulPayment.telegram\_payment\_charge\_id* for successful incoming payments from users.
 * @property int $amount
 * Integer amount of Telegram Stars transferred by the transaction
 * @property int $nanostarAmount
 * *Optional*. The number of 1/1000000000 shares of Telegram Stars transferred by the transaction; from 0 to 999999999
 * @property int $date
 * Date the transaction was created in Unix time
 * @property TransactionPartner|TransactionPartnerUser|TransactionPartnerChat|TransactionPartnerAffiliateProgram|TransactionPartnerFragment|TransactionPartnerTelegramAds|TransactionPartnerTelegramApi|TransactionPartnerOther $source
 * *Optional*. Source of an incoming transaction (e.g., a user purchasing goods or services, Fragment refunding a failed withdrawal). Only for incoming transactions
 * @property TransactionPartner|TransactionPartnerUser|TransactionPartnerChat|TransactionPartnerAffiliateProgram|TransactionPartnerFragment|TransactionPartnerTelegramAds|TransactionPartnerTelegramApi|TransactionPartnerOther $receiver
 * *Optional*. Receiver of an outgoing transaction (e.g., a user for a purchase refund, Fragment for a withdrawal). Only for outgoing transactions
 */
class StarTransaction extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'id' => [
				'type' => ['string'],
				'required' => true,
			],
			'amount' => [
				'type' => ['int'],
				'required' => true,
			],
			'nanostar_amount' => [
				'type' => ['int'],
			],
			'date' => [
				'type' => ['int'],
				'required' => true,
			],
			'source' => [
				'type' => [TransactionPartner::class],
			],
			'receiver' => [
				'type' => [TransactionPartner::class],
			],
		];
	}
	/**
	* @return string
	*/

	public function getId(): mixed
	{
		return $this->getFieldValue('id');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setId(mixed $value): static
	{
		return $this->setFieldValue('id', $value);
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

	/**
	* @return int
	*/

	public function getDate(): mixed
	{
		return $this->getFieldValue('date');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setDate(mixed $value): static
	{
		return $this->setFieldValue('date', $value);
	}

	/**
	* @return TransactionPartner|TransactionPartnerUser|TransactionPartnerChat|TransactionPartnerAffiliateProgram|TransactionPartnerFragment|TransactionPartnerTelegramAds|TransactionPartnerTelegramApi|TransactionPartnerOther
	*/

	public function getSource(): mixed
	{
		return $this->getFieldValue('source');
	}

	/**
	* @param TransactionPartner|TransactionPartnerUser|TransactionPartnerChat|TransactionPartnerAffiliateProgram|TransactionPartnerFragment|TransactionPartnerTelegramAds|TransactionPartnerTelegramApi|TransactionPartnerOther $value
	* @return static
	*/

	public function setSource(mixed $value): static
	{
		return $this->setFieldValue('source', $value);
	}

	/**
	* @return TransactionPartner|TransactionPartnerUser|TransactionPartnerChat|TransactionPartnerAffiliateProgram|TransactionPartnerFragment|TransactionPartnerTelegramAds|TransactionPartnerTelegramApi|TransactionPartnerOther
	*/

	public function getReceiver(): mixed
	{
		return $this->getFieldValue('receiver');
	}

	/**
	* @param TransactionPartner|TransactionPartnerUser|TransactionPartnerChat|TransactionPartnerAffiliateProgram|TransactionPartnerFragment|TransactionPartnerTelegramAds|TransactionPartnerTelegramApi|TransactionPartnerOther $value
	* @return static
	*/

	public function setReceiver(mixed $value): static
	{
		return $this->setFieldValue('receiver', $value);
	}

}