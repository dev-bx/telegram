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

/**
 * Removes the profile photo of the bot. Requires no parameters. Returns *True* on success.
 * @method Base\BaseType send(Api $gateway = null)
 */
class RemoveMyProfilePhoto extends Base\Request
{
    public static function getFields(): array
    {
        return [

        ];
    }

    protected function getRequestMethod(): string
    {
        return 'RemoveMyProfilePhoto';
    }
}