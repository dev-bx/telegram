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
 * A text with an email address.
 *
 * @link https://core.telegram.org/bots/api#richtextemailaddress
 *
 * @property-read string|null $type Required. Type of the rich text, always “email_address”
 * @property-write string $type
 * @property-read RichText|string|list<mixed>|null $text Required. The text
 * @property-write RichText|string|list<mixed>|array<string, mixed> $text
 * @property-read string|null $emailAddress Required. The email address
 * @property-write string $emailAddress
 */
class RichTextEmailAddress extends RichText
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
                'value' => 'email_address',
                'required' => true,
            ],
            'text' => [
                'type' => [RichText::class],
                'required' => true,
            ],
            'email_address' => [
                'type' => ['string'],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Type of the rich text, always “email_address”
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
     * Required. The text
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
     * Required. The email address
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getEmailAddress(): mixed
    {
        return $this->getFieldValue('email_address');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setEmailAddress(mixed $value): static
    {
        return $this->setFieldValue('email_address', $value);
    }
}
