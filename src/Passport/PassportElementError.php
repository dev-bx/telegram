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

namespace DevBX\Telegram\Passport;

use DevBX\Telegram\Base;


/**
 * This object represents an error in the Telegram Passport element which was submitted that should be resolved by the user. It should be one of:
 */
class PassportElementError extends Base\BaseType
{
	public static function getRelations(): array
	{
		return [
			PassportElementErrorDataField::class,
			PassportElementErrorFrontSide::class,
			PassportElementErrorReverseSide::class,
			PassportElementErrorSelfie::class,
			PassportElementErrorFile::class,
			PassportElementErrorFiles::class,
			PassportElementErrorTranslationFile::class,
			PassportElementErrorTranslationFiles::class,
			PassportElementErrorUnspecified::class,
		];
	}
	public static function getFields(): array
	{
		return [

		];
	}
}