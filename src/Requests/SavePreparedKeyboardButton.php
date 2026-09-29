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
 * Stores a keyboard button that can be used by a user within a Mini App. Returns a [PreparedKeyboardButton](#preparedkeyboardbutton) object.
 * @property int $userId
 * Unique identifier of the target user that can use the button
 * @property Types\KeyboardButton $button
 * A JSON-serialized object describing the button to be saved. The button must be of the type *request\_users*, *request\_chat*, or *request\_managed\_bot*.
 * @method Types\PreparedKeyboardButton send(Api $gateway = null)
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
                'type' => Types\PreparedKeyboardButton::class,
            ],
        ];
    }

    /**
    * @return int
    */

    public function getUserId(): mixed
    {
        return $this->getFieldValue('user_id');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setUserId(mixed $value): static
    {
        return $this->setFieldValue('user_id', $value);
    }

    /**
    * @return Types\KeyboardButton
    */

    public function getButton(): mixed
    {
        return $this->getFieldValue('button');
    }

    /**
    * @param Types\KeyboardButton $value
    * @return static
    */

    public function setButton(mixed $value): static
    {
        return $this->setFieldValue('button', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'SavePreparedKeyboardButton';
    }
}