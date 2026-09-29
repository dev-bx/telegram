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
 * An animated profile photo in the MPEG4 format.
 *
 * @link https://core.telegram.org/bots/api#inputprofilephotoanimated
 *
 * @property-read string|null $type Required. Type of the profile photo, must be *animated*
 * @property-write string $type
 * @property-read string|null $animation Required. The animated profile photo. Profile photos can't be reused and can only be uploaded as a new file, so you can pass “attach://<file_attach_name>” if the photo was uploaded using multipart/form-data under <file_attach_name>. [More information on Sending Files »](https://core.telegram.org/bots/api#sending-files)
 * @property-write string $animation
 * @property-read float|null $mainFrameTimestamp Optional. Timestamp in seconds of the frame that will be used as the static profile photo. Defaults to 0.0.
 * @property-write float|int $mainFrameTimestamp
 */
class InputProfilePhotoAnimated extends InputProfilePhoto
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
                'value' => 'animated',
                'required' => true,
            ],
            'animation' => [
                'type' => ['string'],
                'required' => true,
            ],
            'main_frame_timestamp' => [
                'type' => ['float'],
            ],
        ];
    }

    /**
     * Required. Type of the profile photo, must be *animated*
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
     * Required. The animated profile photo. Profile photos can't be reused and can only be uploaded as a new file, so you can pass “attach://<file_attach_name>” if the photo was uploaded using multipart/form-data under <file_attach_name>. [More information on Sending Files »](https://core.telegram.org/bots/api#sending-files)
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getAnimation(): mixed
    {
        return $this->getFieldValue('animation');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAnimation(mixed $value): static
    {
        return $this->setFieldValue('animation', $value);
    }

    /**
     * Optional. Timestamp in seconds of the frame that will be used as the static profile photo. Defaults to 0.0.
     *
     * @return float|null
     * @throws Base\TelegramException
     */
    public function getMainFrameTimestamp(): mixed
    {
        return $this->getFieldValue('main_frame_timestamp');
    }

    /**
     * @param float|int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setMainFrameTimestamp(mixed $value): static
    {
        return $this->setFieldValue('main_frame_timestamp', $value);
    }
}
