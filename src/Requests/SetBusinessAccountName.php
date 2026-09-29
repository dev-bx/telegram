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

/**
 * Changes the first and last name of a managed business account. Requires the *can_change_name* business bot right. Returns *True* on success.
 *
 * @link https://core.telegram.org/bots/api#setbusinessaccountname
 *
 * @property-read string|null $businessConnectionId Required. Unique identifier of the business connection
 * @property-write string $businessConnectionId
 * @property-read string|null $firstName Required. The new value of the first name for the business account; 1-64 characters
 * @property-write string $firstName
 * @property-read string|null $lastName Optional. The new value of the last name for the business account; 0-64 characters
 * @property-write string $lastName
 *
 * @method Base\ParameterBool send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class SetBusinessAccountName extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'business_connection_id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'first_name' => [
                'type' => ['string'],
                'required' => true,
            ],
            'last_name' => [
                'type' => ['string'],
            ],
            '@return' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Required. Unique identifier of the business connection
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getBusinessConnectionId(): mixed
    {
        return $this->getFieldValue('business_connection_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setBusinessConnectionId(mixed $value): static
    {
        return $this->setFieldValue('business_connection_id', $value);
    }

    /**
     * Required. The new value of the first name for the business account; 1-64 characters
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getFirstName(): mixed
    {
        return $this->getFieldValue('first_name');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setFirstName(mixed $value): static
    {
        return $this->setFieldValue('first_name', $value);
    }

    /**
     * Optional. The new value of the last name for the business account; 0-64 characters
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getLastName(): mixed
    {
        return $this->getFieldValue('last_name');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setLastName(mixed $value): static
    {
        return $this->setFieldValue('last_name', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'setBusinessAccountName';
    }
}
