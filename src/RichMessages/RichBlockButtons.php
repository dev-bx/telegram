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
 * A block containing a list of buttons that are shown in one row, corresponding to the custom HTML tag `<tg-button-row>`.
 *
 * @link https://core.telegram.org/bots/api#richblockbuttons
 *
 * @property-read string|null $type Required. Type of the block, always “buttons”
 * @property-write string $type
 * @property-read Base\ArrayObject<RichMessageButton> $buttons Required. The buttons
 * @property-write list<RichMessageButton|array<string, mixed>>|Base\ArrayObject<RichMessageButton> $buttons
 * @property-read string|null $align Optional. Horizontal alignment of the buttons. Currently, must be one of “left”, “center”, or “right”.
 * @property-write string $align
 */
class RichBlockButtons extends RichBlock
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
                'value' => 'buttons',
                'required' => true,
            ],
            'buttons' => [
                'type' => [RichMessageButton::class],
                'isArray' => true,
                'required' => true,
            ],
            'align' => [
                'type' => ['string'],
            ],
        ];
    }

    /**
     * Required. Type of the block, always “buttons”
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
     * Required. The buttons
     *
     * @return Base\ArrayObject<RichMessageButton>
     * @throws Base\TelegramException
     */
    public function getButtons(): mixed
    {
        return $this->getFieldValue('buttons');
    }

    /**
     * @param list<RichMessageButton|array<string, mixed>>|Base\ArrayObject<RichMessageButton> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setButtons(mixed $value): static
    {
        return $this->setFieldValue('buttons', $value);
    }

    /**
     * Optional. Horizontal alignment of the buttons. Currently, must be one of “left”, “center”, or “right”.
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
}
