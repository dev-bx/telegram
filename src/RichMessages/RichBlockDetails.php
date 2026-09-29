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
 * An expandable block for details disclosure, corresponding to the HTML tag `<details>`.
 *
 * @link https://core.telegram.org/bots/api#richblockdetails
 *
 * @property-read string|null $type Required. Type of the block, always “details”
 * @property-write string $type
 * @property-read RichText|string|list<mixed>|null $summary Required. Always shown summary of the block
 * @property-write RichText|string|list<mixed>|array<string, mixed> $summary
 * @property-read Base\ArrayObject<RichBlock> $blocks Required. Content of the block
 * @property-write list<RichBlock|array<string, mixed>>|Base\ArrayObject<RichBlock> $blocks
 * @property-read bool|null $isOpen Optional. *True*, if the content of the block is visible by default
 * @property-write bool $isOpen
 */
class RichBlockDetails extends RichBlock
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
                'value' => 'details',
                'required' => true,
            ],
            'summary' => [
                'type' => [RichText::class],
                'required' => true,
            ],
            'blocks' => [
                'type' => [RichBlock::class],
                'isArray' => true,
                'required' => true,
            ],
            'is_open' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Required. Type of the block, always “details”
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
     * Required. Always shown summary of the block
     *
     * @return RichText|string|list<mixed>|null
     * @throws Base\TelegramException
     */
    public function getSummary(): mixed
    {
        return $this->getFieldValue('summary');
    }

    /**
     * @param RichText|string|list<mixed>|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSummary(mixed $value): static
    {
        return $this->setFieldValue('summary', $value);
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
     * Optional. *True*, if the content of the block is visible by default
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsOpen(): mixed
    {
        return $this->getFieldValue('is_open');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsOpen(mixed $value): static
    {
        return $this->setFieldValue('is_open', $value);
    }
}
