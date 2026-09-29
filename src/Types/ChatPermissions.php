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
 * Describes actions that a non-administrator user is allowed to take in a chat.
 *
 * @link https://core.telegram.org/bots/api#chatpermissions
 *
 * @property-read bool|null $canSendMessages Optional. *True*, if the user is allowed to send text messages, rich messages, contacts, giveaways, giveaway winners, invoices, locations and venues
 * @property-write bool $canSendMessages
 * @property-read bool|null $canSendAudios Optional. *True*, if the user is allowed to send audios
 * @property-write bool $canSendAudios
 * @property-read bool|null $canSendDocuments Optional. *True*, if the user is allowed to send documents
 * @property-write bool $canSendDocuments
 * @property-read bool|null $canSendPhotos Optional. *True*, if the user is allowed to send photos
 * @property-write bool $canSendPhotos
 * @property-read bool|null $canSendVideos Optional. *True*, if the user is allowed to send videos
 * @property-write bool $canSendVideos
 * @property-read bool|null $canSendVideoNotes Optional. *True*, if the user is allowed to send video notes
 * @property-write bool $canSendVideoNotes
 * @property-read bool|null $canSendVoiceNotes Optional. *True*, if the user is allowed to send voice notes
 * @property-write bool $canSendVoiceNotes
 * @property-read bool|null $canSendPolls Optional. *True*, if the user is allowed to send polls and checklists
 * @property-write bool $canSendPolls
 * @property-read bool|null $canSendOtherMessages Optional. *True*, if the user is allowed to send animations, games, stickers and use inline bots
 * @property-write bool $canSendOtherMessages
 * @property-read bool|null $canAddWebPagePreviews Optional. *True*, if the user is allowed to add web page previews to their messages
 * @property-write bool $canAddWebPagePreviews
 * @property-read bool|null $canReactToMessages Optional. *True*, if the user is allowed to react to messages. If omitted, defaults to the value of *can_send_messages*.
 * @property-write bool $canReactToMessages
 * @property-read bool|null $canEditTag Optional. *True*, if the user is allowed to edit their own tag. If omitted, defaults to the value of *can_pin_messages*.
 * @property-write bool $canEditTag
 * @property-read bool|null $canChangeInfo Optional. *True*, if the user is allowed to change the chat title, photo and other settings. Ignored in public supergroups.
 * @property-write bool $canChangeInfo
 * @property-read bool|null $canInviteUsers Optional. *True*, if the user is allowed to invite new users to the chat
 * @property-write bool $canInviteUsers
 * @property-read bool|null $canPinMessages Optional. *True*, if the user is allowed to pin messages. Ignored in public supergroups.
 * @property-write bool $canPinMessages
 * @property-read bool|null $canManageTopics Optional. *True*, if the user is allowed to create forum topics. If omitted, defaults to the value of can_pin_messages.
 * @property-write bool $canManageTopics
 */
class ChatPermissions extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'can_send_messages' => [
                'type' => ['bool'],
            ],
            'can_send_audios' => [
                'type' => ['bool'],
            ],
            'can_send_documents' => [
                'type' => ['bool'],
            ],
            'can_send_photos' => [
                'type' => ['bool'],
            ],
            'can_send_videos' => [
                'type' => ['bool'],
            ],
            'can_send_video_notes' => [
                'type' => ['bool'],
            ],
            'can_send_voice_notes' => [
                'type' => ['bool'],
            ],
            'can_send_polls' => [
                'type' => ['bool'],
            ],
            'can_send_other_messages' => [
                'type' => ['bool'],
            ],
            'can_add_web_page_previews' => [
                'type' => ['bool'],
            ],
            'can_react_to_messages' => [
                'type' => ['bool'],
            ],
            'can_edit_tag' => [
                'type' => ['bool'],
            ],
            'can_change_info' => [
                'type' => ['bool'],
            ],
            'can_invite_users' => [
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
     * Optional. *True*, if the user is allowed to send text messages, rich messages, contacts, giveaways, giveaway winners, invoices, locations and venues
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
     * Optional. *True*, if the user is allowed to send audios
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
     * Optional. *True*, if the user is allowed to send documents
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
     * Optional. *True*, if the user is allowed to send photos
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
     * Optional. *True*, if the user is allowed to send videos
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
     * Optional. *True*, if the user is allowed to send video notes
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
     * Optional. *True*, if the user is allowed to send voice notes
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
     * Optional. *True*, if the user is allowed to send polls and checklists
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
     * Optional. *True*, if the user is allowed to send animations, games, stickers and use inline bots
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
     * Optional. *True*, if the user is allowed to add web page previews to their messages
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
     * Optional. *True*, if the user is allowed to react to messages. If omitted, defaults to the value of *can_send_messages*.
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
     * Optional. *True*, if the user is allowed to edit their own tag. If omitted, defaults to the value of *can_pin_messages*.
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
     * Optional. *True*, if the user is allowed to change the chat title, photo and other settings. Ignored in public supergroups.
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
     * Optional. *True*, if the user is allowed to invite new users to the chat
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
     * Optional. *True*, if the user is allowed to pin messages. Ignored in public supergroups.
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
     * Optional. *True*, if the user is allowed to create forum topics. If omitted, defaults to the value of can_pin_messages.
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
}
