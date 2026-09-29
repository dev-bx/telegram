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

namespace DevBX\Telegram\Requests;

use DevBX\Telegram\Base;
use DevBX\Telegram\Api;
use DevBX\Telegram\Stickers;

/**
 * Use this method to change the `MaskPosition` of a mask sticker. The sticker must belong to a sticker set that was created by the bot. Returns *True* on success.
 *
 * @link https://core.telegram.org/bots/api#setstickermaskposition
 *
 * @property-read string|null $sticker Required. File identifier of the sticker
 * @property-write string $sticker
 * @property-read Stickers\MaskPosition|null $maskPosition Optional. A JSON-serialized object with the position where the mask should be placed on faces. Omit the parameter to remove the mask position.
 * @property-write Stickers\MaskPosition|array<string, mixed> $maskPosition
 *
 * @method Base\ParameterBool send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class SetStickerMaskPosition extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'sticker' => [
                'type' => ['string'],
                'required' => true,
            ],
            'mask_position' => [
                'type' => [Stickers\MaskPosition::class],
            ],
            '@return' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Required. File identifier of the sticker
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getSticker(): mixed
    {
        return $this->getFieldValue('sticker');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSticker(mixed $value): static
    {
        return $this->setFieldValue('sticker', $value);
    }

    /**
     * Optional. A JSON-serialized object with the position where the mask should be placed on faces. Omit the parameter to remove the mask position.
     *
     * @return Stickers\MaskPosition|null
     * @throws Base\TelegramException
     */
    public function getMaskPosition(): mixed
    {
        return $this->getFieldValue('mask_position');
    }

    /**
     * @param Stickers\MaskPosition|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setMaskPosition(mixed $value): static
    {
        return $this->setFieldValue('mask_position', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'setStickerMaskPosition';
    }
}
