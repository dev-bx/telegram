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
 * Use this method to change search keywords assigned to a regular or custom emoji sticker. The sticker must belong to a sticker set created by the bot. Returns *True* on success.
 *
 * @link https://core.telegram.org/bots/api#setstickerkeywords
 *
 * @property-read string|null $sticker Required. File identifier of the sticker
 * @property-write string $sticker
 * @property-read Base\ArrayObject<Base\ParameterString> $keywords Optional. A JSON-serialized list of 0-20 search keywords for the sticker with total length of up to 64 characters
 * @property-write list<string>|Base\ArrayObject<Base\ParameterString> $keywords
 *
 * @method Base\ParameterBool send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class SetStickerKeywords extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'sticker' => [
                'type' => ['string'],
                'required' => true,
            ],
            'keywords' => [
                'type' => ['string'],
                'isArray' => true,
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
     * Optional. A JSON-serialized list of 0-20 search keywords for the sticker with total length of up to 64 characters
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

    protected function getRequestMethod(): string
    {
        return 'setStickerKeywords';
    }
}
