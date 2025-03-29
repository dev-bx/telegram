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
 * Use this method to delete the list of the bot's commands for the given scope and user language. After deletion, [higher level commands](#determining-list-of-commands) will be shown to affected users. Returns *True* on success.
 * @property Types\BotCommandScope $scope
 * A JSON-serialized object, describing scope of users for which the commands are relevant. Defaults to [BotCommandScopeDefault](#botcommandscopedefault).
 * @property string $languageCode
 * A two-letter ISO 639-1 language code. If empty, commands will be applied to all users from the given scope, for whose language there are no dedicated commands
 * @method Base\BaseType send(Api $gateway = null)
 */
class DeleteMyCommands extends Base\Request
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
        return 'DeleteMyCommands';
    }
}