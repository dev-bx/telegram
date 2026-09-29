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
 * This object represents a file ready to be downloaded. The file can be downloaded via the link `https://api.telegram.org/file/bot<token>/<file_path>`. It is guaranteed that the link will be valid for at least 1 hour. When the link expires, a new one can be requested by calling `getFile`.
 *
 * The maximum file size to download is 20 MB
 *
 * @link https://core.telegram.org/bots/api#file
 *
 * @property-read string|null $fileId Required. Identifier for this file, which can be used to download or reuse the file
 * @property-write string $fileId
 * @property-read string|null $fileUniqueId Required. Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 * @property-write string $fileUniqueId
 * @property-read int|null $fileSize Optional. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value.
 * @property-write int $fileSize
 * @property-read string|null $filePath Optional. File path. Use `https://api.telegram.org/file/bot<token>/<file_path>` to get the file.
 * @property-write string $filePath
 */
class File extends Base\BaseType
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
            'file_size' => [
                'type' => ['int'],
            ],
            'file_path' => [
                'type' => ['string'],
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
     * Optional. File path. Use `https://api.telegram.org/file/bot<token>/<file_path>` to get the file.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getFilePath(): mixed
    {
        return $this->getFieldValue('file_path');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setFilePath(mixed $value): static
    {
        return $this->setFieldValue('file_path', $value);
    }
}
