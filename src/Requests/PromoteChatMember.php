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

/**
 * Use this method to promote or demote a user in a supergroup or a channel. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Pass *False* for all boolean parameters to demote a user. Returns *True* on success.
 * @property int|string $chatId
 * Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
 * @property int $userId
 * Unique identifier of the target user
 * @property bool $isAnonymous
 * Pass *True* if the administrator's presence in the chat is hidden
 * @property bool $canManageChat
 * Pass *True* if the administrator can access the chat event log, get boost list, see hidden supergroup and channel members, report spam messages and ignore slow mode. Implied by any other administrator privilege.
 * @property bool $canDeleteMessages
 * Pass *True* if the administrator can delete messages of other users
 * @property bool $canManageVideoChats
 * Pass *True* if the administrator can manage video chats
 * @property bool $canRestrictMembers
 * Pass *True* if the administrator can restrict, ban or unban chat members, or access supergroup statistics
 * @property bool $canPromoteMembers
 * Pass *True* if the administrator can add new administrators with a subset of their own privileges or demote administrators that they have promoted, directly or indirectly (promoted by administrators that were appointed by him)
 * @property bool $canChangeInfo
 * Pass *True* if the administrator can change chat title, photo and other settings
 * @property bool $canInviteUsers
 * Pass *True* if the administrator can invite new users to the chat
 * @property bool $canPostStories
 * Pass *True* if the administrator can post stories to the chat
 * @property bool $canEditStories
 * Pass *True* if the administrator can edit stories posted by other users, post stories to the chat page, pin chat stories, and access the chat's story archive
 * @property bool $canDeleteStories
 * Pass *True* if the administrator can delete stories posted by other users
 * @property bool $canPostMessages
 * Pass *True* if the administrator can post messages in the channel, or access channel statistics; for channels only
 * @property bool $canEditMessages
 * Pass *True* if the administrator can edit messages of other users and can pin messages; for channels only
 * @property bool $canPinMessages
 * Pass *True* if the administrator can pin messages; for supergroups only
 * @property bool $canManageTopics
 * Pass *True* if the user is allowed to create, rename, close, and reopen forum topics; for supergroups only
 * @method Base\BaseType send(Api $gateway = null)
 */
class PromoteChatMember extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'chat_id' => [
                'type' => ['int', 'string'],
                'required' => true,
            ],
            'user_id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'is_anonymous' => [
                'type' => ['bool'],
            ],
            'can_manage_chat' => [
                'type' => ['bool'],
            ],
            'can_delete_messages' => [
                'type' => ['bool'],
            ],
            'can_manage_video_chats' => [
                'type' => ['bool'],
            ],
            'can_restrict_members' => [
                'type' => ['bool'],
            ],
            'can_promote_members' => [
                'type' => ['bool'],
            ],
            'can_change_info' => [
                'type' => ['bool'],
            ],
            'can_invite_users' => [
                'type' => ['bool'],
            ],
            'can_post_stories' => [
                'type' => ['bool'],
            ],
            'can_edit_stories' => [
                'type' => ['bool'],
            ],
            'can_delete_stories' => [
                'type' => ['bool'],
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
    * @return int
    */

    public function getUserId(): mixed
    {
        return $this->getFieldValue('user_id');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setUserId(mixed $value): static
    {
        return $this->setFieldValue('user_id', $value);
    }

    /**
    * @return bool
    */

    public function getIsAnonymous(): mixed
    {
        return $this->getFieldValue('is_anonymous');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setIsAnonymous(mixed $value): static
    {
        return $this->setFieldValue('is_anonymous', $value);
    }

    /**
    * @return bool
    */

    public function getCanManageChat(): mixed
    {
        return $this->getFieldValue('can_manage_chat');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setCanManageChat(mixed $value): static
    {
        return $this->setFieldValue('can_manage_chat', $value);
    }

    /**
    * @return bool
    */

    public function getCanDeleteMessages(): mixed
    {
        return $this->getFieldValue('can_delete_messages');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setCanDeleteMessages(mixed $value): static
    {
        return $this->setFieldValue('can_delete_messages', $value);
    }

    /**
    * @return bool
    */

    public function getCanManageVideoChats(): mixed
    {
        return $this->getFieldValue('can_manage_video_chats');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setCanManageVideoChats(mixed $value): static
    {
        return $this->setFieldValue('can_manage_video_chats', $value);
    }

    /**
    * @return bool
    */

    public function getCanRestrictMembers(): mixed
    {
        return $this->getFieldValue('can_restrict_members');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setCanRestrictMembers(mixed $value): static
    {
        return $this->setFieldValue('can_restrict_members', $value);
    }

    /**
    * @return bool
    */

    public function getCanPromoteMembers(): mixed
    {
        return $this->getFieldValue('can_promote_members');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setCanPromoteMembers(mixed $value): static
    {
        return $this->setFieldValue('can_promote_members', $value);
    }

    /**
    * @return bool
    */

    public function getCanChangeInfo(): mixed
    {
        return $this->getFieldValue('can_change_info');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setCanChangeInfo(mixed $value): static
    {
        return $this->setFieldValue('can_change_info', $value);
    }

    /**
    * @return bool
    */

    public function getCanInviteUsers(): mixed
    {
        return $this->getFieldValue('can_invite_users');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setCanInviteUsers(mixed $value): static
    {
        return $this->setFieldValue('can_invite_users', $value);
    }

    /**
    * @return bool
    */

    public function getCanPostStories(): mixed
    {
        return $this->getFieldValue('can_post_stories');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setCanPostStories(mixed $value): static
    {
        return $this->setFieldValue('can_post_stories', $value);
    }

    /**
    * @return bool
    */

    public function getCanEditStories(): mixed
    {
        return $this->getFieldValue('can_edit_stories');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setCanEditStories(mixed $value): static
    {
        return $this->setFieldValue('can_edit_stories', $value);
    }

    /**
    * @return bool
    */

    public function getCanDeleteStories(): mixed
    {
        return $this->getFieldValue('can_delete_stories');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setCanDeleteStories(mixed $value): static
    {
        return $this->setFieldValue('can_delete_stories', $value);
    }

    /**
    * @return bool
    */

    public function getCanPostMessages(): mixed
    {
        return $this->getFieldValue('can_post_messages');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setCanPostMessages(mixed $value): static
    {
        return $this->setFieldValue('can_post_messages', $value);
    }

    /**
    * @return bool
    */

    public function getCanEditMessages(): mixed
    {
        return $this->getFieldValue('can_edit_messages');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setCanEditMessages(mixed $value): static
    {
        return $this->setFieldValue('can_edit_messages', $value);
    }

    /**
    * @return bool
    */

    public function getCanPinMessages(): mixed
    {
        return $this->getFieldValue('can_pin_messages');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setCanPinMessages(mixed $value): static
    {
        return $this->setFieldValue('can_pin_messages', $value);
    }

    /**
    * @return bool
    */

    public function getCanManageTopics(): mixed
    {
        return $this->getFieldValue('can_manage_topics');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setCanManageTopics(mixed $value): static
    {
        return $this->setFieldValue('can_manage_topics', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'PromoteChatMember';
    }
}