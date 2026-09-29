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

/**
 * A custom emoji.
 *
 * @link https://core.telegram.org/bots/api#richtextcustomemoji
 *
 * @property-read string|null $type Required. Type of the rich text, always “custom_emoji”
 * @property-write string $type
 * @property-read string|null $customEmojiId Required. Unique identifier of the custom emoji. Use `getCustomEmojiStickers` to get full information about the sticker.
 * @property-write string $customEmojiId
 * @property-read string|null $alternativeText Required. Alternative emoji for the custom emoji
 * @property-write string $alternativeText
 */
class RichTextCustomEmoji extends RichText
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
                'value' => 'custom_emoji',
                'required' => true,
            ],
            'custom_emoji_id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'alternative_text' => [
                'type' => ['string'],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Type of the rich text, always “custom_emoji”
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
     * Required. Unique identifier of the custom emoji. Use `getCustomEmojiStickers` to get full information about the sticker.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getCustomEmojiId(): mixed
    {
        return $this->getFieldValue('custom_emoji_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCustomEmojiId(mixed $value): static
    {
        return $this->setFieldValue('custom_emoji_id', $value);
    }

    /**
     * Required. Alternative emoji for the custom emoji
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getAlternativeText(): mixed
    {
        return $this->getFieldValue('alternative_text');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAlternativeText(mixed $value): static
    {
        return $this->setFieldValue('alternative_text', $value);
    }
}
