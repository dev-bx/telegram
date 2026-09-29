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
 * Describes a story area containing weather information. Currently, a story can have up to 3 weather areas.
 *
 * @link https://core.telegram.org/bots/api#storyareatypeweather
 *
 * @property-read string|null $type Required. Type of the area, always “weather”
 * @property-write string $type
 * @property-read float|null $temperature Required. Temperature, in degree Celsius
 * @property-write float|int $temperature
 * @property-read string|null $emoji Required. Emoji representing the weather
 * @property-write string $emoji
 * @property-read int|null $backgroundColor Required. A color of the area background in the ARGB format
 * @property-write int $backgroundColor
 */
class StoryAreaTypeWeather extends StoryAreaType
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
                'value' => 'weather',
                'required' => true,
            ],
            'temperature' => [
                'type' => ['float'],
                'required' => true,
            ],
            'emoji' => [
                'type' => ['string'],
                'required' => true,
            ],
            'background_color' => [
                'type' => ['int'],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Type of the area, always “weather”
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
     * Required. Temperature, in degree Celsius
     *
     * @return float|null
     * @throws Base\TelegramException
     */
    public function getTemperature(): mixed
    {
        return $this->getFieldValue('temperature');
    }

    /**
     * @param float|int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setTemperature(mixed $value): static
    {
        return $this->setFieldValue('temperature', $value);
    }

    /**
     * Required. Emoji representing the weather
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getEmoji(): mixed
    {
        return $this->getFieldValue('emoji');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setEmoji(mixed $value): static
    {
        return $this->setFieldValue('emoji', $value);
    }

    /**
     * Required. A color of the area background in the ARGB format
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getBackgroundColor(): mixed
    {
        return $this->getFieldValue('background_color');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setBackgroundColor(mixed $value): static
    {
        return $this->setFieldValue('background_color', $value);
    }
}
