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

namespace DevBX\Telegram\Payments;

use DevBX\Telegram\Base;
use DevBX\Telegram\Types;

/**
 * Describes a transaction with a user.
 *
 * @link https://core.telegram.org/bots/api#transactionpartneruser
 *
 * @property-read string|null $type Required. Type of the transaction partner, always “user”
 * @property-write string $type
 * @property-read string|null $transactionType Required. Type of the transaction, currently one of “invoice_payment” for payments via invoices, “paid_media_payment” for payments for paid media, “gift_purchase” for gifts sent by the bot, “premium_purchase” for Telegram Premium subscriptions gifted by the bot, “business_account_transfer” for direct transfers from managed business accounts
 * @property-write string $transactionType
 * @property-read Types\User|null $user Required. Information about the user
 * @property-write Types\User|array<string, mixed> $user
 * @property-read AffiliateInfo|null $affiliate Optional. Information about the affiliate that received a commission via this transaction. Can be available only for “invoice_payment” and “paid_media_payment” transactions.
 * @property-write AffiliateInfo|array<string, mixed> $affiliate
 * @property-read string|null $invoicePayload Optional. Bot-specified invoice payload. Can be available only for “invoice_payment” transactions.
 * @property-write string $invoicePayload
 * @property-read int|null $subscriptionPeriod Optional. The duration of the paid subscription. Can be available only for “invoice_payment” transactions.
 * @property-write int $subscriptionPeriod
 * @property-read Base\ArrayObject<Types\PaidMedia> $paidMedia Optional. Information about the paid media bought by the user; for “paid_media_payment” transactions only
 * @property-write list<Types\PaidMedia|array<string, mixed>>|Base\ArrayObject<Types\PaidMedia> $paidMedia
 * @property-read string|null $paidMediaPayload Optional. Bot-specified paid media payload. Can be available only for “paid_media_payment” transactions.
 * @property-write string $paidMediaPayload
 * @property-read Types\Gift|null $gift Optional. The gift sent to the user by the bot; for “gift_purchase” transactions only
 * @property-write Types\Gift|array<string, mixed> $gift
 * @property-read int|null $premiumSubscriptionDuration Optional. Number of months the gifted Telegram Premium subscription will be active for; for “premium_purchase” transactions only
 * @property-write int $premiumSubscriptionDuration
 */
class TransactionPartnerUser extends TransactionPartner
{
    /**
     * @return static
     * @throws Base\TelegramException
     */
    public static function create(mixed $value = null, bool $ignoreUnknownFields = false): ?Base\BaseType
    {
        return static::createInstance($value, $ignoreUnknownFields);
    }

    public static function getFields(): array
    {
        return [
            'type' => [
                'type' => ['string'],
                'value' => 'user',
                'required' => true,
            ],
            'transaction_type' => [
                'type' => ['string'],
                'required' => true,
            ],
            'user' => [
                'type' => [Types\User::class],
                'required' => true,
            ],
            'affiliate' => [
                'type' => [AffiliateInfo::class],
            ],
            'invoice_payload' => [
                'type' => ['string'],
            ],
            'subscription_period' => [
                'type' => ['int'],
            ],
            'paid_media' => [
                'type' => [Types\PaidMedia::class],
                'isArray' => true,
            ],
            'paid_media_payload' => [
                'type' => ['string'],
            ],
            'gift' => [
                'type' => [Types\Gift::class],
            ],
            'premium_subscription_duration' => [
                'type' => ['int'],
            ],
        ];
    }

    /**
     * Required. Type of the transaction partner, always “user”
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getType(): mixed
    {
        return $this->getFieldValue('type');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setType(mixed $value): static
    {
        return $this->setFieldValue('type', $value);
    }

    /**
     * Required. Type of the transaction, currently one of “invoice_payment” for payments via invoices, “paid_media_payment” for payments for paid media, “gift_purchase” for gifts sent by the bot, “premium_purchase” for Telegram Premium subscriptions gifted by the bot, “business_account_transfer” for direct transfers from managed business accounts
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getTransactionType(): mixed
    {
        return $this->getFieldValue('transaction_type');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setTransactionType(mixed $value): static
    {
        return $this->setFieldValue('transaction_type', $value);
    }

    /**
     * Required. Information about the user
     *
     * @return Types\User|null
     * @throws Base\TelegramException
     */
    public function getUser(): mixed
    {
        return $this->getFieldValue('user');
    }

    /**
     * @param Types\User|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setUser(mixed $value): static
    {
        return $this->setFieldValue('user', $value);
    }

    /**
     * Optional. Information about the affiliate that received a commission via this transaction. Can be available only for “invoice_payment” and “paid_media_payment” transactions.
     *
     * @return AffiliateInfo|null
     * @throws Base\TelegramException
     */
    public function getAffiliate(): mixed
    {
        return $this->getFieldValue('affiliate');
    }

    /**
     * @param AffiliateInfo|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAffiliate(mixed $value): static
    {
        return $this->setFieldValue('affiliate', $value);
    }

    /**
     * Optional. Bot-specified invoice payload. Can be available only for “invoice_payment” transactions.
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
     * Optional. The duration of the paid subscription. Can be available only for “invoice_payment” transactions.
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getSubscriptionPeriod(): mixed
    {
        return $this->getFieldValue('subscription_period');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSubscriptionPeriod(mixed $value): static
    {
        return $this->setFieldValue('subscription_period', $value);
    }

    /**
     * Optional. Information about the paid media bought by the user; for “paid_media_payment” transactions only
     *
     * @return Base\ArrayObject<Types\PaidMedia>
     * @throws Base\TelegramException
     */
    public function getPaidMedia(): mixed
    {
        return $this->getFieldValue('paid_media');
    }

    /**
     * @param list<Types\PaidMedia|array<string, mixed>>|Base\ArrayObject<Types\PaidMedia> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPaidMedia(mixed $value): static
    {
        return $this->setFieldValue('paid_media', $value);
    }

    /**
     * Optional. Bot-specified paid media payload. Can be available only for “paid_media_payment” transactions.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getPaidMediaPayload(): mixed
    {
        return $this->getFieldValue('paid_media_payload');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPaidMediaPayload(mixed $value): static
    {
        return $this->setFieldValue('paid_media_payload', $value);
    }

    /**
     * Optional. The gift sent to the user by the bot; for “gift_purchase” transactions only
     *
     * @return Types\Gift|null
     * @throws Base\TelegramException
     */
    public function getGift(): mixed
    {
        return $this->getFieldValue('gift');
    }

    /**
     * @param Types\Gift|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setGift(mixed $value): static
    {
        return $this->setFieldValue('gift', $value);
    }

    /**
     * Optional. Number of months the gifted Telegram Premium subscription will be active for; for “premium_purchase” transactions only
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getPremiumSubscriptionDuration(): mixed
    {
        return $this->getFieldValue('premium_subscription_duration');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPremiumSubscriptionDuration(mixed $value): static
    {
        return $this->setFieldValue('premium_subscription_duration', $value);
    }
}
