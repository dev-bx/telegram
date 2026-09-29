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

namespace DevBX\Telegram\Requests;

use DevBX\Telegram\Base;
use DevBX\Telegram\Api;
use DevBX\Telegram\Passport;

/**
 * Informs a user that some of the Telegram Passport elements they provided contains errors. The user will not be able to re-submit their Passport to you until the errors are fixed (the contents of the field for which you returned the error must change). Returns *True* on success.
 *
 * Use this if the data submitted by the user doesn't satisfy the standards your service requires for any reason. For example, if a birthday date seems invalid, a submitted document is blurry, a scan shows evidence of tampering, etc. Supply some details in the error message to make sure the user knows how to correct the issues.
 *
 * @link https://core.telegram.org/bots/api#setpassportdataerrors
 *
 * @property-read int|null $userId Required. User identifier
 * @property-write int $userId
 * @property-read Base\ArrayObject<Passport\PassportElementError> $errors Required. A JSON-serialized Array describing the errors
 * @property-write list<Passport\PassportElementError|array<string, mixed>>|Base\ArrayObject<Passport\PassportElementError> $errors
 *
 * @method Base\ParameterBool send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class SetPassportDataErrors extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'user_id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'errors' => [
                'type' => [Passport\PassportElementError::class],
                'isArray' => true,
                'required' => true,
            ],
            '@return' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Required. User identifier
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getUserId(): mixed
    {
        return $this->getFieldValue('user_id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setUserId(mixed $value): static
    {
        return $this->setFieldValue('user_id', $value);
    }

    /**
     * Required. A JSON-serialized Array describing the errors
     *
     * @return Base\ArrayObject<Passport\PassportElementError>
     * @throws Base\TelegramException
     */
    public function getErrors(): mixed
    {
        return $this->getFieldValue('errors');
    }

    /**
     * @param list<Passport\PassportElementError|array<string, mixed>>|Base\ArrayObject<Passport\PassportElementError> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setErrors(mixed $value): static
    {
        return $this->setFieldValue('errors', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'setPassportDataErrors';
    }
}
