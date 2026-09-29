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
 * Describes the affiliate program that issued the affiliate commission received via this transaction.
 *
 * @link https://core.telegram.org/bots/api#transactionpartneraffiliateprogram
 *
 * @property-read string|null $type Required. Type of the transaction partner, always “affiliate_program”
 * @property-write string $type
 * @property-read Types\User|null $sponsorUser Optional. Information about the bot that sponsored the affiliate program
 * @property-write Types\User|array<string, mixed> $sponsorUser
 * @property-read int|null $commissionPerMille Required. The number of Telegram Stars received by the bot for each 1000 Telegram Stars received by the affiliate program sponsor from referred users
 * @property-write int $commissionPerMille
 */
class TransactionPartnerAffiliateProgram extends TransactionPartner
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
                'value' => 'affiliate_program',
                'required' => true,
            ],
            'sponsor_user' => [
                'type' => [Types\User::class],
            ],
            'commission_per_mille' => [
                'type' => ['int'],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Type of the transaction partner, always “affiliate_program”
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
     * Optional. Information about the bot that sponsored the affiliate program
     *
     * @return Types\User|null
     * @throws Base\TelegramException
     */
    public function getSponsorUser(): mixed
    {
        return $this->getFieldValue('sponsor_user');
    }

    /**
     * @param Types\User|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSponsorUser(mixed $value): static
    {
        return $this->setFieldValue('sponsor_user', $value);
    }

    /**
     * Required. The number of Telegram Stars received by the bot for each 1000 Telegram Stars received by the affiliate program sponsor from referred users
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
}
