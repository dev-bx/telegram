<?php

/**
 * @project Telegram Bot Api
 * @author Kubeev Ruslan <ruslan@dev-bx.ru>
 * @copyright 2025 Kubeev Ruslan
 * @license MIT
 * @link https://dev-bx.ru/
 *
 * This file is part of the project Telegram Bot Api Class Generator.
 */

namespace DevBX\Telegram\Requests;

use DevBX\Telegram\Base;
use DevBX\Telegram\Api;
use DevBX\Telegram\Types;

/**
 * Use this method to upload a file with a sticker for later use in the [createNewStickerSet](#createnewstickerset), [addStickerToSet](#addstickertoset), or [replaceStickerInSet](#replacestickerinset) methods (the file can be used multiple times). Returns the uploaded [File](#file) on success.
 * @property int $userId
 * User identifier of sticker file owner
 * @property Types\InputFile $sticker
 * A file with the sticker in .WEBP, .PNG, .TGS, or .WEBM format. See [](/stickers)<https://core.telegram.org/stickers> for technical requirements. [More information on Sending Files »](#sending-files)
 * @property string $stickerFormat
 * Format of the sticker, must be one of “static”, “animated”, “video”
 * @method Types\File send(Api $gateway = null)
 */
class UploadStickerFile extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'user_id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'sticker' => [
                'type' => [Types\InputFile::class],
                'required' => true,
            ],
            'sticker_format' => [
                'type' => ['string'],
                'required' => true,
            ],
            '@return' => [
                'type' => Types\File::class,
            ],
        ];
    }

    /**
    * @return int
    */

    public function getUserId(): mixed
    {
        return $this->getFieldValue('user_id');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setUserId(mixed $value): static
    {
        return $this->setFieldValue('user_id', $value);
    }

    /**
    * @return Types\InputFile
    */

    public function getSticker(): mixed
    {
        return $this->getFieldValue('sticker');
    }

    /**
    * @param Types\InputFile $value
    * @return static
    */

    public function setSticker(mixed $value): static
    {
        return $this->setFieldValue('sticker', $value);
    }

    /**
    * @return string
    */

    public function getStickerFormat(): mixed
    {
        return $this->getFieldValue('sticker_format');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setStickerFormat(mixed $value): static
    {
        return $this->setFieldValue('sticker_format', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'UploadStickerFile';
    }
}