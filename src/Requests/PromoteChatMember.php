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

/**
 * Use this method to promote or demote a user in a supergroup or a channel. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Pass *False* for all boolean parameters to demote a user. Returns *True* on success.
 *
 * @link https://core.telegram.org/bots/api#promotechatmember
 *
 * @property-read int|string|null $chatId Required. Unique identifier for the target chat or username of the target channel in the format `@username`
 * @property-write int|string $chatId
 * @property-read int|null $userId Required. Unique identifier of the target user
 * @property-write int $userId
 * @property-read bool|null $isAnonymous Optional. Pass *True* if the administrator's presence in the chat is hidden
 * @property-write bool $isAnonymous
 * @property-read bool|null $canManageChat Optional. Pass *True* if the administrator can access the chat event log, get boost list, see hidden supergroup and channel members, report spam messages, ignore slow mode, and send messages to the chat without paying Telegram Stars. Implied by any other administrator privilege.
 * @property-write bool $canManageChat
 * @property-read bool|null $canDeleteMessages Optional. Pass *True* if the administrator can delete messages of other users
 * @property-write bool $canDeleteMessages
 * @property-read bool|null $canManageVideoChats Optional. Pass *True* if the administrator can manage video chats
 * @property-write bool $canManageVideoChats
 * @property-read bool|null $canRestrictMembers Optional. Pass *True* if the administrator can restrict, ban or unban chat members, or access supergroup statistics. For backward compatibility, defaults to *True* for promotions of channel administrators.
 * @property-write bool $canRestrictMembers
 * @property-read bool|null $canPromoteMembers Optional. Pass *True* if the administrator can add new administrators with a subset of their own privileges or demote administrators that they have promoted, directly or indirectly (promoted by administrators that were appointed by him)
 * @property-write bool $canPromoteMembers
 * @property-read bool|null $canChangeInfo Optional. Pass *True* if the administrator can change chat title, photo and other settings
 * @property-write bool $canChangeInfo
 * @property-read bool|null $canInviteUsers Optional. Pass *True* if the administrator can invite new users to the chat
 * @property-write bool $canInviteUsers
 * @property-read bool|null $canPostStories Optional. Pass *True* if the administrator can post stories to the chat
 * @property-write bool $canPostStories
 * @property-read bool|null $canEditStories Optional. Pass *True* if the administrator can edit stories posted by other users, post stories to the chat page, pin chat stories, and access the chat's story archive
 * @property-write bool $canEditStories
 * @property-read bool|null $canDeleteStories Optional. Pass *True* if the administrator can delete stories posted by other users
 * @property-write bool $canDeleteStories
 * @property-read bool|null $canPostMessages Optional. Pass *True* if the administrator can post messages in the channel, approve suggested posts, or access channel statistics; for channels only
 * @property-write bool $canPostMessages
 * @property-read bool|null $canEditMessages Optional. Pass *True* if the administrator can edit messages of other users and can pin messages; for channels only
 * @property-write bool $canEditMessages
 * @property-read bool|null $canPinMessages Optional. Pass *True* if the administrator can pin messages; for supergroups only
 * @property-write bool $canPinMessages
 * @property-read bool|null $canManageTopics Optional. Pass *True* if the user is allowed to create, rename, close, and reopen forum topics; for supergroups only
 * @property-write bool $canManageTopics
 * @property-read bool|null $canManageDirectMessages Optional. Pass *True* if the administrator can manage direct messages within the channel and decline suggested posts; for channels only
 * @property-write bool $canManageDirectMessages
 * @property-read bool|null $canManageTags Optional. Pass *True* if the administrator can edit the tags of regular members; for groups and supergroups only
 * @property-write bool $canManageTags
 * @property-read bool|null $canSendWelcomeMessages Optional. Pass *True* if the administrator can manage chat welcome messages or directly send them in the case of bots
 * @property-write bool $canSendWelcomeMessages
 *
 * @method Base\ParameterBool send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
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
            'can_manage_direct_messages' => [
                'type' => ['bool'],
            ],
            'can_manage_tags' => [
                'type' => ['bool'],
            ],
            'can_send_welcome_messages' => [
                'type' => ['bool'],
            ],
            '@return' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Required. Unique identifier for the target chat or username of the target channel in the format `@username`
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
     * Required. Unique identifier of the target user
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getUserId(): mixed
    {
        return $this->getFieldValue('user_id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setUserId(mixed $value): static
    {
        return $this->setFieldValue('user_id', $value);
    }

    /**
     * Optional. Pass *True* if the administrator's presence in the chat is hidden
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
     * Optional. Pass *True* if the administrator can access the chat event log, get boost list, see hidden supergroup and channel members, report spam messages, ignore slow mode, and send messages to the chat without paying Telegram Stars. Implied by any other administrator privilege.
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
     * Optional. Pass *True* if the administrator can delete messages of other users
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
     * Optional. Pass *True* if the administrator can manage video chats
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
     * Optional. Pass *True* if the administrator can restrict, ban or unban chat members, or access supergroup statistics. For backward compatibility, defaults to *True* for promotions of channel administrators.
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
     * Optional. Pass *True* if the administrator can add new administrators with a subset of their own privileges or demote administrators that they have promoted, directly or indirectly (promoted by administrators that were appointed by him)
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
     * Optional. Pass *True* if the administrator can change chat title, photo and other settings
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
     * Optional. Pass *True* if the administrator can invite new users to the chat
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
     * Optional. Pass *True* if the administrator can post stories to the chat
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
     * Optional. Pass *True* if the administrator can edit stories posted by other users, post stories to the chat page, pin chat stories, and access the chat's story archive
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
     * Optional. Pass *True* if the administrator can delete stories posted by other users
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
     * Optional. Pass *True* if the administrator can post messages in the channel, approve suggested posts, or access channel statistics; for channels only
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
     * Optional. Pass *True* if the administrator can edit messages of other users and can pin messages; for channels only
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
     * Optional. Pass *True* if the administrator can pin messages; for supergroups only
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
     * Optional. Pass *True* if the user is allowed to create, rename, close, and reopen forum topics; for supergroups only
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
     * Optional. Pass *True* if the administrator can manage direct messages within the channel and decline suggested posts; for channels only
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
     * Optional. Pass *True* if the administrator can edit the tags of regular members; for groups and supergroups only
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
     * Optional. Pass *True* if the administrator can manage chat welcome messages or directly send them in the case of bots
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

    protected function getRequestMethod(): string
    {
        return 'promoteChatMember';
    }
}
