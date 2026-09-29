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
 * Cell in a table.
 *
 * @link https://core.telegram.org/bots/api#richblocktablecell
 *
 * @property-read RichText|string|list<mixed>|null $text Optional. Text in the cell. If omitted, then the cell is invisible.
 * @property-write RichText|string|list<mixed>|array<string, mixed> $text
 * @property-read bool|null $isHeader Optional. *True*, if the cell is a header cell
 * @property-write bool $isHeader
 * @property-read int|null $colspan Optional. The number of columns the cell spans if it is bigger than 1
 * @property-write int $colspan
 * @property-read int|null $rowspan Optional. The number of rows the cell spans if it is bigger than 1
 * @property-write int $rowspan
 * @property-read string|null $align Required. Horizontal cell content alignment. Currently, must be one of “left”, “center”, or “right”.
 * @property-write string $align
 * @property-read string|null $valign Required. Vertical cell content alignment. Currently, must be one of “top”, “middle”, or “bottom”.
 * @property-write string $valign
 */
class RichBlockTableCell extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'text' => [
                'type' => [RichText::class],
            ],
            'is_header' => [
                'type' => ['bool'],
            ],
            'colspan' => [
                'type' => ['int'],
            ],
            'rowspan' => [
                'type' => ['int'],
            ],
            'align' => [
                'type' => ['string'],
                'required' => true,
            ],
            'valign' => [
                'type' => ['string'],
                'required' => true,
            ],
        ];
    }

    /**
     * Optional. Text in the cell. If omitted, then the cell is invisible.
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
     * Optional. *True*, if the cell is a header cell
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsHeader(): mixed
    {
        return $this->getFieldValue('is_header');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsHeader(mixed $value): static
    {
        return $this->setFieldValue('is_header', $value);
    }

    /**
     * Optional. The number of columns the cell spans if it is bigger than 1
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getColspan(): mixed
    {
        return $this->getFieldValue('colspan');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setColspan(mixed $value): static
    {
        return $this->setFieldValue('colspan', $value);
    }

    /**
     * Optional. The number of rows the cell spans if it is bigger than 1
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getRowspan(): mixed
    {
        return $this->getFieldValue('rowspan');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setRowspan(mixed $value): static
    {
        return $this->setFieldValue('rowspan', $value);
    }

    /**
     * Required. Horizontal cell content alignment. Currently, must be one of “left”, “center”, or “right”.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getAlign(): mixed
    {
        return $this->getFieldValue('align');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAlign(mixed $value): static
    {
        return $this->setFieldValue('align', $value);
    }

    /**
     * Required. Vertical cell content alignment. Currently, must be one of “top”, “middle”, or “bottom”.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getValign(): mixed
    {
        return $this->getFieldValue('valign');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setValign(mixed $value): static
    {
        return $this->setFieldValue('valign', $value);
    }
}
