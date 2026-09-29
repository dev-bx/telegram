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

namespace DevBX\Telegram\Passport;

use DevBX\Telegram\Base;

/**
 * This object represents an error in the Telegram Passport element which was submitted that should be resolved by the user. It should be one of:
 *
 * - `PassportElementErrorDataField`
 * - `PassportElementErrorFrontSide`
 * - `PassportElementErrorReverseSide`
 * - `PassportElementErrorSelfie`
 * - `PassportElementErrorFile`
 * - `PassportElementErrorFiles`
 * - `PassportElementErrorTranslationFile`
 * - `PassportElementErrorTranslationFiles`
 * - `PassportElementErrorUnspecified`
 *
 * @link https://core.telegram.org/bots/api#passportelementerror
 *
 * Объединение: create() возвращает подходящий вариант — `PassportElementErrorDataField`, `PassportElementErrorFrontSide`, `PassportElementErrorReverseSide`, `PassportElementErrorSelfie`, `PassportElementErrorFile`, `PassportElementErrorFiles`, `PassportElementErrorTranslationFile`, `PassportElementErrorTranslationFiles`, `PassportElementErrorUnspecified`.
 */
class PassportElementError extends Base\BaseType
{
    /**
     * @return list<class-string<PassportElementErrorDataField|PassportElementErrorFrontSide|PassportElementErrorReverseSide|PassportElementErrorSelfie|PassportElementErrorFile|PassportElementErrorFiles|PassportElementErrorTranslationFile|PassportElementErrorTranslationFiles|PassportElementErrorUnspecified>>
     */
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

    /**
     * Создаёт вариант объединения, подходящий под значение (по полю-дискриминатору и обязательным полям).
     *
     * @return PassportElementErrorDataField|PassportElementErrorFrontSide|PassportElementErrorReverseSide|PassportElementErrorSelfie|PassportElementErrorFile|PassportElementErrorFiles|PassportElementErrorTranslationFile|PassportElementErrorTranslationFiles|PassportElementErrorUnspecified|null null — значение не подошло ни одному варианту (только в нестрогом режиме)
     * @throws Base\TelegramException
     */
    public static function create(mixed $value = null, bool $ignoreUnknownFields = false): ?Base\BaseType
    {
        return static::createFromRelations(static::getRelations(), $value, $ignoreUnknownFields);
    }

    public static function getFields(): array
    {
        return [];
    }
}
