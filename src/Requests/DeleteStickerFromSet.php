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

/**
 * Use this method to delete a sticker from a set created by the bot. Returns *True* on success.
 * @property string $sticker
 * File identifier of the sticker
 * @method Base\BaseType send(Api $gateway = null)
 */
class DeleteStickerFromSet extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'sticker' => [
                'type' => ['string'],
                'required' => true,
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

    protected function getRequestMethod(): string
    {
        return 'DeleteStickerFromSet';
    }
}