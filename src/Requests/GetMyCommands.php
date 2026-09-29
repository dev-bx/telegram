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
 * Use this method to get the current list of the bot's commands for the given scope and user language. Returns an Array of `BotCommand` objects. If commands aren't set, an empty list is returned.
 *
 * @link https://core.telegram.org/bots/api#getmycommands
 *
 * @property-read Types\BotCommandScope|null $scope Optional. A JSON-serialized object, describing scope of users. Defaults to `BotCommandScopeDefault`.
 * @property-write Types\BotCommandScope|array<string, mixed> $scope
 * @property-read string|null $languageCode Optional. A two-letter ISO 639-1 language code or an empty string
 * @property-write string $languageCode
 *
 * @method Base\ArrayObject<Types\BotCommand> send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class GetMyCommands extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'scope' => [
                'type' => [Types\BotCommandScope::class],
            ],
            'language_code' => [
                'type' => ['string'],
            ],
            '@return' => [
                'type' => [Types\BotCommand::class],
                'isArray' => true,
            ],
        ];
    }

    /**
     * Optional. A JSON-serialized object, describing scope of users. Defaults to `BotCommandScopeDefault`.
     *
     * @return Types\BotCommandScope|null
     * @throws Base\TelegramException
     */
    public function getScope(): mixed
    {
        return $this->getFieldValue('scope');
    }

    /**
     * @param Types\BotCommandScope|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setScope(mixed $value): static
    {
        return $this->setFieldValue('scope', $value);
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
        return 'getMyCommands';
    }
}
