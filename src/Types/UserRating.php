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
 * This object describes the rating of a user based on their Telegram Star spendings.
 *
 * @link https://core.telegram.org/bots/api#userrating
 *
 * @property-read int|null $level Required. Current level of the user, indicating their reliability when purchasing digital goods and services. A higher level suggests a more trustworthy customer; a negative level is likely reason for concern.
 * @property-write int $level
 * @property-read int|null $rating Required. Numerical value of the user's rating; the higher the rating, the better
 * @property-write int $rating
 * @property-read int|null $currentLevelRating Required. The rating value required to get the current level
 * @property-write int $currentLevelRating
 * @property-read int|null $nextLevelRating Optional. The rating value required to get to the next level; omitted if the maximum level was reached
 * @property-write int $nextLevelRating
 */
class UserRating extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'level' => [
                'type' => ['int'],
                'required' => true,
            ],
            'rating' => [
                'type' => ['int'],
                'required' => true,
            ],
            'current_level_rating' => [
                'type' => ['int'],
                'required' => true,
            ],
            'next_level_rating' => [
                'type' => ['int'],
            ],
        ];
    }

    /**
     * Required. Current level of the user, indicating their reliability when purchasing digital goods and services. A higher level suggests a more trustworthy customer; a negative level is likely reason for concern.
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getLevel(): mixed
    {
        return $this->getFieldValue('level');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setLevel(mixed $value): static
    {
        return $this->setFieldValue('level', $value);
    }

    /**
     * Required. Numerical value of the user's rating; the higher the rating, the better
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getRating(): mixed
    {
        return $this->getFieldValue('rating');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setRating(mixed $value): static
    {
        return $this->setFieldValue('rating', $value);
    }

    /**
     * Required. The rating value required to get the current level
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getCurrentLevelRating(): mixed
    {
        return $this->getFieldValue('current_level_rating');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCurrentLevelRating(mixed $value): static
    {
        return $this->setFieldValue('current_level_rating', $value);
    }

    /**
     * Optional. The rating value required to get to the next level; omitted if the maximum level was reached
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getNextLevelRating(): mixed
    {
        return $this->getFieldValue('next_level_rating');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setNextLevelRating(mixed $value): static
    {
        return $this->setFieldValue('next_level_rating', $value);
    }
}
