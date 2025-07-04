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
 * A method to get the current Telegram Stars balance of the bot. Requires no parameters. On success, returns a [StarAmount](#staramount) object.
 * @method Types\StarAmount send(Api $gateway = null)
 */
class GetMyStarBalance extends Base\Request
{
    public static function getFields(): array
    {
        return [
            '@return' => [
                'type' => Types\StarAmount::class,
            ],
        ];
    }

    protected function getRequestMethod(): string
    {
        return 'GetMyStarBalance';
    }
}