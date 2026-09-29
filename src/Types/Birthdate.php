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
 * Describes the birthdate of a user.
 *
 * @link https://core.telegram.org/bots/api#birthdate
 *
 * @property-read int|null $day Required. Day of the user's birth; 1-31
 * @property-write int $day
 * @property-read int|null $month Required. Month of the user's birth; 1-12
 * @property-write int $month
 * @property-read int|null $year Optional. Year of the user's birth
 * @property-write int $year
 */
class Birthdate extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'day' => [
                'type' => ['int'],
                'required' => true,
            ],
            'month' => [
                'type' => ['int'],
                'required' => true,
            ],
            'year' => [
                'type' => ['int'],
            ],
        ];
    }

    /**
     * Required. Day of the user's birth; 1-31
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getDay(): mixed
    {
        return $this->getFieldValue('day');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setDay(mixed $value): static
    {
        return $this->setFieldValue('day', $value);
    }

    /**
     * Required. Month of the user's birth; 1-12
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getMonth(): mixed
    {
        return $this->getFieldValue('month');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setMonth(mixed $value): static
    {
        return $this->setFieldValue('month', $value);
    }

    /**
     * Optional. Year of the user's birth
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getYear(): mixed
    {
        return $this->getFieldValue('year');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setYear(mixed $value): static
    {
        return $this->setFieldValue('year', $value);
    }
}
