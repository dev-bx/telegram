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
 * Use this method to get current webhook status. Requires no parameters. On success, returns a [WebhookInfo](#webhookinfo) object. If the bot is using [getUpdates](#getupdates), will return an object with the *url* field empty.
 * @method Types\WebhookInfo send(Api $gateway = null)
 */
class GetWebhookInfo extends Base\Request
{
    public static function getFields(): array
    {
        return [
            '@return' => [
                'type' => Types\WebhookInfo::class,
            ],
        ];
    }

    protected function getRequestMethod(): string
    {
        return 'GetWebhookInfo';
    }
}