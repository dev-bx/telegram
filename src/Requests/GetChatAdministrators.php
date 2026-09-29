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
 * Use this method to get a list of administrators in a chat. Returns an Array of `ChatMember` objects.
 *
 * @link https://core.telegram.org/bots/api#getchatadministrators
 *
 * @property-read int|string|null $chatId Required. Unique identifier for the target chat or username of the target supergroup or channel in the format `@username`
 * @property-write int|string $chatId
 * @property-read bool|null $returnBots Optional. Pass *True* to additionally receive all bots that are administrators of the chat. By default, bots other than the current bot are omitted.
 * @property-write bool $returnBots
 *
 * @method Base\ArrayObject<Types\ChatMember> send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
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
                'type' => [Types\ChatMember::class],
                'isArray' => true,
            ],
        ];
    }

    /**
     * Required. Unique identifier for the target chat or username of the target supergroup or channel in the format `@username`
     *
     * @return int|string|null
     * @throws Base\TelegramException
     */
    public function getChatId(): mixed
    {
        return $this->getFieldValue('chat_id');
    }

    /**
     * @param int|string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setChatId(mixed $value): static
    {
        return $this->setFieldValue('chat_id', $value);
    }

    /**
     * Optional. Pass *True* to additionally receive all bots that are administrators of the chat. By default, bots other than the current bot are omitted.
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getReturnBots(): mixed
    {
        return $this->getFieldValue('return_bots');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setReturnBots(mixed $value): static
    {
        return $this->setFieldValue('return_bots', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'getChatAdministrators';
    }
}
