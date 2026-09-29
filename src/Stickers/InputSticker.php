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

namespace DevBX\Telegram\Stickers;

use DevBX\Telegram\Base;

/**
 * This object describes a sticker to be added to a sticker set.
 *
 * @link https://core.telegram.org/bots/api#inputsticker
 *
 * @property-read string|null $sticker Required. The added sticker. Pass a *file_id* as a String to send a file that already exists on the Telegram servers, pass an HTTP URL as a String for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new file using multipart/form-data under <file_attach_name> name. Animated and video stickers can't be uploaded via HTTP URL. [More information on Sending Files »](https://core.telegram.org/bots/api#sending-files)
 * @property-write string $sticker
 * @property-read string|null $format Required. Format of the added sticker, must be one of “static” for a **.WEBP** or **.PNG** image, “animated” for a **.TGS** animation, “video” for a **.WEBM** video
 * @property-write string $format
 * @property-read Base\ArrayObject<Base\ParameterString> $emojiList Required. List of 1-20 emoji associated with the sticker
 * @property-write list<string>|Base\ArrayObject<Base\ParameterString> $emojiList
 * @property-read MaskPosition|null $maskPosition Optional. Position where the mask should be placed on faces. For “mask” stickers only.
 * @property-write MaskPosition|array<string, mixed> $maskPosition
 * @property-read Base\ArrayObject<Base\ParameterString> $keywords Optional. List of 0-20 search keywords for the sticker with total length of up to 64 characters. For “regular” and “custom_emoji” stickers only.
 * @property-write list<string>|Base\ArrayObject<Base\ParameterString> $keywords
 */
class InputSticker extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'sticker' => [
                'type' => ['string'],
                'required' => true,
            ],
            'format' => [
                'type' => ['string'],
                'required' => true,
            ],
            'emoji_list' => [
                'type' => ['string'],
                'isArray' => true,
                'required' => true,
            ],
            'mask_position' => [
                'type' => [MaskPosition::class],
            ],
            'keywords' => [
                'type' => ['string'],
                'isArray' => true,
            ],
        ];
    }

    /**
     * Required. The added sticker. Pass a *file_id* as a String to send a file that already exists on the Telegram servers, pass an HTTP URL as a String for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new file using multipart/form-data under <file_attach_name> name. Animated and video stickers can't be uploaded via HTTP URL. [More information on Sending Files »](https://core.telegram.org/bots/api#sending-files)
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
     * Required. Format of the added sticker, must be one of “static” for a **.WEBP** or **.PNG** image, “animated” for a **.TGS** animation, “video” for a **.WEBM** video
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getFormat(): mixed
    {
        return $this->getFieldValue('format');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setFormat(mixed $value): static
    {
        return $this->setFieldValue('format', $value);
    }

    /**
     * Required. List of 1-20 emoji associated with the sticker
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

    /**
     * Optional. Position where the mask should be placed on faces. For “mask” stickers only.
     *
     * @return MaskPosition|null
     * @throws Base\TelegramException
     */
    public function getMaskPosition(): mixed
    {
        return $this->getFieldValue('mask_position');
    }

    /**
     * @param MaskPosition|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setMaskPosition(mixed $value): static
    {
        return $this->setFieldValue('mask_position', $value);
    }

    /**
     * Optional. List of 0-20 search keywords for the sticker with total length of up to 64 characters. For “regular” and “custom_emoji” stickers only.
     *
     * @return Base\ArrayObject<Base\ParameterString>
     * @throws Base\TelegramException
     */
    public function getKeywords(): mixed
    {
        return $this->getFieldValue('keywords');
    }

    /**
     * @param list<string>|Base\ArrayObject<Base\ParameterString> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setKeywords(mixed $value): static
    {
        return $this->setFieldValue('keywords', $value);
    }
}
