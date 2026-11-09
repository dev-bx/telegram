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
 * The theme with emoji placed on a background.
 *
 * @link https://core.telegram.org/bots/api#chatsharethemeemoji
 *
 * @property-read string|null $type Required. Type of the theme, always “emoji”
 * @property-write string $type
 * @property-read Base\ArrayObject<EmojiType> $emojis Required. The emoji; 0-6 regular or custom emoji
 * @property-write list<EmojiType|array<string, mixed>>|Base\ArrayObject<EmojiType> $emojis
 * @property-read int|null $backgroundBackdropId Optional. Identifier of the backdrop used as the background; omitted if the default background is used. Use `getChatShareThemeBackdrops` to get details about the backdrop.
 * @property-write int $backgroundBackdropId
 */
class ChatShareThemeEmoji extends ChatShareTheme
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
                'value' => 'emoji',
                'required' => true,
            ],
            'emojis' => [
                'type' => [EmojiType::class],
                'isArray' => true,
                'required' => true,
            ],
            'background_backdrop_id' => [
                'type' => ['int'],
            ],
        ];
    }

    /**
     * Required. Type of the theme, always “emoji”
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
     * Required. The emoji; 0-6 regular or custom emoji
     *
     * @return Base\ArrayObject<EmojiType>
     * @throws Base\TelegramException
     */
    public function getEmojis(): mixed
    {
        return $this->getFieldValue('emojis');
    }

    /**
     * @param list<EmojiType|array<string, mixed>>|Base\ArrayObject<EmojiType> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setEmojis(mixed $value): static
    {
        return $this->setFieldValue('emojis', $value);
    }

    /**
     * Optional. Identifier of the backdrop used as the background; omitted if the default background is used. Use `getChatShareThemeBackdrops` to get details about the backdrop.
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getBackgroundBackdropId(): mixed
    {
        return $this->getFieldValue('background_backdrop_id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setBackgroundBackdropId(mixed $value): static
    {
        return $this->setFieldValue('background_backdrop_id', $value);
    }
}
