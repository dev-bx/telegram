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
use DevBX\Telegram\Types;

/**
 * A block with a general file, corresponding to the custom HTML tag `<tg-document>`.
 *
 * @link https://core.telegram.org/bots/api#richblockdocument
 *
 * @property-read string|null $type Required. Type of the block, always “document”
 * @property-write string $type
 * @property-read Types\Document|null $document Required. The document
 * @property-write Types\Document|array<string, mixed> $document
 * @property-read RichBlockCaption|null $caption Optional. Caption of the block
 * @property-write RichBlockCaption|array<string, mixed> $caption
 */
class RichBlockDocument extends RichBlock
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
                'value' => 'document',
                'required' => true,
            ],
            'document' => [
                'type' => [Types\Document::class],
                'required' => true,
            ],
            'caption' => [
                'type' => [RichBlockCaption::class],
            ],
        ];
    }

    /**
     * Required. Type of the block, always “document”
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
     * Required. The document
     *
     * @return Types\Document|null
     * @throws Base\TelegramException
     */
    public function getDocument(): mixed
    {
        return $this->getFieldValue('document');
    }

    /**
     * @param Types\Document|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setDocument(mixed $value): static
    {
        return $this->setFieldValue('document', $value);
    }

    /**
     * Optional. Caption of the block
     *
     * @return RichBlockCaption|null
     * @throws Base\TelegramException
     */
    public function getCaption(): mixed
    {
        return $this->getFieldValue('caption');
    }

    /**
     * @param RichBlockCaption|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCaption(mixed $value): static
    {
        return $this->setFieldValue('caption', $value);
    }
}
