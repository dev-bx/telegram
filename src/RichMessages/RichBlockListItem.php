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
 * An item of a list.
 *
 * @link https://core.telegram.org/bots/api#richblocklistitem
 *
 * @property-read string|null $label Required. Label of the item
 * @property-write string $label
 * @property-read Base\ArrayObject<RichBlock> $blocks Required. The content of the item
 * @property-write list<RichBlock|array<string, mixed>>|Base\ArrayObject<RichBlock> $blocks
 * @property-read bool|null $hasCheckbox Optional. *True*, if the item has a checkbox
 * @property-write bool $hasCheckbox
 * @property-read bool|null $isChecked Optional. *True*, if the item has a checked checkbox
 * @property-write bool $isChecked
 * @property-read int|null $value Optional. For ordered lists, the numeric value of the item label
 * @property-write int $value
 * @property-read string|null $type Optional. For ordered lists, the type of the item label; must be one of “a” for lowercase letters, “A” for uppercase letters, “i” for lowercase Roman numerals, “I” for uppercase Roman numerals, or “1” for decimal numbers
 * @property-write string $type
 */
class RichBlockListItem extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'label' => [
                'type' => ['string'],
                'required' => true,
            ],
            'blocks' => [
                'type' => [RichBlock::class],
                'isArray' => true,
                'required' => true,
            ],
            'has_checkbox' => [
                'type' => ['bool'],
            ],
            'is_checked' => [
                'type' => ['bool'],
            ],
            'value' => [
                'type' => ['int'],
            ],
            'type' => [
                'type' => ['string'],
            ],
        ];
    }

    /**
     * Required. Label of the item
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getLabel(): mixed
    {
        return $this->getFieldValue('label');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setLabel(mixed $value): static
    {
        return $this->setFieldValue('label', $value);
    }

    /**
     * Required. The content of the item
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
     * Optional. *True*, if the item has a checkbox
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getHasCheckbox(): mixed
    {
        return $this->getFieldValue('has_checkbox');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setHasCheckbox(mixed $value): static
    {
        return $this->setFieldValue('has_checkbox', $value);
    }

    /**
     * Optional. *True*, if the item has a checked checkbox
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsChecked(): mixed
    {
        return $this->getFieldValue('is_checked');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsChecked(mixed $value): static
    {
        return $this->setFieldValue('is_checked', $value);
    }

    /**
     * Optional. For ordered lists, the numeric value of the item label
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getValue(): mixed
    {
        return $this->getFieldValue('value');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setValue(mixed $value): static
    {
        return $this->setFieldValue('value', $value);
    }

    /**
     * Optional. For ordered lists, the type of the item label; must be one of “a” for lowercase letters, “A” for uppercase letters, “i” for lowercase Roman numerals, “I” for uppercase Roman numerals, or “1” for decimal numbers
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
}
