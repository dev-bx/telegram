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
 * Use this method to set the thumbnail of a regular or mask sticker set. The format of the thumbnail file must match the format of the stickers in the set. Returns *True* on success.
 * @property string $name
 * Sticker set name
 * @property int $userId
 * User identifier of the sticker set owner
 * @property Types\InputFile|string $thumbnail
 * A **.WEBP** or **.PNG** image with the thumbnail, must be up to 128 kilobytes in size and have a width and height of exactly 100px, or a **.TGS** animation with a thumbnail up to 32 kilobytes in size (see [](/stickers#animation-requirements)<https://core.telegram.org/stickers#animation-requirements> for animated sticker technical requirements), or a **.WEBM** video with the thumbnail up to 32 kilobytes in size; see [](/stickers#video-requirements)<https://core.telegram.org/stickers#video-requirements> for video sticker technical requirements. Pass a *file\_id* as a String to send a file that already exists on the Telegram servers, pass an HTTP URL as a String for Telegram to get a file from the Internet, or upload a new one using multipart/form-data. [More information on Sending Files »](#sending-files). Animated and video sticker set thumbnails can't be uploaded via HTTP URL. If omitted, then the thumbnail is dropped and the first sticker is used as the thumbnail.
 * @property string $format
 * Format of the thumbnail, must be one of “static” for a **.WEBP** or **.PNG** image, “animated” for a **.TGS** animation, or “video” for a **.WEBM** video
 * @method Base\BaseType send(Api $gateway = null)
 */
class SetStickerSetThumbnail extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'name' => [
                'type' => ['string'],
                'required' => true,
            ],
            'user_id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'thumbnail' => [
                'type' => [Types\InputFile::class, 'string'],
            ],
            'format' => [
                'type' => ['string'],
                'required' => true,
            ],
        ];
    }

    /**
    * @return string
    */

    public function getName(): mixed
    {
        return $this->getFieldValue('name');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setName(mixed $value): static
    {
        return $this->setFieldValue('name', $value);
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
    * @return Types\InputFile|string
    */

    public function getThumbnail(): mixed
    {
        return $this->getFieldValue('thumbnail');
    }

    /**
    * @param Types\InputFile|string $value
    * @return static
    */

    public function setThumbnail(mixed $value): static
    {
        return $this->setFieldValue('thumbnail', $value);
    }

    /**
    * @return string
    */

    public function getFormat(): mixed
    {
        return $this->getFieldValue('format');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setFormat(mixed $value): static
    {
        return $this->setFieldValue('format', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'SetStickerSetThumbnail';
    }
}