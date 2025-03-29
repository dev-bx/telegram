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
 * Use this method to change the bot's name. Returns *True* on success.
 * @property string $name
 * New bot name; 0-64 characters. Pass an empty string to remove the dedicated name for the given language.
 * @property string $languageCode
 * A two-letter ISO 639-1 language code. If empty, the name will be shown to all users for whose language there is no dedicated name.
 * @method Base\BaseType send(Api $gateway = null)
 */
class SetMyName extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'name' => [
                'type' => ['string'],
            ],
            'language_code' => [
                'type' => ['string'],
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
    * @return string
    */

    public function getLanguageCode(): mixed
    {
        return $this->getFieldValue('language_code');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setLanguageCode(mixed $value): static
    {
        return $this->setFieldValue('language_code', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'SetMyName';
    }
}