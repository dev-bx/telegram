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
 * Use this method to create a [subscription invite link](https://telegram.org/blog/superchannels-star-reactions-subscriptions#star-subscriptions) for a channel chat. The bot must have the *can_invite_users* administrator rights. The link can be edited using the method `editChatSubscriptionInviteLink` or revoked using the method `revokeChatInviteLink`. Returns the new invite link as a `ChatInviteLink` object.
 *
 * @link https://core.telegram.org/bots/api#createchatsubscriptioninvitelink
 *
 * @property-read int|string|null $chatId Required. Unique identifier for the target channel chat or username of the target channel in the format `@username`
 * @property-write int|string $chatId
 * @property-read string|null $name Optional. Invite link name; 0-32 characters
 * @property-write string $name
 * @property-read int|null $subscriptionPeriod Required. The number of seconds the subscription will be active for before the next payment. Currently, it must always be 2592000 (30 days).
 * @property-write int $subscriptionPeriod
 * @property-read int|null $subscriptionPrice Required. The amount of Telegram Stars a user must pay initially and after each subsequent subscription period to be a member of the chat; 1-10000
 * @property-write int $subscriptionPrice
 *
 * @method Types\ChatInviteLink send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
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
                'type' => [Types\ChatInviteLink::class],
            ],
        ];
    }

    /**
     * Required. Unique identifier for the target channel chat or username of the target channel in the format `@username`
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
     * Required. The number of seconds the subscription will be active for before the next payment. Currently, it must always be 2592000 (30 days).
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
     * Required. The amount of Telegram Stars a user must pay initially and after each subsequent subscription period to be a member of the chat; 1-10000
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

    protected function getRequestMethod(): string
    {
        return 'createChatSubscriptionInviteLink';
    }
}
