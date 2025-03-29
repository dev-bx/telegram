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
use DevBX\Telegram\Stickers;

/**
 * Use this method to get custom emoji stickers, which can be used as a forum topic icon by any user. Requires no parameters. Returns an Array of [Sticker](#sticker) objects.
 * @method Stickers\Sticker[]|Base\BaseType send(Api $gateway = null)
 */
class GetForumTopicIconStickers extends Base\Request
{
    public static function getFields(): array
    {
        return [
            '@return' => [
                'type' => Stickers\Sticker::class,
                'isArray' => true,
            ],
        ];
    }

    protected function getRequestMethod(): string
    {
        return 'GetForumTopicIconStickers';
    }
}