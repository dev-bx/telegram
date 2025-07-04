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
 * Describes a transaction with a user.
 * @property string $type
 * Type of the transaction partner, always “user”
 * @property string $transactionType
 * Type of the transaction, currently one of “invoice\_payment” for payments via invoices, “paid\_media\_payment” for payments for paid media, “gift\_purchase” for gifts sent by the bot, “premium\_purchase” for Telegram Premium subscriptions gifted by the bot, “business\_account\_transfer” for direct transfers from managed business accounts
 * @property Types\User $user
 * Information about the user
 * @property AffiliateInfo $affiliate
 * *Optional*. Information about the affiliate that received a commission via this transaction. Can be available only for “invoice\_payment” and “paid\_media\_payment” transactions.
 * @property string $invoicePayload
 * *Optional*. Bot-specified invoice payload. Can be available only for “invoice\_payment” transactions.
 * @property int $subscriptionPeriod
 * *Optional*. The duration of the paid subscription. Can be available only for “invoice\_payment” transactions.
 * @property Base\ArrayObject|Types\PaidMedia[] $paidMedia
 * *Optional*. Information about the paid media bought by the user; for “paid\_media\_payment” transactions only
 * @property string $paidMediaPayload
 * *Optional*. Bot-specified paid media payload. Can be available only for “paid\_media\_payment” transactions.
 * @property Types\Gift $gift
 * *Optional*. The gift sent to the user by the bot; for “gift\_purchase” transactions only
 * @property int $premiumSubscriptionDuration
 * *Optional*. Number of months the gifted Telegram Premium subscription will be active for; for “premium\_purchase” transactions only
 */
class TransactionPartnerUser extends TransactionPartner
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => 'user',
				'required' => true,
			],
			'transaction_type' => [
				'type' => ['string'],
				'required' => true,
			],
			'user' => [
				'type' => [Types\User::class],
				'required' => true,
			],
			'affiliate' => [
				'type' => [AffiliateInfo::class],
			],
			'invoice_payload' => [
				'type' => ['string'],
			],
			'subscription_period' => [
				'type' => ['int'],
			],
			'paid_media' => [
				'type' => [Types\PaidMedia::class],
				'isArray' => true,
			],
			'paid_media_payload' => [
				'type' => ['string'],
			],
			'gift' => [
				'type' => [Types\Gift::class],
			],
			'premium_subscription_duration' => [
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
	* @return string
	*/

	public function getTransactionType(): mixed
	{
		return $this->getFieldValue('transaction_type');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setTransactionType(mixed $value): static
	{
		return $this->setFieldValue('transaction_type', $value);
	}

	/**
	* @return Types\User
	*/

	public function getUser(): mixed
	{
		return $this->getFieldValue('user');
	}

	/**
	* @param Types\User $value
	* @return static
	*/

	public function setUser(mixed $value): static
	{
		return $this->setFieldValue('user', $value);
	}

	/**
	* @return AffiliateInfo
	*/

	public function getAffiliate(): mixed
	{
		return $this->getFieldValue('affiliate');
	}

	/**
	* @param AffiliateInfo $value
	* @return static
	*/

	public function setAffiliate(mixed $value): static
	{
		return $this->setFieldValue('affiliate', $value);
	}

	/**
	* @return string
	*/

	public function getInvoicePayload(): mixed
	{
		return $this->getFieldValue('invoice_payload');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setInvoicePayload(mixed $value): static
	{
		return $this->setFieldValue('invoice_payload', $value);
	}

	/**
	* @return int
	*/

	public function getSubscriptionPeriod(): mixed
	{
		return $this->getFieldValue('subscription_period');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setSubscriptionPeriod(mixed $value): static
	{
		return $this->setFieldValue('subscription_period', $value);
	}

	/**
	* @return Base\ArrayObject|Types\PaidMedia[]
	*/

	public function getPaidMedia(): mixed
	{
		return $this->getFieldValue('paid_media');
	}

	/**
	* @param Base\ArrayObject|Types\PaidMedia[] $value
	* @return static
	*/

	public function setPaidMedia(mixed $value): static
	{
		return $this->setFieldValue('paid_media', $value);
	}

	/**
	* @return string
	*/

	public function getPaidMediaPayload(): mixed
	{
		return $this->getFieldValue('paid_media_payload');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setPaidMediaPayload(mixed $value): static
	{
		return $this->setFieldValue('paid_media_payload', $value);
	}

	/**
	* @return Types\Gift
	*/

	public function getGift(): mixed
	{
		return $this->getFieldValue('gift');
	}

	/**
	* @param Types\Gift $value
	* @return static
	*/

	public function setGift(mixed $value): static
	{
		return $this->setFieldValue('gift', $value);
	}

	/**
	* @return int
	*/

	public function getPremiumSubscriptionDuration(): mixed
	{
		return $this->getFieldValue('premium_subscription_duration');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setPremiumSubscriptionDuration(mixed $value): static
	{
		return $this->setFieldValue('premium_subscription_duration', $value);
	}

}