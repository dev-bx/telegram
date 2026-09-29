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
 * Use this method to get basic information about a file and prepare it for downloading. For the moment, bots can download files of up to 20MB in size. On success, a `File` object is returned. The file can then be downloaded via the link `https://api.telegram.org/file/bot<token>/<file_path>`, where `<file_path>` is taken from the response. It is guaranteed that the link will be valid for at least 1 hour. When the link expires, a new one can be requested by calling `getFile` again.
 *
 * **Note:** This function may not preserve the original file name and MIME type. You should save the file's MIME type and name (if available) when the File object is received.
 *
 * @link https://core.telegram.org/bots/api#getfile
 *
 * @property-read string|null $fileId Required. File identifier to get information about
 * @property-write string $fileId
 *
 * @method Types\File send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class GetFile extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'file_id' => [
                'type' => ['string'],
                'required' => true,
            ],
            '@return' => [
                'type' => [Types\File::class],
            ],
        ];
    }

    /**
     * Required. File identifier to get information about
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

    protected function getRequestMethod(): string
    {
        return 'getFile';
    }
}
