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
 * This object contains information about changes to a user payment subscription toward the current bot.
 * @property User $user
 * User who subscribed for payments toward the bot
 * @property string $invoicePayload
 * Bot-specified invoice payload
 * @property string $state
 * The new state of the subscription. Currently, it can be one of “canceled” if the user canceled the subscription, “active” if the user re-enabled a previously canceled subscription, or “failed” if payment for the subscription failed.
 */
class BotSubscriptionUpdated extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'user' => [
				'type' => [User::class],
				'required' => true,
			],
			'invoice_payload' => [
				'type' => ['string'],
				'required' => true,
			],
			'state' => [
				'type' => ['string'],
				'required' => true,
			],
		];
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
	* @return string
	*/

	public function getState(): mixed
	{
		return $this->getFieldValue('state');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setState(mixed $value): static
	{
		return $this->setFieldValue('state', $value);
	}

}