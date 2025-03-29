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
 * Use this method to delete a sticker set that was created by the bot. Returns *True* on success.
 * @property string $name
 * Sticker set name
 * @method Base\BaseType send(Api $gateway = null)
 */
class DeleteStickerSet extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'name' => [
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

    protected function getRequestMethod(): string
    {
        return 'DeleteStickerSet';
    }
}