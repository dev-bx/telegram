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
 * This object represents a [video message](https://telegram.org/blog/video-messages-and-telescope).
 *
 * @link https://core.telegram.org/bots/api#videonote
 *
 * @property-read string|null $fileId Required. Identifier for this file, which can be used to download or reuse the file
 * @property-write string $fileId
 * @property-read string|null $fileUniqueId Required. Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 * @property-write string $fileUniqueId
 * @property-read int|null $length Required. Video width and height (diameter of the video message) as defined by the sender
 * @property-write int $length
 * @property-read int|null $duration Required. Duration of the video in seconds as defined by the sender
 * @property-write int $duration
 * @property-read PhotoSize|null $thumbnail Optional. Video thumbnail
 * @property-write PhotoSize|array<string, mixed> $thumbnail
 * @property-read int|null $fileSize Optional. File size in bytes
 * @property-write int $fileSize
 */
class VideoNote extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'file_id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'file_unique_id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'length' => [
                'type' => ['int'],
                'required' => true,
            ],
            'duration' => [
                'type' => ['int'],
                'required' => true,
            ],
            'thumbnail' => [
                'type' => [PhotoSize::class],
            ],
            'file_size' => [
                'type' => ['int'],
            ],
        ];
    }

    /**
     * Required. Identifier for this file, which can be used to download or reuse the file
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getFileId(): mixed
    {
        return $this->getFieldValue('file_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setFileId(mixed $value): static
    {
        return $this->setFieldValue('file_id', $value);
    }

    /**
     * Required. Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getFileUniqueId(): mixed
    {
        return $this->getFieldValue('file_unique_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setFileUniqueId(mixed $value): static
    {
        return $this->setFieldValue('file_unique_id', $value);
    }

    /**
     * Required. Video width and height (diameter of the video message) as defined by the sender
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getLength(): mixed
    {
        return $this->getFieldValue('length');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setLength(mixed $value): static
    {
        return $this->setFieldValue('length', $value);
    }

    /**
     * Required. Duration of the video in seconds as defined by the sender
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getDuration(): mixed
    {
        return $this->getFieldValue('duration');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setDuration(mixed $value): static
    {
        return $this->setFieldValue('duration', $value);
    }

    /**
     * Optional. Video thumbnail
     *
     * @return PhotoSize|null
     * @throws Base\TelegramException
     */
    public function getThumbnail(): mixed
    {
        return $this->getFieldValue('thumbnail');
    }

    /**
     * @param PhotoSize|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setThumbnail(mixed $value): static
    {
        return $this->setFieldValue('thumbnail', $value);
    }

    /**
     * Optional. File size in bytes
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getFileSize(): mixed
    {
        return $this->getFieldValue('file_size');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setFileSize(mixed $value): static
    {
        return $this->setFieldValue('file_size', $value);
    }
}
