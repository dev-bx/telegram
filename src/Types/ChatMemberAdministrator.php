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
 * Represents a `ChatMember` that has some additional privileges.
 *
 * @link https://core.telegram.org/bots/api#chatmemberadministrator
 *
 * @property-read string|null $status Required. The member's status in the chat, always “administrator”
 * @property-write string $status
 * @property-read User|null $user Required. Information about the user
 * @property-write User|array<string, mixed> $user
 * @property-read bool|null $canBeEdited Required. *True*, if the bot is allowed to edit administrator privileges of that user
 * @property-write bool $canBeEdited
 * @property-read bool|null $isAnonymous Required. *True*, if the user's presence in the chat is hidden
 * @property-write bool $isAnonymous
 * @property-read bool|null $canManageChat Required. *True*, if the administrator can access the chat event log, get boost list, see hidden supergroup and channel members, report spam messages, ignore slow mode, and send messages to the chat without paying Telegram Stars. Implied by any other administrator privilege.
 * @property-write bool $canManageChat
 * @property-read bool|null $canDeleteMessages Required. *True*, if the administrator can delete messages of other users
 * @property-write bool $canDeleteMessages
 * @property-read bool|null $canManageVideoChats Required. *True*, if the administrator can manage video chats
 * @property-write bool $canManageVideoChats
 * @property-read bool|null $canRestrictMembers Required. *True*, if the administrator can restrict, ban or unban chat members, or access supergroup statistics
 * @property-write bool $canRestrictMembers
 * @property-read bool|null $canPromoteMembers Required. *True*, if the administrator can add new administrators with a subset of their own privileges or demote administrators that they have promoted, directly or indirectly (promoted by administrators that were appointed by the user)
 * @property-write bool $canPromoteMembers
 * @property-read bool|null $canChangeInfo Required. *True*, if the user is allowed to change the chat title, photo and other settings
 * @property-write bool $canChangeInfo
 * @property-read bool|null $canInviteUsers Required. *True*, if the user is allowed to invite new users to the chat
 * @property-write bool $canInviteUsers
 * @property-read bool|null $canPostStories Required. *True*, if the administrator can post stories to the chat
 * @property-write bool $canPostStories
 * @property-read bool|null $canEditStories Required. *True*, if the administrator can edit stories posted by other users, post stories to the chat page, pin chat stories, and access the chat's story archive
 * @property-write bool $canEditStories
 * @property-read bool|null $canDeleteStories Required. *True*, if the administrator can delete stories posted by other users
 * @property-write bool $canDeleteStories
 * @property-read bool|null $canPostMessages Optional. *True*, if the administrator can post messages in the channel, approve suggested posts, or access channel statistics; for channels only
 * @property-write bool $canPostMessages
 * @property-read bool|null $canEditMessages Optional. *True*, if the administrator can edit messages of other users and can pin messages; for channels only
 * @property-write bool $canEditMessages
 * @property-read bool|null $canPinMessages Optional. *True*, if the user is allowed to pin messages; for groups and supergroups only
 * @property-write bool $canPinMessages
 * @property-read bool|null $canManageTopics Optional. *True*, if the user is allowed to create, rename, close, and reopen forum topics; for supergroups only
 * @property-write bool $canManageTopics
 * @property-read bool|null $canManageDirectMessages Optional. *True*, if the administrator can manage direct messages of the channel and decline suggested posts; for channels only
 * @property-write bool $canManageDirectMessages
 * @property-read bool|null $canManageTags Optional. *True*, if the administrator can edit the tags of regular members; for groups and supergroups only
 * @property-write bool $canManageTags
 * @property-read bool|null $canSendWelcomeMessages Required. *True*, if the administrator can manage chat welcome messages or directly send them in the case of bots
 * @property-write bool $canSendWelcomeMessages
 * @property-read string|null $customTitle Optional. Custom title for this user
 * @property-write string $customTitle
 */
class ChatMemberAdministrator extends ChatMember
{
    /**
     * @return static
     * @throws Base\TelegramException
     */
    public static function create(mixed $value = null, bool $ignoreUnknownFields = false): ?Base\BaseType
    {
        return static::createInstance($value, $ignoreUnknownFields);
    }

