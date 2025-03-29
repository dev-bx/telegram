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
 * Use this method to create a [subscription invite link](https://telegram.org/blog/superchannels-star-reactions-subscriptions#star-subscriptions) for a channel chat. The bot must have the *can\_invite\_users* administrator rights. The link can be edited using the method [editChatSubscriptionInviteLink](#editchatsubscriptioninvitelink) or revoked using the method [revokeChatInviteLink](#revokechatinvitelink). Returns the new invite link as a [ChatInviteLink](#chatinvitelink) object.
 * @property int|string $chatId
 * Unique identifier for the target channel chat or username of the target channel (in the format `@channelusername`)
 * @property string $name
 * Invite link name; 0-32 characters
 * @property int $subscriptionPeriod
 * The number of seconds the subscription will be active for before the next payment. Currently, it must always be 2592000 (30 days).
 * @property int $subscriptionPrice
 * The amount of Telegram Stars a user must pay initially and after each subsequent subscription period to be a member of the chat; 1-2500
 * @method Types\ChatInviteLink send(Api $gateway = null)
 */
class CreateChatSubscriptionInviteLink extends Base\Request
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
            'subscription_period' => [
                'type' => ['int'],
                'required' => true,
            ],
            'subscription_price' => [
                'type' => ['int'],
                'required' => true,
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

    protected function getRequestMethod(): string
    {
        return 'CreateChatSubscriptionInviteLink';
    }
}