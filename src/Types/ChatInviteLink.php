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
 * Represents an invite link for a chat.
 *
 * @link https://core.telegram.org/bots/api#chatinvitelink
 *
 * @property-read string|null $inviteLink Required. The invite link. If the link was created by another chat administrator, then the second part of the link will be replaced with “…”.
 * @property-write string $inviteLink
 * @property-read User|null $creator Required. Creator of the link
 * @property-write User|array<string, mixed> $creator
 * @property-read bool|null $createsJoinRequest Required. *True*, if users joining the chat via the link need to be approved by chat administrators
 * @property-write bool $createsJoinRequest
 * @property-read bool|null $isPrimary Required. *True*, if the link is primary
 * @property-write bool $isPrimary
 * @property-read bool|null $isRevoked Required. *True*, if the link is revoked
 * @property-write bool $isRevoked
 * @property-read string|null $name Optional. Invite link name
 * @property-write string $name
 * @property-read int|null $expireDate Optional. Point in time (Unix timestamp) when the link will expire or has been expired
 * @property-write int $expireDate
 * @property-read int|null $memberLimit Optional. The maximum number of users that can be members of the chat simultaneously after joining the chat via this invite link; 1-99999
 * @property-write int $memberLimit
 * @property-read int|null $pendingJoinRequestCount Optional. Number of pending join requests created using this link
 * @property-write int $pendingJoinRequestCount
 * @property-read int|null $subscriptionPeriod Optional. The number of seconds the subscription will be active for before the next payment
 * @property-write int $subscriptionPeriod
 * @property-read int|null $subscriptionPrice Optional. The amount of Telegram Stars a user must pay initially and after each subsequent subscription period to be a member of the chat using the link
 * @property-write int $subscriptionPrice
 */
class ChatInviteLink extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'invite_link' => [
                'type' => ['string'],
                'required' => true,
            ],
            'creator' => [
                'type' => [User::class],
                'required' => true,
            ],
            'creates_join_request' => [
                'type' => ['bool'],
                'required' => true,
            ],
            'is_primary' => [
                'type' => ['bool'],
                'required' => true,
            ],
            'is_revoked' => [
                'type' => ['bool'],
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
            'pending_join_request_count' => [
                'type' => ['int'],
            ],
            'subscription_period' => [
                'type' => ['int'],
            ],
            'subscription_price' => [
                'type' => ['int'],
            ],
        ];
    }

    /**
     * Required. The invite link. If the link was created by another chat administrator, then the second part of the link will be replaced with “…”.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getInviteLink(): mixed
    {
        return $this->getFieldValue('invite_link');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setInviteLink(mixed $value): static
    {
        return $this->setFieldValue('invite_link', $value);
    }

    /**
     * Required. Creator of the link
     *
     * @return User|null
     * @throws Base\TelegramException
     */
    public function getCreator(): mixed
    {
        return $this->getFieldValue('creator');
    }

    /**
     * @param User|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCreator(mixed $value): static
    {
        return $this->setFieldValue('creator', $value);
    }

    /**
     * Required. *True*, if users joining the chat via the link need to be approved by chat administrators
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

    /**
     * Required. *True*, if the link is primary
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsPrimary(): mixed
    {
        return $this->getFieldValue('is_primary');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsPrimary(mixed $value): static
    {
        return $this->setFieldValue('is_primary', $value);
    }

    /**
     * Required. *True*, if the link is revoked
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsRevoked(): mixed
    {
        return $this->getFieldValue('is_revoked');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsRevoked(mixed $value): static
    {
        return $this->setFieldValue('is_revoked', $value);
    }

    /**
     * Optional. Invite link name
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
     * Optional. Point in time (Unix timestamp) when the link will expire or has been expired
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
     * Optional. Number of pending join requests created using this link
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getPendingJoinRequestCount(): mixed
    {
        return $this->getFieldValue('pending_join_request_count');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPendingJoinRequestCount(mixed $value): static
    {
        return $this->setFieldValue('pending_join_request_count', $value);
    }

    /**
     * Optional. The number of seconds the subscription will be active for before the next payment
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getSubscriptionPeriod(): mixed
    {
        return $this->getFieldValue('subscription_period');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSubscriptionPeriod(mixed $value): static
    {
        return $this->setFieldValue('subscription_period', $value);
    }

    /**
     * Optional. The amount of Telegram Stars a user must pay initially and after each subsequent subscription period to be a member of the chat using the link
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getSubscriptionPrice(): mixed
    {
        return $this->getFieldValue('subscription_price');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSubscriptionPrice(mixed $value): static
    {
        return $this->setFieldValue('subscription_price', $value);
    }
}
