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

namespace DevBX\Telegram\Requests;

use DevBX\Telegram\Base;
use DevBX\Telegram\Api;
use DevBX\Telegram\Types;

/**
 * Use this method to upload a file with a sticker for later use in the `createNewStickerSet`, `addStickerToSet`, or `replaceStickerInSet` methods (the file can be used multiple times). Returns the uploaded `File` on success.
 *
 * @link https://core.telegram.org/bots/api#uploadstickerfile
 *
 * @property-read int|null $userId Required. User identifier of sticker file owner
 * @property-write int $userId
 * @property-read array<string, mixed>|string|null $sticker Required. A file with the sticker in .WEBP, .PNG, .TGS, or .WEBM format. See https://core.telegram.org/stickers[https://core.telegram.org/stickers](https://core.telegram.org/stickers) for technical requirements. [More information on Sending Files »](https://core.telegram.org/bots/api#sending-files)
 * @property-write Types\InputFile|array{filename?: string, content?: string, resource?: resource, contentType?: string} $sticker
 * @property-read string|null $stickerFormat Required. Format of the sticker, must be one of “static”, “animated”, “video”
 * @property-write string $stickerFormat
 *
 * @method Types\File send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
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
                'type' => [Types\File::class],
            ],
        ];
    }

    /**
     * Required. User identifier of sticker file owner
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getUserId(): mixed
    {
        return $this->getFieldValue('user_id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setUserId(mixed $value): static
    {
        return $this->setFieldValue('user_id', $value);
    }

    /**
     * Required. A file with the sticker in .WEBP, .PNG, .TGS, or .WEBM format. See https://core.telegram.org/stickers[https://core.telegram.org/stickers](https://core.telegram.org/stickers) for technical requirements. [More information on Sending Files »](https://core.telegram.org/bots/api#sending-files)
     *
     * @return array<string, mixed>|string|null
     * @throws Base\TelegramException
     */
    public function getSticker(): mixed
    {
        return $this->getFieldValue('sticker');
    }

    /**
     * @param Types\InputFile|array{filename?: string, content?: string, resource?: resource, contentType?: string} $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSticker(mixed $value): static
    {
        return $this->setFieldValue('sticker', $value);
    }

    /**
     * Required. Format of the sticker, must be one of “static”, “animated”, “video”
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getStickerFormat(): mixed
    {
        return $this->getFieldValue('sticker_format');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setStickerFormat(mixed $value): static
    {
        return $this->setFieldValue('sticker_format', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'uploadStickerFile';
    }
}
