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
 * Use this method to move a sticker in a set created by the bot to a specific position. Returns *True* on success.
 * @property string $sticker
 * File identifier of the sticker
 * @property int $position
 * New sticker position in the set, zero-based
 * @method Base\BaseType send(Api $gateway = null)
 */
class SetStickerPositionInSet extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'sticker' => [
                'type' => ['string'],
                'required' => true,
            ],
            'position' => [
                'type' => ['int'],
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

    /**
    * @return int
    */

    public function getPosition(): mixed
    {
        return $this->getFieldValue('position');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setPosition(mixed $value): static
    {
        return $this->setFieldValue('position', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'SetStickerPositionInSet';
    }
}