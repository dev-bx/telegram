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
 * Use this method to get up-to-date information about the chat. Returns a `ChatFullInfo` object on success.
 *
 * @link https://core.telegram.org/bots/api#getchat
 *
 * @property-read int|string|null $chatId Required. Unique identifier for the target chat or username of the target supergroup or channel in the format `@username`
 * @property-write int|string $chatId
 *
 * @method Types\ChatFullInfo send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class GetChat extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'chat_id' => [
                'type' => ['int', 'string'],
                'required' => true,
            ],
            '@return' => [
                'type' => [Types\ChatFullInfo::class],
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

    protected function getRequestMethod(): string
    {
        return 'getChat';
    }
}
