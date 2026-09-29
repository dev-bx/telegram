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
 * This object represents changes in the status of a chat member.
 *
 * @link https://core.telegram.org/bots/api#chatmemberupdated
 *
 * @property-read Chat|null $chat Required. Chat the user belongs to
 * @property-write Chat|array<string, mixed> $chat
 * @property-read User|null $from Required. Performer of the action, which resulted in the change
 * @property-write User|array<string, mixed> $from
 * @property-read int|null $date Required. Date the change was done in Unix time
 * @property-write int $date
 * @property-read ChatMember|null $oldChatMember Required. Previous information about the chat member
 * @property-write ChatMember|array<string, mixed> $oldChatMember
 * @property-read ChatMember|null $newChatMember Required. New information about the chat member
 * @property-write ChatMember|array<string, mixed> $newChatMember
 * @property-read ChatInviteLink|null $inviteLink Optional. Chat invite link, which was used by the user to join the chat; for joining by invite link events only
 * @property-write ChatInviteLink|array<string, mixed> $inviteLink
 * @property-read bool|null $viaJoinRequest Optional. *True*, if the user joined the chat after sending a direct join request without using an invite link and being approved by an administrator
 * @property-write bool $viaJoinRequest
 * @property-read bool|null $viaChatFolderInviteLink Optional. *True*, if the user joined the chat via a chat folder invite link
 * @property-write bool $viaChatFolderInviteLink
 */
class ChatMemberUpdated extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'chat' => [
                'type' => [Chat::class],
                'required' => true,
            ],
            'from' => [
                'type' => [User::class],
                'required' => true,
            ],
            'date' => [
                'type' => ['int'],
                'required' => true,
            ],
            'old_chat_member' => [
                'type' => [ChatMember::class],
                'required' => true,
            ],
            'new_chat_member' => [
                'type' => [ChatMember::class],
                'required' => true,
            ],
            'invite_link' => [
                'type' => [ChatInviteLink::class],
            ],
            'via_join_request' => [
                'type' => ['bool'],
            ],
            'via_chat_folder_invite_link' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Required. Chat the user belongs to
     *
     * @return Chat|null
     * @throws Base\TelegramException
     */
    public function getChat(): mixed
    {
        return $this->getFieldValue('chat');
    }

    /**
     * @param Chat|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setChat(mixed $value): static
    {
        return $this->setFieldValue('chat', $value);
    }

    /**
     * Required. Performer of the action, which resulted in the change
     *
     * @return User|null
     * @throws Base\TelegramException
     */
    public function getFrom(): mixed
    {
        return $this->getFieldValue('from');
    }

    /**
     * @param User|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setFrom(mixed $value): static
    {
        return $this->setFieldValue('from', $value);
    }

    /**
     * Required. Date the change was done in Unix time
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getDate(): mixed
    {
        return $this->getFieldValue('date');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setDate(mixed $value): static
    {
        return $this->setFieldValue('date', $value);
    }

    /**
     * Required. Previous information about the chat member
     *
     * @return ChatMember|null
     * @throws Base\TelegramException
     */
    public function getOldChatMember(): mixed
    {
        return $this->getFieldValue('old_chat_member');
    }

    /**
     * @param ChatMember|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setOldChatMember(mixed $value): static
    {
        return $this->setFieldValue('old_chat_member', $value);
    }

    /**
     * Required. New information about the chat member
     *
     * @return ChatMember|null
     * @throws Base\TelegramException
     */
    public function getNewChatMember(): mixed
    {
        return $this->getFieldValue('new_chat_member');
    }

    /**
     * @param ChatMember|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setNewChatMember(mixed $value): static
    {
        return $this->setFieldValue('new_chat_member', $value);
    }

    /**
     * Optional. Chat invite link, which was used by the user to join the chat; for joining by invite link events only
     *
     * @return ChatInviteLink|null
     * @throws Base\TelegramException
     */
    public function getInviteLink(): mixed
    {
        return $this->getFieldValue('invite_link');
    }

    /**
     * @param ChatInviteLink|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setInviteLink(mixed $value): static
    {
        return $this->setFieldValue('invite_link', $value);
    }

    /**
     * Optional. *True*, if the user joined the chat after sending a direct join request without using an invite link and being approved by an administrator
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getViaJoinRequest(): mixed
    {
        return $this->getFieldValue('via_join_request');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setViaJoinRequest(mixed $value): static
    {
        return $this->setFieldValue('via_join_request', $value);
    }

    /**
     * Optional. *True*, if the user joined the chat via a chat folder invite link
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getViaChatFolderInviteLink(): mixed
    {
        return $this->getFieldValue('via_chat_folder_invite_link');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setViaChatFolderInviteLink(mixed $value): static
    {
        return $this->setFieldValue('via_chat_folder_invite_link', $value);
    }
}
