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
 * Represents a `ChatMember` that is under certain restrictions in the chat. Supergroups only.
 *
 * @link https://core.telegram.org/bots/api#chatmemberrestricted
 *
 * @property-read string|null $status Required. The member's status in the chat, always “restricted”
 * @property-write string $status
 * @property-read string|null $tag Optional. Tag of the member
 * @property-write string $tag
 * @property-read User|null $user Required. Information about the user
 * @property-write User|array<string, mixed> $user
 * @property-read bool|null $isMember Required. *True*, if the user is a member of the chat at the moment of the request
 * @property-write bool $isMember
 * @property-read bool|null $canSendMessages Required. *True*, if the user is allowed to send text messages, rich messages, contacts, giveaways, giveaway winners, invoices, locations and venues
 * @property-write bool $canSendMessages
 * @property-read bool|null $canSendAudios Required. *True*, if the user is allowed to send audios
 * @property-write bool $canSendAudios
 * @property-read bool|null $canSendDocuments Required. *True*, if the user is allowed to send documents
 * @property-write bool $canSendDocuments
 * @property-read bool|null $canSendPhotos Required. *True*, if the user is allowed to send photos
 * @property-write bool $canSendPhotos
 * @property-read bool|null $canSendVideos Required. *True*, if the user is allowed to send videos
 * @property-write bool $canSendVideos
 * @property-read bool|null $canSendVideoNotes Required. *True*, if the user is allowed to send video notes
 * @property-write bool $canSendVideoNotes
 * @property-read bool|null $canSendVoiceNotes Required. *True*, if the user is allowed to send voice notes
 * @property-write bool $canSendVoiceNotes
 * @property-read bool|null $canSendPolls Required. *True*, if the user is allowed to send polls and checklists
 * @property-write bool $canSendPolls
 * @property-read bool|null $canSendOtherMessages Required. *True*, if the user is allowed to send animations, games, stickers and use inline bots
 * @property-write bool $canSendOtherMessages
 * @property-read bool|null $canAddWebPagePreviews Required. *True*, if the user is allowed to add web page previews to their messages
 * @property-write bool $canAddWebPagePreviews
 * @property-read bool|null $canReactToMessages Required. *True*, if the user is allowed to react to messages
 * @property-write bool $canReactToMessages
 * @property-read bool|null $canEditTag Required. *True*, if the user is allowed to edit their own tag
 * @property-write bool $canEditTag
 * @property-read bool|null $canChangeInfo Required. *True*, if the user is allowed to change the chat title, photo and other settings
 * @property-write bool $canChangeInfo
 * @property-read bool|null $canInviteUsers Required. *True*, if the user is allowed to invite new users to the chat
 * @property-write bool $canInviteUsers
 * @property-read bool|null $canPinMessages Required. *True*, if the user is allowed to pin messages
 * @property-write bool $canPinMessages
 * @property-read bool|null $canManageTopics Required. *True*, if the user is allowed to create forum topics
 * @property-write bool $canManageTopics
 * @property-read int|null $untilDate Required. Date when restrictions will be lifted for this user; Unix time. If 0, then the user is restricted forever.
 * @property-write int $untilDate
 */
