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
 * Use this method to get the current value of the bot's menu button in a private chat, or the default menu button. Returns `MenuButton` on success.
 *
 * @link https://core.telegram.org/bots/api#getchatmenubutton
 *
 * @property-read int|null $chatId Optional. Unique identifier for the target private chat. If not specified, the bot's default menu button will be returned.
 * @property-write int $chatId
 *
 * @method Types\MenuButton send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class GetChatMenuButton extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'chat_id' => [
                'type' => ['int'],
            ],
            '@return' => [
                'type' => [Types\MenuButton::class],
            ],
        ];
    }

    /**
     * Optional. Unique identifier for the target private chat. If not specified, the bot's default menu button will be returned.
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getChatId(): mixed
    {
        return $this->getFieldValue('chat_id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setChatId(mixed $value): static
    {
        return $this->setFieldValue('chat_id', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'getChatMenuButton';
    }
}
