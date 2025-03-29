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
 * Use this method to change search keywords assigned to a regular or custom emoji sticker. The sticker must belong to a sticker set created by the bot. Returns *True* on success.
 * @property string $sticker
 * File identifier of the sticker
 * @property string[] $keywords
 * A JSON-serialized list of 0-20 search keywords for the sticker with total length of up to 64 characters
 * @method Base\BaseType send(Api $gateway = null)
 */
class SetStickerKeywords extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'sticker' => [
                'type' => ['string'],
                'required' => true,
            ],
            'keywords' => [
                'type' => ['string'],
                'isArray' => true,
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
    * @return string[]
    */

    public function getKeywords(): mixed
    {
        return $this->getFieldValue('keywords');
    }

    /**
    * @param string[] $value
    * @return static
    */

    public function setKeywords(mixed $value): static
    {
        return $this->setFieldValue('keywords', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'SetStickerKeywords';
    }
}