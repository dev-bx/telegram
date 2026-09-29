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

namespace DevBX\Telegram\InlineMode;

use DevBX\Telegram\Base;
use DevBX\Telegram\Types;

/**
 * Represents a contact with a phone number. By default, this contact will be sent by the user. Alternatively, you can use *input_message_content* to send a message with the specified content instead of the contact.
 *
 * @link https://core.telegram.org/bots/api#inlinequeryresultcontact
 *
 * @property-read string|null $type Required. Type of the result, must be *contact*
 * @property-write string $type
 * @property-read string|null $id Required. Unique identifier for this result, 1-64 Bytes
 * @property-write string $id
 * @property-read string|null $phoneNumber Required. Contact's phone number
 * @property-write string $phoneNumber
 * @property-read string|null $firstName Required. Contact's first name
 * @property-write string $firstName
 * @property-read string|null $lastName Optional. Contact's last name
 * @property-write string $lastName
 * @property-read string|null $vcard Optional. Additional data about the contact in the form of a [vCard](https://en.wikipedia.org/wiki/VCard), 0-2048 bytes
 * @property-write string $vcard
 * @property-read Types\InlineKeyboardMarkup|null $replyMarkup Optional. [Inline keyboard](https://core.telegram.org/bots/features#inline-keyboards) attached to the message
 * @property-write Types\InlineKeyboardMarkup|array<string, mixed> $replyMarkup
 * @property-read InputMessageContent|null $inputMessageContent Optional. Content of the message to be sent instead of the contact
 * @property-write InputMessageContent|array<string, mixed> $inputMessageContent
 * @property-read string|null $thumbnailUrl Optional. Url of the thumbnail for the result
 * @property-write string $thumbnailUrl
 * @property-read int|null $thumbnailWidth Optional. Thumbnail width
 * @property-write int $thumbnailWidth
 * @property-read int|null $thumbnailHeight Optional. Thumbnail height
 * @property-write int $thumbnailHeight
 */
class InlineQueryResultContact extends InlineQueryResult
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
                'value' => 'contact',
                'required' => true,
            ],
            'id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'phone_number' => [
                'type' => ['string'],
                'required' => true,
            ],
            'first_name' => [
                'type' => ['string'],
                'required' => true,
            ],
            'last_name' => [
                'type' => ['string'],
            ],
            'vcard' => [
                'type' => ['string'],
            ],
            'reply_markup' => [
                'type' => [Types\InlineKeyboardMarkup::class],
            ],
            'input_message_content' => [
                'type' => [InputMessageContent::class],
            ],
            'thumbnail_url' => [
                'type' => ['string'],
            ],
            'thumbnail_width' => [
                'type' => ['int'],
            ],
            'thumbnail_height' => [
                'type' => ['int'],
            ],
        ];
    }

    /**
     * Required. Type of the result, must be *contact*
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
     * Required. Unique identifier for this result, 1-64 Bytes
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getId(): mixed
    {
        return $this->getFieldValue('id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setId(mixed $value): static
    {
        return $this->setFieldValue('id', $value);
    }

    /**
     * Required. Contact's phone number
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getPhoneNumber(): mixed
    {
        return $this->getFieldValue('phone_number');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPhoneNumber(mixed $value): static
    {
        return $this->setFieldValue('phone_number', $value);
    }

    /**
     * Required. Contact's first name
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getFirstName(): mixed
    {
        return $this->getFieldValue('first_name');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setFirstName(mixed $value): static
    {
        return $this->setFieldValue('first_name', $value);
    }

    /**
     * Optional. Contact's last name
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getLastName(): mixed
    {
        return $this->getFieldValue('last_name');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setLastName(mixed $value): static
    {
        return $this->setFieldValue('last_name', $value);
    }

    /**
     * Optional. Additional data about the contact in the form of a [vCard](https://en.wikipedia.org/wiki/VCard), 0-2048 bytes
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getVcard(): mixed
    {
        return $this->getFieldValue('vcard');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setVcard(mixed $value): static
    {
        return $this->setFieldValue('vcard', $value);
    }

    /**
     * Optional. [Inline keyboard](https://core.telegram.org/bots/features#inline-keyboards) attached to the message
     *
     * @return Types\InlineKeyboardMarkup|null
     * @throws Base\TelegramException
     */
    public function getReplyMarkup(): mixed
    {
        return $this->getFieldValue('reply_markup');
    }

    /**
     * @param Types\InlineKeyboardMarkup|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setReplyMarkup(mixed $value): static
    {
        return $this->setFieldValue('reply_markup', $value);
    }

    /**
     * Optional. Content of the message to be sent instead of the contact
     *
     * @return InputMessageContent|null
     * @throws Base\TelegramException
     */
    public function getInputMessageContent(): mixed
    {
        return $this->getFieldValue('input_message_content');
    }

    /**
     * @param InputMessageContent|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setInputMessageContent(mixed $value): static
    {
        return $this->setFieldValue('input_message_content', $value);
    }

    /**
     * Optional. Url of the thumbnail for the result
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getThumbnailUrl(): mixed
    {
        return $this->getFieldValue('thumbnail_url');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setThumbnailUrl(mixed $value): static
    {
        return $this->setFieldValue('thumbnail_url', $value);
    }

    /**
     * Optional. Thumbnail width
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getThumbnailWidth(): mixed
    {
        return $this->getFieldValue('thumbnail_width');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setThumbnailWidth(mixed $value): static
    {
        return $this->setFieldValue('thumbnail_width', $value);
    }

    /**
     * Optional. Thumbnail height
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getThumbnailHeight(): mixed
    {
        return $this->getFieldValue('thumbnail_height');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setThumbnailHeight(mixed $value): static
    {
        return $this->setFieldValue('thumbnail_height', $value);
    }
}
