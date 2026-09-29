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

/**
 * Use this method to change the bot's short description, which is shown on the bot's profile page and is sent together with the link when users share the bot. Returns *True* on success.
 *
 * @link https://core.telegram.org/bots/api#setmyshortdescription
 *
 * @property-read string|null $shortDescription Optional. New short description for the bot; 0-120 characters. Pass an empty string to remove the dedicated short description for the given language.
 * @property-write string $shortDescription
 * @property-read string|null $languageCode Optional. A two-letter ISO 639-1 language code. If empty, the short description will be applied to all users for whose language there is no dedicated short description.
 * @property-write string $languageCode
 *
 * @method Base\ParameterBool send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
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
            '@return' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Optional. New short description for the bot; 0-120 characters. Pass an empty string to remove the dedicated short description for the given language.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getShortDescription(): mixed
    {
        return $this->getFieldValue('short_description');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setShortDescription(mixed $value): static
    {
        return $this->setFieldValue('short_description', $value);
    }

    /**
     * Optional. A two-letter ISO 639-1 language code. If empty, the short description will be applied to all users for whose language there is no dedicated short description.
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
        return 'setMyShortDescription';
    }
}
