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

namespace DevBX\Telegram\Types;

use DevBX\Telegram\Base;


/**
 * This object contains full information about a chat.
 * @property int $id
 * Unique identifier for this chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
 * @property string $type
 * Type of the chat, can be either “private”, “group”, “supergroup” or “channel”
 * @property string $title
 * *Optional*. Title, for supergroups, channels and group chats
 * @property string $username
 * *Optional*. Username, for private chats, supergroups and channels if available
 * @property string $firstName
 * *Optional*. First name of the other party in a private chat
 * @property string $lastName
 * *Optional*. Last name of the other party in a private chat
 * @property bool $isForum
 * *Optional*. *True*, if the supergroup chat is a forum (has [topics](https://telegram.org/blog/topics-in-groups-collectible-usernames#topics-in-groups) enabled)
 * @property int $accentColorId
 * Identifier of the accent color for the chat name and backgrounds of the chat photo, reply header, and link preview. See [accent colors](#accent-colors) for more details.
 * @property int $maxReactionCount
 * The maximum number of reactions that can be set on a message in the chat
 * @property ChatPhoto $photo
 * *Optional*. Chat photo
 * @property string[] $activeUsernames
 * *Optional*. If non-empty, the list of all [active chat usernames](https://telegram.org/blog/topics-in-groups-collectible-usernames#collectible-usernames); for private chats, supergroups and channels
 * @property Birthdate $birthdate
 * *Optional*. For private chats, the date of birth of the user
 * @property BusinessIntro $businessIntro
 * *Optional*. For private chats with business accounts, the intro of the business
 * @property BusinessLocation $businessLocation
 * *Optional*. For private chats with business accounts, the location of the business
 * @property BusinessOpeningHours $businessOpeningHours
 * *Optional*. For private chats with business accounts, the opening hours of the business
 * @property Chat $personalChat
 * *Optional*. For private chats, the personal channel of the user
 * @property Base\ArrayObject|ReactionType[] $availableReactions
 * *Optional*. List of available reactions allowed in the chat. If omitted, then all [emoji reactions](#reactiontypeemoji) are allowed.
 * @property string $backgroundCustomEmojiId
 * *Optional*. Custom emoji identifier of the emoji chosen by the chat for the reply header and link preview background
 * @property int $profileAccentColorId
 * *Optional*. Identifier of the accent color for the chat's profile background. See [profile accent colors](#profile-accent-colors) for more details.
 * @property string $profileBackgroundCustomEmojiId
 * *Optional*. Custom emoji identifier of the emoji chosen by the chat for its profile background
 * @property string $emojiStatusCustomEmojiId
 * *Optional*. Custom emoji identifier of the emoji status of the chat or the other party in a private chat
 * @property int $emojiStatusExpirationDate
 * *Optional*. Expiration date of the emoji status of the chat or the other party in a private chat, in Unix time, if any
 * @property string $bio
 * *Optional*. Bio of the other party in a private chat
 * @property bool $hasPrivateForwards
 * *Optional*. *True*, if privacy settings of the other party in the private chat allows to use `tg://user?id=<user_id>` links only in chats with the user
 * @property bool $hasRestrictedVoiceAndVideoMessages
 * *Optional*. *True*, if the privacy settings of the other party restrict sending voice and video note messages in the private chat
 * @property bool $joinToSendMessages
 * *Optional*. *True*, if users need to join the supergroup before they can send messages
 * @property bool $joinByRequest
 * *Optional*. *True*, if all users directly joining the supergroup without using an invite link need to be approved by supergroup administrators
 * @property string $description
 * *Optional*. Description, for groups, supergroups and channel chats
 * @property string $inviteLink
 * *Optional*. Primary invite link, for groups, supergroups and channel chats
 * @property Message $pinnedMessage
 * *Optional*. The most recent pinned message (by sending date)
 * @property ChatPermissions $permissions
 * *Optional*. Default chat member permissions, for groups and supergroups
 * @property bool $canSendGift
 * *Optional*. *True*, if gifts can be sent to the chat
 * @property bool $canSendPaidMedia
 * *Optional*. *True*, if paid media messages can be sent or forwarded to the channel chat. The field is available only for channel chats.
 * @property int $slowModeDelay
 * *Optional*. For supergroups, the minimum allowed delay between consecutive messages sent by each unprivileged user; in seconds
 * @property int $unrestrictBoostCount
 * *Optional*. For supergroups, the minimum number of boosts that a non-administrator user needs to add in order to ignore slow mode and chat permissions
 * @property int $messageAutoDeleteTime
 * *Optional*. The time after which all messages sent to the chat will be automatically deleted; in seconds
 * @property bool $hasAggressiveAntiSpamEnabled
 * *Optional*. *True*, if aggressive anti-spam checks are enabled in the supergroup. The field is only available to chat administrators.
 * @property bool $hasHiddenMembers
 * *Optional*. *True*, if non-administrators can only get the list of bots and administrators in the chat
 * @property bool $hasProtectedContent
 * *Optional*. *True*, if messages from the chat can't be forwarded to other chats
 * @property bool $hasVisibleHistory
 * *Optional*. *True*, if new chat members will have access to old messages; available only to chat administrators
 * @property string $stickerSetName
 * *Optional*. For supergroups, name of the group sticker set
 * @property bool $canSetStickerSet
 * *Optional*. *True*, if the bot can change the group sticker set
 * @property string $customEmojiStickerSetName
 * *Optional*. For supergroups, the name of the group's custom emoji sticker set. Custom emoji from this set can be used by all users and bots in the group.
 * @property int $linkedChatId
 * *Optional*. Unique identifier for the linked chat, i.e. the discussion group identifier for a channel and vice versa; for supergroups and channel chats. This identifier may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier.
 * @property ChatLocation $location
 * *Optional*. For supergroups, the location to which the supergroup is connected
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
			'can_send_gift' => [
				'type' => ['bool'],
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
		];
	}
	/**
	* @return int
	*/

	public function getId(): mixed
	{
		return $this->getFieldValue('id');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setId(mixed $value): static
	{
		return $this->setFieldValue('id', $value);
	}

	/**
	* @return string
	*/

	public function getType(): mixed
	{
		return $this->getFieldValue('type');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setType(mixed $value): static
	{
		return $this->setFieldValue('type', $value);
	}

	/**
	* @return string
	*/

	public function getTitle(): mixed
	{
		return $this->getFieldValue('title');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setTitle(mixed $value): static
	{
		return $this->setFieldValue('title', $value);
	}

	/**
	* @return string
	*/

	public function getUsername(): mixed
	{
		return $this->getFieldValue('username');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setUsername(mixed $value): static
	{
		return $this->setFieldValue('username', $value);
	}

	/**
	* @return string
	*/

	public function getFirstName(): mixed
	{
		return $this->getFieldValue('first_name');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setFirstName(mixed $value): static
	{
		return $this->setFieldValue('first_name', $value);
	}

	/**
	* @return string
	*/

	public function getLastName(): mixed
	{
		return $this->getFieldValue('last_name');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setLastName(mixed $value): static
	{
		return $this->setFieldValue('last_name', $value);
	}

	/**
	* @return bool
	*/

	public function getIsForum(): mixed
	{
		return $this->getFieldValue('is_forum');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setIsForum(mixed $value): static
	{
		return $this->setFieldValue('is_forum', $value);
	}

	/**
	* @return int
	*/

	public function getAccentColorId(): mixed
	{
		return $this->getFieldValue('accent_color_id');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setAccentColorId(mixed $value): static
	{
		return $this->setFieldValue('accent_color_id', $value);
	}

	/**
	* @return int
	*/

	public function getMaxReactionCount(): mixed
	{
		return $this->getFieldValue('max_reaction_count');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setMaxReactionCount(mixed $value): static
	{
		return $this->setFieldValue('max_reaction_count', $value);
	}

	/**
	* @return ChatPhoto
	*/

	public function getPhoto(): mixed
	{
		return $this->getFieldValue('photo');
	}

	/**
	* @param ChatPhoto $value
	* @return static
	*/

	public function setPhoto(mixed $value): static
	{
		return $this->setFieldValue('photo', $value);
	}

	/**
	* @return string[]
	*/

	public function getActiveUsernames(): mixed
	{
		return $this->getFieldValue('active_usernames');
	}

	/**
	* @param string[] $value
	* @return static
	*/

	public function setActiveUsernames(mixed $value): static
	{
		return $this->setFieldValue('active_usernames', $value);
	}

	/**
	* @return Birthdate
	*/

	public function getBirthdate(): mixed
	{
		return $this->getFieldValue('birthdate');
	}

	/**
	* @param Birthdate $value
	* @return static
	*/

	public function setBirthdate(mixed $value): static
	{
		return $this->setFieldValue('birthdate', $value);
	}

	/**
	* @return BusinessIntro
	*/

	public function getBusinessIntro(): mixed
	{
		return $this->getFieldValue('business_intro');
	}

	/**
	* @param BusinessIntro $value
	* @return static
	*/

	public function setBusinessIntro(mixed $value): static
	{
		return $this->setFieldValue('business_intro', $value);
	}

	/**
	* @return BusinessLocation
	*/

	public function getBusinessLocation(): mixed
	{
		return $this->getFieldValue('business_location');
	}

	/**
	* @param BusinessLocation $value
	* @return static
	*/

	public function setBusinessLocation(mixed $value): static
	{
		return $this->setFieldValue('business_location', $value);
	}

	/**
	* @return BusinessOpeningHours
	*/

	public function getBusinessOpeningHours(): mixed
	{
		return $this->getFieldValue('business_opening_hours');
	}

	/**
	* @param BusinessOpeningHours $value
	* @return static
	*/

	public function setBusinessOpeningHours(mixed $value): static
	{
		return $this->setFieldValue('business_opening_hours', $value);
	}

	/**
	* @return Chat
	*/

	public function getPersonalChat(): mixed
	{
		return $this->getFieldValue('personal_chat');
	}

	/**
	* @param Chat $value
	* @return static
	*/

	public function setPersonalChat(mixed $value): static
	{
		return $this->setFieldValue('personal_chat', $value);
	}

	/**
	* @return Base\ArrayObject|ReactionType[]
	*/

	public function getAvailableReactions(): mixed
	{
		return $this->getFieldValue('available_reactions');
	}

	/**
	* @param Base\ArrayObject|ReactionType[] $value
	* @return static
	*/

	public function setAvailableReactions(mixed $value): static
	{
		return $this->setFieldValue('available_reactions', $value);
	}

	/**
	* @return string
	*/

	public function getBackgroundCustomEmojiId(): mixed
	{
		return $this->getFieldValue('background_custom_emoji_id');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setBackgroundCustomEmojiId(mixed $value): static
	{
		return $this->setFieldValue('background_custom_emoji_id', $value);
	}

	/**
	* @return int
	*/

	public function getProfileAccentColorId(): mixed
	{
		return $this->getFieldValue('profile_accent_color_id');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setProfileAccentColorId(mixed $value): static
	{
		return $this->setFieldValue('profile_accent_color_id', $value);
	}

	/**
	* @return string
	*/

	public function getProfileBackgroundCustomEmojiId(): mixed
	{
		return $this->getFieldValue('profile_background_custom_emoji_id');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setProfileBackgroundCustomEmojiId(mixed $value): static
	{
		return $this->setFieldValue('profile_background_custom_emoji_id', $value);
	}

	/**
	* @return string
	*/

	public function getEmojiStatusCustomEmojiId(): mixed
	{
		return $this->getFieldValue('emoji_status_custom_emoji_id');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setEmojiStatusCustomEmojiId(mixed $value): static
	{
		return $this->setFieldValue('emoji_status_custom_emoji_id', $value);
	}

	/**
	* @return int
	*/

	public function getEmojiStatusExpirationDate(): mixed
	{
		return $this->getFieldValue('emoji_status_expiration_date');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setEmojiStatusExpirationDate(mixed $value): static
	{
		return $this->setFieldValue('emoji_status_expiration_date', $value);
	}

	/**
	* @return string
	*/

	public function getBio(): mixed
	{
		return $this->getFieldValue('bio');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setBio(mixed $value): static
	{
		return $this->setFieldValue('bio', $value);
	}

	/**
	* @return bool
	*/

	public function getHasPrivateForwards(): mixed
	{
		return $this->getFieldValue('has_private_forwards');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setHasPrivateForwards(mixed $value): static
	{
		return $this->setFieldValue('has_private_forwards', $value);
	}

	/**
	* @return bool
	*/

	public function getHasRestrictedVoiceAndVideoMessages(): mixed
	{
		return $this->getFieldValue('has_restricted_voice_and_video_messages');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setHasRestrictedVoiceAndVideoMessages(mixed $value): static
	{
		return $this->setFieldValue('has_restricted_voice_and_video_messages', $value);
	}

	/**
	* @return bool
	*/

	public function getJoinToSendMessages(): mixed
	{
		return $this->getFieldValue('join_to_send_messages');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setJoinToSendMessages(mixed $value): static
	{
		return $this->setFieldValue('join_to_send_messages', $value);
	}

	/**
	* @return bool
	*/

	public function getJoinByRequest(): mixed
	{
		return $this->getFieldValue('join_by_request');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setJoinByRequest(mixed $value): static
	{
		return $this->setFieldValue('join_by_request', $value);
	}

	/**
	* @return string
	*/

	public function getDescription(): mixed
	{
		return $this->getFieldValue('description');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setDescription(mixed $value): static
	{
		return $this->setFieldValue('description', $value);
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
	* @return Message
	*/

	public function getPinnedMessage(): mixed
	{
		return $this->getFieldValue('pinned_message');
	}

	/**
	* @param Message $value
	* @return static
	*/

	public function setPinnedMessage(mixed $value): static
	{
		return $this->setFieldValue('pinned_message', $value);
	}

	/**
	* @return ChatPermissions
	*/

	public function getPermissions(): mixed
	{
		return $this->getFieldValue('permissions');
	}

	/**
	* @param ChatPermissions $value
	* @return static
	*/

	public function setPermissions(mixed $value): static
	{
		return $this->setFieldValue('permissions', $value);
	}

	/**
	* @return bool
	*/

	public function getCanSendGift(): mixed
	{
		return $this->getFieldValue('can_send_gift');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setCanSendGift(mixed $value): static
	{
		return $this->setFieldValue('can_send_gift', $value);
	}

	/**
	* @return bool
	*/

	public function getCanSendPaidMedia(): mixed
	{
		return $this->getFieldValue('can_send_paid_media');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setCanSendPaidMedia(mixed $value): static
	{
		return $this->setFieldValue('can_send_paid_media', $value);
	}

	/**
	* @return int
	*/

	public function getSlowModeDelay(): mixed
	{
		return $this->getFieldValue('slow_mode_delay');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setSlowModeDelay(mixed $value): static
	{
		return $this->setFieldValue('slow_mode_delay', $value);
	}

	/**
	* @return int
	*/

	public function getUnrestrictBoostCount(): mixed
	{
		return $this->getFieldValue('unrestrict_boost_count');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setUnrestrictBoostCount(mixed $value): static
	{
		return $this->setFieldValue('unrestrict_boost_count', $value);
	}

	/**
	* @return int
	*/

	public function getMessageAutoDeleteTime(): mixed
	{
		return $this->getFieldValue('message_auto_delete_time');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setMessageAutoDeleteTime(mixed $value): static
	{
		return $this->setFieldValue('message_auto_delete_time', $value);
	}

	/**
	* @return bool
	*/

	public function getHasAggressiveAntiSpamEnabled(): mixed
	{
		return $this->getFieldValue('has_aggressive_anti_spam_enabled');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setHasAggressiveAntiSpamEnabled(mixed $value): static
	{
		return $this->setFieldValue('has_aggressive_anti_spam_enabled', $value);
	}

	/**
	* @return bool
	*/

	public function getHasHiddenMembers(): mixed
	{
		return $this->getFieldValue('has_hidden_members');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setHasHiddenMembers(mixed $value): static
	{
		return $this->setFieldValue('has_hidden_members', $value);
	}

	/**
	* @return bool
	*/

	public function getHasProtectedContent(): mixed
	{
		return $this->getFieldValue('has_protected_content');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setHasProtectedContent(mixed $value): static
	{
		return $this->setFieldValue('has_protected_content', $value);
	}

	/**
	* @return bool
	*/

	public function getHasVisibleHistory(): mixed
	{
		return $this->getFieldValue('has_visible_history');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setHasVisibleHistory(mixed $value): static
	{
		return $this->setFieldValue('has_visible_history', $value);
	}

	/**
	* @return string
	*/

	public function getStickerSetName(): mixed
	{
		return $this->getFieldValue('sticker_set_name');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setStickerSetName(mixed $value): static
	{
		return $this->setFieldValue('sticker_set_name', $value);
	}

	/**
	* @return bool
	*/

	public function getCanSetStickerSet(): mixed
	{
		return $this->getFieldValue('can_set_sticker_set');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setCanSetStickerSet(mixed $value): static
	{
		return $this->setFieldValue('can_set_sticker_set', $value);
	}

	/**
	* @return string
	*/

	public function getCustomEmojiStickerSetName(): mixed
	{
		return $this->getFieldValue('custom_emoji_sticker_set_name');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setCustomEmojiStickerSetName(mixed $value): static
	{
		return $this->setFieldValue('custom_emoji_sticker_set_name', $value);
	}

	/**
	* @return int
	*/

	public function getLinkedChatId(): mixed
	{
		return $this->getFieldValue('linked_chat_id');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setLinkedChatId(mixed $value): static
	{
		return $this->setFieldValue('linked_chat_id', $value);
	}

	/**
	* @return ChatLocation
	*/

	public function getLocation(): mixed
	{
		return $this->getFieldValue('location');
	}

	/**
	* @param ChatLocation $value
	* @return static
	*/

	public function setLocation(mixed $value): static
	{
		return $this->setFieldValue('location', $value);
	}

}