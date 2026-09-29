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
 * Use this method to change the bot's menu button in a private chat, or the default menu button. Returns *True* on success.
 *
 * @link https://core.telegram.org/bots/api#setchatmenubutton
 *
 * @property-read int|null $chatId Optional. Unique identifier for the target private chat. If not specified, the bot's default menu button will be changed.
 * @property-write int $chatId
 * @property-read Types\MenuButton|null $menuButton Optional. A JSON-serialized object for the bot's new menu button. Defaults to `MenuButtonDefault`.
 * @property-write Types\MenuButton|array<string, mixed> $menuButton
 *
 * @method Base\ParameterBool send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class SetChatMenuButton extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'chat_id' => [
                'type' => ['int'],
            ],
            'menu_button' => [
                'type' => [Types\MenuButton::class],
            ],
            '@return' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Optional. Unique identifier for the target private chat. If not specified, the bot's default menu button will be changed.
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

    /**
     * Optional. A JSON-serialized object for the bot's new menu button. Defaults to `MenuButtonDefault`.
     *
     * @return Types\MenuButton|null
     * @throws Base\TelegramException
     */
    public function getMenuButton(): mixed
    {
        return $this->getFieldValue('menu_button');
    }

    /**
     * @param Types\MenuButton|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setMenuButton(mixed $value): static
    {
        return $this->setFieldValue('menu_button', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'setChatMenuButton';
    }
}
