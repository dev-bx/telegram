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
 * Use this method to get the list of backdrops, which can be used as the background of a theme of the screen for sharing a link to a user or a chat. Requires no parameters. Returns a `ChatShareThemeBackdrops` object.
 *
 * @link https://core.telegram.org/bots/api#getchatsharethemebackdrops
 *
 * @method Types\ChatShareThemeBackdrops send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class GetChatShareThemeBackdrops extends Base\Request
{
    public static function getFields(): array
    {
        return [
            '@return' => [
                'type' => [Types\ChatShareThemeBackdrops::class],
            ],
        ];
    }

    protected function getRequestMethod(): string
    {
        return 'getChatShareThemeBackdrops';
    }
}
