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
 * A hashtag.
 *
 * @link https://core.telegram.org/bots/api#richtexthashtag
 *
 * @property-read string|null $type Required. Type of the rich text, always “hashtag”
 * @property-write string $type
 * @property-read RichText|string|list<mixed>|null $text Required. The text
 * @property-write RichText|string|list<mixed>|array<string, mixed> $text
 * @property-read string|null $hashtag Required. The hashtag
 * @property-write string $hashtag
 */
class RichTextHashtag extends RichText
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
                'value' => 'hashtag',
                'required' => true,
            ],
            'text' => [
                'type' => [RichText::class],
                'required' => true,
            ],
            'hashtag' => [
                'type' => ['string'],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Type of the rich text, always “hashtag”
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
     * Required. The text
     *
     * @return RichText|string|list<mixed>|null
     * @throws Base\TelegramException
     */
    public function getText(): mixed
    {
        return $this->getFieldValue('text');
    }

    /**
     * @param RichText|string|list<mixed>|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setText(mixed $value): static
    {
        return $this->setFieldValue('text', $value);
    }

    /**
     * Required. The hashtag
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getHashtag(): mixed
    {
        return $this->getFieldValue('hashtag');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setHashtag(mixed $value): static
    {
        return $this->setFieldValue('hashtag', $value);
    }
}
