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

/**
 * **Note:** This function may not preserve the original file name and MIME type. You should save the file's MIME type and name (if available) when the File object is received.
 * @property string $fileId
 * File identifier to get information about
 * @method Base\BaseType send(Api $gateway = null)
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
        ];
    }

    /**
    * @return string
    */

    public function getFileId(): mixed
    {
        return $this->getFieldValue('file_id');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setFileId(mixed $value): static
    {
        return $this->setFieldValue('file_id', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'GetFile';
    }
}