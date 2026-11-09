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
 * This object contains a list of backdrops, which can be used as the background of a theme of the screen for sharing a link to a user or a chat.
 *
 * @link https://core.telegram.org/bots/api#chatsharethemebackdrops
 *
 * @property-read Base\ArrayObject<ChatShareThemeBackdrop> $backdrops Required. The list of backdrops
 * @property-write list<ChatShareThemeBackdrop|array<string, mixed>>|Base\ArrayObject<ChatShareThemeBackdrop> $backdrops
 */
class ChatShareThemeBackdrops extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'backdrops' => [
                'type' => [ChatShareThemeBackdrop::class],
                'isArray' => true,
                'required' => true,
            ],
        ];
    }

    /**
     * Required. The list of backdrops
     *
     * @return Base\ArrayObject<ChatShareThemeBackdrop>
     * @throws Base\TelegramException
     */
    public function getBackdrops(): mixed
    {
        return $this->getFieldValue('backdrops');
    }

    /**
     * @param list<ChatShareThemeBackdrop|array<string, mixed>>|Base\ArrayObject<ChatShareThemeBackdrop> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setBackdrops(mixed $value): static
    {
        return $this->setFieldValue('backdrops', $value);
    }
}
