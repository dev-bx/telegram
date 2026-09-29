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
 * Describes the opening hours of a business.
 *
 * @link https://core.telegram.org/bots/api#businessopeninghours
 *
 * @property-read string|null $timeZoneName Required. Unique name of the time zone for which the opening hours are defined
 * @property-write string $timeZoneName
 * @property-read Base\ArrayObject<BusinessOpeningHoursInterval> $openingHours Required. List of time intervals describing business opening hours
 * @property-write list<BusinessOpeningHoursInterval|array<string, mixed>>|Base\ArrayObject<BusinessOpeningHoursInterval> $openingHours
 */
class BusinessOpeningHours extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'time_zone_name' => [
                'type' => ['string'],
                'required' => true,
            ],
            'opening_hours' => [
                'type' => [BusinessOpeningHoursInterval::class],
                'isArray' => true,
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Unique name of the time zone for which the opening hours are defined
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getTimeZoneName(): mixed
    {
        return $this->getFieldValue('time_zone_name');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setTimeZoneName(mixed $value): static
    {
        return $this->setFieldValue('time_zone_name', $value);
    }

    /**
     * Required. List of time intervals describing business opening hours
     *
     * @return Base\ArrayObject<BusinessOpeningHoursInterval>
     * @throws Base\TelegramException
     */
    public function getOpeningHours(): mixed
    {
        return $this->getFieldValue('opening_hours');
    }

    /**
     * @param list<BusinessOpeningHoursInterval|array<string, mixed>>|Base\ArrayObject<BusinessOpeningHoursInterval> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setOpeningHours(mixed $value): static
    {
        return $this->setFieldValue('opening_hours', $value);
    }
}
