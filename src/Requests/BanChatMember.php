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

/**
 * Use this method to ban a user in a group, a supergroup or a channel. In the case of supergroups and channels, the user will not be able to return to the chat on their own using invite links, etc., unless [unbanned](#unbanchatmember) first. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns *True* on success.
 * @property int|string $chatId
 * Unique identifier for the target group or username of the target supergroup or channel (in the format `@channelusername`)
 * @property int $userId
 * Unique identifier of the target user
 * @property int $untilDate
 * Date when the user will be unbanned; Unix time. If user is banned for more than 366 days or less than 30 seconds from the current time they are considered to be banned forever. Applied for supergroups and channels only.
 * @property bool $revokeMessages
 * Pass *True* to delete all messages from the chat for the user that is being removed. If *False*, the user will be able to see messages in the group that were sent before the user was removed. Always *True* for supergroups and channels.
 * @method Base\BaseType send(Api $gateway = null)
 */
class BanChatMember extends Base\Request
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
            'until_date' => [
                'type' => ['int'],
            ],
            'revoke_messages' => [
                'type' => ['bool'],
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

    /**
    * @return bool
    */

    public function getRevokeMessages(): mixed
    {
        return $this->getFieldValue('revoke_messages');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setRevokeMessages(mixed $value): static
    {
        return $this->setFieldValue('revoke_messages', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'BanChatMember';
    }
}