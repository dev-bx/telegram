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

namespace DevBX\Telegram\RichMessages;

use DevBX\Telegram\Base;
use DevBX\Telegram\Types;

/**
 * A block with a photo, corresponding to the HTML tag `<img>`.
 *
 * @link https://core.telegram.org/bots/api#richblockphoto
 *
 * @property-read string|null $type Required. Type of the block, always “photo”
 * @property-write string $type
 * @property-read Base\ArrayObject<Types\PhotoSize> $photo Required. Available sizes of the photo
 * @property-write list<Types\PhotoSize|array<string, mixed>>|Base\ArrayObject<Types\PhotoSize> $photo
 * @property-read bool|null $hasSpoiler Optional. *True*, if the media preview is covered by a spoiler animation
 * @property-write bool $hasSpoiler
 * @property-read RichBlockCaption|null $caption Optional. Caption of the block
 * @property-write RichBlockCaption|array<string, mixed> $caption
 */
class RichBlockPhoto extends RichBlock
{
    /**
     * @return static
     * @throws Base\TelegramException
     */
    public static function create(mixed $value = null, bool $ignoreUnknownFields = false): ?Base\BaseType
    {
        return static::createInstance($value, $ignoreUnknownFields);
    }

    public static function getFields(): array
    {
        return [
            'type' => [
                'type' => ['string'],
                'value' => 'photo',
                'required' => true,
            ],
            'photo' => [
                'type' => [Types\PhotoSize::class],
                'isArray' => true,
                'required' => true,
            ],
            'has_spoiler' => [
                'type' => ['bool'],
            ],
            'caption' => [
                'type' => [RichBlockCaption::class],
            ],
        ];
    }

    /**
     * Required. Type of the block, always “photo”
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
     * Required. Available sizes of the photo
     *
     * @return Base\ArrayObject<Types\PhotoSize>
     * @throws Base\TelegramException
     */
    public function getPhoto(): mixed
    {
        return $this->getFieldValue('photo');
    }

    /**
     * @param list<Types\PhotoSize|array<string, mixed>>|Base\ArrayObject<Types\PhotoSize> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPhoto(mixed $value): static
    {
        return $this->setFieldValue('photo', $value);
    }

    /**
     * Optional. *True*, if the media preview is covered by a spoiler animation
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getHasSpoiler(): mixed
    {
        return $this->getFieldValue('has_spoiler');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setHasSpoiler(mixed $value): static
    {
        return $this->setFieldValue('has_spoiler', $value);
    }

    /**
     * Optional. Caption of the block
     *
     * @return RichBlockCaption|null
     * @throws Base\TelegramException
     */
    public function getCaption(): mixed
    {
        return $this->getFieldValue('caption');
    }

    /**
     * @param RichBlockCaption|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCaption(mixed $value): static
    {
        return $this->setFieldValue('caption', $value);
    }
}
