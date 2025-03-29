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
 * Use this method to change the list of emoji assigned to a regular or custom emoji sticker. The sticker must belong to a sticker set created by the bot. Returns *True* on success.
 * @property string $sticker
 * File identifier of the sticker
 * @property string[] $emojiList
 * A JSON-serialized list of 1-20 emoji associated with the sticker
 * @method Base\BaseType send(Api $gateway = null)
 */
class SetStickerEmojiList extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'sticker' => [
                'type' => ['string'],
                'required' => true,
            ],
            'emoji_list' => [
                'type' => ['string'],
                'isArray' => true,
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
    * @return string[]
    */

    public function getEmojiList(): mixed
    {
        return $this->getFieldValue('emoji_list');
    }

    /**
    * @param string[] $value
    * @return static
    */

    public function setEmojiList(mixed $value): static
    {
        return $this->setFieldValue('emoji_list', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'SetStickerEmojiList';
    }
}