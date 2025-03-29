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
 * Use this method to replace an existing sticker in a sticker set with a new one. The method is equivalent to calling [deleteStickerFromSet](#deletestickerfromset), then [addStickerToSet](#addstickertoset), then [setStickerPositionInSet](#setstickerpositioninset). Returns *True* on success.
 * @property int $userId
 * User identifier of the sticker set owner
 * @property string $name
 * Sticker set name
 * @property string $oldSticker
 * File identifier of the replaced sticker
 * @property Stickers\InputSticker $sticker
 * A JSON-serialized object with information about the added sticker. If exactly the same sticker had already been added to the set, then the set remains unchanged.
 * @method Base\BaseType send(Api $gateway = null)
 */
class ReplaceStickerInSet extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'user_id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'name' => [
                'type' => ['string'],
                'required' => true,
            ],
            'old_sticker' => [
                'type' => ['string'],
                'required' => true,
            ],
            'sticker' => [
                'type' => [Stickers\InputSticker::class],
                'required' => true,
            ],
        ];
    }

    /**
    * @return int
    */

    public function getUserId(): mixed
    {
        return $this->getFieldValue('user_id');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setUserId(mixed $value): static
    {
        return $this->setFieldValue('user_id', $value);
    }

    /**
    * @return string
    */

    public function getName(): mixed
    {
        return $this->getFieldValue('name');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setName(mixed $value): static
    {
        return $this->setFieldValue('name', $value);
    }

    /**
    * @return string
    */

    public function getOldSticker(): mixed
    {
        return $this->getFieldValue('old_sticker');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setOldSticker(mixed $value): static
    {
        return $this->setFieldValue('old_sticker', $value);
    }

    /**
    * @return Stickers\InputSticker
    */

    public function getSticker(): mixed
    {
        return $this->getFieldValue('sticker');
    }

    /**
    * @param Stickers\InputSticker $value
    * @return static
    */

    public function setSticker(mixed $value): static
    {
        return $this->setFieldValue('sticker', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'ReplaceStickerInSet';
    }
}