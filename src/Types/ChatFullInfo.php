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
 * This object contains full information about a chat.
 *
 * @link https://core.telegram.org/bots/api#chatfullinfo
 *
 * @property-read int|null $id Required. Unique identifier for this chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
 * @property-write int $id
 * @property-read string|null $type Required. Type of the chat, can be either “private”, “group”, “supergroup” or “channel”
 * @property-write string $type
 * @property-read string|null $title Optional. Title, for supergroups, channels and group chats
 * @property-write string $title
 * @property-read string|null $username Optional. Username, for private chats, supergroups and channels if available
 * @property-write string $username
 * @property-read string|null $firstName Optional. First name of the other party in a private chat
 * @property-write string $firstName
 * @property-read string|null $lastName Optional. Last name of the other party in a private chat
 * @property-write string $lastName
 * @property-read bool|null $isForum Optional. *True*, if the supergroup chat is a forum (has [topics](https://telegram.org/blog/topics-in-groups-collectible-usernames#topics-in-groups) enabled)
 * @property-write bool $isForum
 * @property-read bool|null $isDirectMessages Optional. *True*, if the chat is the direct messages chat of a channel
 * @property-write bool $isDirectMessages
 * @property-read int|null $accentColorId Required. Identifier of the accent color for the chat name and backgrounds of the chat photo, reply header, and link preview. See [accent colors](https://core.telegram.org/bots/api#accent-colors) for more details.
 * @property-write int $accentColorId
 * @property-read int|null $maxReactionCount Required. The maximum number of reactions that can be set on a message in the chat
 * @property-write int $maxReactionCount
 * @property-read ChatPhoto|null $photo Optional. Chat photo
 * @property-write ChatPhoto|array<string, mixed> $photo
 * @property-read Base\ArrayObject<Base\ParameterString> $activeUsernames Optional. If non-empty, the list of all [active chat usernames](https://telegram.org/blog/topics-in-groups-collectible-usernames#collectible-usernames); for private chats, supergroups and channels
 * @property-write list<string>|Base\ArrayObject<Base\ParameterString> $activeUsernames
 * @property-read Birthdate|null $birthdate Optional. For private chats, the date of birth of the user
 * @property-write Birthdate|array<string, mixed> $birthdate
 * @property-read BusinessIntro|null $businessIntro Optional. For private chats with business accounts, the intro of the business
 * @property-write BusinessIntro|array<string, mixed> $businessIntro
 * @property-read BusinessLocation|null $businessLocation Optional. For private chats with business accounts, the location of the business
 * @property-write BusinessLocation|array<string, mixed> $businessLocation
 * @property-read BusinessOpeningHours|null $businessOpeningHours Optional. For private chats with business accounts, the opening hours of the business
 * @property-write BusinessOpeningHours|array<string, mixed> $businessOpeningHours
 * @property-read Chat|null $personalChat Optional. For private chats, the personal channel of the user
 * @property-write Chat|array<string, mixed> $personalChat
 * @property-read Chat|null $parentChat Optional. Information about the corresponding channel chat; for direct messages chats only
 * @property-write Chat|array<string, mixed> $parentChat
 * @property-read Base\ArrayObject<ReactionType> $availableReactions Optional. List of available reactions allowed in the chat. If omitted, then all `ReactionTypeEmoji` are allowed.
 * @property-write list<ReactionType|array<string, mixed>>|Base\ArrayObject<ReactionType> $availableReactions
 * @property-read string|null $backgroundCustomEmojiId Optional. Custom emoji identifier of the emoji chosen by the chat for the reply header and link preview background
 * @property-write string $backgroundCustomEmojiId
 * @property-read int|null $profileAccentColorId Optional. Identifier of the accent color for the chat's profile background. See [profile accent colors](https://core.telegram.org/bots/api#profile-accent-colors) for more details.
 * @property-write int $profileAccentColorId
 * @property-read string|null $profileBackgroundCustomEmojiId Optional. Custom emoji identifier of the emoji chosen by the chat for its profile background
 * @property-write string $profileBackgroundCustomEmojiId
 * @property-read string|null $emojiStatusCustomEmojiId Optional. Custom emoji identifier of the emoji status of the chat or the other party in a private chat
 * @property-write string $emojiStatusCustomEmojiId
 * @property-read int|null $emojiStatusExpirationDate Optional. Expiration date of the emoji status of the chat or the other party in a private chat, in Unix time, if any
 * @property-write int $emojiStatusExpirationDate
 * @property-read string|null $bio Optional. Bio of the other party in a private chat
 * @property-write string $bio
 * @property-read bool|null $hasPrivateForwards Optional. *True*, if privacy settings of the other party in the private chat allows to use `tg://user?id=<user_id>` links only in chats with the user
 * @property-write bool $hasPrivateForwards
 * @property-read bool|null $hasRestrictedVoiceAndVideoMessages Optional. *True*, if the privacy settings of the other party restrict sending voice and video note messages in the private chat
 * @property-write bool $hasRestrictedVoiceAndVideoMessages
 * @property-read bool|null $joinToSendMessages Optional. *True*, if users need to join the supergroup before they can send messages
 * @property-write bool $joinToSendMessages
 * @property-read bool|null $joinByRequest Optional. *True*, if all users directly joining the supergroup without using an invite link need to be approved by supergroup administrators
 * @property-write bool $joinByRequest
 * @property-read string|null $description Optional. Description, for groups, supergroups and channel chats
 * @property-write string $description
 * @property-read string|null $inviteLink Optional. Primary invite link, for groups, supergroups and channel chats
 * @property-write string $inviteLink
 * @property-read Message|null $pinnedMessage Optional. The most recent pinned message (by sending date)
 * @property-write Message|array<string, mixed> $pinnedMessage
 * @property-read ChatPermissions|null $permissions Optional. Default chat member permissions, for groups and supergroups
 * @property-write ChatPermissions|array<string, mixed> $permissions
 * @property-read AcceptedGiftTypes|null $acceptedGiftTypes Required. Information about types of gifts that are accepted by the chat or by the corresponding user for private chats
 * @property-write AcceptedGiftTypes|array<string, mixed> $acceptedGiftTypes
 * @property-read bool|null $canSendPaidMedia Optional. *True*, if paid media messages can be sent or forwarded to the channel chat. The field is available only for channel chats.
 * @property-write bool $canSendPaidMedia
 * @property-read int|null $slowModeDelay Optional. For supergroups, the minimum allowed delay between consecutive messages sent by each unprivileged user; in seconds
 * @property-write int $slowModeDelay
 * @property-read int|null $unrestrictBoostCount Optional. For supergroups, the minimum number of boosts that a non-administrator user needs to add in order to ignore slow mode and chat permissions
 * @property-write int $unrestrictBoostCount
 * @property-read int|null $messageAutoDeleteTime Optional. The time after which all messages sent to the chat will be automatically deleted; in seconds
 * @property-write int $messageAutoDeleteTime
 * @property-read bool|null $hasAggressiveAntiSpamEnabled Optional. *True*, if aggressive anti-spam checks are enabled in the supergroup. The field is only available to chat administrators.
 * @property-write bool $hasAggressiveAntiSpamEnabled
 * @property-read bool|null $hasHiddenMembers Optional. *True*, if non-administrators can only get the list of bots and administrators in the chat
 * @property-write bool $hasHiddenMembers
 * @property-read bool|null $hasProtectedContent Optional. *True*, if messages from the chat can't be forwarded to other chats
 * @property-write bool $hasProtectedContent
 * @property-read bool|null $hasVisibleHistory Optional. *True*, if new chat members will have access to old messages; available only to chat administrators
 * @property-write bool $hasVisibleHistory
 * @property-read string|null $stickerSetName Optional. For supergroups, name of the group sticker set
 * @property-write string $stickerSetName
 * @property-read bool|null $canSetStickerSet Optional. *True*, if the bot can change the group sticker set
 * @property-write bool $canSetStickerSet
 * @property-read string|null $customEmojiStickerSetName Optional. For supergroups, the name of the group's custom emoji sticker set. Custom emoji from this set can be used by all users and bots in the group.
 * @property-write string $customEmojiStickerSetName
 * @property-read int|null $linkedChatId Optional. Unique identifier for the linked chat, i.e. the discussion group identifier for a channel and vice versa; for supergroups and channel chats. This identifier may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier.
 * @property-write int $linkedChatId
 * @property-read ChatLocation|null $location Optional. For supergroups, the location to which the supergroup is connected
 * @property-write ChatLocation|array<string, mixed> $location
 * @property-read UserRating|null $rating Optional. For private chats, the rating of the user if any
 * @property-write UserRating|array<string, mixed> $rating
 * @property-read Audio|null $firstProfileAudio Optional. For private chats, the first audio added to the profile of the user
 * @property-write Audio|array<string, mixed> $firstProfileAudio
 * @property-read UniqueGiftColors|null $uniqueGiftColors Optional. The color scheme based on a unique gift that must be used for the chat's name, message replies and link previews
 * @property-write UniqueGiftColors|array<string, mixed> $uniqueGiftColors
 * @property-read int|null $paidMessageStarCount Optional. The number of Telegram Stars a general user has to pay to send a message to the chat
 * @property-write int $paidMessageStarCount
 * @property-read User|null $guardBot Optional. The bot that processes join request queries in the chat. The field is only available to chat administrators.
 * @property-write User|array<string, mixed> $guardBot
 * @property-read Community|null $community Optional. The `Community` to which the chat belongs
 * @property-write Community|array<string, mixed> $community
 */
class ChatFullInfo extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'type' => [
                'type' => ['string'],
                'required' => true,
            ],
            'title' => [
                'type' => ['string'],
            ],
            'username' => [
                'type' => ['string'],
            ],
            'first_name' => [
                'type' => ['string'],
            ],
            'last_name' => [
                'type' => ['string'],
            ],
            'is_forum' => [
                'type' => ['bool'],
            ],
            'is_direct_messages' => [
                'type' => ['bool'],
            ],
            'accent_color_id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'max_reaction_count' => [
                'type' => ['int'],
                'required' => true,
            ],
            'photo' => [
                'type' => [ChatPhoto::class],
            ],
            'active_usernames' => [
                'type' => ['string'],
                'isArray' => true,
            ],
            'birthdate' => [
                'type' => [Birthdate::class],
            ],
            'business_intro' => [
                'type' => [BusinessIntro::class],
            ],
            'business_location' => [
                'type' => [BusinessLocation::class],
            ],
            'business_opening_hours' => [
                'type' => [BusinessOpeningHours::class],
            ],
            'personal_chat' => [
                'type' => [Chat::class],
            ],
            'parent_chat' => [
                'type' => [Chat::class],
            ],
            'available_reactions' => [
                'type' => [ReactionType::class],
                'isArray' => true,
            ],
            'background_custom_emoji_id' => [
                'type' => ['string'],
            ],
            'profile_accent_color_id' => [
                'type' => ['int'],
            ],
            'profile_background_custom_emoji_id' => [
                'type' => ['string'],
            ],
            'emoji_status_custom_emoji_id' => [
                'type' => ['string'],
            ],
            'emoji_status_expiration_date' => [
                'type' => ['int'],
            ],
            'bio' => [
                'type' => ['string'],
            ],
            'has_private_forwards' => [
                'type' => ['bool'],
            ],
            'has_restricted_voice_and_video_messages' => [
                'type' => ['bool'],
            ],
            'join_to_send_messages' => [
                'type' => ['bool'],
            ],
            'join_by_request' => [
                'type' => ['bool'],
            ],
            'description' => [
                'type' => ['string'],
            ],
            'invite_link' => [
                'type' => ['string'],
            ],
            'pinned_message' => [
                'type' => [Message::class],
            ],
            'permissions' => [
                'type' => [ChatPermissions::class],
            ],
            'accepted_gift_types' => [
                'type' => [AcceptedGiftTypes::class],
                'required' => true,
            ],
            'can_send_paid_media' => [
                'type' => ['bool'],
            ],
            'slow_mode_delay' => [
                'type' => ['int'],
            ],
            'unrestrict_boost_count' => [
                'type' => ['int'],
            ],
            'message_auto_delete_time' => [
                'type' => ['int'],
            ],
            'has_aggressive_anti_spam_enabled' => [
                'type' => ['bool'],
            ],
            'has_hidden_members' => [
                'type' => ['bool'],
            ],
            'has_protected_content' => [
                'type' => ['bool'],
            ],
            'has_visible_history' => [
                'type' => ['bool'],
            ],
            'sticker_set_name' => [
                'type' => ['string'],
            ],
            'can_set_sticker_set' => [
                'type' => ['bool'],
            ],
            'custom_emoji_sticker_set_name' => [
                'type' => ['string'],
            ],
            'linked_chat_id' => [
                'type' => ['int'],
            ],
            'location' => [
                'type' => [ChatLocation::class],
            ],
            'rating' => [
                'type' => [UserRating::class],
            ],
            'first_profile_audio' => [
                'type' => [Audio::class],
            ],
            'unique_gift_colors' => [
                'type' => [UniqueGiftColors::class],
            ],
            'paid_message_star_count' => [
                'type' => ['int'],
            ],
            'guard_bot' => [
                'type' => [User::class],
            ],
            'community' => [
                'type' => [Community::class],
            ],
        ];
    }

    /**
     * Required. Unique identifier for this chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getId(): mixed
    {
        return $this->getFieldValue('id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setId(mixed $value): static
    {
        return $this->setFieldValue('id', $value);
    }

    /**
     * Required. Type of the chat, can be either “private”, “group”, “supergroup” or “channel”
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getType(): mixed
    {
        return $this->getFieldValue('type');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setType(mixed $value): static
    {
        return $this->setFieldValue('type', $value);
    }

    /**
     * Optional. Title, for supergroups, channels and group chats
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getTitle(): mixed
    {
        return $this->getFieldValue('title');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setTitle(mixed $value): static
    {
        return $this->setFieldValue('title', $value);
    }

    /**
     * Optional. Username, for private chats, supergroups and channels if available
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getUsername(): mixed
    {
        return $this->getFieldValue('username');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setUsername(mixed $value): static
    {
        return $this->setFieldValue('username', $value);
    }

    /**
     * Optional. First name of the other party in a private chat
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getFirstName(): mixed
    {
        return $this->getFieldValue('first_name');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setFirstName(mixed $value): static
    {
        return $this->setFieldValue('first_name', $value);
    }

    /**
     * Optional. Last name of the other party in a private chat
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getLastName(): mixed
    {
        return $this->getFieldValue('last_name');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setLastName(mixed $value): static
    {
        return $this->setFieldValue('last_name', $value);
    }

    /**
     * Optional. *True*, if the supergroup chat is a forum (has [topics](https://telegram.org/blog/topics-in-groups-collectible-usernames#topics-in-groups) enabled)
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsForum(): mixed
    {
        return $this->getFieldValue('is_forum');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsForum(mixed $value): static
    {
        return $this->setFieldValue('is_forum', $value);
    }

    /**
     * Optional. *True*, if the chat is the direct messages chat of a channel
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsDirectMessages(): mixed
    {
        return $this->getFieldValue('is_direct_messages');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsDirectMessages(mixed $value): static
    {
        return $this->setFieldValue('is_direct_messages', $value);
    }

    /**
     * Required. Identifier of the accent color for the chat name and backgrounds of the chat photo, reply header, and link preview. See [accent colors](https://core.telegram.org/bots/api#accent-colors) for more details.
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getAccentColorId(): mixed
    {
        return $this->getFieldValue('accent_color_id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAccentColorId(mixed $value): static
    {
        return $this->setFieldValue('accent_color_id', $value);
    }

    /**
     * Required. The maximum number of reactions that can be set on a message in the chat
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getMaxReactionCount(): mixed
    {
        return $this->getFieldValue('max_reaction_count');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setMaxReactionCount(mixed $value): static
    {
        return $this->setFieldValue('max_reaction_count', $value);
    }

    /**
     * Optional. Chat photo
     *
     * @return ChatPhoto|null
     * @throws Base\TelegramException
     */
    public function getPhoto(): mixed
    {
        return $this->getFieldValue('photo');
    }

    /**
     * @param ChatPhoto|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPhoto(mixed $value): static
    {
        return $this->setFieldValue('photo', $value);
    }

    /**
     * Optional. If non-empty, the list of all [active chat usernames](https://telegram.org/blog/topics-in-groups-collectible-usernames#collectible-usernames); for private chats, supergroups and channels
     *
     * @return Base\ArrayObject<Base\ParameterString>
     * @throws Base\TelegramException
     */
    public function getActiveUsernames(): mixed
    {
        return $this->getFieldValue('active_usernames');
    }

    /**
     * @param list<string>|Base\ArrayObject<Base\ParameterString> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setActiveUsernames(mixed $value): static
    {
        return $this->setFieldValue('active_usernames', $value);
    }

    /**
     * Optional. For private chats, the date of birth of the user
     *
     * @return Birthdate|null
     * @throws Base\TelegramException
     */
    public function getBirthdate(): mixed
    {
        return $this->getFieldValue('birthdate');
    }

    /**
     * @param Birthdate|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setBirthdate(mixed $value): static
    {
        return $this->setFieldValue('birthdate', $value);
    }

    /**
     * Optional. For private chats with business accounts, the intro of the business
     *
     * @return BusinessIntro|null
     * @throws Base\TelegramException
     */
    public function getBusinessIntro(): mixed
    {
        return $this->getFieldValue('business_intro');
    }

    /**
     * @param BusinessIntro|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setBusinessIntro(mixed $value): static
    {
        return $this->setFieldValue('business_intro', $value);
    }

    /**
     * Optional. For private chats with business accounts, the location of the business
     *
     * @return BusinessLocation|null
     * @throws Base\TelegramException
     */
    public function getBusinessLocation(): mixed
    {
        return $this->getFieldValue('business_location');
    }

    /**
     * @param BusinessLocation|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setBusinessLocation(mixed $value): static
    {
        return $this->setFieldValue('business_location', $value);
    }

    /**
     * Optional. For private chats with business accounts, the opening hours of the business
     *
     * @return BusinessOpeningHours|null
     * @throws Base\TelegramException
     */
    public function getBusinessOpeningHours(): mixed
    {
        return $this->getFieldValue('business_opening_hours');
    }

    /**
     * @param BusinessOpeningHours|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setBusinessOpeningHours(mixed $value): static
    {
        return $this->setFieldValue('business_opening_hours', $value);
    }

    /**
     * Optional. For private chats, the personal channel of the user
     *
     * @return Chat|null
     * @throws Base\TelegramException
     */
    public function getPersonalChat(): mixed
    {
        return $this->getFieldValue('personal_chat');
    }

    /**
     * @param Chat|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPersonalChat(mixed $value): static
    {
        return $this->setFieldValue('personal_chat', $value);
    }

    /**
     * Optional. Information about the corresponding channel chat; for direct messages chats only
     *
     * @return Chat|null
     * @throws Base\TelegramException
     */
    public function getParentChat(): mixed
    {
        return $this->getFieldValue('parent_chat');
    }

    /**
     * @param Chat|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setParentChat(mixed $value): static
    {
        return $this->setFieldValue('parent_chat', $value);
    }

    /**
     * Optional. List of available reactions allowed in the chat. If omitted, then all `ReactionTypeEmoji` are allowed.
     *
     * @return Base\ArrayObject<ReactionType>
     * @throws Base\TelegramException
     */
    public function getAvailableReactions(): mixed
    {
        return $this->getFieldValue('available_reactions');
    }

    /**
     * @param list<ReactionType|array<string, mixed>>|Base\ArrayObject<ReactionType> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAvailableReactions(mixed $value): static
    {
        return $this->setFieldValue('available_reactions', $value);
    }

    /**
     * Optional. Custom emoji identifier of the emoji chosen by the chat for the reply header and link preview background
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getBackgroundCustomEmojiId(): mixed
    {
        return $this->getFieldValue('background_custom_emoji_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setBackgroundCustomEmojiId(mixed $value): static
    {
        return $this->setFieldValue('background_custom_emoji_id', $value);
    }

    /**
     * Optional. Identifier of the accent color for the chat's profile background. See [profile accent colors](https://core.telegram.org/bots/api#profile-accent-colors) for more details.
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getProfileAccentColorId(): mixed
    {
        return $this->getFieldValue('profile_accent_color_id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setProfileAccentColorId(mixed $value): static
    {
        return $this->setFieldValue('profile_accent_color_id', $value);
    }

    /**
     * Optional. Custom emoji identifier of the emoji chosen by the chat for its profile background
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getProfileBackgroundCustomEmojiId(): mixed
    {
        return $this->getFieldValue('profile_background_custom_emoji_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setProfileBackgroundCustomEmojiId(mixed $value): static
    {
        return $this->setFieldValue('profile_background_custom_emoji_id', $value);
    }

    /**
     * Optional. Custom emoji identifier of the emoji status of the chat or the other party in a private chat
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getEmojiStatusCustomEmojiId(): mixed
    {
        return $this->getFieldValue('emoji_status_custom_emoji_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setEmojiStatusCustomEmojiId(mixed $value): static
    {
        return $this->setFieldValue('emoji_status_custom_emoji_id', $value);
    }

    /**
     * Optional. Expiration date of the emoji status of the chat or the other party in a private chat, in Unix time, if any
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getEmojiStatusExpirationDate(): mixed
    {
        return $this->getFieldValue('emoji_status_expiration_date');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setEmojiStatusExpirationDate(mixed $value): static
    {
        return $this->setFieldValue('emoji_status_expiration_date', $value);
    }

    /**
     * Optional. Bio of the other party in a private chat
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getBio(): mixed
    {
        return $this->getFieldValue('bio');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setBio(mixed $value): static
    {
        return $this->setFieldValue('bio', $value);
    }

    /**
     * Optional. *True*, if privacy settings of the other party in the private chat allows to use `tg://user?id=<user_id>` links only in chats with the user
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getHasPrivateForwards(): mixed
    {
        return $this->getFieldValue('has_private_forwards');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setHasPrivateForwards(mixed $value): static
    {
        return $this->setFieldValue('has_private_forwards', $value);
    }

    /**
     * Optional. *True*, if the privacy settings of the other party restrict sending voice and video note messages in the private chat
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getHasRestrictedVoiceAndVideoMessages(): mixed
    {
        return $this->getFieldValue('has_restricted_voice_and_video_messages');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setHasRestrictedVoiceAndVideoMessages(mixed $value): static
    {
        return $this->setFieldValue('has_restricted_voice_and_video_messages', $value);
    }

    /**
     * Optional. *True*, if users need to join the supergroup before they can send messages
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getJoinToSendMessages(): mixed
    {
        return $this->getFieldValue('join_to_send_messages');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setJoinToSendMessages(mixed $value): static
    {
        return $this->setFieldValue('join_to_send_messages', $value);
    }

    /**
     * Optional. *True*, if all users directly joining the supergroup without using an invite link need to be approved by supergroup administrators
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getJoinByRequest(): mixed
    {
        return $this->getFieldValue('join_by_request');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setJoinByRequest(mixed $value): static
    {
        return $this->setFieldValue('join_by_request', $value);
    }

    /**
     * Optional. Description, for groups, supergroups and channel chats
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getDescription(): mixed
    {
        return $this->getFieldValue('description');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setDescription(mixed $value): static
    {
        return $this->setFieldValue('description', $value);
    }

    /**
     * Optional. Primary invite link, for groups, supergroups and channel chats
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

    /**
     * Optional. The most recent pinned message (by sending date)
     *
     * @return Message|null
     * @throws Base\TelegramException
     */
    public function getPinnedMessage(): mixed
    {
        return $this->getFieldValue('pinned_message');
    }

    /**
     * @param Message|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPinnedMessage(mixed $value): static
    {
        return $this->setFieldValue('pinned_message', $value);
    }

    /**
     * Optional. Default chat member permissions, for groups and supergroups
     *
     * @return ChatPermissions|null
     * @throws Base\TelegramException
     */
    public function getPermissions(): mixed
    {
        return $this->getFieldValue('permissions');
    }

    /**
     * @param ChatPermissions|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPermissions(mixed $value): static
    {
        return $this->setFieldValue('permissions', $value);
    }

    /**
     * Required. Information about types of gifts that are accepted by the chat or by the corresponding user for private chats
     *
     * @return AcceptedGiftTypes|null
     * @throws Base\TelegramException
     */
    public function getAcceptedGiftTypes(): mixed
    {
        return $this->getFieldValue('accepted_gift_types');
    }

    /**
     * @param AcceptedGiftTypes|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAcceptedGiftTypes(mixed $value): static
    {
        return $this->setFieldValue('accepted_gift_types', $value);
    }

    /**
     * Optional. *True*, if paid media messages can be sent or forwarded to the channel chat. The field is available only for channel chats.
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getCanSendPaidMedia(): mixed
    {
        return $this->getFieldValue('can_send_paid_media');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCanSendPaidMedia(mixed $value): static
    {
        return $this->setFieldValue('can_send_paid_media', $value);
    }

    /**
     * Optional. For supergroups, the minimum allowed delay between consecutive messages sent by each unprivileged user; in seconds
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getSlowModeDelay(): mixed
    {
        return $this->getFieldValue('slow_mode_delay');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSlowModeDelay(mixed $value): static
    {
        return $this->setFieldValue('slow_mode_delay', $value);
    }

    /**
     * Optional. For supergroups, the minimum number of boosts that a non-administrator user needs to add in order to ignore slow mode and chat permissions
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getUnrestrictBoostCount(): mixed
    {
        return $this->getFieldValue('unrestrict_boost_count');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setUnrestrictBoostCount(mixed $value): static
    {
        return $this->setFieldValue('unrestrict_boost_count', $value);
    }

    /**
     * Optional. The time after which all messages sent to the chat will be automatically deleted; in seconds
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getMessageAutoDeleteTime(): mixed
    {
        return $this->getFieldValue('message_auto_delete_time');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setMessageAutoDeleteTime(mixed $value): static
    {
        return $this->setFieldValue('message_auto_delete_time', $value);
    }

    /**
     * Optional. *True*, if aggressive anti-spam checks are enabled in the supergroup. The field is only available to chat administrators.
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getHasAggressiveAntiSpamEnabled(): mixed
    {
        return $this->getFieldValue('has_aggressive_anti_spam_enabled');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setHasAggressiveAntiSpamEnabled(mixed $value): static
    {
        return $this->setFieldValue('has_aggressive_anti_spam_enabled', $value);
    }

    /**
     * Optional. *True*, if non-administrators can only get the list of bots and administrators in the chat
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getHasHiddenMembers(): mixed
    {
        return $this->getFieldValue('has_hidden_members');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setHasHiddenMembers(mixed $value): static
    {
        return $this->setFieldValue('has_hidden_members', $value);
    }

    /**
     * Optional. *True*, if messages from the chat can't be forwarded to other chats
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getHasProtectedContent(): mixed
    {
        return $this->getFieldValue('has_protected_content');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setHasProtectedContent(mixed $value): static
    {
        return $this->setFieldValue('has_protected_content', $value);
    }

    /**
     * Optional. *True*, if new chat members will have access to old messages; available only to chat administrators
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getHasVisibleHistory(): mixed
    {
        return $this->getFieldValue('has_visible_history');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setHasVisibleHistory(mixed $value): static
    {
        return $this->setFieldValue('has_visible_history', $value);
    }

    /**
     * Optional. For supergroups, name of the group sticker set
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getStickerSetName(): mixed
    {
        return $this->getFieldValue('sticker_set_name');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setStickerSetName(mixed $value): static
    {
        return $this->setFieldValue('sticker_set_name', $value);
    }

    /**
     * Optional. *True*, if the bot can change the group sticker set
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getCanSetStickerSet(): mixed
    {
        return $this->getFieldValue('can_set_sticker_set');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCanSetStickerSet(mixed $value): static
    {
        return $this->setFieldValue('can_set_sticker_set', $value);
    }

    /**
     * Optional. For supergroups, the name of the group's custom emoji sticker set. Custom emoji from this set can be used by all users and bots in the group.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getCustomEmojiStickerSetName(): mixed
    {
        return $this->getFieldValue('custom_emoji_sticker_set_name');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCustomEmojiStickerSetName(mixed $value): static
    {
        return $this->setFieldValue('custom_emoji_sticker_set_name', $value);
    }

    /**
     * Optional. Unique identifier for the linked chat, i.e. the discussion group identifier for a channel and vice versa; for supergroups and channel chats. This identifier may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier.
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getLinkedChatId(): mixed
    {
        return $this->getFieldValue('linked_chat_id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setLinkedChatId(mixed $value): static
    {
        return $this->setFieldValue('linked_chat_id', $value);
    }

    /**
     * Optional. For supergroups, the location to which the supergroup is connected
     *
     * @return ChatLocation|null
     * @throws Base\TelegramException
     */
    public function getLocation(): mixed
    {
        return $this->getFieldValue('location');
    }

    /**
     * @param ChatLocation|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setLocation(mixed $value): static
    {
        return $this->setFieldValue('location', $value);
    }

    /**
     * Optional. For private chats, the rating of the user if any
     *
     * @return UserRating|null
     * @throws Base\TelegramException
     */
    public function getRating(): mixed
    {
        return $this->getFieldValue('rating');
    }

    /**
     * @param UserRating|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setRating(mixed $value): static
    {
        return $this->setFieldValue('rating', $value);
    }

    /**
     * Optional. For private chats, the first audio added to the profile of the user
     *
     * @return Audio|null
     * @throws Base\TelegramException
     */
    public function getFirstProfileAudio(): mixed
    {
        return $this->getFieldValue('first_profile_audio');
    }

    /**
     * @param Audio|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setFirstProfileAudio(mixed $value): static
    {
        return $this->setFieldValue('first_profile_audio', $value);
    }

    /**
     * Optional. The color scheme based on a unique gift that must be used for the chat's name, message replies and link previews
     *
     * @return UniqueGiftColors|null
     * @throws Base\TelegramException
     */
    public function getUniqueGiftColors(): mixed
    {
        return $this->getFieldValue('unique_gift_colors');
    }

    /**
     * @param UniqueGiftColors|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setUniqueGiftColors(mixed $value): static
    {
        return $this->setFieldValue('unique_gift_colors', $value);
    }

    /**
     * Optional. The number of Telegram Stars a general user has to pay to send a message to the chat
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getPaidMessageStarCount(): mixed
    {
        return $this->getFieldValue('paid_message_star_count');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPaidMessageStarCount(mixed $value): static
    {
        return $this->setFieldValue('paid_message_star_count', $value);
    }

    /**
     * Optional. The bot that processes join request queries in the chat. The field is only available to chat administrators.
     *
     * @return User|null
     * @throws Base\TelegramException
     */
    public function getGuardBot(): mixed
    {
        return $this->getFieldValue('guard_bot');
    }

    /**
     * @param User|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setGuardBot(mixed $value): static
    {
        return $this->setFieldValue('guard_bot', $value);
    }

    /**
     * Optional. The `Community` to which the chat belongs
     *
     * @return Community|null
     * @throws Base\TelegramException
     */
    public function getCommunity(): mixed
    {
        return $this->getFieldValue('community');
    }

    /**
     * @param Community|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCommunity(mixed $value): static
    {
        return $this->setFieldValue('community', $value);
    }
}
