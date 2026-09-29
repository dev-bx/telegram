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
 * The background is a wallpaper in the JPEG format.
 *
 * @link https://core.telegram.org/bots/api#backgroundtypewallpaper
 *
 * @property-read string|null $type Required. Type of the background, always “wallpaper”
 * @property-write string $type
 * @property-read Document|null $document Required. Document with the wallpaper
 * @property-write Document|array<string, mixed> $document
 * @property-read int|null $darkThemeDimming Required. Dimming of the background in dark themes, as a percentage; 0-100
 * @property-write int $darkThemeDimming
 * @property-read bool|null $isBlurred Optional. *True*, if the wallpaper is downscaled to fit in a 450x450 square and then box-blurred with radius 12
 * @property-write bool $isBlurred
 * @property-read bool|null $isMoving Optional. *True*, if the background moves slightly when the device is tilted
 * @property-write bool $isMoving
 */
class BackgroundTypeWallpaper extends BackgroundType
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
                'value' => 'wallpaper',
                'required' => true,
            ],
            'document' => [
                'type' => [Document::class],
                'required' => true,
            ],
            'dark_theme_dimming' => [
                'type' => ['int'],
                'required' => true,
            ],
            'is_blurred' => [
                'type' => ['bool'],
            ],
            'is_moving' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Required. Type of the background, always “wallpaper”
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
     * Required. Document with the wallpaper
     *
     * @return Document|null
     * @throws Base\TelegramException
     */
    public function getDocument(): mixed
    {
        return $this->getFieldValue('document');
    }

    /**
     * @param Document|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setDocument(mixed $value): static
    {
        return $this->setFieldValue('document', $value);
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

    /**
     * Optional. *True*, if the wallpaper is downscaled to fit in a 450x450 square and then box-blurred with radius 12
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsBlurred(): mixed
    {
        return $this->getFieldValue('is_blurred');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsBlurred(mixed $value): static
    {
        return $this->setFieldValue('is_blurred', $value);
    }

    /**
     * Optional. *True*, if the background moves slightly when the device is tilted
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsMoving(): mixed
    {
        return $this->getFieldValue('is_moving');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsMoving(mixed $value): static
    {
        return $this->setFieldValue('is_moving', $value);
    }
}
