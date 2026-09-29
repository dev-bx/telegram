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
use DevBX\Telegram\Stickers;

/**
 * Use this method to get a sticker set. On success, a `StickerSet` object is returned.
 *
 * @link https://core.telegram.org/bots/api#getstickerset
 *
 * @property-read string|null $name Required. Name of the sticker set
 * @property-write string $name
 *
 * @method Stickers\StickerSet send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class GetStickerSet extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'name' => [
                'type' => ['string'],
                'required' => true,
            ],
            '@return' => [
                'type' => [Stickers\StickerSet::class],
            ],
        ];
    }

    /**
     * Required. Name of the sticker set
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

    protected function getRequestMethod(): string
    {
        return 'getStickerSet';
    }
}
