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
* Describes a withdrawal transaction with Fragment.
* @property string $type
* Type of the transaction partner, always “fragment”
* @property RevenueWithdrawalState $withdrawalState
* *Optional*. State of the transaction if the transaction is outgoing
*/

class TransactionPartnerFragment extends TransactionPartner
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => '��fragment�',
				'required' => true,
			],
			'withdrawal_state' => [
				'type' => [RevenueWithdrawalState::class],
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
	* @return RevenueWithdrawalState
	*/

	public function getWithdrawalState(): mixed
	{
		return $this->getFieldValue('withdrawal_state');
	}

	/**
	* @param RevenueWithdrawalState $value
	* @return static
	*/

	public function setWithdrawalState(mixed $value): static
	{
		return $this->setFieldValue('withdrawal_state', $value);
	}

}