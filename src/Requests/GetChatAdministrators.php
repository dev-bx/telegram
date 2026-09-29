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
 * Use this method to get a list of administrators in a chat. Returns an Array of [ChatMember](#chatmember) objects.
 * @property int|string $chatId
 * Unique identifier for the target chat or username of the target supergroup or channel in the format `@username`
 * @property bool $returnBots
 * Pass *True* to additionally receive all bots that are administrators of the chat. By default, bots other than the current bot are omitted.
 * @method Types\ChatMember[]|Base\BaseType send(Api $gateway = null)
 */
class GetChatAdministrators extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'chat_id' => [
                'type' => ['int', 'string'],
                'required' => true,
            ],
            'return_bots' => [
                'type' => ['bool'],
            ],
            '@return' => [
                'type' => Types\ChatMember::class,
                'isArray' => true,
            ],
        ];
    }

    /**
    * @return int|string
    */

    public function getChatId(): mixed
    {
        return $this->getFieldValue('chat_id');
    }

    /**
    * @param int|string $value
    * @return static
    */

    public function setChatId(mixed $value): static
    {
        return $this->setFieldValue('chat_id', $value);
    }

    /**
    * @return bool
    */

    public function getReturnBots(): mixed
    {
        return $this->getFieldValue('return_bots');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setReturnBots(mixed $value): static
    {
        return $this->setFieldValue('return_bots', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'GetChatAdministrators';
    }
}