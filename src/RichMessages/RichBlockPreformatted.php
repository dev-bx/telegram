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
 * A preformatted text block, corresponding to the nested HTML tags `<pre>` and `<code>`.
 *
 * @link https://core.telegram.org/bots/api#richblockpreformatted
 *
 * @property-read string|null $type Required. Type of the block, always “pre”
 * @property-write string $type
 * @property-read RichText|string|list<mixed>|null $text Required. Text of the block
 * @property-write RichText|string|list<mixed>|array<string, mixed> $text
 * @property-read string|null $language Optional. The programming language of the text
 * @property-write string $language
 */
class RichBlockPreformatted extends RichBlock
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
                'value' => 'pre',
                'required' => true,
            ],
            'text' => [
                'type' => [RichText::class],
                'required' => true,
            ],
            'language' => [
                'type' => ['string'],
            ],
        ];
    }

    /**
     * Required. Type of the block, always “pre”
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
     * Required. Text of the block
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
     * Optional. The programming language of the text
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
}
