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
 * An item of a list to be sent.
 *
 * @link https://core.telegram.org/bots/api#inputrichblocklistitem
 *
 * @property-read Base\ArrayObject<InputRichBlock> $blocks Required. The content of the item
 * @property-write list<InputRichBlock|array<string, mixed>>|Base\ArrayObject<InputRichBlock> $blocks
 * @property-read bool|null $hasCheckbox Optional. Pass *True* if the item has a checkbox
 * @property-write bool $hasCheckbox
 * @property-read bool|null $isChecked Optional. Pass *True* if the item has a checked checkbox
 * @property-write bool $isChecked
 * @property-read int|null $value Optional. For ordered lists, the numeric value of the item label
 * @property-write int $value
 * @property-read string|null $type Optional. For ordered lists, the type of the item label; must be one of “a” for lowercase letters, “A” for uppercase letters, “i” for lowercase Roman numerals, “I” for uppercase Roman numerals, or “1” for decimal numbers
 * @property-write string $type
 */
class InputRichBlockListItem extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'blocks' => [
                'type' => [InputRichBlock::class],
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
     * Required. The content of the item
     *
     * @return Base\ArrayObject<InputRichBlock>
     * @throws Base\TelegramException
     */
    public function getBlocks(): mixed
    {
        return $this->getFieldValue('blocks');
    }

    /**
     * @param list<InputRichBlock|array<string, mixed>>|Base\ArrayObject<InputRichBlock> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setBlocks(mixed $value): static
    {
        return $this->setFieldValue('blocks', $value);
    }

    /**
     * Optional. Pass *True* if the item has a checkbox
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
     * Optional. Pass *True* if the item has a checked checkbox
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
