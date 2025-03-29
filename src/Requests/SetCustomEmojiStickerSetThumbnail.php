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
 * Use this method to set the thumbnail of a custom emoji sticker set. Returns *True* on success.
 * @property string $name
 * Sticker set name
 * @property string $customEmojiId
 * Custom emoji identifier of a sticker from the sticker set; pass an empty string to drop the thumbnail and use the first sticker as the thumbnail.
 * @method Base\BaseType send(Api $gateway = null)
 */
class SetCustomEmojiStickerSetThumbnail extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'name' => [
                'type' => ['string'],
                'required' => true,
            ],
            'custom_emoji_id' => [
                'type' => ['string'],
            ],
        ];
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

    public function getCustomEmojiId(): mixed
    {
        return $this->getFieldValue('custom_emoji_id');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setCustomEmojiId(mixed $value): static
    {
        return $this->setFieldValue('custom_emoji_id', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'SetCustomEmojiStickerSetThumbnail';
    }
}