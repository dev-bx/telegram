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
 * Use this method to get the current list of the bot's commands for the given scope and user language. Returns an Array of [BotCommand](#botcommand) objects. If commands aren't set, an empty list is returned.
 * @property Types\BotCommandScope $scope
 * A JSON-serialized object, describing scope of users. Defaults to [BotCommandScopeDefault](#botcommandscopedefault).
 * @property string $languageCode
 * A two-letter ISO 639-1 language code or an empty string
 * @method Types\BotCommand[]|Base\BaseType send(Api $gateway = null)
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
                'type' => Types\BotCommand::class,
                'isArray' => true,
            ],
        ];
    }

    /**
    * @return Types\BotCommandScope
    */

    public function getScope(): mixed
    {
        return $this->getFieldValue('scope');
    }

    /**
    * @param Types\BotCommandScope $value
    * @return static
    */

    public function setScope(mixed $value): static
    {
        return $this->setFieldValue('scope', $value);
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
        return 'GetMyCommands';
    }
}