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
 * A block quotation, corresponding to the HTML tag `<blockquote>`.
 *
 * @link https://core.telegram.org/bots/api#richblockblockquotation
 *
 * @property-read string|null $type Required. Type of the block, always “blockquote”
 * @property-write string $type
 * @property-read Base\ArrayObject<RichBlock> $blocks Required. Content of the block
 * @property-write list<RichBlock|array<string, mixed>>|Base\ArrayObject<RichBlock> $blocks
 * @property-read RichText|string|list<mixed>|null $credit Optional. Credit of the block
 * @property-write RichText|string|list<mixed>|array<string, mixed> $credit
 */
class RichBlockBlockQuotation extends RichBlock
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
                'value' => 'blockquote',
                'required' => true,
            ],
            'blocks' => [
                'type' => [RichBlock::class],
                'isArray' => true,
                'required' => true,
            ],
            'credit' => [
                'type' => [RichText::class],
            ],
        ];
    }

    /**
     * Required. Type of the block, always “blockquote”
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
     * Required. Content of the block
     *
     * @return Base\ArrayObject<RichBlock>
     * @throws Base\TelegramException
     */
    public function getBlocks(): mixed
    {
        return $this->getFieldValue('blocks');
    }

    /**
     * @param list<RichBlock|array<string, mixed>>|Base\ArrayObject<RichBlock> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setBlocks(mixed $value): static
    {
        return $this->setFieldValue('blocks', $value);
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
