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
 * Returns the list of gifts that can be sent by the bot to users and channel chats. Requires no parameters. Returns a `Gifts` object.
 *
 * @link https://core.telegram.org/bots/api#getavailablegifts
 *
 * @method Types\Gifts send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class GetAvailableGifts extends Base\Request
{
    public static function getFields(): array
    {
        return [
            '@return' => [
                'type' => [Types\Gifts::class],
            ],
        ];
    }

    protected function getRequestMethod(): string
    {
        return 'getAvailableGifts';
    }
}
