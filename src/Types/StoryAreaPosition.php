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
 * Describes the position of a clickable area within a story.
 *
 * @link https://core.telegram.org/bots/api#storyareaposition
 *
 * @property-read float|null $xPercentage Required. The abscissa of the area's center, as a percentage of the media width
 * @property-write float|int $xPercentage
 * @property-read float|null $yPercentage Required. The ordinate of the area's center, as a percentage of the media height
 * @property-write float|int $yPercentage
 * @property-read float|null $widthPercentage Required. The width of the area's rectangle, as a percentage of the media width
 * @property-write float|int $widthPercentage
 * @property-read float|null $heightPercentage Required. The height of the area's rectangle, as a percentage of the media height
 * @property-write float|int $heightPercentage
 * @property-read float|null $rotationAngle Required. The clockwise rotation angle of the rectangle, in degrees; 0-360
 * @property-write float|int $rotationAngle
 * @property-read float|null $cornerRadiusPercentage Required. The radius of the rectangle corner rounding, as a percentage of the media width
 * @property-write float|int $cornerRadiusPercentage
 */
class StoryAreaPosition extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'x_percentage' => [
                'type' => ['float'],
                'required' => true,
            ],
            'y_percentage' => [
                'type' => ['float'],
                'required' => true,
            ],
            'width_percentage' => [
                'type' => ['float'],
                'required' => true,
            ],
            'height_percentage' => [
                'type' => ['float'],
                'required' => true,
            ],
            'rotation_angle' => [
                'type' => ['float'],
                'required' => true,
            ],
            'corner_radius_percentage' => [
                'type' => ['float'],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. The abscissa of the area's center, as a percentage of the media width
     *
     * @return float|null
     * @throws Base\TelegramException
     */
    public function getXPercentage(): mixed
    {
        return $this->getFieldValue('x_percentage');
    }

    /**
     * @param float|int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setXPercentage(mixed $value): static
    {
        return $this->setFieldValue('x_percentage', $value);
    }

    /**
     * Required. The ordinate of the area's center, as a percentage of the media height
     *
     * @return float|null
     * @throws Base\TelegramException
     */
    public function getYPercentage(): mixed
    {
        return $this->getFieldValue('y_percentage');
    }

    /**
     * @param float|int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setYPercentage(mixed $value): static
    {
        return $this->setFieldValue('y_percentage', $value);
    }

    /**
     * Required. The width of the area's rectangle, as a percentage of the media width
     *
     * @return float|null
     * @throws Base\TelegramException
     */
    public function getWidthPercentage(): mixed
    {
        return $this->getFieldValue('width_percentage');
    }

    /**
     * @param float|int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setWidthPercentage(mixed $value): static
    {
        return $this->setFieldValue('width_percentage', $value);
    }

    /**
     * Required. The height of the area's rectangle, as a percentage of the media height
     *
     * @return float|null
     * @throws Base\TelegramException
     */
    public function getHeightPercentage(): mixed
    {
        return $this->getFieldValue('height_percentage');
    }

    /**
     * @param float|int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setHeightPercentage(mixed $value): static
    {
        return $this->setFieldValue('height_percentage', $value);
    }

    /**
     * Required. The clockwise rotation angle of the rectangle, in degrees; 0-360
     *
     * @return float|null
     * @throws Base\TelegramException
     */
    public function getRotationAngle(): mixed
    {
        return $this->getFieldValue('rotation_angle');
    }

    /**
     * @param float|int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setRotationAngle(mixed $value): static
    {
        return $this->setFieldValue('rotation_angle', $value);
    }

    /**
     * Required. The radius of the rectangle corner rounding, as a percentage of the media width
     *
     * @return float|null
     * @throws Base\TelegramException
     */
    public function getCornerRadiusPercentage(): mixed
    {
        return $this->getFieldValue('corner_radius_percentage');
    }

    /**
     * @param float|int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCornerRadiusPercentage(mixed $value): static
    {
        return $this->setFieldValue('corner_radius_percentage', $value);
    }
}
