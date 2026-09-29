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
 * Describes a service message about the chat owner leaving the chat.
 *
 * @link https://core.telegram.org/bots/api#chatownerleft
 *
 * @property-read User|null $newOwner Optional. The user who will become the new owner of the chat if the previous owner does not return to the chat
 * @property-write User|array<string, mixed> $newOwner
 */
class ChatOwnerLeft extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'new_owner' => [
                'type' => [User::class],
            ],
        ];
    }

    /**
     * Optional. The user who will become the new owner of the chat if the previous owner does not return to the chat
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
