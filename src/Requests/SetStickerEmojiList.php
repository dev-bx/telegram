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

/**
 * Use this method to change the list of emoji assigned to a regular or custom emoji sticker. The sticker must belong to a sticker set created by the bot. Returns *True* on success.
 *
 * @link https://core.telegram.org/bots/api#setstickeremojilist
 *
 * @property-read string|null $sticker Required. File identifier of the sticker
 * @property-write string $sticker
 * @property-read Base\ArrayObject<Base\ParameterString> $emojiList Required. A JSON-serialized list of 1-20 emoji associated with the sticker
 * @property-write list<string>|Base\ArrayObject<Base\ParameterString> $emojiList
 *
 * @method Base\ParameterBool send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
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
     * Required. A JSON-serialized list of 1-20 emoji associated with the sticker
     *
     * @return Base\ArrayObject<Base\ParameterString>
     * @throws Base\TelegramException
     */
    public function getEmojiList(): mixed
    {
        return $this->getFieldValue('emoji_list');
    }

    /**
     * @param list<string>|Base\ArrayObject<Base\ParameterString> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setEmojiList(mixed $value): static
    {
        return $this->setFieldValue('emoji_list', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'setStickerEmojiList';
    }
}
