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
 * Changes the username of a managed business account. Requires the *can_change_username* business bot right. Returns *True* on success.
 *
 * @link https://core.telegram.org/bots/api#setbusinessaccountusername
 *
 * @property-read string|null $businessConnectionId Required. Unique identifier of the business connection
 * @property-write string $businessConnectionId
 * @property-read string|null $username Optional. The new value of the username for the business account; 0-32 characters
 * @property-write string $username
 *
 * @method Base\ParameterBool send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class SetBusinessAccountUsername extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'business_connection_id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'username' => [
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
     * Optional. The new value of the username for the business account; 0-32 characters
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getUsername(): mixed
    {
        return $this->getFieldValue('username');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setUsername(mixed $value): static
    {
        return $this->setFieldValue('username', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'setBusinessAccountUsername';
    }
}
