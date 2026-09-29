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
 * This object describes the access settings of a bot.
 *
 * @link https://core.telegram.org/bots/api#botaccesssettings
 *
 * @property-read bool|null $isAccessRestricted Required. *True*, if only selected users can access the bot. The bot's owner can always access it.
 * @property-write bool $isAccessRestricted
 * @property-read Base\ArrayObject<User> $addedUsers Optional. The list of other users who have access to the bot if the access is restricted
 * @property-write list<User|array<string, mixed>>|Base\ArrayObject<User> $addedUsers
 */
class BotAccessSettings extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'is_access_restricted' => [
                'type' => ['bool'],
                'required' => true,
            ],
            'added_users' => [
                'type' => [User::class],
                'isArray' => true,
            ],
        ];
    }

    /**
     * Required. *True*, if only selected users can access the bot. The bot's owner can always access it.
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsAccessRestricted(): mixed
    {
        return $this->getFieldValue('is_access_restricted');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsAccessRestricted(mixed $value): static
    {
        return $this->setFieldValue('is_access_restricted', $value);
    }

    /**
     * Optional. The list of other users who have access to the bot if the access is restricted
     *
     * @return Base\ArrayObject<User>
     * @throws Base\TelegramException
     */
    public function getAddedUsers(): mixed
    {
        return $this->getFieldValue('added_users');
    }

    /**
     * @param list<User|array<string, mixed>>|Base\ArrayObject<User> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAddedUsers(mixed $value): static
    {
        return $this->setFieldValue('added_users', $value);
    }
}
