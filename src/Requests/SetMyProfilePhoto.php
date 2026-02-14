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
 * Changes the profile photo of the bot. Returns *True* on success.
 * @property Types\InputProfilePhoto $photo
 * The new profile photo to set
 * @method Base\BaseType send(Api $gateway = null)
 */
class SetMyProfilePhoto extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'photo' => [
                'type' => [Types\InputProfilePhoto::class],
                'required' => true,
            ],
        ];
    }

    /**
    * @return Types\InputProfilePhoto
    */

    public function getPhoto(): mixed
    {
        return $this->getFieldValue('photo');
    }

    /**
    * @param Types\InputProfilePhoto $value
    * @return static
    */

    public function setPhoto(mixed $value): static
    {
        return $this->setFieldValue('photo', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'SetMyProfilePhoto';
    }
}