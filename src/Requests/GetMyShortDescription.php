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
 * Use this method to get the current bot short description for the given user language. Returns `BotShortDescription` on success.
 *
 * @link https://core.telegram.org/bots/api#getmyshortdescription
 *
 * @property-read string|null $languageCode Optional. A two-letter ISO 639-1 language code or an empty string
 * @property-write string $languageCode
 *
 * @method Types\BotShortDescription send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
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
                'type' => [Types\BotShortDescription::class],
            ],
        ];
    }

    /**
     * Optional. A two-letter ISO 639-1 language code or an empty string
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getLanguageCode(): mixed
    {
        return $this->getFieldValue('language_code');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setLanguageCode(mixed $value): static
    {
        return $this->setFieldValue('language_code', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'getMyShortDescription';
    }
}
