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
 * This object represents a service message about new members invited to a video chat.
 *
 * @link https://core.telegram.org/bots/api#videochatparticipantsinvited
 *
 * @property-read Base\ArrayObject<User> $users Required. New members that were invited to the video chat
 * @property-write list<User|array<string, mixed>>|Base\ArrayObject<User> $users
 */
class VideoChatParticipantsInvited extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'users' => [
                'type' => [User::class],
                'isArray' => true,
                'required' => true,
            ],
        ];
    }

    /**
     * Required. New members that were invited to the video chat
     *
     * @return Base\ArrayObject<User>
     * @throws Base\TelegramException
     */
    public function getUsers(): mixed
    {
        return $this->getFieldValue('users');
    }

    /**
     * @param list<User|array<string, mixed>>|Base\ArrayObject<User> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setUsers(mixed $value): static
    {
        return $this->setFieldValue('users', $value);
    }
}
