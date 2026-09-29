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
 * This object represents a message about a scheduled giveaway.
 *
 * @link https://core.telegram.org/bots/api#giveaway
 *
 * @property-read Base\ArrayObject<Chat> $chats Required. The list of chats which the user must join to participate in the giveaway
 * @property-write list<Chat|array<string, mixed>>|Base\ArrayObject<Chat> $chats
 * @property-read int|null $winnersSelectionDate Required. Point in time (Unix timestamp) when winners of the giveaway will be selected
 * @property-write int $winnersSelectionDate
 * @property-read int|null $winnerCount Required. The number of users which are supposed to be selected as winners of the giveaway
 * @property-write int $winnerCount
 * @property-read bool|null $onlyNewMembers Optional. *True*, if only users who join the chats after the giveaway started should be eligible to win
 * @property-write bool $onlyNewMembers
 * @property-read bool|null $hasPublicWinners Optional. *True*, if the list of giveaway winners will be visible to everyone
 * @property-write bool $hasPublicWinners
 * @property-read string|null $prizeDescription Optional. Description of additional giveaway prize
 * @property-write string $prizeDescription
 * @property-read Base\ArrayObject<Base\ParameterString> $countryCodes Optional. A list of two-letter [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes indicating the countries from which eligible users for the giveaway must come. If empty, then all users can participate in the giveaway. Users with a phone number that was bought on Fragment can always participate in giveaways.
 * @property-write list<string>|Base\ArrayObject<Base\ParameterString> $countryCodes
 * @property-read int|null $prizeStarCount Optional. The number of Telegram Stars to be split between giveaway winners; for Telegram Star giveaways only
 * @property-write int $prizeStarCount
 * @property-read int|null $premiumSubscriptionMonthCount Optional. The number of months the Telegram Premium subscription won from the giveaway will be active for; for Telegram Premium giveaways only
 * @property-write int $premiumSubscriptionMonthCount
 */
class Giveaway extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'chats' => [
                'type' => [Chat::class],
                'isArray' => true,
                'required' => true,
            ],
            'winners_selection_date' => [
                'type' => ['int'],
                'required' => true,
            ],
            'winner_count' => [
                'type' => ['int'],
                'required' => true,
            ],
            'only_new_members' => [
                'type' => ['bool'],
            ],
            'has_public_winners' => [
                'type' => ['bool'],
            ],
            'prize_description' => [
                'type' => ['string'],
            ],
            'country_codes' => [
                'type' => ['string'],
                'isArray' => true,
            ],
            'prize_star_count' => [
                'type' => ['int'],
            ],
            'premium_subscription_month_count' => [
                'type' => ['int'],
            ],
        ];
    }

    /**
     * Required. The list of chats which the user must join to participate in the giveaway
     *
     * @return Base\ArrayObject<Chat>
     * @throws Base\TelegramException
     */
    public function getChats(): mixed
    {
        return $this->getFieldValue('chats');
    }

    /**
     * @param list<Chat|array<string, mixed>>|Base\ArrayObject<Chat> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setChats(mixed $value): static
    {
        return $this->setFieldValue('chats', $value);
    }

    /**
     * Required. Point in time (Unix timestamp) when winners of the giveaway will be selected
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getWinnersSelectionDate(): mixed
    {
        return $this->getFieldValue('winners_selection_date');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setWinnersSelectionDate(mixed $value): static
    {
        return $this->setFieldValue('winners_selection_date', $value);
    }

    /**
     * Required. The number of users which are supposed to be selected as winners of the giveaway
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getWinnerCount(): mixed
    {
        return $this->getFieldValue('winner_count');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setWinnerCount(mixed $value): static
    {
        return $this->setFieldValue('winner_count', $value);
    }

    /**
     * Optional. *True*, if only users who join the chats after the giveaway started should be eligible to win
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getOnlyNewMembers(): mixed
    {
        return $this->getFieldValue('only_new_members');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setOnlyNewMembers(mixed $value): static
    {
        return $this->setFieldValue('only_new_members', $value);
    }

    /**
     * Optional. *True*, if the list of giveaway winners will be visible to everyone
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getHasPublicWinners(): mixed
    {
        return $this->getFieldValue('has_public_winners');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setHasPublicWinners(mixed $value): static
    {
        return $this->setFieldValue('has_public_winners', $value);
    }

    /**
     * Optional. Description of additional giveaway prize
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getPrizeDescription(): mixed
    {
        return $this->getFieldValue('prize_description');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPrizeDescription(mixed $value): static
    {
        return $this->setFieldValue('prize_description', $value);
    }

    /**
     * Optional. A list of two-letter [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes indicating the countries from which eligible users for the giveaway must come. If empty, then all users can participate in the giveaway. Users with a phone number that was bought on Fragment can always participate in giveaways.
     *
     * @return Base\ArrayObject<Base\ParameterString>
     * @throws Base\TelegramException
     */
    public function getCountryCodes(): mixed
    {
        return $this->getFieldValue('country_codes');
    }

    /**
     * @param list<string>|Base\ArrayObject<Base\ParameterString> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCountryCodes(mixed $value): static
    {
        return $this->setFieldValue('country_codes', $value);
    }

    /**
     * Optional. The number of Telegram Stars to be split between giveaway winners; for Telegram Star giveaways only
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getPrizeStarCount(): mixed
    {
        return $this->getFieldValue('prize_star_count');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPrizeStarCount(mixed $value): static
    {
        return $this->setFieldValue('prize_star_count', $value);
    }

    /**
     * Optional. The number of months the Telegram Premium subscription won from the giveaway will be active for; for Telegram Premium giveaways only
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getPremiumSubscriptionMonthCount(): mixed
    {
        return $this->getFieldValue('premium_subscription_month_count');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPremiumSubscriptionMonthCount(mixed $value): static
    {
        return $this->setFieldValue('premium_subscription_month_count', $value);
    }
}
