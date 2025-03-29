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
 * Allows the bot to cancel or re-enable extension of a subscription paid in Telegram Stars. Returns *True* on success.
 * @property int $userId
 * Identifier of the user whose subscription will be edited
 * @property string $telegramPaymentChargeId
 * Telegram payment identifier for the subscription
 * @property bool $isCanceled
 * Pass *True* to cancel extension of the user subscription; the subscription must be active up to the end of the current subscription period. Pass *False* to allow the user to re-enable a subscription that was previously canceled by the bot.
 * @method Base\BaseType send(Api $gateway = null)
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

    /**
    * @return bool
    */

    public function getIsCanceled(): mixed
    {
        return $this->getFieldValue('is_canceled');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setIsCanceled(mixed $value): static
    {
        return $this->setFieldValue('is_canceled', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'EditUserStarSubscription';
    }
}