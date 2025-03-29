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
 * Use this method to revoke an invite link created by the bot. If the primary link is revoked, a new link is automatically generated. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns the revoked invite link as [ChatInviteLink](#chatinvitelink) object.
 * @property int|string $chatId
 * Unique identifier of the target chat or username of the target channel (in the format `@channelusername`)
 * @property string $inviteLink
 * The invite link to revoke
 * @method Types\ChatInviteLink send(Api $gateway = null)
 */
class RevokeChatInviteLink extends Base\Request
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

    protected function getRequestMethod(): string
    {
        return 'RevokeChatInviteLink';
    }
}