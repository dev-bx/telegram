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
 * This object represents a message about the completion of a giveaway with public winners.
 *
 * @link https://core.telegram.org/bots/api#giveawaywinners
 *
 * @property-read Chat|null $chat Required. The chat that created the giveaway
 * @property-write Chat|array<string, mixed> $chat
 * @property-read int|null $giveawayMessageId Required. Identifier of the message with the giveaway in the chat
 * @property-write int $giveawayMessageId
 * @property-read int|null $winnersSelectionDate Required. Point in time (Unix timestamp) when winners of the giveaway were selected
 * @property-write int $winnersSelectionDate
 * @property-read int|null $winnerCount Required. Total number of winners in the giveaway
 * @property-write int $winnerCount
 * @property-read Base\ArrayObject<User> $winners Required. List of up to 100 winners of the giveaway
 * @property-write list<User|array<string, mixed>>|Base\ArrayObject<User> $winners
 * @property-read int|null $additionalChatCount Optional. The number of other chats the user had to join in order to be eligible for the giveaway
 * @property-write int $additionalChatCount
 * @property-read int|null $prizeStarCount Optional. The number of Telegram Stars that were split between giveaway winners; for Telegram Star giveaways only
 * @property-write int $prizeStarCount
 * @property-read int|null $premiumSubscriptionMonthCount Optional. The number of months the Telegram Premium subscription won from the giveaway will be active for; for Telegram Premium giveaways only
 * @property-write int $premiumSubscriptionMonthCount
 * @property-read int|null $unclaimedPrizeCount Optional. Number of undistributed prizes
 * @property-write int $unclaimedPrizeCount
 * @property-read bool|null $onlyNewMembers Optional. *True*, if only users who had joined the chats after the giveaway started were eligible to win
 * @property-write bool $onlyNewMembers
 * @property-read bool|null $wasRefunded Optional. *True*, if the giveaway was canceled because the payment for it was refunded
 * @property-write bool $wasRefunded
 * @property-read string|null $prizeDescription Optional. Description of additional giveaway prize
 * @property-write string $prizeDescription
 */
class GiveawayWinners extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'chat' => [
                'type' => [Chat::class],
                'required' => true,
            ],
            'giveaway_message_id' => [
                'type' => ['int'],
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
            'winners' => [
                'type' => [User::class],
                'isArray' => true,
                'required' => true,
            ],
            'additional_chat_count' => [
                'type' => ['int'],
            ],
            'prize_star_count' => [
                'type' => ['int'],
            ],
            'premium_subscription_month_count' => [
                'type' => ['int'],
            ],
            'unclaimed_prize_count' => [
                'type' => ['int'],
            ],
            'only_new_members' => [
                'type' => ['bool'],
            ],
            'was_refunded' => [
                'type' => ['bool'],
            ],
            'prize_description' => [
                'type' => ['string'],
            ],
        ];
    }

    /**
     * Required. The chat that created the giveaway
     *
     * @return Chat|null
     * @throws Base\TelegramException
     */
    public function getChat(): mixed
    {
        return $this->getFieldValue('chat');
    }

    /**
     * @param Chat|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setChat(mixed $value): static
    {
        return $this->setFieldValue('chat', $value);
    }

    /**
     * Required. Identifier of the message with the giveaway in the chat
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getGiveawayMessageId(): mixed
    {
        return $this->getFieldValue('giveaway_message_id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setGiveawayMessageId(mixed $value): static
    {
        return $this->setFieldValue('giveaway_message_id', $value);
    }

    /**
     * Required. Point in time (Unix timestamp) when winners of the giveaway were selected
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
     * Required. Total number of winners in the giveaway
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
     * Required. List of up to 100 winners of the giveaway
     *
     * @return Base\ArrayObject<User>
     * @throws Base\TelegramException
     */
    public function getWinners(): mixed
    {
        return $this->getFieldValue('winners');
    }

    /**
     * @param list<User|array<string, mixed>>|Base\ArrayObject<User> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setWinners(mixed $value): static
    {
        return $this->setFieldValue('winners', $value);
    }

    /**
     * Optional. The number of other chats the user had to join in order to be eligible for the giveaway
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getAdditionalChatCount(): mixed
    {
        return $this->getFieldValue('additional_chat_count');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAdditionalChatCount(mixed $value): static
    {
        return $this->setFieldValue('additional_chat_count', $value);
    }

    /**
     * Optional. The number of Telegram Stars that were split between giveaway winners; for Telegram Star giveaways only
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

    /**
     * Optional. Number of undistributed prizes
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getUnclaimedPrizeCount(): mixed
    {
        return $this->getFieldValue('unclaimed_prize_count');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setUnclaimedPrizeCount(mixed $value): static
    {
        return $this->setFieldValue('unclaimed_prize_count', $value);
    }

    /**
     * Optional. *True*, if only users who had joined the chats after the giveaway started were eligible to win
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
     * Optional. *True*, if the giveaway was canceled because the payment for it was refunded
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getWasRefunded(): mixed
    {
        return $this->getFieldValue('was_refunded');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setWasRefunded(mixed $value): static
    {
        return $this->setFieldValue('was_refunded', $value);
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
}
