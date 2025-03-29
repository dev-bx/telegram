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
 * Use this method to edit a subscription invite link created by the bot. The bot must have the *can\_invite\_users* administrator rights. Returns the edited invite link as a [ChatInviteLink](#chatinvitelink) object.
 * @property int|string $chatId
 * Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
 * @property string $inviteLink
 * The invite link to edit
 * @property string $name
 * Invite link name; 0-32 characters
 * @method Types\ChatInviteLink send(Api $gateway = null)
 */
class EditChatSubscriptionInviteLink extends Base\Request
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

    protected function getRequestMethod(): string
    {
        return 'EditChatSubscriptionInviteLink';
    }
}