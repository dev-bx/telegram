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
 * This object represents one special entity in a text message. For example, hashtags, usernames, URLs, etc.
 *
 * @link https://core.telegram.org/bots/api#messageentity
 *
 * @property-read string|null $type Required. Type of the entity. Currently, can be “mention” (`@username`), “hashtag” (`#hashtag` or `#hashtag@chatusername`), “cashtag” (`$USD` or `$USD@chatusername`), “bot_command” (`/start@jobs_bot`), “url” (`https://telegram.org`), “email” (`do-not-reply@telegram.org`), “phone_number” (`+1-212-555-0123`), “bold” (**bold text**), “italic” (*italic text*), “underline” (underlined text), “strikethrough” (strikethrough text), “spoiler” (spoiler message), “blockquote” (block quotation), “expandable_blockquote” (collapsed-by-default block quotation), “code” (monowidth string), “pre” (monowidth block), “text_link” (for clickable text URLs), “text_mention” (for users [without usernames](https://telegram.org/blog/edit#new-mentions)), “custom_emoji” (for inline custom emoji stickers), or “date_time” (for formatted date and time).
 * @property-write string $type
 * @property-read int|null $offset Required. Offset in [UTF-16 code units](https://core.telegram.org/api/entities#entity-length) to the start of the entity
 * @property-write int $offset
 * @property-read int|null $length Required. Length of the entity in [UTF-16 code units](https://core.telegram.org/api/entities#entity-length)
 * @property-write int $length
 * @property-read string|null $url Optional. For “text_link” only, URL that will be opened after user taps on the text
 * @property-write string $url
 * @property-read User|null $user Optional. For “text_mention” only, the mentioned user
 * @property-write User|array<string, mixed> $user
 * @property-read string|null $language Optional. For “pre” only, the programming language of the entity text
 * @property-write string $language
 * @property-read string|null $customEmojiId Optional. For “custom_emoji” only, unique identifier of the custom emoji. Use `getCustomEmojiStickers` to get full information about the sticker.
 * @property-write string $customEmojiId
 * @property-read int|null $unixTime Optional. For “date_time” only, the Unix time associated with the entity
 * @property-write int $unixTime
 * @property-read string|null $dateTimeFormat Optional. For “date_time” only, the string that defines the formatting of the date and time. See [date-time entity formatting](https://core.telegram.org/bots/api#date-time-entity-formatting) for more details.
 * @property-write string $dateTimeFormat
 */
class MessageEntity extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'type' => [
                'type' => ['string'],
                'required' => true,
            ],
            'offset' => [
                'type' => ['int'],
                'required' => true,
            ],
            'length' => [
                'type' => ['int'],
                'required' => true,
            ],
            'url' => [
                'type' => ['string'],
            ],
            'user' => [
                'type' => [User::class],
            ],
            'language' => [
                'type' => ['string'],
            ],
            'custom_emoji_id' => [
                'type' => ['string'],
            ],
            'unix_time' => [
                'type' => ['int'],
            ],
            'date_time_format' => [
                'type' => ['string'],
            ],
        ];
    }

    /**
     * Required. Type of the entity. Currently, can be “mention” (`@username`), “hashtag” (`#hashtag` or `#hashtag@chatusername`), “cashtag” (`$USD` or `$USD@chatusername`), “bot_command” (`/start@jobs_bot`), “url” (`https://telegram.org`), “email” (`do-not-reply@telegram.org`), “phone_number” (`+1-212-555-0123`), “bold” (**bold text**), “italic” (*italic text*), “underline” (underlined text), “strikethrough” (strikethrough text), “spoiler” (spoiler message), “blockquote” (block quotation), “expandable_blockquote” (collapsed-by-default block quotation), “code” (monowidth string), “pre” (monowidth block), “text_link” (for clickable text URLs), “text_mention” (for users [without usernames](https://telegram.org/blog/edit#new-mentions)), “custom_emoji” (for inline custom emoji stickers), or “date_time” (for formatted date and time).
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
     * Required. Offset in [UTF-16 code units](https://core.telegram.org/api/entities#entity-length) to the start of the entity
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getOffset(): mixed
    {
        return $this->getFieldValue('offset');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setOffset(mixed $value): static
    {
        return $this->setFieldValue('offset', $value);
    }

    /**
     * Required. Length of the entity in [UTF-16 code units](https://core.telegram.org/api/entities#entity-length)
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getLength(): mixed
    {
        return $this->getFieldValue('length');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setLength(mixed $value): static
    {
        return $this->setFieldValue('length', $value);
    }

    /**
     * Optional. For “text_link” only, URL that will be opened after user taps on the text
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getUrl(): mixed
    {
        return $this->getFieldValue('url');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setUrl(mixed $value): static
    {
        return $this->setFieldValue('url', $value);
    }

    /**
     * Optional. For “text_mention” only, the mentioned user
     *
     * @return User|null
     * @throws Base\TelegramException
     */
    public function getUser(): mixed
    {
        return $this->getFieldValue('user');
    }

    /**
     * @param User|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setUser(mixed $value): static
    {
        return $this->setFieldValue('user', $value);
    }

    /**
     * Optional. For “pre” only, the programming language of the entity text
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getLanguage(): mixed
    {
        return $this->getFieldValue('language');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setLanguage(mixed $value): static
    {
        return $this->setFieldValue('language', $value);
    }

    /**
     * Optional. For “custom_emoji” only, unique identifier of the custom emoji. Use `getCustomEmojiStickers` to get full information about the sticker.
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
     * Optional. For “date_time” only, the Unix time associated with the entity
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getUnixTime(): mixed
    {
        return $this->getFieldValue('unix_time');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setUnixTime(mixed $value): static
    {
        return $this->setFieldValue('unix_time', $value);
    }

    /**
     * Optional. For “date_time” only, the string that defines the formatting of the date and time. See [date-time entity formatting](https://core.telegram.org/bots/api#date-time-entity-formatting) for more details.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getDateTimeFormat(): mixed
    {
        return $this->getFieldValue('date_time_format');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setDateTimeFormat(mixed $value): static
    {
        return $this->setFieldValue('date_time_format', $value);
    }
}
