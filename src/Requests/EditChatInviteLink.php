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
 * Use this method to edit a non-primary invite link created by the bot. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns the edited invite link as a [ChatInviteLink](#chatinvitelink) object.
 * @property int|string $chatId
 * Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
 * @property string $inviteLink
 * The invite link to edit
 * @property string $name
 * Invite link name; 0-32 characters
 * @property int $expireDate
 * Point in time (Unix timestamp) when the link will expire
 * @property int $memberLimit
 * The maximum number of users that can be members of the chat simultaneously after joining the chat via this invite link; 1-99999
 * @property bool $createsJoinRequest
 * *True*, if users joining the chat via the link need to be approved by chat administrators. If *True*, *member\_limit* can't be specified
 * @method Types\ChatInviteLink send(Api $gateway = null)
 */
class EditChatInviteLink extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'chat_id' => [
                'type' => ['int', 'string'],
                'required' => true,
            ],
            'invite_link' => [
                'type' => ['string'],
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
                'type' => Types\ChatInviteLink::class,
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
    * @return string
    */

    public function getInviteLink(): mixed
    {
        return $this->getFieldValue('invite_link');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setInviteLink(mixed $value): static
    {
        return $this->setFieldValue('invite_link', $value);
    }

    /**
    * @return string
    */

    public function getName(): mixed
    {
        return $this->getFieldValue('name');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setName(mixed $value): static
    {
        return $this->setFieldValue('name', $value);
    }

    /**
    * @return int
    */

    public function getExpireDate(): mixed
    {
        return $this->getFieldValue('expire_date');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setExpireDate(mixed $value): static
    {
        return $this->setFieldValue('expire_date', $value);
    }

    /**
    * @return int
    */

    public function getMemberLimit(): mixed
    {
        return $this->getFieldValue('member_limit');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setMemberLimit(mixed $value): static
    {
        return $this->setFieldValue('member_limit', $value);
    }

    /**
    * @return bool
    */

    public function getCreatesJoinRequest(): mixed
    {
        return $this->getFieldValue('creates_join_request');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setCreatesJoinRequest(mixed $value): static
    {
        return $this->setFieldValue('creates_join_request', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'EditChatInviteLink';
    }
}