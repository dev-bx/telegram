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
 * Use this method to get information about custom emoji stickers by their identifiers. Returns an Array of `Sticker` objects.
 *
 * @link https://core.telegram.org/bots/api#getcustomemojistickers
 *
 * @property-read Base\ArrayObject<Base\ParameterString> $customEmojiIds Required. A JSON-serialized list of custom emoji identifiers. At most 200 custom emoji identifiers can be specified.
 * @property-write list<string>|Base\ArrayObject<Base\ParameterString> $customEmojiIds
 *
 * @method Base\ArrayObject<Stickers\Sticker> send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class GetCustomEmojiStickers extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'custom_emoji_ids' => [
                'type' => ['string'],
                'isArray' => true,
                'required' => true,
            ],
            '@return' => [
                'type' => [Stickers\Sticker::class],
                'isArray' => true,
            ],
        ];
    }

    /**
     * Required. A JSON-serialized list of custom emoji identifiers. At most 200 custom emoji identifiers can be specified.
     *
     * @return Base\ArrayObject<Base\ParameterString>
     * @throws Base\TelegramException
     */
    public function getCustomEmojiIds(): mixed
    {
        return $this->getFieldValue('custom_emoji_ids');
    }

    /**
     * @param list<string>|Base\ArrayObject<Base\ParameterString> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCustomEmojiIds(mixed $value): static
    {
        return $this->setFieldValue('custom_emoji_ids', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'getCustomEmojiStickers';
    }
}
