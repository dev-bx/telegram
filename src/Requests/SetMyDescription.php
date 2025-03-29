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
 * Use this method to change the bot's description, which is shown in the chat with the bot if the chat is empty. Returns *True* on success.
 * @property string $description
 * New bot description; 0-512 characters. Pass an empty string to remove the dedicated description for the given language.
 * @property string $languageCode
 * A two-letter ISO 639-1 language code. If empty, the description will be applied to all users for whose language there is no dedicated description.
 * @method Base\BaseType send(Api $gateway = null)
 */
class SetMyDescription extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'description' => [
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

    public function getDescription(): mixed
    {
        return $this->getFieldValue('description');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setDescription(mixed $value): static
    {
        return $this->setFieldValue('description', $value);
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
        return 'SetMyDescription';
    }
}