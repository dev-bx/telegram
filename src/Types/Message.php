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
use DevBX\Telegram\Stickers;
use DevBX\Telegram\Games;
use DevBX\Telegram\Payments;
use DevBX\Telegram\Passport;


/**
 * This object represents a message.
 * @property int $messageId
 * Unique message identifier inside this chat. In specific instances (e.g., message containing a video sent to a big chat), the server might automatically schedule a message instead of sending it immediately. In such cases, this field will be 0 and the relevant message will be unusable until it is actually sent
 * @property int $messageThreadId
 * *Optional*. Unique identifier of a message thread to which the message belongs; for supergroups only
 * @property User $from
 * *Optional*. Sender of the message; may be empty for messages sent to channels. For backward compatibility, if the message was sent on behalf of a chat, the field contains a fake sender user in non-channel chats
 * @property Chat $senderChat
 * *Optional*. Sender of the message when sent on behalf of a chat. For example, the supergroup itself for messages sent by its anonymous administrators or a linked channel for messages automatically forwarded to the channel's discussion group. For backward compatibility, if the message was sent on behalf of a chat, the field *from* contains a fake sender user in non-channel chats.
 * @property int $senderBoostCount
 * *Optional*. If the sender of the message boosted the chat, the number of boosts added by the user
 * @property User $senderBusinessBot
 * *Optional*. The bot that actually sent the message on behalf of the business account. Available only for outgoing messages sent on behalf of the connected business account.
 * @property int $date
 * Date the message was sent in Unix time. It is always a positive number, representing a valid date.
 * @property string $businessConnectionId
 * *Optional*. Unique identifier of the business connection from which the message was received. If non-empty, the message belongs to a chat of the corresponding business account that is independent from any potential bot chat which might share the same identifier.
 * @property Chat $chat
 * Chat the message belongs to
 * @property MessageOrigin|MessageOriginUser|MessageOriginHiddenUser|MessageOriginChat|MessageOriginChannel $forwardOrigin
 * *Optional*. Information about the original message for forwarded messages
 * @property bool $isTopicMessage
 * *Optional*. *True*, if the message is sent to a forum topic
 * @property bool $isAutomaticForward
 * *Optional*. *True*, if the message is a channel post that was automatically forwarded to the connected discussion group
 * @property Message $replyToMessage
 * *Optional*. For replies in the same chat and message thread, the original message. Note that the Message object in this field will not contain further *reply\_to\_message* fields even if it itself is a reply.
 * @property ExternalReplyInfo $externalReply
 * *Optional*. Information about the message that is being replied to, which may come from another chat or forum topic
 * @property TextQuote $quote
 * *Optional*. For replies that quote part of the original message, the quoted part of the message
 * @property Story $replyToStory
 * *Optional*. For replies to a story, the original story
 * @property User $viaBot
 * *Optional*. Bot through which the message was sent
 * @property int $editDate
 * *Optional*. Date the message was last edited in Unix time
 * @property bool $hasProtectedContent
 * *Optional*. *True*, if the message can't be forwarded
 * @property bool $isFromOffline
 * *Optional*. *True*, if the message was sent by an implicit action, for example, as an away or a greeting business message, or as a scheduled message
 * @property string $mediaGroupId
 * *Optional*. The unique identifier of a media message group this message belongs to
 * @property string $authorSignature
 * *Optional*. Signature of the post author for messages in channels, or the custom title of an anonymous group administrator
 * @property int $paidStarCount
 * *Optional*. The number of Telegram Stars that were paid by the sender of the message to send it
 * @property string $text
 * *Optional*. For text messages, the actual UTF-8 text of the message
 * @property Base\ArrayObject|MessageEntity[] $entities
 * *Optional*. For text messages, special entities like usernames, URLs, bot commands, etc. that appear in the text
 * @property LinkPreviewOptions $linkPreviewOptions
 * *Optional*. Options used for link preview generation for the message, if it is a text message and link preview options were changed
 * @property string $effectId
 * *Optional*. Unique identifier of the message effect added to the message
 * @property Animation $animation
 * *Optional*. Message is an animation, information about the animation. For backward compatibility, when this field is set, the *document* field will also be set
 * @property Audio $audio
 * *Optional*. Message is an audio file, information about the file
 * @property Document $document
 * *Optional*. Message is a general file, information about the file
 * @property PaidMediaInfo $paidMedia
 * *Optional*. Message contains paid media; information about the paid media
 * @property Base\ArrayObject|PhotoSize[] $photo
 * *Optional*. Message is a photo, available sizes of the photo
 * @property Stickers\Sticker $sticker
 * *Optional*. Message is a sticker, information about the sticker
 * @property Story $story
 * *Optional*. Message is a forwarded story
 * @property Video $video
 * *Optional*. Message is a video, information about the video
 * @property VideoNote $videoNote
 * *Optional*. Message is a [video note](https://telegram.org/blog/video-messages-and-telescope), information about the video message
 * @property Voice $voice
 * *Optional*. Message is a voice message, information about the file
 * @property string $caption
 * *Optional*. Caption for the animation, audio, document, paid media, photo, video or voice
 * @property Base\ArrayObject|MessageEntity[] $captionEntities
 * *Optional*. For messages with a caption, special entities like usernames, URLs, bot commands, etc. that appear in the caption
 * @property bool $showCaptionAboveMedia
 * *Optional*. *True*, if the caption must be shown above the message media
 * @property bool $hasMediaSpoiler
 * *Optional*. *True*, if the message media is covered by a spoiler animation
 * @property Checklist $checklist
 * *Optional*. Message is a checklist
 * @property Contact $contact
 * *Optional*. Message is a shared contact, information about the contact
 * @property Dice $dice
 * *Optional*. Message is a dice with random value
 * @property Games\Game $game
 * *Optional*. Message is a game, information about the game. [More about games »](#games)
 * @property Poll $poll
 * *Optional*. Message is a native poll, information about the poll
 * @property Venue $venue
 * *Optional*. Message is a venue, information about the venue. For backward compatibility, when this field is set, the *location* field will also be set
 * @property Location $location
 * *Optional*. Message is a shared location, information about the location
 * @property Base\ArrayObject|User[] $newChatMembers
 * *Optional*. New members that were added to the group or supergroup and information about them (the bot itself may be one of these members)
 * @property User $leftChatMember
 * *Optional*. A member was removed from the group, information about them (this member may be the bot itself)
 * @property string $newChatTitle
 * *Optional*. A chat title was changed to this value
 * @property Base\ArrayObject|PhotoSize[] $newChatPhoto
 * *Optional*. A chat photo was change to this value
 * @property bool $deleteChatPhoto
 * *Optional*. Service message: the chat photo was deleted
 * @property bool $groupChatCreated
 * *Optional*. Service message: the group has been created
 * @property bool $supergroupChatCreated
 * *Optional*. Service message: the supergroup has been created. This field can't be received in a message coming through updates, because bot can't be a member of a supergroup when it is created. It can only be found in reply\_to\_message if someone replies to a very first message in a directly created supergroup.
 * @property bool $channelChatCreated
 * *Optional*. Service message: the channel has been created. This field can't be received in a message coming through updates, because bot can't be a member of a channel when it is created. It can only be found in reply\_to\_message if someone replies to a very first message in a channel.
 * @property MessageAutoDeleteTimerChanged $messageAutoDeleteTimerChanged
 * *Optional*. Service message: auto-delete timer settings changed in the chat
 * @property int $migrateToChatId
 * *Optional*. The group has been migrated to a supergroup with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
 * @property int $migrateFromChatId
 * *Optional*. The supergroup has been migrated from a group with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
 * @property MaybeInaccessibleMessage|Message|InaccessibleMessage $pinnedMessage
 * *Optional*. Specified message was pinned. Note that the Message object in this field will not contain further *reply\_to\_message* fields even if it itself is a reply.
 * @property Payments\Invoice $invoice
 * *Optional*. Message is an invoice for a [payment](#payments), information about the invoice. [More about payments »](#payments)
 * @property Payments\SuccessfulPayment $successfulPayment
 * *Optional*. Message is a service message about a successful payment, information about the payment. [More about payments »](#payments)
 * @property Payments\RefundedPayment $refundedPayment
 * *Optional*. Message is a service message about a refunded payment, information about the payment. [More about payments »](#payments)
 * @property UsersShared $usersShared
 * *Optional*. Service message: users were shared with the bot
 * @property ChatShared $chatShared
 * *Optional*. Service message: a chat was shared with the bot
 * @property GiftInfo $gift
 * *Optional*. Service message: a regular gift was sent or received
 * @property UniqueGiftInfo $uniqueGift
 * *Optional*. Service message: a unique gift was sent or received
 * @property string $connectedWebsite
 * *Optional*. The domain name of the website on which the user has logged in. [More about Telegram Login »](/widgets/login)
 * @property WriteAccessAllowed $writeAccessAllowed
 * *Optional*. Service message: the user allowed the bot to write messages after adding it to the attachment or side menu, launching a Web App from a link, or accepting an explicit request from a Web App sent by the method [requestWriteAccess](/bots/webapps#initializing-mini-apps)
 * @property Passport\PassportData $passportData
 * *Optional*. Telegram Passport data
 * @property ProximityAlertTriggered $proximityAlertTriggered
 * *Optional*. Service message. A user in the chat triggered another user's proximity alert while sharing Live Location.
 * @property ChatBoostAdded $boostAdded
 * *Optional*. Service message: user boosted the chat
 * @property ChatBackground $chatBackgroundSet
 * *Optional*. Service message: chat background set
 * @property ChecklistTasksDone $checklistTasksDone
 * *Optional*. Service message: some tasks in a checklist were marked as done or not done
 * @property ChecklistTasksAdded $checklistTasksAdded
 * *Optional*. Service message: tasks were added to a checklist
 * @property DirectMessagePriceChanged $directMessagePriceChanged
 * *Optional*. Service message: the price for paid messages in the corresponding direct messages chat of a channel has changed
 * @property ForumTopicCreated $forumTopicCreated
 * *Optional*. Service message: forum topic created
 * @property ForumTopicEdited $forumTopicEdited
 * *Optional*. Service message: forum topic edited
 * @property ForumTopicClosed $forumTopicClosed
 * *Optional*. Service message: forum topic closed
 * @property ForumTopicReopened $forumTopicReopened
 * *Optional*. Service message: forum topic reopened
 * @property GeneralForumTopicHidden $generalForumTopicHidden
 * *Optional*. Service message: the 'General' forum topic hidden
 * @property GeneralForumTopicUnhidden $generalForumTopicUnhidden
 * *Optional*. Service message: the 'General' forum topic unhidden
 * @property GiveawayCreated $giveawayCreated
 * *Optional*. Service message: a scheduled giveaway was created
 * @property Giveaway $giveaway
 * *Optional*. The message is a scheduled giveaway message
 * @property GiveawayWinners $giveawayWinners
 * *Optional*. A giveaway with public winners was completed
 * @property GiveawayCompleted $giveawayCompleted
 * *Optional*. Service message: a giveaway without public winners was completed
 * @property PaidMessagePriceChanged $paidMessagePriceChanged
 * *Optional*. Service message: the price for paid messages has changed in the chat
 * @property VideoChatScheduled $videoChatScheduled
 * *Optional*. Service message: video chat scheduled
 * @property VideoChatStarted $videoChatStarted
 * *Optional*. Service message: video chat started
 * @property VideoChatEnded $videoChatEnded
 * *Optional*. Service message: video chat ended
 * @property VideoChatParticipantsInvited $videoChatParticipantsInvited
 * *Optional*. Service message: new participants invited to a video chat
 * @property WebAppData $webAppData
 * *Optional*. Service message: data sent by a Web App
 * @property InlineKeyboardMarkup $replyMarkup
 * *Optional*. Inline keyboard attached to the message. `login_url` buttons are represented as ordinary `url` buttons.
 */
