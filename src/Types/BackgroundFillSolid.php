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
 * The background is filled using the selected color.
 *
 * @link https://core.telegram.org/bots/api#backgroundfillsolid
 *
 * @property-read string|null $type Required. Type of the background fill, always “solid”
 * @property-write string $type
 * @property-read int|null $color Required. The color of the background fill in the RGB24 format
 * @property-write int $color
 */
class BackgroundFillSolid extends BackgroundFill
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
                'value' => 'solid',
                'required' => true,
            ],
            'color' => [
                'type' => ['int'],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Type of the background fill, always “solid”
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
     * Required. The color of the background fill in the RGB24 format
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getColor(): mixed
    {
        return $this->getFieldValue('color');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setColor(mixed $value): static
    {
        return $this->setFieldValue('color', $value);
    }
}
