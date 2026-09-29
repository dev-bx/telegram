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

namespace DevBX\Telegram\Types;

use DevBX\Telegram\Base;

/**
 * This object describes the bot's menu button in a private chat. It should be one of
 *
 * - `MenuButtonCommands`
 * - `MenuButtonWebApp`
 * - `MenuButtonDefault`
 *
 * If a menu button other than `MenuButtonDefault` is set for a private chat, then it is applied in the chat. Otherwise the default menu button is applied. By default, the menu button opens the list of bot commands.
 *
 * @link https://core.telegram.org/bots/api#menubutton
 *
 * Объединение: create() возвращает подходящий вариант — `MenuButtonCommands`, `MenuButtonWebApp`, `MenuButtonDefault`.
 */
class MenuButton extends Base\BaseType
{
    /**
     * @return list<class-string<MenuButtonCommands|MenuButtonWebApp|MenuButtonDefault>>
     */
    public static function getRelations(): array
    {
        return [
            MenuButtonCommands::class,
            MenuButtonWebApp::class,
            MenuButtonDefault::class,
        ];
    }

    /**
     * Создаёт вариант объединения, подходящий под значение (по полю-дискриминатору и обязательным полям).
     *
     * @return MenuButtonCommands|MenuButtonWebApp|MenuButtonDefault|null null — значение не подошло ни одному варианту (только в нестрогом режиме)
     * @throws Base\TelegramException
     */
    public static function create(mixed $value = null, bool $ignoreUnknownFields = false): ?Base\BaseType
    {
        return static::createFromRelations(static::getRelations(), $value, $ignoreUnknownFields);
    }

    public static function getFields(): array
    {
        return [];
    }
}
