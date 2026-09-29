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
use DevBX\Telegram\Types;

/**
 * Use this method to create an additional invite link for a chat. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. The link can be revoked using the method `revokeChatInviteLink`. Returns the new invite link as `ChatInviteLink` object.
 *
 * @link https://core.telegram.org/bots/api#createchatinvitelink
 *
 * @property-read int|string|null $chatId Required. Unique identifier for the target chat or username of the target channel in the format `@username`
 * @property-write int|string $chatId
 * @property-read string|null $name Optional. Invite link name; 0-32 characters
 * @property-write string $name
 * @property-read int|null $expireDate Optional. Point in time (Unix timestamp) when the link will expire
 * @property-write int $expireDate
 * @property-read int|null $memberLimit Optional. The maximum number of users that can be members of the chat simultaneously after joining the chat via this invite link; 1-99999
 * @property-write int $memberLimit
 * @property-read bool|null $createsJoinRequest Optional. *True*, if users joining the chat via the link need to be approved by chat administrators. If *True*, *member_limit* can't be specified.
 * @property-write bool $createsJoinRequest
 *
 * @method Types\ChatInviteLink send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class CreateChatInviteLink extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'chat_id' => [
                'type' => ['int', 'string'],
                'required' => true,
            ],
            'name' => [
                'type' => ['string'],
            ],
            'expire_date' => [
                'type' => ['int'],
            ],
            'member_limit' => [
                'type' => ['int'],
            ],
            'creates_join_request' => [
                'type' => ['bool'],
            ],
            '@return' => [
                'type' => [Types\ChatInviteLink::class],
            ],
        ];
    }

    /**
     * Required. Unique identifier for the target chat or username of the target channel in the format `@username`
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
     * Optional. Invite link name; 0-32 characters
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getName(): mixed
    {
        return $this->getFieldValue('name');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setName(mixed $value): static
    {
        return $this->setFieldValue('name', $value);
    }

    /**
     * Optional. Point in time (Unix timestamp) when the link will expire
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getExpireDate(): mixed
    {
        return $this->getFieldValue('expire_date');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setExpireDate(mixed $value): static
    {
        return $this->setFieldValue('expire_date', $value);
    }

    /**
     * Optional. The maximum number of users that can be members of the chat simultaneously after joining the chat via this invite link; 1-99999
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getMemberLimit(): mixed
    {
        return $this->getFieldValue('member_limit');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setMemberLimit(mixed $value): static
    {
        return $this->setFieldValue('member_limit', $value);
    }

    /**
     * Optional. *True*, if users joining the chat via the link need to be approved by chat administrators. If *True*, *member_limit* can't be specified.
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getCreatesJoinRequest(): mixed
    {
        return $this->getFieldValue('creates_join_request');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCreatesJoinRequest(mixed $value): static
    {
        return $this->setFieldValue('creates_join_request', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'createChatInviteLink';
    }
}