    public static function getFields(): array
    {
        return [
            'status' => [
                'type' => ['string'],
                'value' => 'administrator',
                'required' => true,
            ],
            'user' => [
                'type' => [User::class],
                'required' => true,
            ],
            'can_be_edited' => [
                'type' => ['bool'],
                'required' => true,
            ],
            'is_anonymous' => [
                'type' => ['bool'],
                'required' => true,
            ],
            'can_manage_chat' => [
                'type' => ['bool'],
                'required' => true,
            ],
            'can_delete_messages' => [
                'type' => ['bool'],
                'required' => true,
            ],
            'can_manage_video_chats' => [
                'type' => ['bool'],
                'required' => true,
            ],
            'can_restrict_members' => [
                'type' => ['bool'],
                'required' => true,
            ],
            'can_promote_members' => [
                'type' => ['bool'],
                'required' => true,
            ],
            'can_change_info' => [
                'type' => ['bool'],
                'required' => true,
            ],
            'can_invite_users' => [
                'type' => ['bool'],
                'required' => true,
            ],
            'can_post_stories' => [
                'type' => ['bool'],
                'required' => true,
            ],
            'can_edit_stories' => [
                'type' => ['bool'],
                'required' => true,
            ],
            'can_delete_stories' => [
                'type' => ['bool'],
                'required' => true,
            ],
            'can_post_messages' => [
                'type' => ['bool'],
            ],
            'can_edit_messages' => [
                'type' => ['bool'],
            ],
            'can_pin_messages' => [
                'type' => ['bool'],
            ],
            'can_manage_topics' => [
                'type' => ['bool'],
            ],
            'can_manage_direct_messages' => [
                'type' => ['bool'],
            ],
            'can_manage_tags' => [
                'type' => ['bool'],
            ],
            'can_send_welcome_messages' => [
                'type' => ['bool'],
                'required' => true,
            ],
            'custom_title' => [
                'type' => ['string'],
            ],
        ];
    }

    /**
     * Required. The member's status in the chat, always “administrator”
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getStatus(): mixed
    {
        return $this->getFieldValue('status');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setStatus(mixed $value): static
    {
        return $this->setFieldValue('status', $value);
    }

    /**
     * Required. Information about the user
     *
     * @return User|null
     * @throws Base\TelegramException
     */
    public function getUser(): mixed
    {
        return $this->getFieldValue('user');
    }

