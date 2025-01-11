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
* This object describes the state of a revenue withdrawal operation. Currently, it can be one of
*/

class RevenueWithdrawalState extends Base\BaseType
{
	public static function getRelations(): array
	{
		return [
			RevenueWithdrawalStatePending::class,
			RevenueWithdrawalStateSucceeded::class,
			RevenueWithdrawalStateFailed::class,
		];
	}
	public static function getFields(): array
	{
		return [

		];
	}
}