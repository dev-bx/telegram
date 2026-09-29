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
 * Describes the paid media added to a message.
 *
 * @link https://core.telegram.org/bots/api#paidmediainfo
 *
 * @property-read int|null $starCount Required. The number of Telegram Stars that must be paid to buy access to the media
 * @property-write int $starCount
 * @property-read Base\ArrayObject<PaidMedia> $paidMedia Required. Information about the paid media
 * @property-write list<PaidMedia|array<string, mixed>>|Base\ArrayObject<PaidMedia> $paidMedia
 */
class PaidMediaInfo extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'star_count' => [
                'type' => ['int'],
                'required' => true,
            ],
            'paid_media' => [
                'type' => [PaidMedia::class],
                'isArray' => true,
                'required' => true,
            ],
        ];
    }

    /**
     * Required. The number of Telegram Stars that must be paid to buy access to the media
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getStarCount(): mixed
    {
        return $this->getFieldValue('star_count');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setStarCount(mixed $value): static
    {
        return $this->setFieldValue('star_count', $value);
    }

    /**
     * Required. Information about the paid media
     *
     * @return Base\ArrayObject<PaidMedia>
     * @throws Base\TelegramException
     */
    public function getPaidMedia(): mixed
    {
        return $this->getFieldValue('paid_media');
    }

    /**
     * @param list<PaidMedia|array<string, mixed>>|Base\ArrayObject<PaidMedia> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPaidMedia(mixed $value): static
    {
        return $this->setFieldValue('paid_media', $value);
    }
}
