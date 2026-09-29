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
 * Describes a service message about an ownership change in the chat.
 *
 * @link https://core.telegram.org/bots/api#chatownerchanged
 *
 * @property-read User|null $newOwner Required. The new owner of the chat
 * @property-write User|array<string, mixed> $newOwner
 */
class ChatOwnerChanged extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'new_owner' => [
                'type' => [User::class],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. The new owner of the chat
     *
     * @return User|null
     * @throws Base\TelegramException
     */
    public function getNewOwner(): mixed
    {
        return $this->getFieldValue('new_owner');
    }

    /**
     * @param User|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setNewOwner(mixed $value): static
    {
        return $this->setFieldValue('new_owner', $value);
    }
}
