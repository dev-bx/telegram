<?php

/**
 * @project Telegram Bot Api
 * @author Kubeev Ruslan <ruslan@dev-bx.ru>
 * @copyright 2025 Kubeev Ruslan
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
 * Use this method to change the [mask position](#maskposition) of a mask sticker. The sticker must belong to a sticker set that was created by the bot. Returns *True* on success.
 * @property string $sticker
 * File identifier of the sticker
 * @property Stickers\MaskPosition $maskPosition
 * A JSON-serialized object with the position where the mask should be placed on faces. Omit the parameter to remove the mask position.
 * @method Base\BaseType send(Api $gateway = null)
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
        ];
    }

    /**
    * @return string
    */

    public function getSticker(): mixed
    {
        return $this->getFieldValue('sticker');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setSticker(mixed $value): static
    {
        return $this->setFieldValue('sticker', $value);
    }

    /**
    * @return Stickers\MaskPosition
    */

    public function getMaskPosition(): mixed
    {
        return $this->getFieldValue('mask_position');
    }

    /**
    * @param Stickers\MaskPosition $value
    * @return static
    */

    public function setMaskPosition(mixed $value): static
    {
        return $this->setFieldValue('mask_position', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'SetStickerMaskPosition';
    }
}