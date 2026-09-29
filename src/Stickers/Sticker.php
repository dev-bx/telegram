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
use DevBX\Telegram\Types;

/**
 * This object represents a sticker.
 *
 * @link https://core.telegram.org/bots/api#sticker
 *
 * @property-read string|null $fileId Required. Identifier for this file, which can be used to download or reuse the file
 * @property-write string $fileId
 * @property-read string|null $fileUniqueId Required. Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 * @property-write string $fileUniqueId
 * @property-read string|null $type Required. Type of the sticker, currently one of “regular”, “mask”, “custom_emoji”. The type of the sticker is independent from its format, which is determined by the fields *is_animated* and *is_video*.
 * @property-write string $type
 * @property-read int|null $width Required. Sticker width
 * @property-write int $width
 * @property-read int|null $height Required. Sticker height
 * @property-write int $height
 * @property-read bool|null $isAnimated Required. *True*, if the sticker is [animated](https://telegram.org/blog/animated-stickers)
 * @property-write bool $isAnimated
 * @property-read bool|null $isVideo Required. *True*, if the sticker is a [video sticker](https://telegram.org/blog/video-stickers-better-reactions)
 * @property-write bool $isVideo
 * @property-read Types\PhotoSize|null $thumbnail Optional. Sticker thumbnail in the .WEBP or .JPG format
 * @property-write Types\PhotoSize|array<string, mixed> $thumbnail
 * @property-read string|null $emoji Optional. Emoji associated with the sticker
 * @property-write string $emoji
 * @property-read string|null $setName Optional. Name of the sticker set to which the sticker belongs
 * @property-write string $setName
 * @property-read Types\File|null $premiumAnimation Optional. For premium regular stickers, premium animation for the sticker
 * @property-write Types\File|array<string, mixed> $premiumAnimation
 * @property-read MaskPosition|null $maskPosition Optional. For mask stickers, the position where the mask should be placed
 * @property-write MaskPosition|array<string, mixed> $maskPosition
 * @property-read string|null $customEmojiId Optional. For custom emoji stickers, unique identifier of the custom emoji
 * @property-write string $customEmojiId
 * @property-read bool|null $needsRepainting Optional. *True*, if the sticker must be repainted to a text color in messages, the color of the Telegram Premium badge in emoji status, white color on chat photos, or another appropriate color in other places
 * @property-write bool $needsRepainting
 * @property-read int|null $fileSize Optional. File size in bytes
 * @property-write int $fileSize
 */
class Sticker extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'file_id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'file_unique_id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'type' => [
                'type' => ['string'],
                'required' => true,
            ],
            'width' => [
                'type' => ['int'],
                'required' => true,
            ],
            'height' => [
                'type' => ['int'],
                'required' => true,
            ],
            'is_animated' => [
                'type' => ['bool'],
                'required' => true,
            ],
            'is_video' => [
                'type' => ['bool'],
                'required' => true,
            ],
            'thumbnail' => [
                'type' => [Types\PhotoSize::class],
            ],
            'emoji' => [
                'type' => ['string'],
            ],
            'set_name' => [
                'type' => ['string'],
            ],
            'premium_animation' => [
                'type' => [Types\File::class],
            ],
            'mask_position' => [
                'type' => [MaskPosition::class],
            ],
            'custom_emoji_id' => [
                'type' => ['string'],
            ],
            'needs_repainting' => [
                'type' => ['bool'],
            ],
            'file_size' => [
                'type' => ['int'],
            ],
        ];
    }

    /**
     * Required. Identifier for this file, which can be used to download or reuse the file
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getFileId(): mixed
    {
        return $this->getFieldValue('file_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setFileId(mixed $value): static
    {
        return $this->setFieldValue('file_id', $value);
    }

    /**
     * Required. Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getFileUniqueId(): mixed
    {
        return $this->getFieldValue('file_unique_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setFileUniqueId(mixed $value): static
    {
        return $this->setFieldValue('file_unique_id', $value);
    }

    /**
     * Required. Type of the sticker, currently one of “regular”, “mask”, “custom_emoji”. The type of the sticker is independent from its format, which is determined by the fields *is_animated* and *is_video*.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getType(): mixed
    {
        return $this->getFieldValue('type');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setType(mixed $value): static
    {
        return $this->setFieldValue('type', $value);
    }

    /**
     * Required. Sticker width
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getWidth(): mixed
    {
        return $this->getFieldValue('width');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setWidth(mixed $value): static
    {
        return $this->setFieldValue('width', $value);
    }

    /**
     * Required. Sticker height
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getHeight(): mixed
    {
        return $this->getFieldValue('height');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setHeight(mixed $value): static
    {
        return $this->setFieldValue('height', $value);
    }

    /**
     * Required. *True*, if the sticker is [animated](https://telegram.org/blog/animated-stickers)
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsAnimated(): mixed
    {
        return $this->getFieldValue('is_animated');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsAnimated(mixed $value): static
    {
        return $this->setFieldValue('is_animated', $value);
    }

    /**
     * Required. *True*, if the sticker is a [video sticker](https://telegram.org/blog/video-stickers-better-reactions)
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsVideo(): mixed
    {
        return $this->getFieldValue('is_video');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsVideo(mixed $value): static
    {
        return $this->setFieldValue('is_video', $value);
    }

    /**
     * Optional. Sticker thumbnail in the .WEBP or .JPG format
     *
     * @return Types\PhotoSize|null
     * @throws Base\TelegramException
     */
    public function getThumbnail(): mixed
    {
        return $this->getFieldValue('thumbnail');
    }

    /**
     * @param Types\PhotoSize|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setThumbnail(mixed $value): static
    {
        return $this->setFieldValue('thumbnail', $value);
    }

    /**
     * Optional. Emoji associated with the sticker
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getEmoji(): mixed
    {
        return $this->getFieldValue('emoji');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setEmoji(mixed $value): static
    {
        return $this->setFieldValue('emoji', $value);
    }

    /**
     * Optional. Name of the sticker set to which the sticker belongs
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getSetName(): mixed
    {
        return $this->getFieldValue('set_name');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSetName(mixed $value): static
    {
        return $this->setFieldValue('set_name', $value);
    }

    /**
     * Optional. For premium regular stickers, premium animation for the sticker
     *
     * @return Types\File|null
     * @throws Base\TelegramException
     */
    public function getPremiumAnimation(): mixed
    {
        return $this->getFieldValue('premium_animation');
    }

    /**
     * @param Types\File|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPremiumAnimation(mixed $value): static
    {
        return $this->setFieldValue('premium_animation', $value);
    }

    /**
     * Optional. For mask stickers, the position where the mask should be placed
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
     * Optional. For custom emoji stickers, unique identifier of the custom emoji
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getCustomEmojiId(): mixed
    {
        return $this->getFieldValue('custom_emoji_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCustomEmojiId(mixed $value): static
    {
        return $this->setFieldValue('custom_emoji_id', $value);
    }

    /**
     * Optional. *True*, if the sticker must be repainted to a text color in messages, the color of the Telegram Premium badge in emoji status, white color on chat photos, or another appropriate color in other places
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getNeedsRepainting(): mixed
    {
        return $this->getFieldValue('needs_repainting');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setNeedsRepainting(mixed $value): static
    {
        return $this->setFieldValue('needs_repainting', $value);
    }

    /**
     * Optional. File size in bytes
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getFileSize(): mixed
    {
        return $this->getFieldValue('file_size');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setFileSize(mixed $value): static
    {
        return $this->setFieldValue('file_size', $value);
    }
}
