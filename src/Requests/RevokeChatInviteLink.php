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
 * Use this method to revoke an invite link created by the bot. If the primary link is revoked, a new link is automatically generated. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns the revoked invite link as `ChatInviteLink` object.
 *
 * @link https://core.telegram.org/bots/api#revokechatinvitelink
 *
 * @property-read int|string|null $chatId Required. Unique identifier of the target chat or username of the target channel in the format `@username`
 * @property-write int|string $chatId
 * @property-read string|null $inviteLink Required. The invite link to revoke
 * @property-write string $inviteLink
 *
 * @method Types\ChatInviteLink send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
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
                'type' => [Types\ChatInviteLink::class],
            ],
        ];
    }

    /**
     * Required. Unique identifier of the target chat or username of the target channel in the format `@username`
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
     * Required. The invite link to revoke
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

    protected function getRequestMethod(): string
    {
        return 'revokeChatInviteLink';
    }
}
