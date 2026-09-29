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
 * A button.
 *
 * @link https://core.telegram.org/bots/api#richtextbutton
 *
 * @property-read string|null $type Required. Type of the rich text, always “button”
 * @property-write string $type
 * @property-read RichMessageButton|null $button Required. The button
 * @property-write RichMessageButton|array<string, mixed> $button
 */
class RichTextButton extends RichText
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
                'value' => 'button',
                'required' => true,
            ],
            'button' => [
                'type' => [RichMessageButton::class],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Type of the rich text, always “button”
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
     * Required. The button
     *
     * @return RichMessageButton|null
     * @throws Base\TelegramException
     */
    public function getButton(): mixed
    {
        return $this->getFieldValue('button');
    }

    /**
     * @param RichMessageButton|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setButton(mixed $value): static
    {
        return $this->setFieldValue('button', $value);
    }
}
