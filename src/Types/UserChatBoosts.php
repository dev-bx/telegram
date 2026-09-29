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
 * This object represents a list of boosts added to a chat by a user.
 *
 * @link https://core.telegram.org/bots/api#userchatboosts
 *
 * @property-read Base\ArrayObject<ChatBoost> $boosts Required. The list of boosts added to the chat by the user
 * @property-write list<ChatBoost|array<string, mixed>>|Base\ArrayObject<ChatBoost> $boosts
 */
class UserChatBoosts extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'boosts' => [
                'type' => [ChatBoost::class],
                'isArray' => true,
                'required' => true,
            ],
        ];
    }

    /**
     * Required. The list of boosts added to the chat by the user
     *
     * @return Base\ArrayObject<ChatBoost>
     * @throws Base\TelegramException
     */
    public function getBoosts(): mixed
    {
        return $this->getFieldValue('boosts');
    }

    /**
     * @param list<ChatBoost|array<string, mixed>>|Base\ArrayObject<ChatBoost> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setBoosts(mixed $value): static
    {
        return $this->setFieldValue('boosts', $value);
    }
}
