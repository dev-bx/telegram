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
 * This object contains information about the users whose identifiers were shared with the bot using a `KeyboardButtonRequestUsers` button.
 *
 * @link https://core.telegram.org/bots/api#usersshared
 *
 * @property-read int|null $requestId Required. Identifier of the request
 * @property-write int $requestId
 * @property-read Base\ArrayObject<SharedUser> $users Required. Information about users shared with the bot
 * @property-write list<SharedUser|array<string, mixed>>|Base\ArrayObject<SharedUser> $users
 */
class UsersShared extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'request_id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'users' => [
                'type' => [SharedUser::class],
                'isArray' => true,
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Identifier of the request
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getRequestId(): mixed
    {
        return $this->getFieldValue('request_id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setRequestId(mixed $value): static
    {
        return $this->setFieldValue('request_id', $value);
    }

    /**
     * Required. Information about users shared with the bot
     *
     * @return Base\ArrayObject<SharedUser>
     * @throws Base\TelegramException
     */
    public function getUsers(): mixed
    {
        return $this->getFieldValue('users');
    }

    /**
     * @param list<SharedUser|array<string, mixed>>|Base\ArrayObject<SharedUser> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setUsers(mixed $value): static
    {
        return $this->setFieldValue('users', $value);
    }
}
