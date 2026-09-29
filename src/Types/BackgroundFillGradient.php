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
 * The background is a gradient fill.
 *
 * @link https://core.telegram.org/bots/api#backgroundfillgradient
 *
 * @property-read string|null $type Required. Type of the background fill, always “gradient”
 * @property-write string $type
 * @property-read int|null $topColor Required. Top color of the gradient in the RGB24 format
 * @property-write int $topColor
 * @property-read int|null $bottomColor Required. Bottom color of the gradient in the RGB24 format
 * @property-write int $bottomColor
 * @property-read int|null $rotationAngle Required. Clockwise rotation angle of the background fill in degrees; 0-359
 * @property-write int $rotationAngle
 */
class BackgroundFillGradient extends BackgroundFill
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
                'value' => 'gradient',
                'required' => true,
            ],
            'top_color' => [
                'type' => ['int'],
                'required' => true,
            ],
            'bottom_color' => [
                'type' => ['int'],
                'required' => true,
            ],
            'rotation_angle' => [
                'type' => ['int'],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Type of the background fill, always “gradient”
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
     * Required. Top color of the gradient in the RGB24 format
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getTopColor(): mixed
    {
        return $this->getFieldValue('top_color');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setTopColor(mixed $value): static
    {
        return $this->setFieldValue('top_color', $value);
    }

    /**
     * Required. Bottom color of the gradient in the RGB24 format
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getBottomColor(): mixed
    {
        return $this->getFieldValue('bottom_color');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setBottomColor(mixed $value): static
    {
        return $this->setFieldValue('bottom_color', $value);
    }

    /**
     * Required. Clockwise rotation angle of the background fill in degrees; 0-359
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getRotationAngle(): mixed
    {
        return $this->getFieldValue('rotation_angle');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setRotationAngle(mixed $value): static
    {
        return $this->setFieldValue('rotation_angle', $value);
    }
}
