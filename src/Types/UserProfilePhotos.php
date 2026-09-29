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
 * This object represent a user's profile pictures.
 *
 * @link https://core.telegram.org/bots/api#userprofilephotos
 *
 * @property-read int|null $totalCount Required. Total number of profile pictures the target user has
 * @property-write int $totalCount
 * @property-read Base\ArrayOfArrayObject<PhotoSize> $photos Required. Requested profile pictures (in up to 4 sizes each)
 * @property-write list<list<PhotoSize|array<string, mixed>>>|Base\ArrayOfArrayObject<PhotoSize> $photos
 */
class UserProfilePhotos extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'total_count' => [
                'type' => ['int'],
                'required' => true,
            ],
            'photos' => [
                'type' => [PhotoSize::class],
                'isArray' => 'matrix',
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Total number of profile pictures the target user has
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getTotalCount(): mixed
    {
        return $this->getFieldValue('total_count');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setTotalCount(mixed $value): static
    {
        return $this->setFieldValue('total_count', $value);
    }

    /**
     * Required. Requested profile pictures (in up to 4 sizes each)
     *
     * @return Base\ArrayOfArrayObject<PhotoSize>
     * @throws Base\TelegramException
     */
    public function getPhotos(): mixed
    {
        return $this->getFieldValue('photos');
    }

    /**
     * @param list<list<PhotoSize|array<string, mixed>>>|Base\ArrayOfArrayObject<PhotoSize> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPhotos(mixed $value): static
    {
        return $this->setFieldValue('photos', $value);
    }
}
