<?php

/**
 * @project Telegram Bot Api
 * @author Kubeev Ruslan <ruslan@dev-bx.ru>
 * @copyright 2026 Kubeev Ruslan
 * @license MIT
 * @link https://dev-bx.ru/
 *
 * This file is part of the project Telegram Bot Api Class Generator.
 */

namespace DevBX\Telegram\Types;

use DevBX\Telegram\Base;


/**
 * Describes a service message about a successful payment for a suggested post.
 * @property Message $suggestedPostMessage
 * *Optional*. Message containing the suggested post. Note that the [Message](#message) object in this field will not contain the *reply\_to\_message* field even if it itself is a reply.
 * @property string $currency
 * Currency in which the payment was made. Currently, one of “XTR” for Telegram Stars or “TON” for toncoins
 * @property int $amount
 * *Optional*. The amount of the currency that was received by the channel in nanotoncoins; for payments in toncoins only
 * @property StarAmount $starAmount
 * *Optional*. The amount of Telegram Stars that was received by the channel; for payments in Telegram Stars only
 */
class SuggestedPostPaid extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'suggested_post_message' => [
				'type' => [Message::class],
			],
			'currency' => [
				'type' => ['string'],
				'required' => true,
			],
			'amount' => [
				'type' => ['int'],
			],
			'star_amount' => [
				'type' => [StarAmount::class],
			],
		];
	}
	/**
	* @return Message
	*/

	public function getSuggestedPostMessage(): mixed
	{
		return $this->getFieldValue('suggested_post_message');
	}

	/**
	* @param Message $value
	* @return static
	*/

	public function setSuggestedPostMessage(mixed $value): static
	{
		return $this->setFieldValue('suggested_post_message', $value);
	}

	/**
	* @return string
	*/

	public function getCurrency(): mixed
	{
		return $this->getFieldValue('currency');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setCurrency(mixed $value): static
	{
		return $this->setFieldValue('currency', $value);
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
	* @return StarAmount
	*/

	public function getStarAmount(): mixed
	{
		return $this->getFieldValue('star_amount');
	}

	/**
	* @param StarAmount $value
	* @return static
	*/

	public function setStarAmount(mixed $value): static
	{
		return $this->setFieldValue('star_amount', $value);
	}

}