    /**
     * @param User|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setUser(mixed $value): static
    {
        return $this->setFieldValue('user', $value);
    }

    /**
     * Required. *True*, if the bot is allowed to edit administrator privileges of that user
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getCanBeEdited(): mixed
    {
        return $this->getFieldValue('can_be_edited');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCanBeEdited(mixed $value): static
    {
        return $this->setFieldValue('can_be_edited', $value);
    }

    /**
     * Required. *True*, if the user's presence in the chat is hidden
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsAnonymous(): mixed
    {
        return $this->getFieldValue('is_anonymous');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsAnonymous(mixed $value): static
    {
        return $this->setFieldValue('is_anonymous', $value);
    }

    /**
     * Required. *True*, if the administrator can access the chat event log, get boost list, see hidden supergroup and channel members, report spam messages, ignore slow mode, and send messages to the chat without paying Telegram Stars. Implied by any other administrator privilege.
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getCanManageChat(): mixed
    {
        return $this->getFieldValue('can_manage_chat');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCanManageChat(mixed $value): static
    {
        return $this->setFieldValue('can_manage_chat', $value);
    }

    /**
     * Required. *True*, if the administrator can delete messages of other users
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getCanDeleteMessages(): mixed
    {
        return $this->getFieldValue('can_delete_messages');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCanDeleteMessages(mixed $value): static
    {
        return $this->setFieldValue('can_delete_messages', $value);
    }

    /**
     * Required. *True*, if the administrator can manage video chats
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getCanManageVideoChats(): mixed
    {
        return $this->getFieldValue('can_manage_video_chats');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCanManageVideoChats(mixed $value): static
    {
        return $this->setFieldValue('can_manage_video_chats', $value);
    }

    /**
     * Required. *True*, if the administrator can restrict, ban or unban chat members, or access supergroup statistics
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getCanRestrictMembers(): mixed
    {
        return $this->getFieldValue('can_restrict_members');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCanRestrictMembers(mixed $value): static
    {
        return $this->setFieldValue('can_restrict_members', $value);
    }

    /**
     * Required. *True*, if the administrator can add new administrators with a subset of their own privileges or demote administrators that they have promoted, directly or indirectly (promoted by administrators that were appointed by the user)
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getCanPromoteMembers(): mixed
    {
        return $this->getFieldValue('can_promote_members');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCanPromoteMembers(mixed $value): static
    {
        return $this->setFieldValue('can_promote_members', $value);
    }

    /**
     * Required. *True*, if the user is allowed to change the chat title, photo and other settings
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getCanChangeInfo(): mixed
    {
        return $this->getFieldValue('can_change_info');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCanChangeInfo(mixed $value): static
    {
        return $this->setFieldValue('can_change_info', $value);
    }

    /**
     * Required. *True*, if the user is allowed to invite new users to the chat
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getCanInviteUsers(): mixed
    {
        return $this->getFieldValue('can_invite_users');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCanInviteUsers(mixed $value): static
    {
        return $this->setFieldValue('can_invite_users', $value);
    }

    /**
     * Required. *True*, if the administrator can post stories to the chat
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getCanPostStories(): mixed
    {
        return $this->getFieldValue('can_post_stories');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCanPostStories(mixed $value): static
    {
        return $this->setFieldValue('can_post_stories', $value);
    }

    /**
     * Required. *True*, if the administrator can edit stories posted by other users, post stories to the chat page, pin chat stories, and access the chat's story archive
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getCanEditStories(): mixed
    {
        return $this->getFieldValue('can_edit_stories');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCanEditStories(mixed $value): static
    {
        return $this->setFieldValue('can_edit_stories', $value);
    }

    /**
     * Required. *True*, if the administrator can delete stories posted by other users
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getCanDeleteStories(): mixed
    {
        return $this->getFieldValue('can_delete_stories');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCanDeleteStories(mixed $value): static
    {
        return $this->setFieldValue('can_delete_stories', $value);
    }

    /**
     * Optional. *True*, if the administrator can post messages in the channel, approve suggested posts, or access channel statistics; for channels only
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getCanPostMessages(): mixed
    {
        return $this->getFieldValue('can_post_messages');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCanPostMessages(mixed $value): static
    {
        return $this->setFieldValue('can_post_messages', $value);
    }

    /**
     * Optional. *True*, if the administrator can edit messages of other users and can pin messages; for channels only
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getCanEditMessages(): mixed
    {
        return $this->getFieldValue('can_edit_messages');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCanEditMessages(mixed $value): static
    {
        return $this->setFieldValue('can_edit_messages', $value);
    }

    /**
     * Optional. *True*, if the user is allowed to pin messages; for groups and supergroups only
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getCanPinMessages(): mixed
    {
        return $this->getFieldValue('can_pin_messages');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCanPinMessages(mixed $value): static
    {
        return $this->setFieldValue('can_pin_messages', $value);
    }

    /**
     * Optional. *True*, if the user is allowed to create, rename, close, and reopen forum topics; for supergroups only
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getCanManageTopics(): mixed
    {
        return $this->getFieldValue('can_manage_topics');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCanManageTopics(mixed $value): static
    {
        return $this->setFieldValue('can_manage_topics', $value);
    }

    /**
     * Optional. *True*, if the administrator can manage direct messages of the channel and decline suggested posts; for channels only
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getCanManageDirectMessages(): mixed
    {
        return $this->getFieldValue('can_manage_direct_messages');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCanManageDirectMessages(mixed $value): static
    {
        return $this->setFieldValue('can_manage_direct_messages', $value);
    }

    /**
     * Optional. *True*, if the administrator can edit the tags of regular members; for groups and supergroups only
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getCanManageTags(): mixed
    {
        return $this->getFieldValue('can_manage_tags');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCanManageTags(mixed $value): static
    {
        return $this->setFieldValue('can_manage_tags', $value);
    }

    /**
     * Required. *True*, if the administrator can manage chat welcome messages or directly send them in the case of bots
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getCanSendWelcomeMessages(): mixed
    {
        return $this->getFieldValue('can_send_welcome_messages');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCanSendWelcomeMessages(mixed $value): static
    {
        return $this->setFieldValue('can_send_welcome_messages', $value);
    }

    /**
     * Optional. Custom title for this user
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getCustomTitle(): mixed
    {
        return $this->getFieldValue('custom_title');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCustomTitle(mixed $value): static
    {
        return $this->setFieldValue('custom_title', $value);
    }
}
