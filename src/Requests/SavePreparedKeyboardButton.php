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
 * Stores a keyboard button that can be used by a user within a Mini App. Returns a `PreparedKeyboardButton` object.
 *
 * @link https://core.telegram.org/bots/api#savepreparedkeyboardbutton
 *
 * @property-read int|null $userId Required. Unique identifier of the target user that can use the button
 * @property-write int $userId
 * @property-read Types\KeyboardButton|null $button Required. A JSON-serialized object describing the button to be saved. The button must be of the type *request_users*, *request_chat*, or *request_managed_bot*.
 * @property-write Types\KeyboardButton|array<string, mixed> $button
 *
 * @method Types\PreparedKeyboardButton send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class SavePreparedKeyboardButton extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'user_id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'button' => [
                'type' => [Types\KeyboardButton::class],
                'required' => true,
            ],
            '@return' => [
                'type' => [Types\PreparedKeyboardButton::class],
            ],
        ];
    }

    /**
     * Required. Unique identifier of the target user that can use the button
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getUserId(): mixed
    {
        return $this->getFieldValue('user_id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setUserId(mixed $value): static
    {
        return $this->setFieldValue('user_id', $value);
    }

    /**
     * Required. A JSON-serialized object describing the button to be saved. The button must be of the type *request_users*, *request_chat*, or *request_managed_bot*.
     *
     * @return Types\KeyboardButton|null
     * @throws Base\TelegramException
     */
    public function getButton(): mixed
    {
        return $this->getFieldValue('button');
    }

    /**
     * @param Types\KeyboardButton|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setButton(mixed $value): static
    {
        return $this->setFieldValue('button', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'savePreparedKeyboardButton';
    }
}
