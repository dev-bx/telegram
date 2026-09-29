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
 * Use this method to change the bot's description, which is shown in the chat with the bot if the chat is empty. Returns *True* on success.
 *
 * @link https://core.telegram.org/bots/api#setmydescription
 *
 * @property-read string|null $description Optional. New bot description; 0-512 characters. Pass an empty string to remove the dedicated description for the given language.
 * @property-write string $description
 * @property-read string|null $languageCode Optional. A two-letter ISO 639-1 language code. If empty, the description will be applied to all users for whose language there is no dedicated description.
 * @property-write string $languageCode
 *
 * @method Base\ParameterBool send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
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
            '@return' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Optional. New bot description; 0-512 characters. Pass an empty string to remove the dedicated description for the given language.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getDescription(): mixed
    {
        return $this->getFieldValue('description');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setDescription(mixed $value): static
    {
        return $this->setFieldValue('description', $value);
    }

    /**
     * Optional. A two-letter ISO 639-1 language code. If empty, the description will be applied to all users for whose language there is no dedicated description.
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
        return 'setMyDescription';
    }
}
