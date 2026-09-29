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
 * Use this method to move a sticker in a set created by the bot to a specific position. Returns *True* on success.
 *
 * @link https://core.telegram.org/bots/api#setstickerpositioninset
 *
 * @property-read string|null $sticker Required. File identifier of the sticker
 * @property-write string $sticker
 * @property-read int|null $position Required. New sticker position in the set, zero-based
 * @property-write int $position
 *
 * @method Base\ParameterBool send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class SetStickerPositionInSet extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'sticker' => [
                'type' => ['string'],
                'required' => true,
            ],
            'position' => [
                'type' => ['int'],
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
     * Required. New sticker position in the set, zero-based
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getPosition(): mixed
    {
        return $this->getFieldValue('position');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPosition(mixed $value): static
    {
        return $this->setFieldValue('position', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'setStickerPositionInSet';
    }
}
