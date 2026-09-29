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
 * This object represents a service message about the completion of a giveaway without public winners.
 *
 * @link https://core.telegram.org/bots/api#giveawaycompleted
 *
 * @property-read int|null $winnerCount Required. Number of winners in the giveaway
 * @property-write int $winnerCount
 * @property-read int|null $unclaimedPrizeCount Optional. Number of undistributed prizes
 * @property-write int $unclaimedPrizeCount
 * @property-read Message|null $giveawayMessage Optional. Message with the giveaway that was completed, if it wasn't deleted
 * @property-write Message|array<string, mixed> $giveawayMessage
 * @property-read bool|null $isStarGiveaway Optional. *True*, if the giveaway is a Telegram Star giveaway. Otherwise, currently, the giveaway is a Telegram Premium giveaway.
 * @property-write bool $isStarGiveaway
 */
class GiveawayCompleted extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'winner_count' => [
                'type' => ['int'],
                'required' => true,
            ],
            'unclaimed_prize_count' => [
                'type' => ['int'],
            ],
            'giveaway_message' => [
                'type' => [Message::class],
            ],
            'is_star_giveaway' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Required. Number of winners in the giveaway
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
     * Optional. Message with the giveaway that was completed, if it wasn't deleted
     *
     * @return Message|null
     * @throws Base\TelegramException
     */
    public function getGiveawayMessage(): mixed
    {
        return $this->getFieldValue('giveaway_message');
    }

    /**
     * @param Message|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setGiveawayMessage(mixed $value): static
    {
        return $this->setFieldValue('giveaway_message', $value);
    }

    /**
     * Optional. *True*, if the giveaway is a Telegram Star giveaway. Otherwise, currently, the giveaway is a Telegram Premium giveaway.
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsStarGiveaway(): mixed
    {
        return $this->getFieldValue('is_star_giveaway');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsStarGiveaway(mixed $value): static
    {
        return $this->setFieldValue('is_star_giveaway', $value);
    }
}
