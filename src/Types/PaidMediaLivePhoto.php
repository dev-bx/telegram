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
 * The paid media is a `LivePhoto`.
 *
 * @link https://core.telegram.org/bots/api#paidmedialivephoto
 *
 * @property-read string|null $type Required. Type of the paid media, always “live_photo”
 * @property-write string $type
 * @property-read LivePhoto|null $livePhoto Required. The photo
 * @property-write LivePhoto|array<string, mixed> $livePhoto
 */
class PaidMediaLivePhoto extends PaidMedia
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
                'value' => 'live_photo',
                'required' => true,
            ],
            'live_photo' => [
                'type' => [LivePhoto::class],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Type of the paid media, always “live_photo”
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
     * @return LivePhoto|null
     * @throws Base\TelegramException
     */
    public function getLivePhoto(): mixed
    {
        return $this->getFieldValue('live_photo');
    }

    /**
     * @param LivePhoto|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setLivePhoto(mixed $value): static
    {
        return $this->setFieldValue('live_photo', $value);
    }
}
