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
 * Describes an interval of time during which a business is open.
 *
 * @link https://core.telegram.org/bots/api#businessopeninghoursinterval
 *
 * @property-read int|null $openingMinute Required. The minute's sequence number in a week, starting on Monday, marking the start of the time interval during which the business is open; 0 - 7 * 24 * 60
 * @property-write int $openingMinute
 * @property-read int|null $closingMinute Required. The minute's sequence number in a week, starting on Monday, marking the end of the time interval during which the business is open; 0 - 8 * 24 * 60
 * @property-write int $closingMinute
 */
class BusinessOpeningHoursInterval extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'opening_minute' => [
                'type' => ['int'],
                'required' => true,
            ],
            'closing_minute' => [
                'type' => ['int'],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. The minute's sequence number in a week, starting on Monday, marking the start of the time interval during which the business is open; 0 - 7 * 24 * 60
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getOpeningMinute(): mixed
    {
        return $this->getFieldValue('opening_minute');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setOpeningMinute(mixed $value): static
    {
        return $this->setFieldValue('opening_minute', $value);
    }

    /**
     * Required. The minute's sequence number in a week, starting on Monday, marking the end of the time interval during which the business is open; 0 - 8 * 24 * 60
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getClosingMinute(): mixed
    {
        return $this->getFieldValue('closing_minute');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setClosingMinute(mixed $value): static
    {
        return $this->setFieldValue('closing_minute', $value);
    }
}
