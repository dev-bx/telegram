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
 * Use this method to change the bot's short description, which is shown on the bot's profile page and is sent together with the link when users share the bot. Returns *True* on success.
 * @property string $shortDescription
 * New short description for the bot; 0-120 characters. Pass an empty string to remove the dedicated short description for the given language.
 * @property string $languageCode
 * A two-letter ISO 639-1 language code. If empty, the short description will be applied to all users for whose language there is no dedicated short description.
 * @method Base\BaseType send(Api $gateway = null)
 */
class SetMyShortDescription extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'short_description' => [
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

    public function getShortDescription(): mixed
    {
        return $this->getFieldValue('short_description');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setShortDescription(mixed $value): static
    {
        return $this->setFieldValue('short_description', $value);
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
        return 'SetMyShortDescription';
    }
}