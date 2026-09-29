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
 * Use this method to get the token of a managed bot. Returns the token as *String* on success.
 *
 * @link https://core.telegram.org/bots/api#getmanagedbottoken
 *
 * @property-read int|null $userId Required. User identifier of the managed bot whose token will be returned
 * @property-write int $userId
 *
 * @method Base\ParameterString send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class GetManagedBotToken extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'user_id' => [
                'type' => ['int'],
                'required' => true,
            ],
            '@return' => [
                'type' => ['string'],
            ],
        ];
    }

    /**
     * Required. User identifier of the managed bot whose token will be returned
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

    protected function getRequestMethod(): string
    {
        return 'getManagedBotToken';
    }
}
