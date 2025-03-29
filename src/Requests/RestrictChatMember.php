<?php

/**
 * @project Telegram Bot Api
 * @author Kubeev Ruslan <ruslan@dev-bx.ru>
 * @copyright 2025 Kubeev Ruslan
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
 * Use this method to restrict a user in a supergroup. The bot must be an administrator in the supergroup for this to work and must have the appropriate administrator rights. Pass *True* for all permissions to lift restrictions from a user. Returns *True* on success.
 * @property int|string $chatId
 * Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
 * @property int $userId
 * Unique identifier of the target user
 * @property Types\ChatPermissions $permissions
 * A JSON-serialized object for new user permissions
 * @property bool $useIndependentChatPermissions
 * Pass *True* if chat permissions are set independently. Otherwise, the *can\_send\_other\_messages* and *can\_add\_web\_page\_previews* permissions will imply the *can\_send\_messages*, *can\_send\_audios*, *can\_send\_documents*, *can\_send\_photos*, *can\_send\_videos*, *can\_send\_video\_notes*, and *can\_send\_voice\_notes* permissions; the *can\_send\_polls* permission will imply the *can\_send\_messages* permission.
 * @property int $untilDate
 * Date when restrictions will be lifted for the user; Unix time. If user is restricted for more than 366 days or less than 30 seconds from the current time, they are considered to be restricted forever
 * @method Base\BaseType send(Api $gateway = null)
 */
class RestrictChatMember extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'chat_id' => [
                'type' => ['int', 'string'],
                'required' => true,
            ],
            'user_id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'permissions' => [
                'type' => [Types\ChatPermissions::class],
                'required' => true,
            ],
            'use_independent_chat_permissions' => [
                'type' => ['bool'],
            ],
            'until_date' => [
                'type' => ['int'],
            ],
        ];
    }

    /**
    * @return int|string
    */

    public function getChatId(): mixed
    {
        return $this->getFieldValue('chat_id');
    }

    /**
    * @param int|string $value
    * @return static
    */

    public function setChatId(mixed $value): static
    {
        return $this->setFieldValue('chat_id', $value);
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
    * @return Types\ChatPermissions
    */

    public function getPermissions(): mixed
    {
        return $this->getFieldValue('permissions');
    }

    /**
    * @param Types\ChatPermissions $value
    * @return static
    */

    public function setPermissions(mixed $value): static
    {
        return $this->setFieldValue('permissions', $value);
    }

    /**
    * @return bool
    */

    public function getUseIndependentChatPermissions(): mixed
    {
        return $this->getFieldValue('use_independent_chat_permissions');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setUseIndependentChatPermissions(mixed $value): static
    {
        return $this->setFieldValue('use_independent_chat_permissions', $value);
    }

    /**
    * @return int
    */

    public function getUntilDate(): mixed
    {
        return $this->getFieldValue('until_date');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setUntilDate(mixed $value): static
    {
        return $this->setFieldValue('until_date', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'RestrictChatMember';
    }
}