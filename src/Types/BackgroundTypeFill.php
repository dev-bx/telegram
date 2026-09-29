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
 * The background is automatically filled based on the selected colors.
 *
 * @link https://core.telegram.org/bots/api#backgroundtypefill
 *
 * @property-read string|null $type Required. Type of the background, always “fill”
 * @property-write string $type
 * @property-read BackgroundFill|null $fill Required. The background fill
 * @property-write BackgroundFill|array<string, mixed> $fill
 * @property-read int|null $darkThemeDimming Required. Dimming of the background in dark themes, as a percentage; 0-100
 * @property-write int $darkThemeDimming
 */
class BackgroundTypeFill extends BackgroundType
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
                'value' => 'fill',
                'required' => true,
            ],
            'fill' => [
                'type' => [BackgroundFill::class],
                'required' => true,
            ],
            'dark_theme_dimming' => [
                'type' => ['int'],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Type of the background, always “fill”
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
     * Required. The background fill
     *
     * @return BackgroundFill|null
     * @throws Base\TelegramException
     */
    public function getFill(): mixed
    {
        return $this->getFieldValue('fill');
    }

    /**
     * @param BackgroundFill|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setFill(mixed $value): static
    {
        return $this->setFieldValue('fill', $value);
    }

    /**
     * Required. Dimming of the background in dark themes, as a percentage; 0-100
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getDarkThemeDimming(): mixed
    {
        return $this->getFieldValue('dark_theme_dimming');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setDarkThemeDimming(mixed $value): static
    {
        return $this->setFieldValue('dark_theme_dimming', $value);
    }
}
