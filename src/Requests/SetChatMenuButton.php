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
 * Use this method to change the bot's menu button in a private chat, or the default menu button. Returns *True* on success.
 * @property int $chatId
 * Unique identifier for the target private chat. If not specified, default bot's menu button will be changed
 * @property Types\MenuButton $menuButton
 * A JSON-serialized object for the bot's new menu button. Defaults to [MenuButtonDefault](#menubuttondefault)
 * @method Base\BaseType send(Api $gateway = null)
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
        ];
    }

    /**
    * @return int
    */

    public function getChatId(): mixed
    {
        return $this->getFieldValue('chat_id');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setChatId(mixed $value): static
    {
        return $this->setFieldValue('chat_id', $value);
    }

    /**
    * @return Types\MenuButton
    */

    public function getMenuButton(): mixed
    {
        return $this->getFieldValue('menu_button');
    }

    /**
    * @param Types\MenuButton $value
    * @return static
    */

    public function setMenuButton(mixed $value): static
    {
        return $this->setFieldValue('menu_button', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'SetChatMenuButton';
    }
}