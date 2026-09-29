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

namespace DevBX\Telegram\Types;

use DevBX\Telegram\Base;

/**
 * This object represents an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards) that appears right next to the message it belongs to.
 *
 * @link https://core.telegram.org/bots/api#inlinekeyboardmarkup
 *
 * @property-read Base\ArrayOfArrayObject<InlineKeyboardButton> $inlineKeyboard Required. Array of button rows, each represented by an Array of `InlineKeyboardButton` objects
 * @property-write list<list<InlineKeyboardButton|array<string, mixed>>>|Base\ArrayOfArrayObject<InlineKeyboardButton> $inlineKeyboard
 * @property-read bool|null $forceReply Optional. Pass *True* if the reply interface must be shown to the user, as if they had manually selected the bot's message and tapped 'Reply'. The value of the field can't be changed when the inline keyboard is edited.
 * @property-write bool $forceReply
 */
class InlineKeyboardMarkup extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'inline_keyboard' => [
                'type' => [InlineKeyboardButton::class],
                'isArray' => 'matrix',
                'required' => true,
            ],
            'force_reply' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Required. Array of button rows, each represented by an Array of `InlineKeyboardButton` objects
     *
     * @return Base\ArrayOfArrayObject<InlineKeyboardButton>
     * @throws Base\TelegramException
     */
    public function getInlineKeyboard(): mixed
    {
        return $this->getFieldValue('inline_keyboard');
    }

    /**
     * @param list<list<InlineKeyboardButton|array<string, mixed>>>|Base\ArrayOfArrayObject<InlineKeyboardButton> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setInlineKeyboard(mixed $value): static
    {
        return $this->setFieldValue('inline_keyboard', $value);
    }

    /**
     * Optional. Pass *True* if the reply interface must be shown to the user, as if they had manually selected the bot's message and tapped 'Reply'. The value of the field can't be changed when the inline keyboard is edited.
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getForceReply(): mixed
    {
        return $this->getFieldValue('force_reply');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setForceReply(mixed $value): static
    {
        return $this->setFieldValue('force_reply', $value);
    }
}
