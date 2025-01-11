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
* This object describes the source of a transaction, or its recipient for outgoing transactions. Currently, it can be one of
*/

class TransactionPartner extends Base\BaseType
{
	public static function getRelations(): array
	{
		return [
			TransactionPartnerUser::class,
			TransactionPartnerAffiliateProgram::class,
			TransactionPartnerFragment::class,
			TransactionPartnerTelegramAds::class,
			TransactionPartnerTelegramApi::class,
			TransactionPartnerOther::class,
		];
	}
	public static function getFields(): array
	{
		return [

		];
	}
}