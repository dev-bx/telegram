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
 * Use this method to change the list of the bot's commands. See [this manual](/bots/features#commands) for more details about bot commands. Returns *True* on success.
 * @property Base\ArrayObject|Types\BotCommand[] $commands
 * A JSON-serialized list of bot commands to be set as the list of the bot's commands. At most 100 commands can be specified.
 * @property Types\BotCommandScope $scope
 * A JSON-serialized object, describing scope of users for which the commands are relevant. Defaults to [BotCommandScopeDefault](#botcommandscopedefault).
 * @property string $languageCode
 * A two-letter ISO 639-1 language code. If empty, commands will be applied to all users from the given scope, for whose language there are no dedicated commands
 * @method Base\BaseType send(Api $gateway = null)
 */
class SetMyCommands extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'commands' => [
                'type' => [Types\BotCommand::class],
                'isArray' => true,
                'required' => true,
            ],
            'scope' => [
                'type' => [Types\BotCommandScope::class],
            ],
            'language_code' => [
                'type' => ['string'],
            ],
        ];
    }

    /**
    * @return Base\ArrayObject|Types\BotCommand[]
    */

    public function getCommands(): mixed
    {
        return $this->getFieldValue('commands');
    }

    /**
    * @param Base\ArrayObject|Types\BotCommand[] $value
    * @return static
    */

    public function setCommands(mixed $value): static
    {
        return $this->setFieldValue('commands', $value);
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
        return 'SetMyCommands';
    }
}