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

namespace DevBX\Telegram\Types;

use DevBX\Telegram\Base;


/**
 * Represents an invite link for a chat.
 * @property string $inviteLink
 * The invite link. If the link was created by another chat administrator, then the second part of the link will be replaced with “…”.
 * @property User $creator
 * Creator of the link
 * @property bool $createsJoinRequest
 * *True*, if users joining the chat via the link need to be approved by chat administrators
 * @property bool $isPrimary
 * *True*, if the link is primary
 * @property bool $isRevoked
 * *True*, if the link is revoked
 * @property string $name
 * *Optional*. Invite link name
 * @property int $expireDate
 * *Optional*. Point in time (Unix timestamp) when the link will expire or has been expired
 * @property int $memberLimit
 * *Optional*. The maximum number of users that can be members of the chat simultaneously after joining the chat via this invite link; 1-99999
 * @property int $pendingJoinRequestCount
 * *Optional*. Number of pending join requests created using this link
 * @property int $subscriptionPeriod
 * *Optional*. The number of seconds the subscription will be active for before the next payment
 * @property int $subscriptionPrice
 * *Optional*. The amount of Telegram Stars a user must pay initially and after each subsequent subscription period to be a member of the chat using the link
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
	* @return User
	*/

	public function getCreator(): mixed
	{
		return $this->getFieldValue('creator');
	}

	/**
	* @param User $value
	* @return static
	*/

	public function setCreator(mixed $value): static
	{
		return $this->setFieldValue('creator', $value);
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

	/**
	* @return bool
	*/

	public function getIsPrimary(): mixed
	{
		return $this->getFieldValue('is_primary');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setIsPrimary(mixed $value): static
	{
		return $this->setFieldValue('is_primary', $value);
	}

	/**
	* @return bool
	*/

	public function getIsRevoked(): mixed
	{
		return $this->getFieldValue('is_revoked');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setIsRevoked(mixed $value): static
	{
		return $this->setFieldValue('is_revoked', $value);
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
	* @return int
	*/

	public function getPendingJoinRequestCount(): mixed
	{
		return $this->getFieldValue('pending_join_request_count');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setPendingJoinRequestCount(mixed $value): static
	{
		return $this->setFieldValue('pending_join_request_count', $value);
	}

	/**
	* @return int
	*/

	public function getSubscriptionPeriod(): mixed
	{
		return $this->getFieldValue('subscription_period');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setSubscriptionPeriod(mixed $value): static
	{
		return $this->setFieldValue('subscription_period', $value);
	}

	/**
	* @return int
	*/

	public function getSubscriptionPrice(): mixed
	{
		return $this->getFieldValue('subscription_price');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setSubscriptionPrice(mixed $value): static
	{
		return $this->setFieldValue('subscription_price', $value);
	}

}