class Message extends MaybeInaccessibleMessage
{
	public static function getFields(): array
	{
		return [
			'message_id' => [
				'type' => ['int'],
				'required' => true,
			],
			'message_thread_id' => [
				'type' => ['int'],
			],
			'from' => [
				'type' => [User::class],
			],
			'sender_chat' => [
				'type' => [Chat::class],
			],
			'sender_boost_count' => [
				'type' => ['int'],
			],
			'sender_business_bot' => [
				'type' => [User::class],
			],
			'date' => [
				'type' => ['int'],
				'required' => true,
			],
			'business_connection_id' => [
				'type' => ['string'],
			],
			'chat' => [
				'type' => [Chat::class],
				'required' => true,
			],
			'forward_origin' => [
				'type' => [MessageOrigin::class],
			],
			'is_topic_message' => [
				'type' => ['bool'],
			],
			'is_automatic_forward' => [
				'type' => ['bool'],
			],
			'reply_to_message' => [
				'type' => [Message::class],
			],
			'external_reply' => [
				'type' => [ExternalReplyInfo::class],
			],
			'quote' => [
				'type' => [TextQuote::class],
			],
			'reply_to_story' => [
				'type' => [Story::class],
			],
			'via_bot' => [
				'type' => [User::class],
			],
			'edit_date' => [
				'type' => ['int'],
			],
			'has_protected_content' => [
				'type' => ['bool'],
			],
			'is_from_offline' => [
				'type' => ['bool'],
			],
			'media_group_id' => [
				'type' => ['string'],
			],
			'author_signature' => [
				'type' => ['string'],
			],
			'paid_star_count' => [
				'type' => ['int'],
			],
			'text' => [
				'type' => ['string'],
			],
			'entities' => [
				'type' => [MessageEntity::class],
				'isArray' => true,
			],
			'link_preview_options' => [
				'type' => [LinkPreviewOptions::class],
			],
			'effect_id' => [
				'type' => ['string'],
			],
			'animation' => [
				'type' => [Animation::class],
			],
			'audio' => [
				'type' => [Audio::class],
			],
			'document' => [
				'type' => [Document::class],
			],
			'paid_media' => [
				'type' => [PaidMediaInfo::class],
			],
			'photo' => [
				'type' => [PhotoSize::class],
				'isArray' => true,
			],
			'sticker' => [
				'type' => [Stickers\Sticker::class],
			],
			'story' => [
				'type' => [Story::class],
			],
			'video' => [
				'type' => [Video::class],
			],
			'video_note' => [
				'type' => [VideoNote::class],
			],
			'voice' => [
				'type' => [Voice::class],
			],
			'caption' => [
				'type' => ['string'],
			],
			'caption_entities' => [
				'type' => [MessageEntity::class],
				'isArray' => true,
			],
			'show_caption_above_media' => [
				'type' => ['bool'],
			],
			'has_media_spoiler' => [
				'type' => ['bool'],
			],
			'checklist' => [
				'type' => [Checklist::class],
			],
			'contact' => [
				'type' => [Contact::class],
			],
			'dice' => [
				'type' => [Dice::class],
			],
			'game' => [
				'type' => [Games\Game::class],
			],
			'poll' => [
				'type' => [Poll::class],
			],
			'venue' => [
				'type' => [Venue::class],
			],
			'location' => [
				'type' => [Location::class],
			],
			'new_chat_members' => [
				'type' => [User::class],
				'isArray' => true,
			],
			'left_chat_member' => [
				'type' => [User::class],
			],
			'new_chat_title' => [
				'type' => ['string'],
			],
			'new_chat_photo' => [
				'type' => [PhotoSize::class],
				'isArray' => true,
			],
			'delete_chat_photo' => [
				'type' => ['bool'],
			],
			'group_chat_created' => [
				'type' => ['bool'],
			],
			'supergroup_chat_created' => [
				'type' => ['bool'],
			],
			'channel_chat_created' => [
				'type' => ['bool'],
			],
			'message_auto_delete_timer_changed' => [
				'type' => [MessageAutoDeleteTimerChanged::class],
			],
			'migrate_to_chat_id' => [
				'type' => ['int'],
			],
			'migrate_from_chat_id' => [
				'type' => ['int'],
			],
			'pinned_message' => [
				'type' => [MaybeInaccessibleMessage::class],
			],
			'invoice' => [
				'type' => [Payments\Invoice::class],
			],
			'successful_payment' => [
				'type' => [Payments\SuccessfulPayment::class],
			],
			'refunded_payment' => [
				'type' => [Payments\RefundedPayment::class],
			],
			'users_shared' => [
				'type' => [UsersShared::class],
			],
			'chat_shared' => [
				'type' => [ChatShared::class],
			],
			'gift' => [
				'type' => [GiftInfo::class],
			],
			'unique_gift' => [
				'type' => [UniqueGiftInfo::class],
			],
			'connected_website' => [
				'type' => ['string'],
			],
			'write_access_allowed' => [
				'type' => [WriteAccessAllowed::class],
			],
			'passport_data' => [
				'type' => [Passport\PassportData::class],
			],
			'proximity_alert_triggered' => [
				'type' => [ProximityAlertTriggered::class],
			],
			'boost_added' => [
				'type' => [ChatBoostAdded::class],
			],
			'chat_background_set' => [
				'type' => [ChatBackground::class],
			],
			'checklist_tasks_done' => [
				'type' => [ChecklistTasksDone::class],
			],
			'checklist_tasks_added' => [
				'type' => [ChecklistTasksAdded::class],
			],
			'direct_message_price_changed' => [
				'type' => [DirectMessagePriceChanged::class],
			],
			'forum_topic_created' => [
				'type' => [ForumTopicCreated::class],
			],
			'forum_topic_edited' => [
				'type' => [ForumTopicEdited::class],
			],
			'forum_topic_closed' => [
				'type' => [ForumTopicClosed::class],
			],
			'forum_topic_reopened' => [
				'type' => [ForumTopicReopened::class],
			],
			'general_forum_topic_hidden' => [
				'type' => [GeneralForumTopicHidden::class],
			],
			'general_forum_topic_unhidden' => [
				'type' => [GeneralForumTopicUnhidden::class],
			],
			'giveaway_created' => [
				'type' => [GiveawayCreated::class],
			],
			'giveaway' => [
				'type' => [Giveaway::class],
			],
			'giveaway_winners' => [
				'type' => [GiveawayWinners::class],
			],
			'giveaway_completed' => [
				'type' => [GiveawayCompleted::class],
			],
			'paid_message_price_changed' => [
				'type' => [PaidMessagePriceChanged::class],
			],
			'video_chat_scheduled' => [
				'type' => [VideoChatScheduled::class],
			],
			'video_chat_started' => [
				'type' => [VideoChatStarted::class],
			],
			'video_chat_ended' => [
				'type' => [VideoChatEnded::class],
			],
			'video_chat_participants_invited' => [
				'type' => [VideoChatParticipantsInvited::class],
			],
			'web_app_data' => [
				'type' => [WebAppData::class],
			],
			'reply_markup' => [
				'type' => [InlineKeyboardMarkup::class],
			],
		];
	}
	/**
	* @return int
	*/

