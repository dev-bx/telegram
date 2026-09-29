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
 * Allows the bot to cancel or re-enable extension of a subscription paid in Telegram Stars. Returns *True* on success.
 *
 * @link https://core.telegram.org/bots/api#edituserstarsubscription
 *
 * @property-read int|null $userId Required. Identifier of the user whose subscription will be edited
 * @property-write int $userId
 * @property-read string|null $telegramPaymentChargeId Required. Telegram payment identifier for the subscription
 * @property-write string $telegramPaymentChargeId
 * @property-read bool|null $isCanceled Required. Pass *True* to cancel extension of the user subscription; the subscription must be active up to the end of the current subscription period. Pass *False* to allow the user to re-enable a subscription that was previously canceled by the bot.
 * @property-write bool $isCanceled
 *
 * @method Base\ParameterBool send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class EditUserStarSubscription extends Base\Request
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
            'is_canceled' => [
                'type' => ['bool'],
                'required' => true,
            ],
            '@return' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Required. Identifier of the user whose subscription will be edited
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
     * Required. Telegram payment identifier for the subscription
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

    /**
     * Required. Pass *True* to cancel extension of the user subscription; the subscription must be active up to the end of the current subscription period. Pass *False* to allow the user to re-enable a subscription that was previously canceled by the bot.
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsCanceled(): mixed
    {
        return $this->getFieldValue('is_canceled');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsCanceled(mixed $value): static
    {
        return $this->setFieldValue('is_canceled', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'editUserStarSubscription';
    }
}
