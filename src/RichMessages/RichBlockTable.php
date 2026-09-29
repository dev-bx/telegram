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
 * A table, corresponding to the HTML tag `<table>`.
 *
 * @link https://core.telegram.org/bots/api#richblocktable
 *
 * @property-read string|null $type Required. Type of the block, always “table”
 * @property-write string $type
 * @property-read Base\ArrayOfArrayObject<RichBlockTableCell> $cells Required. Cells of the table
 * @property-write list<list<RichBlockTableCell|array<string, mixed>>>|Base\ArrayOfArrayObject<RichBlockTableCell> $cells
 * @property-read bool|null $isBordered Optional. *True*, if the table has borders
 * @property-write bool $isBordered
 * @property-read bool|null $isStriped Optional. *True*, if the table is striped
 * @property-write bool $isStriped
 * @property-read bool|null $isCompact Optional. *True*, if table cells have smaller indents
 * @property-write bool $isCompact
 * @property-read RichText|string|list<mixed>|null $caption Optional. Caption of the table
 * @property-write RichText|string|list<mixed>|array<string, mixed> $caption
 */
class RichBlockTable extends RichBlock
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
                'value' => 'table',
                'required' => true,
            ],
            'cells' => [
                'type' => [RichBlockTableCell::class],
                'isArray' => 'matrix',
                'required' => true,
            ],
            'is_bordered' => [
                'type' => ['bool'],
            ],
            'is_striped' => [
                'type' => ['bool'],
            ],
            'is_compact' => [
                'type' => ['bool'],
            ],
            'caption' => [
                'type' => [RichText::class],
            ],
        ];
    }

    /**
     * Required. Type of the block, always “table”
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
     * Required. Cells of the table
     *
     * @return Base\ArrayOfArrayObject<RichBlockTableCell>
     * @throws Base\TelegramException
     */
    public function getCells(): mixed
    {
        return $this->getFieldValue('cells');
    }

    /**
     * @param list<list<RichBlockTableCell|array<string, mixed>>>|Base\ArrayOfArrayObject<RichBlockTableCell> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCells(mixed $value): static
    {
        return $this->setFieldValue('cells', $value);
    }

    /**
     * Optional. *True*, if the table has borders
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsBordered(): mixed
    {
        return $this->getFieldValue('is_bordered');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsBordered(mixed $value): static
    {
        return $this->setFieldValue('is_bordered', $value);
    }

    /**
     * Optional. *True*, if the table is striped
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsStriped(): mixed
    {
        return $this->getFieldValue('is_striped');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsStriped(mixed $value): static
    {
        return $this->setFieldValue('is_striped', $value);
    }

    /**
     * Optional. *True*, if table cells have smaller indents
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsCompact(): mixed
    {
        return $this->getFieldValue('is_compact');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsCompact(mixed $value): static
    {
        return $this->setFieldValue('is_compact', $value);
    }

    /**
     * Optional. Caption of the table
     *
     * @return RichText|string|list<mixed>|null
     * @throws Base\TelegramException
     */
    public function getCaption(): mixed
    {
        return $this->getFieldValue('caption');
    }

    /**
     * @param RichText|string|list<mixed>|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCaption(mixed $value): static
    {
        return $this->setFieldValue('caption', $value);
    }
}
