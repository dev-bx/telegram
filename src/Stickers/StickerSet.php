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
 * This object represents a sticker set.
 *
 * @link https://core.telegram.org/bots/api#stickerset
 *
 * @property-read string|null $name Required. Sticker set name
 * @property-write string $name
 * @property-read string|null $title Required. Sticker set title
 * @property-write string $title
 * @property-read string|null $stickerType Required. Type of stickers in the set, currently one of “regular”, “mask”, “custom_emoji”
 * @property-write string $stickerType
 * @property-read Base\ArrayObject<Sticker> $stickers Required. List of all set stickers
 * @property-write list<Sticker|array<string, mixed>>|Base\ArrayObject<Sticker> $stickers
 * @property-read Types\PhotoSize|null $thumbnail Optional. Sticker set thumbnail in the .WEBP, .TGS, or .WEBM format
 * @property-write Types\PhotoSize|array<string, mixed> $thumbnail
 */
class StickerSet extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'name' => [
                'type' => ['string'],
                'required' => true,
            ],
            'title' => [
                'type' => ['string'],
                'required' => true,
            ],
            'sticker_type' => [
                'type' => ['string'],
                'required' => true,
            ],
            'stickers' => [
                'type' => [Sticker::class],
                'isArray' => true,
                'required' => true,
            ],
            'thumbnail' => [
                'type' => [Types\PhotoSize::class],
            ],
        ];
    }

    /**
     * Required. Sticker set name
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getName(): mixed
    {
        return $this->getFieldValue('name');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setName(mixed $value): static
    {
        return $this->setFieldValue('name', $value);
    }

    /**
     * Required. Sticker set title
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getTitle(): mixed
    {
        return $this->getFieldValue('title');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setTitle(mixed $value): static
    {
        return $this->setFieldValue('title', $value);
    }

    /**
     * Required. Type of stickers in the set, currently one of “regular”, “mask”, “custom_emoji”
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getStickerType(): mixed
    {
        return $this->getFieldValue('sticker_type');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setStickerType(mixed $value): static
    {
        return $this->setFieldValue('sticker_type', $value);
    }

    /**
     * Required. List of all set stickers
     *
     * @return Base\ArrayObject<Sticker>
     * @throws Base\TelegramException
     */
    public function getStickers(): mixed
    {
        return $this->getFieldValue('stickers');
    }

    /**
     * @param list<Sticker|array<string, mixed>>|Base\ArrayObject<Sticker> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setStickers(mixed $value): static
    {
        return $this->setFieldValue('stickers', $value);
    }

    /**
     * Optional. Sticker set thumbnail in the .WEBP, .TGS, or .WEBM format
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
}
