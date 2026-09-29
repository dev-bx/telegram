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
 * Describes a video to post as a story.
 *
 * @link https://core.telegram.org/bots/api#inputstorycontentvideo
 *
 * @property-read string|null $type Required. Type of the content, must be *video*
 * @property-write string $type
 * @property-read string|null $video Required. The video to post as a story. The video must be of the size 720x1280, streamable, encoded with H.265 codec, with key frames added each second in the MPEG4 format, and must not exceed 30 MB. The video can't be reused and can only be uploaded as a new file, so you can pass “attach://<file_attach_name>” if the video was uploaded using multipart/form-data under <file_attach_name>. [More information on Sending Files »](https://core.telegram.org/bots/api#sending-files)
 * @property-write string $video
 * @property-read float|null $duration Optional. Precise duration of the video in seconds; 0-60
 * @property-write float|int $duration
 * @property-read float|null $coverFrameTimestamp Optional. Timestamp in seconds of the frame that will be used as the static cover for the story. Defaults to 0.0.
 * @property-write float|int $coverFrameTimestamp
 * @property-read bool|null $isAnimation Optional. Pass *True* if the video has no sound
 * @property-write bool $isAnimation
 */
class InputStoryContentVideo extends InputStoryContent
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
                'value' => 'video',
                'required' => true,
            ],
            'video' => [
                'type' => ['string'],
                'required' => true,
            ],
            'duration' => [
                'type' => ['float'],
            ],
            'cover_frame_timestamp' => [
                'type' => ['float'],
            ],
            'is_animation' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Required. Type of the content, must be *video*
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
     * Required. The video to post as a story. The video must be of the size 720x1280, streamable, encoded with H.265 codec, with key frames added each second in the MPEG4 format, and must not exceed 30 MB. The video can't be reused and can only be uploaded as a new file, so you can pass “attach://<file_attach_name>” if the video was uploaded using multipart/form-data under <file_attach_name>. [More information on Sending Files »](https://core.telegram.org/bots/api#sending-files)
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getVideo(): mixed
    {
        return $this->getFieldValue('video');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setVideo(mixed $value): static
    {
        return $this->setFieldValue('video', $value);
    }

    /**
     * Optional. Precise duration of the video in seconds; 0-60
     *
     * @return float|null
     * @throws Base\TelegramException
     */
    public function getDuration(): mixed
    {
        return $this->getFieldValue('duration');
    }

    /**
     * @param float|int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setDuration(mixed $value): static
    {
        return $this->setFieldValue('duration', $value);
    }

    /**
     * Optional. Timestamp in seconds of the frame that will be used as the static cover for the story. Defaults to 0.0.
     *
     * @return float|null
     * @throws Base\TelegramException
     */
    public function getCoverFrameTimestamp(): mixed
    {
        return $this->getFieldValue('cover_frame_timestamp');
    }

    /**
     * @param float|int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCoverFrameTimestamp(mixed $value): static
    {
        return $this->setFieldValue('cover_frame_timestamp', $value);
    }

    /**
     * Optional. Pass *True* if the video has no sound
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsAnimation(): mixed
    {
        return $this->getFieldValue('is_animation');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsAnimation(mixed $value): static
    {
        return $this->setFieldValue('is_animation', $value);
    }
}