	public function getMessageId(): mixed
	{
		return $this->getFieldValue('message_id');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setMessageId(mixed $value): static
	{
		return $this->setFieldValue('message_id', $value);
	}

	/**
	* @return int
	*/

	public function getMessageThreadId(): mixed
	{
		return $this->getFieldValue('message_thread_id');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setMessageThreadId(mixed $value): static
	{
		return $this->setFieldValue('message_thread_id', $value);
	}

	/**
	* @return User
	*/

	public function getFrom(): mixed
	{
		return $this->getFieldValue('from');
	}

	/**
	* @param User $value
	* @return static
	*/

	public function setFrom(mixed $value): static
	{
		return $this->setFieldValue('from', $value);
	}

	/**
	* @return Chat
	*/

	public function getSenderChat(): mixed
	{
		return $this->getFieldValue('sender_chat');
	}

	/**
	* @param Chat $value
	* @return static
	*/

	public function setSenderChat(mixed $value): static
	{
		return $this->setFieldValue('sender_chat', $value);
	}

	/**
	* @return int
	*/

	public function getSenderBoostCount(): mixed
	{
		return $this->getFieldValue('sender_boost_count');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setSenderBoostCount(mixed $value): static
	{
		return $this->setFieldValue('sender_boost_count', $value);
	}

	/**
	* @return User
	*/

	public function getSenderBusinessBot(): mixed
	{
		return $this->getFieldValue('sender_business_bot');
	}

	/**
	* @param User $value
	* @return static
	*/

	public function setSenderBusinessBot(mixed $value): static
	{
		return $this->setFieldValue('sender_business_bot', $value);
	}

	/**
	* @return int
	*/

	public function getDate(): mixed
	{
		return $this->getFieldValue('date');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setDate(mixed $value): static
	{
		return $this->setFieldValue('date', $value);
	}

	/**
	* @return string
	*/

	public function getBusinessConnectionId(): mixed
	{
		return $this->getFieldValue('business_connection_id');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setBusinessConnectionId(mixed $value): static
	{
		return $this->setFieldValue('business_connection_id', $value);
	}

	/**
	* @return Chat
	*/

	public function getChat(): mixed
	{
		return $this->getFieldValue('chat');
	}

	/**
	* @param Chat $value
	* @return static
	*/

	public function setChat(mixed $value): static
	{
		return $this->setFieldValue('chat', $value);
	}

	/**
	* @return MessageOrigin|MessageOriginUser|MessageOriginHiddenUser|MessageOriginChat|MessageOriginChannel
	*/

	public function getForwardOrigin(): mixed
	{
		return $this->getFieldValue('forward_origin');
	}

	/**
	* @param MessageOrigin|MessageOriginUser|MessageOriginHiddenUser|MessageOriginChat|MessageOriginChannel $value
	* @return static
	*/

	public function setForwardOrigin(mixed $value): static
	{
		return $this->setFieldValue('forward_origin', $value);
	}

	/**
	* @return bool
	*/

	public function getIsTopicMessage(): mixed
	{
		return $this->getFieldValue('is_topic_message');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setIsTopicMessage(mixed $value): static
	{
		return $this->setFieldValue('is_topic_message', $value);
	}

	/**
	* @return bool
	*/

	public function getIsAutomaticForward(): mixed
	{
		return $this->getFieldValue('is_automatic_forward');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setIsAutomaticForward(mixed $value): static
	{
		return $this->setFieldValue('is_automatic_forward', $value);
	}

	/**
	* @return Message
	*/

	public function getReplyToMessage(): mixed
	{
		return $this->getFieldValue('reply_to_message');
	}

	/**
	* @param Message $value
	* @return static
	*/

	public function setReplyToMessage(mixed $value): static
	{
		return $this->setFieldValue('reply_to_message', $value);
	}

	/**
	* @return ExternalReplyInfo
	*/

	public function getExternalReply(): mixed
	{
		return $this->getFieldValue('external_reply');
	}

	/**
	* @param ExternalReplyInfo $value
	* @return static
	*/

	public function setExternalReply(mixed $value): static
	{
		return $this->setFieldValue('external_reply', $value);
	}

	/**
	* @return TextQuote
	*/

	public function getQuote(): mixed
	{
		return $this->getFieldValue('quote');
	}

	/**
	* @param TextQuote $value
	* @return static
	*/

	public function setQuote(mixed $value): static
	{
		return $this->setFieldValue('quote', $value);
	}

	/**
	* @return Story
	*/

	public function getReplyToStory(): mixed
	{
		return $this->getFieldValue('reply_to_story');
	}

	/**
	* @param Story $value
	* @return static
	*/

	public function setReplyToStory(mixed $value): static
	{
		return $this->setFieldValue('reply_to_story', $value);
	}

	/**
	* @return User
	*/

	public function getViaBot(): mixed
	{
		return $this->getFieldValue('via_bot');
	}

	/**
	* @param User $value
	* @return static
	*/

	public function setViaBot(mixed $value): static
	{
		return $this->setFieldValue('via_bot', $value);
	}

	/**
	* @return int
	*/

	public function getEditDate(): mixed
	{
		return $this->getFieldValue('edit_date');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setEditDate(mixed $value): static
	{
		return $this->setFieldValue('edit_date', $value);
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

	public function getIsFromOffline(): mixed
	{
		return $this->getFieldValue('is_from_offline');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setIsFromOffline(mixed $value): static
	{
		return $this->setFieldValue('is_from_offline', $value);
	}

	/**
	* @return string
	*/

	public function getMediaGroupId(): mixed
	{
		return $this->getFieldValue('media_group_id');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setMediaGroupId(mixed $value): static
	{
		return $this->setFieldValue('media_group_id', $value);
	}

	/**
	* @return string
	*/

	public function getAuthorSignature(): mixed
	{
		return $this->getFieldValue('author_signature');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setAuthorSignature(mixed $value): static
	{
		return $this->setFieldValue('author_signature', $value);
	}

	/**
	* @return int
	*/

	public function getPaidStarCount(): mixed
	{
		return $this->getFieldValue('paid_star_count');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setPaidStarCount(mixed $value): static
	{
		return $this->setFieldValue('paid_star_count', $value);
	}

	/**
	* @return string
	*/

	public function getText(): mixed
	{
		return $this->getFieldValue('text');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setText(mixed $value): static
	{
		return $this->setFieldValue('text', $value);
	}

	/**
	* @return Base\ArrayObject|MessageEntity[]
	*/

	public function getEntities(): mixed
	{
		return $this->getFieldValue('entities');
	}

	/**
	* @param Base\ArrayObject|MessageEntity[] $value
	* @return static
	*/

	public function setEntities(mixed $value): static
	{
		return $this->setFieldValue('entities', $value);
	}

	/**
	* @return LinkPreviewOptions
	*/

	public function getLinkPreviewOptions(): mixed
	{
		return $this->getFieldValue('link_preview_options');
	}

	/**
	* @param LinkPreviewOptions $value
	* @return static
	*/

	public function setLinkPreviewOptions(mixed $value): static
	{
		return $this->setFieldValue('link_preview_options', $value);
	}

	/**
	* @return string
	*/

	public function getEffectId(): mixed
	{
		return $this->getFieldValue('effect_id');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setEffectId(mixed $value): static
	{
		return $this->setFieldValue('effect_id', $value);
	}

	/**
	* @return Animation
	*/

	public function getAnimation(): mixed
	{
		return $this->getFieldValue('animation');
	}

	/**
	* @param Animation $value
	* @return static
	*/

	public function setAnimation(mixed $value): static
	{
		return $this->setFieldValue('animation', $value);
	}

	/**
	* @return Audio
	*/

	public function getAudio(): mixed
	{
		return $this->getFieldValue('audio');
	}

	/**
	* @param Audio $value
	* @return static
	*/

	public function setAudio(mixed $value): static
	{
		return $this->setFieldValue('audio', $value);
	}

	/**
	* @return Document
	*/

	public function getDocument(): mixed
	{
		return $this->getFieldValue('document');
	}

	/**
	* @param Document $value
	* @return static
	*/

	public function setDocument(mixed $value): static
	{
		return $this->setFieldValue('document', $value);
	}

	/**
	* @return PaidMediaInfo
	*/

	public function getPaidMedia(): mixed
	{
		return $this->getFieldValue('paid_media');
	}

	/**
	* @param PaidMediaInfo $value
	* @return static
	*/

	public function setPaidMedia(mixed $value): static
	{
		return $this->setFieldValue('paid_media', $value);
	}

	/**
	* @return Base\ArrayObject|PhotoSize[]
	*/

	public function getPhoto(): mixed
	{
		return $this->getFieldValue('photo');
	}

	/**
	* @param Base\ArrayObject|PhotoSize[] $value
	* @return static
	*/

	public function setPhoto(mixed $value): static
	{
		return $this->setFieldValue('photo', $value);
	}

	/**
	* @return Stickers\Sticker
	*/

	public function getSticker(): mixed
	{
		return $this->getFieldValue('sticker');
	}

	/**
	* @param Stickers\Sticker $value
	* @return static
	*/

	public function setSticker(mixed $value): static
	{
		return $this->setFieldValue('sticker', $value);
	}

	/**
	* @return Story
	*/

	public function getStory(): mixed
	{
		return $this->getFieldValue('story');
	}

	/**
	* @param Story $value
	* @return static
	*/

	public function setStory(mixed $value): static
	{
		return $this->setFieldValue('story', $value);
	}

	/**
	* @return Video
	*/

	public function getVideo(): mixed
	{
		return $this->getFieldValue('video');
	}

	/**
	* @param Video $value
	* @return static
	*/

	public function setVideo(mixed $value): static
	{
		return $this->setFieldValue('video', $value);
	}

	/**
	* @return VideoNote
	*/

	public function getVideoNote(): mixed
	{
		return $this->getFieldValue('video_note');
	}

	/**
	* @param VideoNote $value
	* @return static
	*/

	public function setVideoNote(mixed $value): static
	{
		return $this->setFieldValue('video_note', $value);
	}

	/**
	* @return Voice
	*/

	public function getVoice(): mixed
	{
		return $this->getFieldValue('voice');
	}

	/**
	* @param Voice $value
	* @return static
	*/

	public function setVoice(mixed $value): static
	{
		return $this->setFieldValue('voice', $value);
	}

	/**
	* @return string
	*/

	public function getCaption(): mixed
	{
		return $this->getFieldValue('caption');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setCaption(mixed $value): static
	{
		return $this->setFieldValue('caption', $value);
	}

	/**
	* @return Base\ArrayObject|MessageEntity[]
	*/

	public function getCaptionEntities(): mixed
	{
		return $this->getFieldValue('caption_entities');
	}

	/**
	* @param Base\ArrayObject|MessageEntity[] $value
	* @return static
	*/

	public function setCaptionEntities(mixed $value): static
	{
		return $this->setFieldValue('caption_entities', $value);
	}

	/**
	* @return bool
	*/

	public function getShowCaptionAboveMedia(): mixed
	{
		return $this->getFieldValue('show_caption_above_media');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setShowCaptionAboveMedia(mixed $value): static
	{
		return $this->setFieldValue('show_caption_above_media', $value);
	}

	/**
	* @return bool
	*/

	public function getHasMediaSpoiler(): mixed
	{
		return $this->getFieldValue('has_media_spoiler');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setHasMediaSpoiler(mixed $value): static
	{
		return $this->setFieldValue('has_media_spoiler', $value);
	}

	/**
	* @return Checklist
	*/

	public function getChecklist(): mixed
	{
		return $this->getFieldValue('checklist');
	}

	/**
	* @param Checklist $value
	* @return static
	*/

	public function setChecklist(mixed $value): static
	{
		return $this->setFieldValue('checklist', $value);
	}

	/**
	* @return Contact
	*/

	public function getContact(): mixed
	{
		return $this->getFieldValue('contact');
	}

	/**
	* @param Contact $value
	* @return static
	*/

	public function setContact(mixed $value): static
	{
		return $this->setFieldValue('contact', $value);
	}

	/**
	* @return Dice
	*/

	public function getDice(): mixed
	{
		return $this->getFieldValue('dice');
	}

	/**
	* @param Dice $value
	* @return static
	*/

	public function setDice(mixed $value): static
	{
		return $this->setFieldValue('dice', $value);
	}

	/**
	* @return Games\Game
	*/

	public function getGame(): mixed
	{
		return $this->getFieldValue('game');
	}

	/**
	* @param Games\Game $value
	* @return static
	*/

	public function setGame(mixed $value): static
	{
		return $this->setFieldValue('game', $value);
	}

	/**
	* @return Poll
	*/

	public function getPoll(): mixed
	{
		return $this->getFieldValue('poll');
	}

	/**
	* @param Poll $value
	* @return static
	*/

	public function setPoll(mixed $value): static
	{
		return $this->setFieldValue('poll', $value);
	}

	/**
	* @return Venue
	*/

	public function getVenue(): mixed
	{
		return $this->getFieldValue('venue');
	}

	/**
	* @param Venue $value
	* @return static
	*/

	public function setVenue(mixed $value): static
	{
		return $this->setFieldValue('venue', $value);
	}

	/**
	* @return Location
	*/

	public function getLocation(): mixed
	{
		return $this->getFieldValue('location');
	}

	/**
	* @param Location $value
	* @return static
	*/

	public function setLocation(mixed $value): static
	{
		return $this->setFieldValue('location', $value);
	}

	/**
	* @return Base\ArrayObject|User[]
	*/

	public function getNewChatMembers(): mixed
	{
		return $this->getFieldValue('new_chat_members');
	}

	/**
	* @param Base\ArrayObject|User[] $value
	* @return static
	*/

	public function setNewChatMembers(mixed $value): static
	{
		return $this->setFieldValue('new_chat_members', $value);
	}

	/**
	* @return User
	*/

	public function getLeftChatMember(): mixed
	{
		return $this->getFieldValue('left_chat_member');
	}

	/**
	* @param User $value
	* @return static
	*/

	public function setLeftChatMember(mixed $value): static
	{
		return $this->setFieldValue('left_chat_member', $value);
	}

	/**
	* @return string
	*/

	public function getNewChatTitle(): mixed
	{
		return $this->getFieldValue('new_chat_title');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setNewChatTitle(mixed $value): static
	{
		return $this->setFieldValue('new_chat_title', $value);
	}

	/**
	* @return Base\ArrayObject|PhotoSize[]
	*/

	public function getNewChatPhoto(): mixed
	{
		return $this->getFieldValue('new_chat_photo');
	}

	/**
	* @param Base\ArrayObject|PhotoSize[] $value
	* @return static
	*/

	public function setNewChatPhoto(mixed $value): static
	{
		return $this->setFieldValue('new_chat_photo', $value);
	}

	/**
	* @return bool
	*/

	public function getDeleteChatPhoto(): mixed
	{
		return $this->getFieldValue('delete_chat_photo');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setDeleteChatPhoto(mixed $value): static
	{
		return $this->setFieldValue('delete_chat_photo', $value);
	}

	/**
	* @return bool
	*/

	public function getGroupChatCreated(): mixed
	{
		return $this->getFieldValue('group_chat_created');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setGroupChatCreated(mixed $value): static
	{
		return $this->setFieldValue('group_chat_created', $value);
	}

	/**
	* @return bool
	*/

	public function getSupergroupChatCreated(): mixed
	{
		return $this->getFieldValue('supergroup_chat_created');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setSupergroupChatCreated(mixed $value): static
	{
		return $this->setFieldValue('supergroup_chat_created', $value);
	}

	/**
	* @return bool
	*/

	public function getChannelChatCreated(): mixed
	{
		return $this->getFieldValue('channel_chat_created');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setChannelChatCreated(mixed $value): static
	{
		return $this->setFieldValue('channel_chat_created', $value);
	}

	/**
	* @return MessageAutoDeleteTimerChanged
	*/

	public function getMessageAutoDeleteTimerChanged(): mixed
	{
		return $this->getFieldValue('message_auto_delete_timer_changed');
	}

	/**
	* @param MessageAutoDeleteTimerChanged $value
	* @return static
	*/

	public function setMessageAutoDeleteTimerChanged(mixed $value): static
	{
		return $this->setFieldValue('message_auto_delete_timer_changed', $value);
	}

	/**
	* @return int
	*/

	public function getMigrateToChatId(): mixed
	{
		return $this->getFieldValue('migrate_to_chat_id');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setMigrateToChatId(mixed $value): static
	{
		return $this->setFieldValue('migrate_to_chat_id', $value);
	}

	/**
	* @return int
	*/

	public function getMigrateFromChatId(): mixed
	{
		return $this->getFieldValue('migrate_from_chat_id');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setMigrateFromChatId(mixed $value): static
	{
		return $this->setFieldValue('migrate_from_chat_id', $value);
	}

	/**
	* @return MaybeInaccessibleMessage|Message|InaccessibleMessage
	*/

	public function getPinnedMessage(): mixed
	{
		return $this->getFieldValue('pinned_message');
	}

	/**
	* @param MaybeInaccessibleMessage|Message|InaccessibleMessage $value
	* @return static
	*/

	public function setPinnedMessage(mixed $value): static
	{
		return $this->setFieldValue('pinned_message', $value);
	}

	/**
	* @return Payments\Invoice
	*/

	public function getInvoice(): mixed
	{
		return $this->getFieldValue('invoice');
	}

	/**
	* @param Payments\Invoice $value
	* @return static
	*/

	public function setInvoice(mixed $value): static
	{
		return $this->setFieldValue('invoice', $value);
	}

	/**
	* @return Payments\SuccessfulPayment
	*/

	public function getSuccessfulPayment(): mixed
	{
		return $this->getFieldValue('successful_payment');
	}

	/**
	* @param Payments\SuccessfulPayment $value
	* @return static
	*/

	public function setSuccessfulPayment(mixed $value): static
	{
		return $this->setFieldValue('successful_payment', $value);
	}

	/**
	* @return Payments\RefundedPayment
	*/

	public function getRefundedPayment(): mixed
	{
		return $this->getFieldValue('refunded_payment');
	}

	/**
	* @param Payments\RefundedPayment $value
	* @return static
	*/

	public function setRefundedPayment(mixed $value): static
	{
		return $this->setFieldValue('refunded_payment', $value);
	}

	/**
	* @return UsersShared
	*/

	public function getUsersShared(): mixed
	{
		return $this->getFieldValue('users_shared');
	}

	/**
	* @param UsersShared $value
	* @return static
	*/

	public function setUsersShared(mixed $value): static
	{
		return $this->setFieldValue('users_shared', $value);
	}

	/**
	* @return ChatShared
	*/

	public function getChatShared(): mixed
	{
		return $this->getFieldValue('chat_shared');
	}

	/**
	* @param ChatShared $value
	* @return static
	*/

	public function setChatShared(mixed $value): static
	{
		return $this->setFieldValue('chat_shared', $value);
	}

	/**
	* @return GiftInfo
	*/

	public function getGift(): mixed
	{
		return $this->getFieldValue('gift');
	}

	/**
	* @param GiftInfo $value
	* @return static
	*/

	public function setGift(mixed $value): static
	{
		return $this->setFieldValue('gift', $value);
	}

	/**
	* @return UniqueGiftInfo
	*/

	public function getUniqueGift(): mixed
	{
		return $this->getFieldValue('unique_gift');
	}

	/**
	* @param UniqueGiftInfo $value
	* @return static
	*/

	public function setUniqueGift(mixed $value): static
	{
		return $this->setFieldValue('unique_gift', $value);
	}

	/**
	* @return string
	*/

	public function getConnectedWebsite(): mixed
	{
		return $this->getFieldValue('connected_website');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setConnectedWebsite(mixed $value): static
	{
		return $this->setFieldValue('connected_website', $value);
	}

	/**
	* @return WriteAccessAllowed
	*/

	public function getWriteAccessAllowed(): mixed
	{
		return $this->getFieldValue('write_access_allowed');
	}

	/**
	* @param WriteAccessAllowed $value
	* @return static
	*/

	public function setWriteAccessAllowed(mixed $value): static
	{
		return $this->setFieldValue('write_access_allowed', $value);
	}

	/**
	* @return Passport\PassportData
	*/

	public function getPassportData(): mixed
	{
		return $this->getFieldValue('passport_data');
	}

	/**
	* @param Passport\PassportData $value
	* @return static
	*/

	public function setPassportData(mixed $value): static
	{
		return $this->setFieldValue('passport_data', $value);
	}

	/**
	* @return ProximityAlertTriggered
	*/

	public function getProximityAlertTriggered(): mixed
	{
		return $this->getFieldValue('proximity_alert_triggered');
	}

	/**
	* @param ProximityAlertTriggered $value
	* @return static
	*/

	public function setProximityAlertTriggered(mixed $value): static
	{
		return $this->setFieldValue('proximity_alert_triggered', $value);
	}

	/**
	* @return ChatBoostAdded
	*/

	public function getBoostAdded(): mixed
	{
		return $this->getFieldValue('boost_added');
	}

	/**
	* @param ChatBoostAdded $value
	* @return static
	*/

	public function setBoostAdded(mixed $value): static
	{
		return $this->setFieldValue('boost_added', $value);
	}

	/**
	* @return ChatBackground
	*/

	public function getChatBackgroundSet(): mixed
	{
		return $this->getFieldValue('chat_background_set');
	}

	/**
	* @param ChatBackground $value
	* @return static
	*/

	public function setChatBackgroundSet(mixed $value): static
	{
		return $this->setFieldValue('chat_background_set', $value);
	}

	/**
	* @return ChecklistTasksDone
	*/

	public function getChecklistTasksDone(): mixed
	{
		return $this->getFieldValue('checklist_tasks_done');
	}

	/**
	* @param ChecklistTasksDone $value
	* @return static
	*/

	public function setChecklistTasksDone(mixed $value): static
	{
		return $this->setFieldValue('checklist_tasks_done', $value);
	}

	/**
	* @return ChecklistTasksAdded
	*/

	public function getChecklistTasksAdded(): mixed
	{
		return $this->getFieldValue('checklist_tasks_added');
	}

	/**
	* @param ChecklistTasksAdded $value
	* @return static
	*/

	public function setChecklistTasksAdded(mixed $value): static
	{
		return $this->setFieldValue('checklist_tasks_added', $value);
	}

	/**
	* @return DirectMessagePriceChanged
	*/

	public function getDirectMessagePriceChanged(): mixed
	{
		return $this->getFieldValue('direct_message_price_changed');
	}

	/**
	* @param DirectMessagePriceChanged $value
	* @return static
	*/

	public function setDirectMessagePriceChanged(mixed $value): static
	{
		return $this->setFieldValue('direct_message_price_changed', $value);
	}

	/**
	* @return ForumTopicCreated
	*/

	public function getForumTopicCreated(): mixed
	{
		return $this->getFieldValue('forum_topic_created');
	}

	/**
	* @param ForumTopicCreated $value
	* @return static
	*/

	public function setForumTopicCreated(mixed $value): static
	{
		return $this->setFieldValue('forum_topic_created', $value);
	}

	/**
	* @return ForumTopicEdited
	*/

	public function getForumTopicEdited(): mixed
	{
		return $this->getFieldValue('forum_topic_edited');
	}

	/**
	* @param ForumTopicEdited $value
	* @return static
	*/

	public function setForumTopicEdited(mixed $value): static
	{
		return $this->setFieldValue('forum_topic_edited', $value);
	}

	/**
	* @return ForumTopicClosed
	*/

	public function getForumTopicClosed(): mixed
	{
		return $this->getFieldValue('forum_topic_closed');
	}

	/**
	* @param ForumTopicClosed $value
	* @return static
	*/

	public function setForumTopicClosed(mixed $value): static
	{
		return $this->setFieldValue('forum_topic_closed', $value);
	}

	/**
	* @return ForumTopicReopened
	*/

	public function getForumTopicReopened(): mixed
	{
		return $this->getFieldValue('forum_topic_reopened');
	}

	/**
	* @param ForumTopicReopened $value
	* @return static
	*/

	public function setForumTopicReopened(mixed $value): static
	{
		return $this->setFieldValue('forum_topic_reopened', $value);
	}

	/**
	* @return GeneralForumTopicHidden
	*/

	public function getGeneralForumTopicHidden(): mixed
	{
		return $this->getFieldValue('general_forum_topic_hidden');
	}

	/**
	* @param GeneralForumTopicHidden $value
	* @return static
	*/

	public function setGeneralForumTopicHidden(mixed $value): static
	{
		return $this->setFieldValue('general_forum_topic_hidden', $value);
	}

	/**
	* @return GeneralForumTopicUnhidden
	*/

	public function getGeneralForumTopicUnhidden(): mixed
	{
		return $this->getFieldValue('general_forum_topic_unhidden');
	}

	/**
	* @param GeneralForumTopicUnhidden $value
	* @return static
	*/

	public function setGeneralForumTopicUnhidden(mixed $value): static
	{
		return $this->setFieldValue('general_forum_topic_unhidden', $value);
	}

	/**
	* @return GiveawayCreated
	*/

	public function getGiveawayCreated(): mixed
	{
		return $this->getFieldValue('giveaway_created');
	}

	/**
	* @param GiveawayCreated $value
	* @return static
	*/

	public function setGiveawayCreated(mixed $value): static
	{
		return $this->setFieldValue('giveaway_created', $value);
	}

	/**
	* @return Giveaway
	*/

	public function getGiveaway(): mixed
	{
		return $this->getFieldValue('giveaway');
	}

	/**
	* @param Giveaway $value
	* @return static
	*/

	public function setGiveaway(mixed $value): static
	{
		return $this->setFieldValue('giveaway', $value);
	}

	/**
	* @return GiveawayWinners
	*/

	public function getGiveawayWinners(): mixed
	{
		return $this->getFieldValue('giveaway_winners');
	}

	/**
	* @param GiveawayWinners $value
	* @return static
	*/

	public function setGiveawayWinners(mixed $value): static
	{
		return $this->setFieldValue('giveaway_winners', $value);
	}

	/**
	* @return GiveawayCompleted
	*/

	public function getGiveawayCompleted(): mixed
	{
		return $this->getFieldValue('giveaway_completed');
	}

	/**
	* @param GiveawayCompleted $value
	* @return static
	*/

	public function setGiveawayCompleted(mixed $value): static
	{
		return $this->setFieldValue('giveaway_completed', $value);
	}

	/**
	* @return PaidMessagePriceChanged
	*/

	public function getPaidMessagePriceChanged(): mixed
	{
		return $this->getFieldValue('paid_message_price_changed');
	}

	/**
	* @param PaidMessagePriceChanged $value
	* @return static
	*/

	public function setPaidMessagePriceChanged(mixed $value): static
	{
		return $this->setFieldValue('paid_message_price_changed', $value);
	}

	/**
	* @return VideoChatScheduled
	*/

	public function getVideoChatScheduled(): mixed
	{
		return $this->getFieldValue('video_chat_scheduled');
	}

	/**
	* @param VideoChatScheduled $value
	* @return static
	*/

	public function setVideoChatScheduled(mixed $value): static
	{
		return $this->setFieldValue('video_chat_scheduled', $value);
	}

	/**
	* @return VideoChatStarted
	*/

	public function getVideoChatStarted(): mixed
	{
		return $this->getFieldValue('video_chat_started');
	}

	/**
	* @param VideoChatStarted $value
	* @return static
	*/

	public function setVideoChatStarted(mixed $value): static
	{
		return $this->setFieldValue('video_chat_started', $value);
	}

	/**
	* @return VideoChatEnded
	*/

	public function getVideoChatEnded(): mixed
	{
		return $this->getFieldValue('video_chat_ended');
	}

	/**
	* @param VideoChatEnded $value
	* @return static
	*/

	public function setVideoChatEnded(mixed $value): static
	{
		return $this->setFieldValue('video_chat_ended', $value);
	}

	/**
	* @return VideoChatParticipantsInvited
	*/

	public function getVideoChatParticipantsInvited(): mixed
	{
		return $this->getFieldValue('video_chat_participants_invited');
	}

	/**
	* @param VideoChatParticipantsInvited $value
	* @return static
	*/

	public function setVideoChatParticipantsInvited(mixed $value): static
	{
		return $this->setFieldValue('video_chat_participants_invited', $value);
	}

	/**
	* @return WebAppData
	*/

	public function getWebAppData(): mixed
	{
		return $this->getFieldValue('web_app_data');
	}

	/**
	* @param WebAppData $value
	* @return static
	*/

	public function setWebAppData(mixed $value): static
	{
		return $this->setFieldValue('web_app_data', $value);
	}

	/**
	* @return InlineKeyboardMarkup
	*/

	public function getReplyMarkup(): mixed
	{
		return $this->getFieldValue('reply_markup');
	}

	/**
	* @param InlineKeyboardMarkup $value
	* @return static
	*/

	public function setReplyMarkup(mixed $value): static
	{
		return $this->setFieldValue('reply_markup', $value);
	}

}