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
 * This object describes the colors of the backdrop of a unique gift.
 *
 * @link https://core.telegram.org/bots/api#uniquegiftbackdropcolors
 *
 * @property-read int|null $centerColor Required. The color in the center of the backdrop in RGB format
 * @property-write int $centerColor
 * @property-read int|null $edgeColor Required. The color on the edges of the backdrop in RGB format
 * @property-write int $edgeColor
 * @property-read int|null $symbolColor Required. The color to be applied to the symbol in RGB format
 * @property-write int $symbolColor
 * @property-read int|null $textColor Required. The color for the text on the backdrop in RGB format
 * @property-write int $textColor
 */
class UniqueGiftBackdropColors extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'center_color' => [
                'type' => ['int'],
                'required' => true,
            ],
            'edge_color' => [
                'type' => ['int'],
                'required' => true,
            ],
            'symbol_color' => [
                'type' => ['int'],
                'required' => true,
            ],
            'text_color' => [
                'type' => ['int'],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. The color in the center of the backdrop in RGB format
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getCenterColor(): mixed
    {
        return $this->getFieldValue('center_color');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCenterColor(mixed $value): static
    {
        return $this->setFieldValue('center_color', $value);
    }

    /**
     * Required. The color on the edges of the backdrop in RGB format
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getEdgeColor(): mixed
    {
        return $this->getFieldValue('edge_color');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setEdgeColor(mixed $value): static
    {
        return $this->setFieldValue('edge_color', $value);
    }

    /**
     * Required. The color to be applied to the symbol in RGB format
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getSymbolColor(): mixed
    {
        return $this->getFieldValue('symbol_color');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSymbolColor(mixed $value): static
    {
        return $this->setFieldValue('symbol_color', $value);
    }

    /**
     * Required. The color for the text on the backdrop in RGB format
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getTextColor(): mixed
    {
        return $this->getFieldValue('text_color');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setTextColor(mixed $value): static
    {
        return $this->setFieldValue('text_color', $value);
    }
}
