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

/**
 * Refunds a successful payment in [Telegram Stars](https://t.me/BotNews/90). Returns *True* on success.
 * @property int $userId
 * Identifier of the user whose payment will be refunded
 * @property string $telegramPaymentChargeId
 * Telegram payment identifier
 * @method Base\BaseType send(Api $gateway = null)
 */
class RefundStarPayment extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'user_id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'telegram_payment_charge_id' => [
                'type' => ['string'],
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
    * @return string
    */

    public function getTelegramPaymentChargeId(): mixed
    {
        return $this->getFieldValue('telegram_payment_charge_id');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setTelegramPaymentChargeId(mixed $value): static
    {
        return $this->setFieldValue('telegram_payment_charge_id', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'RefundStarPayment';
    }
}