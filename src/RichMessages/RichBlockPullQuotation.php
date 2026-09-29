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
 * A quotation with centered text, loosely corresponding to the HTML tag `<aside>`.
 *
 * @link https://core.telegram.org/bots/api#richblockpullquotation
 *
 * @property-read string|null $type Required. Type of the block, always “pullquote”
 * @property-write string $type
 * @property-read RichText|string|list<mixed>|null $text Required. Text of the block
 * @property-write RichText|string|list<mixed>|array<string, mixed> $text
 * @property-read RichText|string|list<mixed>|null $credit Optional. Credit of the block
 * @property-write RichText|string|list<mixed>|array<string, mixed> $credit
 */
class RichBlockPullQuotation extends RichBlock
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
                'value' => 'pullquote',
                'required' => true,
            ],
            'text' => [
                'type' => [RichText::class],
                'required' => true,
            ],
            'credit' => [
                'type' => [RichText::class],
            ],
        ];
    }

    /**
     * Required. Type of the block, always “pullquote”
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
     * Optional. Credit of the block
     *
     * @return RichText|string|list<mixed>|null
     * @throws Base\TelegramException
     */
    public function getCredit(): mixed
    {
        return $this->getFieldValue('credit');
    }

    /**
     * @param RichText|string|list<mixed>|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCredit(mixed $value): static
    {
        return $this->setFieldValue('credit', $value);
    }
}
