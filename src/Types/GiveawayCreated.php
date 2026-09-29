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
 * This object represents a service message about the creation of a scheduled giveaway.
 *
 * @link https://core.telegram.org/bots/api#giveawaycreated
 *
 * @property-read int|null $prizeStarCount Optional. The number of Telegram Stars to be split between giveaway winners; for Telegram Star giveaways only
 * @property-write int $prizeStarCount
 */
class GiveawayCreated extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'prize_star_count' => [
                'type' => ['int'],
            ],
        ];
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
}
