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
 * This object represents a video file.
 *
 * @link https://core.telegram.org/bots/api#video
 *
 * @property-read string|null $fileId Required. Identifier for this file, which can be used to download or reuse the file
 * @property-write string $fileId
 * @property-read string|null $fileUniqueId Required. Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 * @property-write string $fileUniqueId
 * @property-read int|null $width Required. Video width as defined by the sender
 * @property-write int $width
 * @property-read int|null $height Required. Video height as defined by the sender
 * @property-write int $height
 * @property-read int|null $duration Required. Duration of the video in seconds as defined by the sender
 * @property-write int $duration
 * @property-read PhotoSize|null $thumbnail Optional. Video thumbnail
 * @property-write PhotoSize|array<string, mixed> $thumbnail
 * @property-read Base\ArrayObject<PhotoSize> $cover Optional. Available sizes of the cover of the video in the message
 * @property-write list<PhotoSize|array<string, mixed>>|Base\ArrayObject<PhotoSize> $cover
 * @property-read int|null $startTimestamp Optional. Timestamp in seconds from which the video will play in the message
 * @property-write int $startTimestamp
 * @property-read Base\ArrayObject<VideoQuality> $qualities Optional. List of available qualities of the video
 * @property-write list<VideoQuality|array<string, mixed>>|Base\ArrayObject<VideoQuality> $qualities
 * @property-read string|null $fileName Optional. Original filename as defined by the sender
 * @property-write string $fileName
 * @property-read string|null $mimeType Optional. MIME type of the file as defined by the sender
 * @property-write string $mimeType
 * @property-read int|null $fileSize Optional. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value.
 * @property-write int $fileSize
 */
class Video extends Base\BaseType
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
            'width' => [
                'type' => ['int'],
                'required' => true,
            ],
            'height' => [
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
            'cover' => [
                'type' => [PhotoSize::class],
                'isArray' => true,
            ],
            'start_timestamp' => [
                'type' => ['int'],
            ],
            'qualities' => [
                'type' => [VideoQuality::class],
                'isArray' => true,
            ],
            'file_name' => [
                'type' => ['string'],
            ],
            'mime_type' => [
                'type' => ['string'],
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
     * Required. Video width as defined by the sender
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getWidth(): mixed
    {
        return $this->getFieldValue('width');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setWidth(mixed $value): static
    {
        return $this->setFieldValue('width', $value);
    }

    /**
     * Required. Video height as defined by the sender
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getHeight(): mixed
    {
        return $this->getFieldValue('height');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setHeight(mixed $value): static
    {
        return $this->setFieldValue('height', $value);
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
     * Optional. Available sizes of the cover of the video in the message
     *
     * @return Base\ArrayObject<PhotoSize>
     * @throws Base\TelegramException
     */
    public function getCover(): mixed
    {
        return $this->getFieldValue('cover');
    }

    /**
     * @param list<PhotoSize|array<string, mixed>>|Base\ArrayObject<PhotoSize> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCover(mixed $value): static
    {
        return $this->setFieldValue('cover', $value);
    }

    /**
     * Optional. Timestamp in seconds from which the video will play in the message
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getStartTimestamp(): mixed
    {
        return $this->getFieldValue('start_timestamp');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setStartTimestamp(mixed $value): static
    {
        return $this->setFieldValue('start_timestamp', $value);
    }

    /**
     * Optional. List of available qualities of the video
     *
     * @return Base\ArrayObject<VideoQuality>
     * @throws Base\TelegramException
     */
    public function getQualities(): mixed
    {
        return $this->getFieldValue('qualities');
    }

    /**
     * @param list<VideoQuality|array<string, mixed>>|Base\ArrayObject<VideoQuality> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setQualities(mixed $value): static
    {
        return $this->setFieldValue('qualities', $value);
    }

    /**
     * Optional. Original filename as defined by the sender
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getFileName(): mixed
    {
        return $this->getFieldValue('file_name');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setFileName(mixed $value): static
    {
        return $this->setFieldValue('file_name', $value);
    }

    /**
     * Optional. MIME type of the file as defined by the sender
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getMimeType(): mixed
    {
        return $this->getFieldValue('mime_type');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setMimeType(mixed $value): static
    {
        return $this->setFieldValue('mime_type', $value);
    }

    /**
     * Optional. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value.
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
