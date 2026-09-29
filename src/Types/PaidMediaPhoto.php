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

namespace DevBX\Telegram\Types;

use DevBX\Telegram\Base;

/**
 * The paid media is a photo.
 *
 * @link https://core.telegram.org/bots/api#paidmediaphoto
 *
 * @property-read string|null $type Required. Type of the paid media, always “photo”
 * @property-write string $type
 * @property-read Base\ArrayObject<PhotoSize> $photo Required. The photo
 * @property-write list<PhotoSize|array<string, mixed>>|Base\ArrayObject<PhotoSize> $photo
 */
class PaidMediaPhoto extends PaidMedia
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
                'type' => [PhotoSize::class],
                'isArray' => true,
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Type of the paid media, always “photo”
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
     * Required. The photo
     *
     * @return Base\ArrayObject<PhotoSize>
     * @throws Base\TelegramException
     */
    public function getPhoto(): mixed
    {
        return $this->getFieldValue('photo');
    }

    /**
     * @param list<PhotoSize|array<string, mixed>>|Base\ArrayObject<PhotoSize> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPhoto(mixed $value): static
    {
        return $this->setFieldValue('photo', $value);
    }
}
