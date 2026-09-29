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
 * This object represents a chat photo.
 *
 * @link https://core.telegram.org/bots/api#chatphoto
 *
 * @property-read string|null $smallFileId Required. File identifier of small (160x160) chat photo. This file_id can be used only for photo download and only for as long as the photo is not changed.
 * @property-write string $smallFileId
 * @property-read string|null $smallFileUniqueId Required. Unique file identifier of small (160x160) chat photo, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 * @property-write string $smallFileUniqueId
 * @property-read string|null $bigFileId Required. File identifier of big (640x640) chat photo. This file_id can be used only for photo download and only for as long as the photo is not changed.
 * @property-write string $bigFileId
 * @property-read string|null $bigFileUniqueId Required. Unique file identifier of big (640x640) chat photo, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 * @property-write string $bigFileUniqueId
 */
class ChatPhoto extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'small_file_id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'small_file_unique_id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'big_file_id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'big_file_unique_id' => [
                'type' => ['string'],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. File identifier of small (160x160) chat photo. This file_id can be used only for photo download and only for as long as the photo is not changed.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getSmallFileId(): mixed
    {
        return $this->getFieldValue('small_file_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSmallFileId(mixed $value): static
    {
        return $this->setFieldValue('small_file_id', $value);
    }

    /**
     * Required. Unique file identifier of small (160x160) chat photo, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getSmallFileUniqueId(): mixed
    {
        return $this->getFieldValue('small_file_unique_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSmallFileUniqueId(mixed $value): static
    {
        return $this->setFieldValue('small_file_unique_id', $value);
    }

    /**
     * Required. File identifier of big (640x640) chat photo. This file_id can be used only for photo download and only for as long as the photo is not changed.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getBigFileId(): mixed
    {
        return $this->getFieldValue('big_file_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setBigFileId(mixed $value): static
    {
        return $this->setFieldValue('big_file_id', $value);
    }

    /**
     * Required. Unique file identifier of big (640x640) chat photo, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getBigFileUniqueId(): mixed
    {
        return $this->getFieldValue('big_file_unique_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setBigFileUniqueId(mixed $value): static
    {
        return $this->setFieldValue('big_file_unique_id', $value);
    }
}
