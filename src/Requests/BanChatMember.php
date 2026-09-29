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

namespace DevBX\Telegram\Requests;

use DevBX\Telegram\Base;
use DevBX\Telegram\Api;

/**
 * Use this method to ban a user in a group, a supergroup or a channel. In the case of supergroups and channels, the user will not be able to return to the chat on their own using invite links, etc., unless `unbanChatMember` first. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns *True* on success.
 *
 * @link https://core.telegram.org/bots/api#banchatmember
 *
 * @property-read int|string|null $chatId Required. Unique identifier for the target group or username of the target supergroup or channel in the format `@username`
 * @property-write int|string $chatId
 * @property-read int|null $userId Required. Unique identifier of the target user
 * @property-write int $userId
 * @property-read int|null $untilDate Optional. Date when the user will be unbanned; Unix time. If user is banned for more than 366 days or less than 30 seconds from the current time they are considered to be banned forever. Applied for supergroups and channels only.
 * @property-write int $untilDate
 * @property-read bool|null $revokeMessages Optional. Pass *True* to delete all messages from the chat for the user that is being removed. If *False*, the user will be able to see messages in the group that were sent before the user was removed. Always *True* for supergroups and channels.
 * @property-write bool $revokeMessages
 *
 * @method Base\ParameterBool send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
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
            '@return' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Required. Unique identifier for the target group or username of the target supergroup or channel in the format `@username`
     *
     * @return int|string|null
     * @throws Base\TelegramException
     */
    public function getChatId(): mixed
    {
        return $this->getFieldValue('chat_id');
    }

    /**
     * @param int|string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setChatId(mixed $value): static
    {
        return $this->setFieldValue('chat_id', $value);
    }

    /**
     * Required. Unique identifier of the target user
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getUserId(): mixed
    {
        return $this->getFieldValue('user_id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setUserId(mixed $value): static
    {
        return $this->setFieldValue('user_id', $value);
    }

    /**
     * Optional. Date when the user will be unbanned; Unix time. If user is banned for more than 366 days or less than 30 seconds from the current time they are considered to be banned forever. Applied for supergroups and channels only.
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getUntilDate(): mixed
    {
        return $this->getFieldValue('until_date');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setUntilDate(mixed $value): static
    {
        return $this->setFieldValue('until_date', $value);
    }

    /**
     * Optional. Pass *True* to delete all messages from the chat for the user that is being removed. If *False*, the user will be able to see messages in the group that were sent before the user was removed. Always *True* for supergroups and channels.
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getRevokeMessages(): mixed
    {
        return $this->getFieldValue('revoke_messages');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setRevokeMessages(mixed $value): static
    {
        return $this->setFieldValue('revoke_messages', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'banChatMember';
    }
}
