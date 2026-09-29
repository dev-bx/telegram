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
 * Formatted date and time.
 *
 * @link https://core.telegram.org/bots/api#richtextdatetime
 *
 * @property-read string|null $type Required. Type of the rich text, always “date_time”
 * @property-write string $type
 * @property-read RichText|string|list<mixed>|null $text Required. The text
 * @property-write RichText|string|list<mixed>|array<string, mixed> $text
 * @property-read int|null $unixTime Required. The Unix time associated with the entity
 * @property-write int $unixTime
 * @property-read string|null $dateTimeFormat Required. The string that defines the formatting of the date and time. See [date-time entity formatting](https://core.telegram.org/bots/api#date-time-entity-formatting) for more details.
 * @property-write string $dateTimeFormat
 */
class RichTextDateTime extends RichText
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
                'value' => 'date_time',
                'required' => true,
            ],
            'text' => [
                'type' => [RichText::class],
                'required' => true,
            ],
            'unix_time' => [
                'type' => ['int'],
                'required' => true,
            ],
            'date_time_format' => [
                'type' => ['string'],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Type of the rich text, always “date_time”
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
     * Required. The Unix time associated with the entity
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getUnixTime(): mixed
    {
        return $this->getFieldValue('unix_time');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setUnixTime(mixed $value): static
    {
        return $this->setFieldValue('unix_time', $value);
    }

    /**
     * Required. The string that defines the formatting of the date and time. See [date-time entity formatting](https://core.telegram.org/bots/api#date-time-entity-formatting) for more details.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getDateTimeFormat(): mixed
    {
        return $this->getFieldValue('date_time_format');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setDateTimeFormat(mixed $value): static
    {
        return $this->setFieldValue('date_time_format', $value);
    }
}
