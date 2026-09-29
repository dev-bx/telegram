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
 * Use this method to change the list of the bot's commands. See [this manual](https://core.telegram.org/bots/features#commands) for more details about bot commands. Returns *True* on success.
 *
 * @link https://core.telegram.org/bots/api#setmycommands
 *
 * @property-read Base\ArrayObject<Types\BotCommand> $commands Required. A JSON-serialized list of bot commands to be set as the list of the bot's commands. At most 100 commands can be specified.
 * @property-write list<Types\BotCommand|array<string, mixed>>|Base\ArrayObject<Types\BotCommand> $commands
 * @property-read Types\BotCommandScope|null $scope Optional. A JSON-serialized object, describing scope of users for which the commands are relevant. Defaults to `BotCommandScopeDefault`.
 * @property-write Types\BotCommandScope|array<string, mixed> $scope
 * @property-read string|null $languageCode Optional. A two-letter ISO 639-1 language code. If empty, commands will be applied to all users from the given scope, for whose language there are no dedicated commands.
 * @property-write string $languageCode
 *
 * @method Base\ParameterBool send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
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
            '@return' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Required. A JSON-serialized list of bot commands to be set as the list of the bot's commands. At most 100 commands can be specified.
     *
     * @return Base\ArrayObject<Types\BotCommand>
     * @throws Base\TelegramException
     */
    public function getCommands(): mixed
    {
        return $this->getFieldValue('commands');
    }

    /**
     * @param list<Types\BotCommand|array<string, mixed>>|Base\ArrayObject<Types\BotCommand> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCommands(mixed $value): static
    {
        return $this->setFieldValue('commands', $value);
    }

    /**
     * Optional. A JSON-serialized object, describing scope of users for which the commands are relevant. Defaults to `BotCommandScopeDefault`.
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
     * Optional. A two-letter ISO 639-1 language code. If empty, commands will be applied to all users from the given scope, for whose language there are no dedicated commands.
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
        return 'setMyCommands';
    }
}