class ChatMemberRestricted extends ChatMember
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
                'value' => 'restricted',
                'required' => true,
            ],
            'tag' => [
                'type' => ['string'],
            ],
            'user' => [
                'type' => [User::class],
                'required' => true,
            ],
            'is_member' => [
                'type' => ['bool'],
                'required' => true,
            ],
            'can_send_messages' => [
                'type' => ['bool'],
                'required' => true,
            ],
            'can_send_audios' => [
                'type' => ['bool'],
                'required' => true,
            ],
            'can_send_documents' => [
                'type' => ['bool'],
                'required' => true,
            ],
            'can_send_photos' => [
                'type' => ['bool'],
                'required' => true,
            ],
            'can_send_videos' => [
                'type' => ['bool'],
                'required' => true,
            ],
            'can_send_video_notes' => [
                'type' => ['bool'],
                'required' => true,
            ],
            'can_send_voice_notes' => [
                'type' => ['bool'],
                'required' => true,
            ],
            'can_send_polls' => [
                'type' => ['bool'],
                'required' => true,
            ],
            'can_send_other_messages' => [
                'type' => ['bool'],
                'required' => true,
            ],
            'can_add_web_page_previews' => [
                'type' => ['bool'],
                'required' => true,
            ],
            'can_react_to_messages' => [
                'type' => ['bool'],
                'required' => true,
            ],
            'can_edit_tag' => [
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
            'can_pin_messages' => [
                'type' => ['bool'],
                'required' => true,
            ],
            'can_manage_topics' => [
                'type' => ['bool'],
                'required' => true,
            ],
            'until_date' => [
                'type' => ['int'],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. The member's status in the chat, always “restricted”
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
     * Optional. Tag of the member
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getTag(): mixed
    {
        return $this->getFieldValue('tag');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setTag(mixed $value): static
    {
        return $this->setFieldValue('tag', $value);
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
     * Required. *True*, if the user is a member of the chat at the moment of the request
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsMember(): mixed
    {
        return $this->getFieldValue('is_member');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsMember(mixed $value): static
    {
        return $this->setFieldValue('is_member', $value);
    }

    /**
     * Required. *True*, if the user is allowed to send text messages, rich messages, contacts, giveaways, giveaway winners, invoices, locations and venues
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getCanSendMessages(): mixed
    {
        return $this->getFieldValue('can_send_messages');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCanSendMessages(mixed $value): static
    {
        return $this->setFieldValue('can_send_messages', $value);
    }

    /**
     * Required. *True*, if the user is allowed to send audios
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getCanSendAudios(): mixed
    {
        return $this->getFieldValue('can_send_audios');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCanSendAudios(mixed $value): static
    {
        return $this->setFieldValue('can_send_audios', $value);
    }

    /**
     * Required. *True*, if the user is allowed to send documents
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getCanSendDocuments(): mixed
    {
        return $this->getFieldValue('can_send_documents');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCanSendDocuments(mixed $value): static
    {
        return $this->setFieldValue('can_send_documents', $value);
    }

    /**
     * Required. *True*, if the user is allowed to send photos
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getCanSendPhotos(): mixed
    {
        return $this->getFieldValue('can_send_photos');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCanSendPhotos(mixed $value): static
    {
        return $this->setFieldValue('can_send_photos', $value);
    }

    /**
     * Required. *True*, if the user is allowed to send videos
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getCanSendVideos(): mixed
    {
        return $this->getFieldValue('can_send_videos');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCanSendVideos(mixed $value): static
    {
        return $this->setFieldValue('can_send_videos', $value);
    }

    /**
     * Required. *True*, if the user is allowed to send video notes
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getCanSendVideoNotes(): mixed
    {
        return $this->getFieldValue('can_send_video_notes');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCanSendVideoNotes(mixed $value): static
    {
        return $this->setFieldValue('can_send_video_notes', $value);
    }

    /**
     * Required. *True*, if the user is allowed to send voice notes
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getCanSendVoiceNotes(): mixed
    {
        return $this->getFieldValue('can_send_voice_notes');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCanSendVoiceNotes(mixed $value): static
    {
        return $this->setFieldValue('can_send_voice_notes', $value);
    }

    /**
     * Required. *True*, if the user is allowed to send polls and checklists
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getCanSendPolls(): mixed
    {
        return $this->getFieldValue('can_send_polls');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCanSendPolls(mixed $value): static
    {
        return $this->setFieldValue('can_send_polls', $value);
    }

    /**
     * Required. *True*, if the user is allowed to send animations, games, stickers and use inline bots
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getCanSendOtherMessages(): mixed
    {
        return $this->getFieldValue('can_send_other_messages');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCanSendOtherMessages(mixed $value): static
    {
        return $this->setFieldValue('can_send_other_messages', $value);
    }

    /**
     * Required. *True*, if the user is allowed to add web page previews to their messages
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getCanAddWebPagePreviews(): mixed
    {
        return $this->getFieldValue('can_add_web_page_previews');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCanAddWebPagePreviews(mixed $value): static
    {
        return $this->setFieldValue('can_add_web_page_previews', $value);
    }

    /**
     * Required. *True*, if the user is allowed to react to messages
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getCanReactToMessages(): mixed
    {
        return $this->getFieldValue('can_react_to_messages');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCanReactToMessages(mixed $value): static
    {
        return $this->setFieldValue('can_react_to_messages', $value);
    }

    /**
     * Required. *True*, if the user is allowed to edit their own tag
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getCanEditTag(): mixed
    {
        return $this->getFieldValue('can_edit_tag');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCanEditTag(mixed $value): static
    {
        return $this->setFieldValue('can_edit_tag', $value);
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
     * Required. *True*, if the user is allowed to pin messages
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
     * Required. *True*, if the user is allowed to create forum topics
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
     * Required. Date when restrictions will be lifted for this user; Unix time. If 0, then the user is restricted forever.
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getUntilDate(): mixed
    {
        return $this->getFieldValue('until_date');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setUntilDate(mixed $value): static
    {
        return $this->setFieldValue('until_date', $value);
    }
}
