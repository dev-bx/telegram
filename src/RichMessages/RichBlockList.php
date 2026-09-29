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
 * A list of blocks, corresponding to the HTML tag `<ul>` or `<ol>` with multiple nested tags `<li>`.
 *
 * @link https://core.telegram.org/bots/api#richblocklist
 *
 * @property-read string|null $type Required. Type of the block, always “list”
 * @property-write string $type
 * @property-read Base\ArrayObject<RichBlockListItem> $items Required. Items of the list
 * @property-write list<RichBlockListItem|array<string, mixed>>|Base\ArrayObject<RichBlockListItem> $items
 */
class RichBlockList extends RichBlock
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
                'value' => 'list',
                'required' => true,
            ],
            'items' => [
                'type' => [RichBlockListItem::class],
                'isArray' => true,
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Type of the block, always “list”
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
     * Required. Items of the list
     *
     * @return Base\ArrayObject<RichBlockListItem>
     * @throws Base\TelegramException
     */
    public function getItems(): mixed
    {
        return $this->getFieldValue('items');
    }

    /**
     * @param list<RichBlockListItem|array<string, mixed>>|Base\ArrayObject<RichBlockListItem> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setItems(mixed $value): static
    {
        return $this->setFieldValue('items', $value);
    }
}
