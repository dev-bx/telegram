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

namespace DevBX\Telegram\Requests;

use DevBX\Telegram\Base;
use DevBX\Telegram\Api;
use DevBX\Telegram\Passport;

/**
 * Use this if the data submitted by the user doesn't satisfy the standards your service requires for any reason. For example, if a birthday date seems invalid, a submitted document is blurry, a scan shows evidence of tampering, etc. Supply some details in the error message to make sure the user knows how to correct the issues.
 * @property int $userId
 * User identifier
 * @property Base\ArrayObject|Passport\PassportElementError[] $errors
 * A JSON-serialized array describing the errors
 * @method Base\BaseType send(Api $gateway = null)
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
        ];
    }

    /**
    * @return int
    */

    public function getUserId(): mixed
    {
        return $this->getFieldValue('user_id');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setUserId(mixed $value): static
    {
        return $this->setFieldValue('user_id', $value);
    }

    /**
    * @return Base\ArrayObject|Passport\PassportElementError[]
    */

    public function getErrors(): mixed
    {
        return $this->getFieldValue('errors');
    }

    /**
    * @param Base\ArrayObject|Passport\PassportElementError[] $value
    * @return static
    */

    public function setErrors(mixed $value): static
    {
        return $this->setFieldValue('errors', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'SetPassportDataErrors';
    }
}