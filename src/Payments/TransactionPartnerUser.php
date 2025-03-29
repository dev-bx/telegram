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
use DevBX\Telegram\Stickers;


/**
 * Describes a transaction with a user.
 * @property string $type
 * Type of the transaction partner, always “user”
 * @property Types\User $user
 * Information about the user
 * @property AffiliateInfo $affiliate
 * *Optional*. Information about the affiliate that received a commission via this transaction
 * @property string $invoicePayload
 * *Optional*. Bot-specified invoice payload
 * @property int $subscriptionPeriod
 * *Optional*. The duration of the paid subscription
 * @property Base\ArrayObject|Types\PaidMedia[] $paidMedia
 * *Optional*. Information about the paid media bought by the user
 * @property string $paidMediaPayload
 * *Optional*. Bot-specified paid media payload
 * @property Stickers\Gift $gift
 * *Optional*. The gift sent to the user by the bot
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
				'type' => [Stickers\Gift::class],
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
	* @return Stickers\Gift
	*/

	public function getGift(): mixed
	{
		return $this->getFieldValue('gift');
	}

	/**
	* @param Stickers\Gift $value
	* @return static
	*/

	public function setGift(mixed $value): static
	{
		return $this->setFieldValue('gift', $value);
	}

}