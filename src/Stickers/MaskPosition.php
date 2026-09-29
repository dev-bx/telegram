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

namespace DevBX\Telegram\Stickers;

use DevBX\Telegram\Base;

/**
 * This object describes the position on faces where a mask should be placed by default.
 *
 * @link https://core.telegram.org/bots/api#maskposition
 *
 * @property-read string|null $point Required. The part of the face relative to which the mask should be placed. One of “forehead”, “eyes”, “mouth”, or “chin”.
 * @property-write string $point
 * @property-read float|null $xShift Required. Shift by X-axis measured in widths of the mask scaled to the face size, from left to right. For example, choosing -1.0 will place mask just to the left of the default mask position.
 * @property-write float|int $xShift
 * @property-read float|null $yShift Required. Shift by Y-axis measured in heights of the mask scaled to the face size, from top to bottom. For example, 1.0 will place the mask just below the default mask position.
 * @property-write float|int $yShift
 * @property-read float|null $scale Required. Mask scaling coefficient. For example, 2.0 means double size.
 * @property-write float|int $scale
 */
class MaskPosition extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'point' => [
                'type' => ['string'],
                'required' => true,
            ],
            'x_shift' => [
                'type' => ['float'],
                'required' => true,
            ],
            'y_shift' => [
                'type' => ['float'],
                'required' => true,
            ],
            'scale' => [
                'type' => ['float'],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. The part of the face relative to which the mask should be placed. One of “forehead”, “eyes”, “mouth”, or “chin”.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getPoint(): mixed
    {
        return $this->getFieldValue('point');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPoint(mixed $value): static
    {
        return $this->setFieldValue('point', $value);
    }

    /**
     * Required. Shift by X-axis measured in widths of the mask scaled to the face size, from left to right. For example, choosing -1.0 will place mask just to the left of the default mask position.
     *
     * @return float|null
     * @throws Base\TelegramException
     */
    public function getXShift(): mixed
    {
        return $this->getFieldValue('x_shift');
    }

    /**
     * @param float|int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setXShift(mixed $value): static
    {
        return $this->setFieldValue('x_shift', $value);
    }

    /**
     * Required. Shift by Y-axis measured in heights of the mask scaled to the face size, from top to bottom. For example, 1.0 will place the mask just below the default mask position.
     *
     * @return float|null
     * @throws Base\TelegramException
     */
    public function getYShift(): mixed
    {
        return $this->getFieldValue('y_shift');
    }

    /**
     * @param float|int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setYShift(mixed $value): static
    {
        return $this->setFieldValue('y_shift', $value);
    }

    /**
     * Required. Mask scaling coefficient. For example, 2.0 means double size.
     *
     * @return float|null
     * @throws Base\TelegramException
     */
    public function getScale(): mixed
    {
        return $this->getFieldValue('scale');
    }

    /**
     * @param float|int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setScale(mixed $value): static
    {
        return $this->setFieldValue('scale', $value);
    }
}
