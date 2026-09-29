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

namespace DevBX\Telegram\Types;

use DevBX\Telegram\Base;

/**
 * This object contains information about changes to a user payment subscription toward the current bot.
 *
 * @link https://core.telegram.org/bots/api#botsubscriptionupdated
 *
 * @property-read User|null $user Required. User who subscribed for payments toward the bot
 * @property-write User|array<string, mixed> $user
 * @property-read string|null $invoicePayload Required. Bot-specified invoice payload
 * @property-write string $invoicePayload
 * @property-read string|null $state Required. The new state of the subscription. Currently, it can be one of “canceled” if the user canceled the subscription, “active” if the user re-enabled a previously canceled subscription, or “failed” if payment for the subscription failed.
 * @property-write string $state
 */
class BotSubscriptionUpdated extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'user' => [
                'type' => [User::class],
                'required' => true,
            ],
            'invoice_payload' => [
                'type' => ['string'],
                'required' => true,
            ],
            'state' => [
                'type' => ['string'],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. User who subscribed for payments toward the bot
     *
     * @return User|null
     * @throws Base\TelegramException
     */
    public function getUser(): mixed
    {
        return $this->getFieldValue('user');
    }

    /**
     * @param User|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setUser(mixed $value): static
    {
        return $this->setFieldValue('user', $value);
    }

    /**
     * Required. Bot-specified invoice payload
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getInvoicePayload(): mixed
    {
        return $this->getFieldValue('invoice_payload');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setInvoicePayload(mixed $value): static
    {
        return $this->setFieldValue('invoice_payload', $value);
    }

    /**
     * Required. The new state of the subscription. Currently, it can be one of “canceled” if the user canceled the subscription, “active” if the user re-enabled a previously canceled subscription, or “failed” if payment for the subscription failed.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getState(): mixed
    {
        return $this->getFieldValue('state');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setState(mixed $value): static
    {
        return $this->setFieldValue('state', $value);
    }
}
