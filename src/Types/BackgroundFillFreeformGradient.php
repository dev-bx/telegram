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

namespace DevBX\Telegram\Types;

use DevBX\Telegram\Base;

/**
 * The background is a freeform gradient that rotates after every message in the chat.
 *
 * @link https://core.telegram.org/bots/api#backgroundfillfreeformgradient
 *
 * @property-read string|null $type Required. Type of the background fill, always “freeform_gradient”
 * @property-write string $type
 * @property-read Base\ArrayObject<Base\ParameterInt> $colors Required. A list of the 3 or 4 base colors that are used to generate the freeform gradient in the RGB24 format
 * @property-write list<int>|Base\ArrayObject<Base\ParameterInt> $colors
 */
class BackgroundFillFreeformGradient extends BackgroundFill
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
                'value' => 'freeform_gradient',
                'required' => true,
            ],
            'colors' => [
                'type' => ['int'],
                'isArray' => true,
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Type of the background fill, always “freeform_gradient”
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
     * Required. A list of the 3 or 4 base colors that are used to generate the freeform gradient in the RGB24 format
     *
     * @return Base\ArrayObject<Base\ParameterInt>
     * @throws Base\TelegramException
     */
    public function getColors(): mixed
    {
        return $this->getFieldValue('colors');
    }

    /**
     * @param list<int>|Base\ArrayObject<Base\ParameterInt> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setColors(mixed $value): static
    {
        return $this->setFieldValue('colors', $value);
    }
}
