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
 * This object represents an audio file to be treated as music by the Telegram clients.
 *
 * @link https://core.telegram.org/bots/api#audio
 *
 * @property-read string|null $fileId Required. Identifier for this file, which can be used to download or reuse the file
 * @property-write string $fileId
 * @property-read string|null $fileUniqueId Required. Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 * @property-write string $fileUniqueId
 * @property-read int|null $duration Required. Duration of the audio in seconds as defined by the sender
 * @property-write int $duration
 * @property-read string|null $performer Optional. Performer of the audio as defined by the sender or by audio tags
 * @property-write string $performer
 * @property-read string|null $title Optional. Title of the audio as defined by the sender or by audio tags
 * @property-write string $title
 * @property-read string|null $fileName Optional. Original filename as defined by the sender
 * @property-write string $fileName
 * @property-read string|null $mimeType Optional. MIME type of the file as defined by the sender
 * @property-write string $mimeType
 * @property-read int|null $fileSize Optional. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value.
 * @property-write int $fileSize
 * @property-read PhotoSize|null $thumbnail Optional. Thumbnail of the album cover to which the music file belongs
 * @property-write PhotoSize|array<string, mixed> $thumbnail
 */
class Audio extends Base\BaseType
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
            'duration' => [
                'type' => ['int'],
                'required' => true,
            ],
            'performer' => [
                'type' => ['string'],
            ],
            'title' => [
                'type' => ['string'],
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
            'thumbnail' => [
                'type' => [PhotoSize::class],
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
     * Required. Duration of the audio in seconds as defined by the sender
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
     * Optional. Performer of the audio as defined by the sender or by audio tags
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getPerformer(): mixed
    {
        return $this->getFieldValue('performer');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPerformer(mixed $value): static
    {
        return $this->setFieldValue('performer', $value);
    }

    /**
     * Optional. Title of the audio as defined by the sender or by audio tags
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getTitle(): mixed
    {
        return $this->getFieldValue('title');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setTitle(mixed $value): static
    {
        return $this->setFieldValue('title', $value);
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

    /**
     * Optional. Thumbnail of the album cover to which the music file belongs
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
}
