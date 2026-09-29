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
 * Refunds a successful payment in [Telegram Stars](https://t.me/BotNews/90). Returns *True* on success.
 *
 * @link https://core.telegram.org/bots/api#refundstarpayment
 *
 * @property-read int|null $userId Required. Identifier of the user whose payment will be refunded
 * @property-write int $userId
 * @property-read string|null $telegramPaymentChargeId Required. Telegram payment identifier
 * @property-write string $telegramPaymentChargeId
 *
 * @method Base\ParameterBool send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
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
            '@return' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Required. Identifier of the user whose payment will be refunded
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
     * Required. Telegram payment identifier
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getTelegramPaymentChargeId(): mixed
    {
        return $this->getFieldValue('telegram_payment_charge_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setTelegramPaymentChargeId(mixed $value): static
    {
        return $this->setFieldValue('telegram_payment_charge_id', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'refundStarPayment';
    }
}
