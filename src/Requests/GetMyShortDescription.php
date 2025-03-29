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
 * Use this method to get the current bot short description for the given user language. Returns [BotShortDescription](#botshortdescription) on success.
 * @property string $languageCode
 * A two-letter ISO 639-1 language code or an empty string
 * @method Types\BotShortDescription send(Api $gateway = null)
 */
class GetMyShortDescription extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'language_code' => [
                'type' => ['string'],
            ],
            '@return' => [
                'type' => Types\BotShortDescription::class,
            ],
        ];
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
        return 'GetMyShortDescription';
    }
}