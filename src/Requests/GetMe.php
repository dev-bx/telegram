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
 * A simple method for testing your bot's authentication token. Requires no parameters. Returns basic information about the bot in form of a `User` object.
 *
 * @link https://core.telegram.org/bots/api#getme
 *
 * @method Types\User send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class GetMe extends Base\Request
{
    public static function getFields(): array
    {
        return [
            '@return' => [
                'type' => [Types\User::class],
            ],
        ];
    }

    protected function getRequestMethod(): string
    {
        return 'getMe';
    }
}
