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
 * The background is a .PNG or .TGV (gzipped subset of SVG with MIME type “application/x-tgwallpattern”) pattern to be combined with the background fill chosen by the user.
 *
 * @link https://core.telegram.org/bots/api#backgroundtypepattern
 *
 * @property-read string|null $type Required. Type of the background, always “pattern”
 * @property-write string $type
 * @property-read Document|null $document Required. Document with the pattern
 * @property-write Document|array<string, mixed> $document
 * @property-read BackgroundFill|null $fill Required. The background fill that is combined with the pattern
 * @property-write BackgroundFill|array<string, mixed> $fill
 * @property-read int|null $intensity Required. Intensity of the pattern when it is shown above the filled background; 0-100
 * @property-write int $intensity
 * @property-read bool|null $isInverted Optional. *True*, if the background fill must be applied only to the pattern itself. All other pixels are black in this case. For dark themes only.
 * @property-write bool $isInverted
 * @property-read bool|null $isMoving Optional. *True*, if the background moves slightly when the device is tilted
 * @property-write bool $isMoving
 */
class BackgroundTypePattern extends BackgroundType
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
                'value' => 'pattern',
                'required' => true,
            ],
            'document' => [
                'type' => [Document::class],
                'required' => true,
            ],
            'fill' => [
                'type' => [BackgroundFill::class],
                'required' => true,
            ],
            'intensity' => [
                'type' => ['int'],
                'required' => true,
            ],
            'is_inverted' => [
                'type' => ['bool'],
            ],
            'is_moving' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Required. Type of the background, always “pattern”
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
     * Required. Document with the pattern
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
     * Required. The background fill that is combined with the pattern
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
     * Required. Intensity of the pattern when it is shown above the filled background; 0-100
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getIntensity(): mixed
    {
        return $this->getFieldValue('intensity');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIntensity(mixed $value): static
    {
        return $this->setFieldValue('intensity', $value);
    }

    /**
     * Optional. *True*, if the background fill must be applied only to the pattern itself. All other pixels are black in this case. For dark themes only.
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsInverted(): mixed
    {
        return $this->getFieldValue('is_inverted');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsInverted(mixed $value): static
    {
        return $this->setFieldValue('is_inverted', $value);
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
