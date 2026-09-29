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
 * A link to an anchor.
 *
 * @link https://core.telegram.org/bots/api#richtextanchorlink
 *
 * @property-read string|null $type Required. Type of the rich text, always “anchor_link”
 * @property-write string $type
 * @property-read RichText|string|list<mixed>|null $text Required. The link text
 * @property-write RichText|string|list<mixed>|array<string, mixed> $text
 * @property-read string|null $anchorName Required. The name of the anchor. If the name is empty, then the link brings back to the top of the message.
 * @property-write string $anchorName
 */
class RichTextAnchorLink extends RichText
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
                'value' => 'anchor_link',
                'required' => true,
            ],
            'text' => [
                'type' => [RichText::class],
                'required' => true,
            ],
            'anchor_name' => [
                'type' => ['string'],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Type of the rich text, always “anchor_link”
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
     * Required. The link text
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
     * Required. The name of the anchor. If the name is empty, then the link brings back to the top of the message.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getAnchorName(): mixed
    {
        return $this->getFieldValue('anchor_name');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAnchorName(mixed $value): static
    {
        return $this->setFieldValue('anchor_name', $value);
    }
}
