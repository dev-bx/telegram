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
 * Contains information about the affiliate that received a commission via this transaction.
 *
 * @link https://core.telegram.org/bots/api#affiliateinfo
 *
 * @property-read Types\User|null $affiliateUser Optional. The bot or the user that received an affiliate commission if it was received by a bot or a user
 * @property-write Types\User|array<string, mixed> $affiliateUser
 * @property-read Types\Chat|null $affiliateChat Optional. The chat that received an affiliate commission if it was received by a chat
 * @property-write Types\Chat|array<string, mixed> $affiliateChat
 * @property-read int|null $commissionPerMille Required. The number of Telegram Stars received by the affiliate for each 1000 Telegram Stars received by the bot from referred users
 * @property-write int $commissionPerMille
 * @property-read int|null $amount Required. Integer amount of Telegram Stars received by the affiliate from the transaction, rounded to 0; can be negative for refunds
 * @property-write int $amount
 * @property-read int|null $nanostarAmount Optional. The number of 1/1000000000 shares of Telegram Stars received by the affiliate; from -999999999 to 999999999; can be negative for refunds
 * @property-write int $nanostarAmount
 */
class AffiliateInfo extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'affiliate_user' => [
                'type' => [Types\User::class],
            ],
            'affiliate_chat' => [
                'type' => [Types\Chat::class],
            ],
            'commission_per_mille' => [
                'type' => ['int'],
                'required' => true,
            ],
            'amount' => [
                'type' => ['int'],
                'required' => true,
            ],
            'nanostar_amount' => [
                'type' => ['int'],
            ],
        ];
    }

    /**
     * Optional. The bot or the user that received an affiliate commission if it was received by a bot or a user
     *
     * @return Types\User|null
     * @throws Base\TelegramException
     */
    public function getAffiliateUser(): mixed
    {
        return $this->getFieldValue('affiliate_user');
    }

    /**
     * @param Types\User|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAffiliateUser(mixed $value): static
    {
        return $this->setFieldValue('affiliate_user', $value);
    }

    /**
     * Optional. The chat that received an affiliate commission if it was received by a chat
     *
     * @return Types\Chat|null
     * @throws Base\TelegramException
     */
    public function getAffiliateChat(): mixed
    {
        return $this->getFieldValue('affiliate_chat');
    }

    /**
     * @param Types\Chat|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAffiliateChat(mixed $value): static
    {
        return $this->setFieldValue('affiliate_chat', $value);
    }

    /**
     * Required. The number of Telegram Stars received by the affiliate for each 1000 Telegram Stars received by the bot from referred users
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getCommissionPerMille(): mixed
    {
        return $this->getFieldValue('commission_per_mille');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCommissionPerMille(mixed $value): static
    {
        return $this->setFieldValue('commission_per_mille', $value);
    }

    /**
     * Required. Integer amount of Telegram Stars received by the affiliate from the transaction, rounded to 0; can be negative for refunds
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getAmount(): mixed
    {
        return $this->getFieldValue('amount');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAmount(mixed $value): static
    {
        return $this->setFieldValue('amount', $value);
    }

    /**
     * Optional. The number of 1/1000000000 shares of Telegram Stars received by the affiliate; from -999999999 to 999999999; can be negative for refunds
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getNanostarAmount(): mixed
    {
        return $this->getFieldValue('nanostar_amount');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setNanostarAmount(mixed $value): static
    {
        return $this->setFieldValue('nanostar_amount', $value);
    }
}
