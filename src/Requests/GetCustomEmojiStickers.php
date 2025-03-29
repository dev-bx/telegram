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
 * Use this method to get information about custom emoji stickers by their identifiers. Returns an Array of [Sticker](#sticker) objects.
 * @property string[] $customEmojiIds
 * A JSON-serialized list of custom emoji identifiers. At most 200 custom emoji identifiers can be specified.
 * @method Stickers\Sticker[]|Base\BaseType send(Api $gateway = null)
 */
class GetCustomEmojiStickers extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'custom_emoji_ids' => [
                'type' => ['string'],
                'isArray' => true,
                'required' => true,
            ],
            '@return' => [
                'type' => Stickers\Sticker::class,
                'isArray' => true,
            ],
        ];
    }

    /**
    * @return string[]
    */

    public function getCustomEmojiIds(): mixed
    {
        return $this->getFieldValue('custom_emoji_ids');
    }

    /**
    * @param string[] $value
    * @return static
    */

    public function setCustomEmojiIds(mixed $value): static
    {
        return $this->setFieldValue('custom_emoji_ids', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'GetCustomEmojiStickers';
    }
}