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
use DevBX\Telegram\Games;
use DevBX\Telegram\Passport;
use DevBX\Telegram\Payments;
use DevBX\Telegram\RichMessages;
use DevBX\Telegram\Stickers;

/**
 * This object represents a message.
 *
 * @link https://core.telegram.org/bots/api#message
 *
 * @property-read int|null $messageId Required. Unique message identifier inside this chat; 0 for ephemeral messages. In specific instances (e.g., a message containing a video sent to a big chat), the server might automatically schedule a message instead of sending it immediately. In such cases, this field will be 0 and the relevant message will be unusable until it is actually sent.
 * @property-write int $messageId
 * @property-read int|null $messageThreadId Optional. Unique identifier of a message thread or forum topic to which the message belongs; for supergroups and private chats only
 * @property-write int $messageThreadId
 * @property-read DirectMessagesTopic|null $directMessagesTopic Optional. Information about the direct messages chat topic that contains the message
 * @property-write DirectMessagesTopic|array<string, mixed> $directMessagesTopic
 * @property-read User|null $from Optional. Sender of the message; may be empty for messages sent to channels. For backward compatibility, if the message was sent on behalf of a chat, the field contains a fake sender user in non-channel chats.
 * @property-write User|array<string, mixed> $from
 * @property-read Chat|null $senderChat Optional. Sender of the message when sent on behalf of a chat. For example, the supergroup itself for messages sent by its anonymous administrators or a linked channel for messages automatically forwarded to the channel's discussion group. For backward compatibility, if the message was sent on behalf of a chat, the field *from* contains a fake sender user in non-channel chats.
 * @property-write Chat|array<string, mixed> $senderChat
 * @property-read int|null $senderBoostCount Optional. If the sender of the message boosted the chat, the number of boosts added by the user
 * @property-write int $senderBoostCount
 * @property-read User|null $senderBusinessBot Optional. The bot that actually sent the message on behalf of the business account. Available only for outgoing messages sent on behalf of the connected business account.
 * @property-write User|array<string, mixed> $senderBusinessBot
 * @property-read string|null $senderTag Optional. Tag or custom title of the sender of the message; for supergroups only
 * @property-write string $senderTag
 * @property-read User|null $receiverUser Optional. For ephemeral messages, the user who received the message
 * @property-write User|array<string, mixed> $receiverUser
 * @property-read int|null $ephemeralMessageId Optional. For ephemeral messages, identifier of the ephemeral message inside this chat. The identifier may be reused for another ephemeral message after the message is deleted or expires.
 * @property-write int $ephemeralMessageId
 * @property-read int|null $date Required. Date the message was sent in Unix time. It is always a positive number, representing a valid date.
 * @property-write int $date
 * @property-read string|null $guestQueryId Optional. The unique identifier for the guest query. Use this identifier with the method `answerGuestQuery` to send a response message. If non-empty, the message belongs to the chat where the guest bot was summoned, which may not coincide with other existing bot chats sharing the same identifier.
 * @property-write string $guestQueryId
 * @property-read string|null $businessConnectionId Optional. Unique identifier of the business connection from which the message was received. If non-empty, the message belongs to a chat of the corresponding business account that is independent from any potential bot chat which might share the same identifier.
 * @property-write string $businessConnectionId
 * @property-read Chat|null $chat Required. Chat the message belongs to
 * @property-write Chat|array<string, mixed> $chat
 * @property-read MessageOrigin|null $forwardOrigin Optional. Information about the original message for forwarded messages
 * @property-write MessageOrigin|array<string, mixed> $forwardOrigin
 * @property-read bool|null $isTopicMessage Optional. *True*, if the message is sent to a topic in a forum supergroup or a private chat with the bot
 * @property-write bool $isTopicMessage
 * @property-read bool|null $isAutomaticForward Optional. *True*, if the message is a channel post that was automatically forwarded to the connected discussion group
 * @property-write bool $isAutomaticForward
 * @property-read Message|null $replyToMessage Optional. For replies in the same chat and message thread, the original message. Note that the `Message` object in this field will not contain further *reply_to_message* fields even if it itself is a reply. If the message is a reply to an ephemeral message, then this field may be omitted.
 * @property-write Message|array<string, mixed> $replyToMessage
 * @property-read ExternalReplyInfo|null $externalReply Optional. Information about the message that is being replied to, which may come from another chat or forum topic
 * @property-write ExternalReplyInfo|array<string, mixed> $externalReply
 * @property-read TextQuote|null $quote Optional. For replies that quote part of the original message, the quoted part of the message
 * @property-write TextQuote|array<string, mixed> $quote
 * @property-read Story|null $replyToStory Optional. For replies to a story, the original story
 * @property-write Story|array<string, mixed> $replyToStory
 * @property-read int|null $replyToChecklistTaskId Optional. Identifier of the specific checklist task that is being replied to
 * @property-write int $replyToChecklistTaskId
 * @property-read string|null $replyToPollOptionId Optional. Persistent identifier of the specific poll option that is being replied to
 * @property-write string $replyToPollOptionId
 * @property-read User|null $viaBot Optional. Bot through which the message was sent
 * @property-write User|array<string, mixed> $viaBot
 * @property-read User|null $guestBotCallerUser Optional. For a message sent by a guest bot, this is the user whose original message triggered the bot's response
 * @property-write User|array<string, mixed> $guestBotCallerUser
 * @property-read Chat|null $guestBotCallerChat Optional. For a message sent by a guest bot, this is the chat whose original message triggered the bot's response
 * @property-write Chat|array<string, mixed> $guestBotCallerChat
 * @property-read int|null $editDate Optional. Date the message was last edited in Unix time
 * @property-write int $editDate
 * @property-read bool|null $hasProtectedContent Optional. *True*, if the message can't be forwarded
 * @property-write bool $hasProtectedContent
 * @property-read bool|null $isFromOffline Optional. *True*, if the message was sent by an implicit action, for example, as an away or a greeting business message, or as a scheduled message
 * @property-write bool $isFromOffline
 * @property-read bool|null $isPaidPost Optional. *True*, if the message is a paid post. Note that such posts must not be deleted for 24 hours to receive the payment and can't be edited.
 * @property-write bool $isPaidPost
 * @property-read string|null $mediaGroupId Optional. The unique identifier inside this chat of a media message group this message belongs to
 * @property-write string $mediaGroupId
 * @property-read string|null $authorSignature Optional. Signature of the post author for messages in channels, or the custom title of an anonymous group administrator
 * @property-write string $authorSignature
 * @property-read int|null $paidStarCount Optional. The number of Telegram Stars that were paid by the sender of the message to send it
 * @property-write int $paidStarCount
 * @property-read string|null $text Optional. For text messages, the actual UTF-8 text of the message
 * @property-write string $text
 * @property-read Base\ArrayObject<MessageEntity> $entities Optional. For text messages, special entities like usernames, URLs, bot commands, etc. that appear in the text
 * @property-write list<MessageEntity|array<string, mixed>>|Base\ArrayObject<MessageEntity> $entities
 * @property-read LinkPreviewOptions|null $linkPreviewOptions Optional. Options used for link preview generation for the message, if it is a text message and link preview options were changed
 * @property-write LinkPreviewOptions|array<string, mixed> $linkPreviewOptions
 * @property-read SuggestedPostInfo|null $suggestedPostInfo Optional. Information about suggested post parameters if the message is a suggested post in a channel direct messages chat. If the message is an approved or declined suggested post, then it can't be edited.
 * @property-write SuggestedPostInfo|array<string, mixed> $suggestedPostInfo
 * @property-read string|null $effectId Optional. Unique identifier of the message effect added to the message
 * @property-write string $effectId
 * @property-read RichMessages\RichMessage|null $richMessage Optional. Message is a rich formatted message
 * @property-write RichMessages\RichMessage|array<string, mixed> $richMessage
 * @property-read Animation|null $animation Optional. Message is an animation, information about the animation. For backward compatibility, when this field is set, the *document* field will also be set.
 * @property-write Animation|array<string, mixed> $animation
 * @property-read Audio|null $audio Optional. Message is an audio file, information about the file
 * @property-write Audio|array<string, mixed> $audio
 * @property-read Document|null $document Optional. Message is a general file, information about the file
 * @property-write Document|array<string, mixed> $document
 * @property-read LivePhoto|null $livePhoto Optional. Message is a live photo, information about the live photo. For backward compatibility, when this field is set, the *photo* field will also be set.
 * @property-write LivePhoto|array<string, mixed> $livePhoto
 * @property-read PaidMediaInfo|null $paidMedia Optional. Message contains paid media; information about the paid media
 * @property-write PaidMediaInfo|array<string, mixed> $paidMedia
 * @property-read Base\ArrayObject<PhotoSize> $photo Optional. Message is a photo, available sizes of the photo
 * @property-write list<PhotoSize|array<string, mixed>>|Base\ArrayObject<PhotoSize> $photo
 * @property-read Stickers\Sticker|null $sticker Optional. Message is a sticker, information about the sticker
 * @property-write Stickers\Sticker|array<string, mixed> $sticker
 * @property-read Story|null $story Optional. Message is a forwarded story
 * @property-write Story|array<string, mixed> $story
 * @property-read Video|null $video Optional. Message is a video, information about the video
 * @property-write Video|array<string, mixed> $video
 * @property-read VideoNote|null $videoNote Optional. Message is a [video note](https://telegram.org/blog/video-messages-and-telescope), information about the video message
 * @property-write VideoNote|array<string, mixed> $videoNote
 * @property-read Voice|null $voice Optional. Message is a voice message, information about the file
 * @property-write Voice|array<string, mixed> $voice
 * @property-read string|null $caption Optional. Caption for the animation, audio, document, paid media, photo, video or voice
 * @property-write string $caption
 * @property-read Base\ArrayObject<MessageEntity> $captionEntities Optional. For messages with a caption, special entities like usernames, URLs, bot commands, etc. that appear in the caption
 * @property-write list<MessageEntity|array<string, mixed>>|Base\ArrayObject<MessageEntity> $captionEntities
 * @property-read bool|null $showCaptionAboveMedia Optional. *True*, if the caption must be shown above the message media
 * @property-write bool $showCaptionAboveMedia
 * @property-read bool|null $hasMediaSpoiler Optional. *True*, if the message media is covered by a spoiler animation
 * @property-write bool $hasMediaSpoiler
 * @property-read Checklist|null $checklist Optional. Message is a checklist
 * @property-write Checklist|array<string, mixed> $checklist
 * @property-read Contact|null $contact Optional. Message is a shared contact, information about the contact
 * @property-write Contact|array<string, mixed> $contact
 * @property-read Dice|null $dice Optional. Message is a dice with random value
 * @property-write Dice|array<string, mixed> $dice
 * @property-read Games\Game|null $game Optional. Message is a game, information about the game. [More about games »](https://core.telegram.org/bots/api#games)
 * @property-write Games\Game|array<string, mixed> $game
 * @property-read Poll|null $poll Optional. Message is a native poll, information about the poll
 * @property-write Poll|array<string, mixed> $poll
 * @property-read Venue|null $venue Optional. Message is a venue, information about the venue. For backward compatibility, when this field is set, the *location* field will also be set.
 * @property-write Venue|array<string, mixed> $venue
 * @property-read Location|null $location Optional. Message is a shared location, information about the location
 * @property-write Location|array<string, mixed> $location
 * @property-read Base\ArrayObject<User> $newChatMembers Optional. New members that were added to the group or supergroup and information about them (the bot itself may be one of these members)
 * @property-write list<User|array<string, mixed>>|Base\ArrayObject<User> $newChatMembers
 * @property-read User|null $leftChatMember Optional. A member was removed from the group, information about them (this member may be the bot itself)
 * @property-write User|array<string, mixed> $leftChatMember
 * @property-read ChatOwnerLeft|null $chatOwnerLeft Optional. Service message: chat owner has left
 * @property-write ChatOwnerLeft|array<string, mixed> $chatOwnerLeft
 * @property-read ChatOwnerChanged|null $chatOwnerChanged Optional. Service message: chat owner has changed
 * @property-write ChatOwnerChanged|array<string, mixed> $chatOwnerChanged
 * @property-read string|null $newChatTitle Optional. A chat title was changed to this value
 * @property-write string $newChatTitle
 * @property-read Base\ArrayObject<PhotoSize> $newChatPhoto Optional. A chat photo was change to this value
 * @property-write list<PhotoSize|array<string, mixed>>|Base\ArrayObject<PhotoSize> $newChatPhoto
 * @property-read bool|null $deleteChatPhoto Optional. Service message: the chat photo was deleted
 * @property-write bool $deleteChatPhoto
 * @property-read bool|null $groupChatCreated Optional. Service message: the group has been created
 * @property-write bool $groupChatCreated
 * @property-read bool|null $supergroupChatCreated Optional. Service message: the supergroup has been created. This field can't be received in a message coming through updates, because bot can't be a member of a supergroup when it is created. It can only be found in reply_to_message if someone replies to a very first message in a directly created supergroup.
 * @property-write bool $supergroupChatCreated
 * @property-read bool|null $channelChatCreated Optional. Service message: the channel has been created. This field can't be received in a message coming through updates, because bot can't be a member of a channel when it is created. It can only be found in reply_to_message if someone replies to a very first message in a channel.
 * @property-write bool $channelChatCreated
 * @property-read MessageAutoDeleteTimerChanged|null $messageAutoDeleteTimerChanged Optional. Service message: auto-delete timer settings changed in the chat
 * @property-write MessageAutoDeleteTimerChanged|array<string, mixed> $messageAutoDeleteTimerChanged
 * @property-read int|null $migrateToChatId Optional. The group has been migrated to a supergroup with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
 * @property-write int $migrateToChatId
 * @property-read int|null $migrateFromChatId Optional. The supergroup has been migrated from a group with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
 * @property-write int $migrateFromChatId
 * @property-read MaybeInaccessibleMessage|null $pinnedMessage Optional. Specified message was pinned. Note that the `Message` object in this field will not contain further *reply_to_message* fields even if it itself is a reply.
 * @property-write MaybeInaccessibleMessage|array<string, mixed> $pinnedMessage
 * @property-read Payments\Invoice|null $invoice Optional. Message is an invoice for a [payment](https://core.telegram.org/bots/api#payments), information about the invoice. [More about payments »](https://core.telegram.org/bots/api#payments)
 * @property-write Payments\Invoice|array<string, mixed> $invoice
 * @property-read Payments\SuccessfulPayment|null $successfulPayment Optional. Message is a service message about a successful payment, information about the payment. [More about payments »](https://core.telegram.org/bots/api#payments)
 * @property-write Payments\SuccessfulPayment|array<string, mixed> $successfulPayment
 * @property-read Payments\RefundedPayment|null $refundedPayment Optional. Message is a service message about a refunded payment, information about the payment. [More about payments »](https://core.telegram.org/bots/api#payments)
 * @property-write Payments\RefundedPayment|array<string, mixed> $refundedPayment
 * @property-read UsersShared|null $usersShared Optional. Service message: users were shared with the bot
 * @property-write UsersShared|array<string, mixed> $usersShared
 * @property-read ChatShared|null $chatShared Optional. Service message: a chat was shared with the bot
 * @property-write ChatShared|array<string, mixed> $chatShared
 * @property-read GiftInfo|null $gift Optional. Service message: a regular gift was sent or received
 * @property-write GiftInfo|array<string, mixed> $gift
 * @property-read UniqueGiftInfo|null $uniqueGift Optional. Service message: a unique gift was sent or received
 * @property-write UniqueGiftInfo|array<string, mixed> $uniqueGift
 * @property-read GiftInfo|null $giftUpgradeSent Optional. Service message: upgrade of a gift was purchased after the gift was sent
 * @property-write GiftInfo|array<string, mixed> $giftUpgradeSent
 * @property-read string|null $connectedWebsite Optional. The domain name of the website on which the user has logged in. [More about Telegram Login »](https://core.telegram.org/widgets/login)
 * @property-write string $connectedWebsite
 * @property-read WriteAccessAllowed|null $writeAccessAllowed Optional. Service message: the user allowed the bot to write messages after adding it to the attachment or side menu, launching a Web App from a link, or accepting an explicit request from a Web App sent by the method [requestWriteAccess](https://core.telegram.org/bots/webapps#initializing-mini-apps)
 * @property-write WriteAccessAllowed|array<string, mixed> $writeAccessAllowed
 * @property-read Passport\PassportData|null $passportData Optional. Telegram Passport data
 * @property-write Passport\PassportData|array<string, mixed> $passportData
 * @property-read ProximityAlertTriggered|null $proximityAlertTriggered Optional. Service message: a user in the chat triggered another user's proximity alert while sharing Live Location
 * @property-write ProximityAlertTriggered|array<string, mixed> $proximityAlertTriggered
 * @property-read ChatBoostAdded|null $boostAdded Optional. Service message: user boosted the chat
 * @property-write ChatBoostAdded|array<string, mixed> $boostAdded
 * @property-read ChatBackground|null $chatBackgroundSet Optional. Service message: chat background set
 * @property-write ChatBackground|array<string, mixed> $chatBackgroundSet
 * @property-read ChecklistTasksDone|null $checklistTasksDone Optional. Service message: some tasks in a checklist were marked as done or not done
 * @property-write ChecklistTasksDone|array<string, mixed> $checklistTasksDone
 * @property-read ChecklistTasksAdded|null $checklistTasksAdded Optional. Service message: tasks were added to a checklist
 * @property-write ChecklistTasksAdded|array<string, mixed> $checklistTasksAdded
 * @property-read CommunityChatAdded|null $communityChatAdded Optional. Service message: chat or bot added to a `Community`
 * @property-write CommunityChatAdded|array<string, mixed> $communityChatAdded
 * @property-read CommunityChatJoined|null $communityChatJoined Optional. Service message: chat was joined by a user from a `Community`
 * @property-write CommunityChatJoined|array<string, mixed> $communityChatJoined
 * @property-read CommunityChatRemoved|null $communityChatRemoved Optional. Service message: chat or bot removed from a `Community`
 * @property-write CommunityChatRemoved|array<string, mixed> $communityChatRemoved
 * @property-read DirectMessagePriceChanged|null $directMessagePriceChanged Optional. Service message: the price for paid messages in the corresponding direct messages chat of a channel has changed
 * @property-write DirectMessagePriceChanged|array<string, mixed> $directMessagePriceChanged
 * @property-read ForumTopicCreated|null $forumTopicCreated Optional. Service message: forum topic created
 * @property-write ForumTopicCreated|array<string, mixed> $forumTopicCreated
 * @property-read ForumTopicEdited|null $forumTopicEdited Optional. Service message: forum topic edited
 * @property-write ForumTopicEdited|array<string, mixed> $forumTopicEdited
 * @property-read ForumTopicClosed|null $forumTopicClosed Optional. Service message: forum topic closed
 * @property-write ForumTopicClosed|array<string, mixed> $forumTopicClosed
 * @property-read ForumTopicReopened|null $forumTopicReopened Optional. Service message: forum topic reopened
 * @property-write ForumTopicReopened|array<string, mixed> $forumTopicReopened
 * @property-read GeneralForumTopicHidden|null $generalForumTopicHidden Optional. Service message: the 'General' forum topic hidden
 * @property-write GeneralForumTopicHidden|array<string, mixed> $generalForumTopicHidden
 * @property-read GeneralForumTopicUnhidden|null $generalForumTopicUnhidden Optional. Service message: the 'General' forum topic unhidden
 * @property-write GeneralForumTopicUnhidden|array<string, mixed> $generalForumTopicUnhidden
 * @property-read GiveawayCreated|null $giveawayCreated Optional. Service message: a scheduled giveaway was created
 * @property-write GiveawayCreated|array<string, mixed> $giveawayCreated
 * @property-read Giveaway|null $giveaway Optional. The message is a scheduled giveaway message
 * @property-write Giveaway|array<string, mixed> $giveaway
 * @property-read GiveawayWinners|null $giveawayWinners Optional. A giveaway with public winners was completed
 * @property-write GiveawayWinners|array<string, mixed> $giveawayWinners
 * @property-read GiveawayCompleted|null $giveawayCompleted Optional. Service message: a giveaway without public winners was completed
 * @property-write GiveawayCompleted|array<string, mixed> $giveawayCompleted
 * @property-read ManagedBotCreated|null $managedBotCreated Optional. Service message: user created a bot that will be managed by the current bot
 * @property-write ManagedBotCreated|array<string, mixed> $managedBotCreated
 * @property-read PaidMessagePriceChanged|null $paidMessagePriceChanged Optional. Service message: the price for paid messages has changed in the chat
 * @property-write PaidMessagePriceChanged|array<string, mixed> $paidMessagePriceChanged
 * @property-read PollOptionAdded|null $pollOptionAdded Optional. Service message: answer option was added to a poll
 * @property-write PollOptionAdded|array<string, mixed> $pollOptionAdded
 * @property-read PollOptionDeleted|null $pollOptionDeleted Optional. Service message: answer option was deleted from a poll
 * @property-write PollOptionDeleted|array<string, mixed> $pollOptionDeleted
 * @property-read SuggestedPostApproved|null $suggestedPostApproved Optional. Service message: a suggested post was approved
 * @property-write SuggestedPostApproved|array<string, mixed> $suggestedPostApproved
 * @property-read SuggestedPostApprovalFailed|null $suggestedPostApprovalFailed Optional. Service message: approval of a suggested post has failed
 * @property-write SuggestedPostApprovalFailed|array<string, mixed> $suggestedPostApprovalFailed
 * @property-read SuggestedPostDeclined|null $suggestedPostDeclined Optional. Service message: a suggested post was declined
 * @property-write SuggestedPostDeclined|array<string, mixed> $suggestedPostDeclined
 * @property-read SuggestedPostPaid|null $suggestedPostPaid Optional. Service message: payment for a suggested post was received
 * @property-write SuggestedPostPaid|array<string, mixed> $suggestedPostPaid
 * @property-read SuggestedPostRefunded|null $suggestedPostRefunded Optional. Service message: payment for a suggested post was refunded
 * @property-write SuggestedPostRefunded|array<string, mixed> $suggestedPostRefunded
 * @property-read VideoChatScheduled|null $videoChatScheduled Optional. Service message: video chat scheduled
 * @property-write VideoChatScheduled|array<string, mixed> $videoChatScheduled
 * @property-read VideoChatStarted|null $videoChatStarted Optional. Service message: video chat started
 * @property-write VideoChatStarted|array<string, mixed> $videoChatStarted
 * @property-read VideoChatEnded|null $videoChatEnded Optional. Service message: video chat ended
 * @property-write VideoChatEnded|array<string, mixed> $videoChatEnded
 * @property-read VideoChatParticipantsInvited|null $videoChatParticipantsInvited Optional. Service message: new participants invited to a video chat
 * @property-write VideoChatParticipantsInvited|array<string, mixed> $videoChatParticipantsInvited
 * @property-read WebAppData|null $webAppData Optional. Service message: data sent by a Web App
 * @property-write WebAppData|array<string, mixed> $webAppData
 * @property-read InlineKeyboardMarkup|null $replyMarkup Optional. [Inline keyboard](https://core.telegram.org/bots/features#inline-keyboards) attached to the message. `login_url` buttons are represented as ordinary `url` buttons.
 * @property-write InlineKeyboardMarkup|array<string, mixed> $replyMarkup
 */
class Message extends MaybeInaccessibleMessage
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
            'message_id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'message_thread_id' => [
                'type' => ['int'],
            ],
            'direct_messages_topic' => [
                'type' => [DirectMessagesTopic::class],
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
            'sender_tag' => [
                'type' => ['string'],
            ],
            'receiver_user' => [
                'type' => [User::class],
            ],
            'ephemeral_message_id' => [
                'type' => ['int'],
            ],
            'date' => [
                'type' => ['int'],
                'required' => true,
            ],
            'guest_query_id' => [
                'type' => ['string'],
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
            'reply_to_checklist_task_id' => [
                'type' => ['int'],
            ],
            'reply_to_poll_option_id' => [
                'type' => ['string'],
            ],
            'via_bot' => [
                'type' => [User::class],
            ],
            'guest_bot_caller_user' => [
                'type' => [User::class],
            ],
            'guest_bot_caller_chat' => [
                'type' => [Chat::class],
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
            'is_paid_post' => [
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
            'suggested_post_info' => [
                'type' => [SuggestedPostInfo::class],
            ],
            'effect_id' => [
                'type' => ['string'],
            ],
            'rich_message' => [
                'type' => [RichMessages\RichMessage::class],
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
            'live_photo' => [
                'type' => [LivePhoto::class],
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
            'chat_owner_left' => [
                'type' => [ChatOwnerLeft::class],
            ],
            'chat_owner_changed' => [
                'type' => [ChatOwnerChanged::class],
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
            'gift_upgrade_sent' => [
                'type' => [GiftInfo::class],
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
            'community_chat_added' => [
                'type' => [CommunityChatAdded::class],
            ],
            'community_chat_joined' => [
                'type' => [CommunityChatJoined::class],
            ],
            'community_chat_removed' => [
                'type' => [CommunityChatRemoved::class],
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
            'managed_bot_created' => [
                'type' => [ManagedBotCreated::class],
            ],
            'paid_message_price_changed' => [
                'type' => [PaidMessagePriceChanged::class],
            ],
            'poll_option_added' => [
                'type' => [PollOptionAdded::class],
            ],
            'poll_option_deleted' => [
                'type' => [PollOptionDeleted::class],
            ],
            'suggested_post_approved' => [
                'type' => [SuggestedPostApproved::class],
            ],
            'suggested_post_approval_failed' => [
                'type' => [SuggestedPostApprovalFailed::class],
            ],
            'suggested_post_declined' => [
                'type' => [SuggestedPostDeclined::class],
            ],
            'suggested_post_paid' => [
                'type' => [SuggestedPostPaid::class],
            ],
            'suggested_post_refunded' => [
                'type' => [SuggestedPostRefunded::class],
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
     * Required. Unique message identifier inside this chat; 0 for ephemeral messages. In specific instances (e.g., a message containing a video sent to a big chat), the server might automatically schedule a message instead of sending it immediately. In such cases, this field will be 0 and the relevant message will be unusable until it is actually sent.
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getMessageId(): mixed
    {
        return $this->getFieldValue('message_id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setMessageId(mixed $value): static
    {
        return $this->setFieldValue('message_id', $value);
    }

    /**
     * Optional. Unique identifier of a message thread or forum topic to which the message belongs; for supergroups and private chats only
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getMessageThreadId(): mixed
    {
        return $this->getFieldValue('message_thread_id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setMessageThreadId(mixed $value): static
    {
        return $this->setFieldValue('message_thread_id', $value);
    }

    /**
     * Optional. Information about the direct messages chat topic that contains the message
     *
     * @return DirectMessagesTopic|null
     * @throws Base\TelegramException
     */
    public function getDirectMessagesTopic(): mixed
    {
        return $this->getFieldValue('direct_messages_topic');
    }

    /**
     * @param DirectMessagesTopic|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setDirectMessagesTopic(mixed $value): static
    {
        return $this->setFieldValue('direct_messages_topic', $value);
    }

    /**
     * Optional. Sender of the message; may be empty for messages sent to channels. For backward compatibility, if the message was sent on behalf of a chat, the field contains a fake sender user in non-channel chats.
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
     * Optional. Sender of the message when sent on behalf of a chat. For example, the supergroup itself for messages sent by its anonymous administrators or a linked channel for messages automatically forwarded to the channel's discussion group. For backward compatibility, if the message was sent on behalf of a chat, the field *from* contains a fake sender user in non-channel chats.
     *
     * @return Chat|null
     * @throws Base\TelegramException
     */
    public function getSenderChat(): mixed
    {
        return $this->getFieldValue('sender_chat');
    }

    /**
     * @param Chat|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSenderChat(mixed $value): static
    {
        return $this->setFieldValue('sender_chat', $value);
    }

    /**
     * Optional. If the sender of the message boosted the chat, the number of boosts added by the user
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getSenderBoostCount(): mixed
    {
        return $this->getFieldValue('sender_boost_count');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSenderBoostCount(mixed $value): static
    {
        return $this->setFieldValue('sender_boost_count', $value);
    }

    /**
     * Optional. The bot that actually sent the message on behalf of the business account. Available only for outgoing messages sent on behalf of the connected business account.
     *
     * @return User|null
     * @throws Base\TelegramException
     */
    public function getSenderBusinessBot(): mixed
    {
        return $this->getFieldValue('sender_business_bot');
    }

    /**
     * @param User|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSenderBusinessBot(mixed $value): static
    {
        return $this->setFieldValue('sender_business_bot', $value);
    }

    /**
     * Optional. Tag or custom title of the sender of the message; for supergroups only
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getSenderTag(): mixed
    {
        return $this->getFieldValue('sender_tag');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSenderTag(mixed $value): static
    {
        return $this->setFieldValue('sender_tag', $value);
    }

    /**
     * Optional. For ephemeral messages, the user who received the message
     *
     * @return User|null
     * @throws Base\TelegramException
     */
    public function getReceiverUser(): mixed
    {
        return $this->getFieldValue('receiver_user');
    }

    /**
     * @param User|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setReceiverUser(mixed $value): static
    {
        return $this->setFieldValue('receiver_user', $value);
    }

    /**
     * Optional. For ephemeral messages, identifier of the ephemeral message inside this chat. The identifier may be reused for another ephemeral message after the message is deleted or expires.
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getEphemeralMessageId(): mixed
    {
        return $this->getFieldValue('ephemeral_message_id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setEphemeralMessageId(mixed $value): static
    {
        return $this->setFieldValue('ephemeral_message_id', $value);
    }

    /**
     * Required. Date the message was sent in Unix time. It is always a positive number, representing a valid date.
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
     * Optional. The unique identifier for the guest query. Use this identifier with the method `answerGuestQuery` to send a response message. If non-empty, the message belongs to the chat where the guest bot was summoned, which may not coincide with other existing bot chats sharing the same identifier.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getGuestQueryId(): mixed
    {
        return $this->getFieldValue('guest_query_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setGuestQueryId(mixed $value): static
    {
        return $this->setFieldValue('guest_query_id', $value);
    }

    /**
     * Optional. Unique identifier of the business connection from which the message was received. If non-empty, the message belongs to a chat of the corresponding business account that is independent from any potential bot chat which might share the same identifier.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getBusinessConnectionId(): mixed
    {
        return $this->getFieldValue('business_connection_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setBusinessConnectionId(mixed $value): static
    {
        return $this->setFieldValue('business_connection_id', $value);
    }

    /**
     * Required. Chat the message belongs to
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
     * Optional. Information about the original message for forwarded messages
     *
     * @return MessageOrigin|null
     * @throws Base\TelegramException
     */
    public function getForwardOrigin(): mixed
    {
        return $this->getFieldValue('forward_origin');
    }

    /**
     * @param MessageOrigin|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setForwardOrigin(mixed $value): static
    {
        return $this->setFieldValue('forward_origin', $value);
    }

    /**
     * Optional. *True*, if the message is sent to a topic in a forum supergroup or a private chat with the bot
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsTopicMessage(): mixed
    {
        return $this->getFieldValue('is_topic_message');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsTopicMessage(mixed $value): static
    {
        return $this->setFieldValue('is_topic_message', $value);
    }

    /**
     * Optional. *True*, if the message is a channel post that was automatically forwarded to the connected discussion group
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsAutomaticForward(): mixed
    {
        return $this->getFieldValue('is_automatic_forward');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsAutomaticForward(mixed $value): static
    {
        return $this->setFieldValue('is_automatic_forward', $value);
    }

    /**
     * Optional. For replies in the same chat and message thread, the original message. Note that the `Message` object in this field will not contain further *reply_to_message* fields even if it itself is a reply. If the message is a reply to an ephemeral message, then this field may be omitted.
     *
     * @return Message|null
     * @throws Base\TelegramException
     */
    public function getReplyToMessage(): mixed
    {
        return $this->getFieldValue('reply_to_message');
    }

    /**
     * @param Message|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setReplyToMessage(mixed $value): static
    {
        return $this->setFieldValue('reply_to_message', $value);
    }

    /**
     * Optional. Information about the message that is being replied to, which may come from another chat or forum topic
     *
     * @return ExternalReplyInfo|null
     * @throws Base\TelegramException
     */
    public function getExternalReply(): mixed
    {
        return $this->getFieldValue('external_reply');
    }

    /**
     * @param ExternalReplyInfo|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setExternalReply(mixed $value): static
    {
        return $this->setFieldValue('external_reply', $value);
    }

    /**
     * Optional. For replies that quote part of the original message, the quoted part of the message
     *
     * @return TextQuote|null
     * @throws Base\TelegramException
     */
    public function getQuote(): mixed
    {
        return $this->getFieldValue('quote');
    }

    /**
     * @param TextQuote|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setQuote(mixed $value): static
    {
        return $this->setFieldValue('quote', $value);
    }

    /**
     * Optional. For replies to a story, the original story
     *
     * @return Story|null
     * @throws Base\TelegramException
     */
    public function getReplyToStory(): mixed
    {
        return $this->getFieldValue('reply_to_story');
    }

    /**
     * @param Story|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setReplyToStory(mixed $value): static
    {
        return $this->setFieldValue('reply_to_story', $value);
    }

    /**
     * Optional. Identifier of the specific checklist task that is being replied to
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getReplyToChecklistTaskId(): mixed
    {
        return $this->getFieldValue('reply_to_checklist_task_id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setReplyToChecklistTaskId(mixed $value): static
    {
        return $this->setFieldValue('reply_to_checklist_task_id', $value);
    }

    /**
     * Optional. Persistent identifier of the specific poll option that is being replied to
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getReplyToPollOptionId(): mixed
    {
        return $this->getFieldValue('reply_to_poll_option_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setReplyToPollOptionId(mixed $value): static
    {
        return $this->setFieldValue('reply_to_poll_option_id', $value);
    }

    /**
     * Optional. Bot through which the message was sent
     *
     * @return User|null
     * @throws Base\TelegramException
     */
    public function getViaBot(): mixed
    {
        return $this->getFieldValue('via_bot');
    }

    /**
     * @param User|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setViaBot(mixed $value): static
    {
        return $this->setFieldValue('via_bot', $value);
    }

    /**
     * Optional. For a message sent by a guest bot, this is the user whose original message triggered the bot's response
     *
     * @return User|null
     * @throws Base\TelegramException
     */
    public function getGuestBotCallerUser(): mixed
    {
        return $this->getFieldValue('guest_bot_caller_user');
    }

    /**
     * @param User|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setGuestBotCallerUser(mixed $value): static
    {
        return $this->setFieldValue('guest_bot_caller_user', $value);
    }

    /**
     * Optional. For a message sent by a guest bot, this is the chat whose original message triggered the bot's response
     *
     * @return Chat|null
     * @throws Base\TelegramException
     */
    public function getGuestBotCallerChat(): mixed
    {
        return $this->getFieldValue('guest_bot_caller_chat');
    }

    /**
     * @param Chat|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setGuestBotCallerChat(mixed $value): static
    {
        return $this->setFieldValue('guest_bot_caller_chat', $value);
    }

    /**
     * Optional. Date the message was last edited in Unix time
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getEditDate(): mixed
    {
        return $this->getFieldValue('edit_date');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setEditDate(mixed $value): static
    {
        return $this->setFieldValue('edit_date', $value);
    }

    /**
     * Optional. *True*, if the message can't be forwarded
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
     * Optional. *True*, if the message was sent by an implicit action, for example, as an away or a greeting business message, or as a scheduled message
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsFromOffline(): mixed
    {
        return $this->getFieldValue('is_from_offline');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsFromOffline(mixed $value): static
    {
        return $this->setFieldValue('is_from_offline', $value);
    }

    /**
     * Optional. *True*, if the message is a paid post. Note that such posts must not be deleted for 24 hours to receive the payment and can't be edited.
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsPaidPost(): mixed
    {
        return $this->getFieldValue('is_paid_post');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsPaidPost(mixed $value): static
    {
        return $this->setFieldValue('is_paid_post', $value);
    }

    /**
     * Optional. The unique identifier inside this chat of a media message group this message belongs to
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getMediaGroupId(): mixed
    {
        return $this->getFieldValue('media_group_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setMediaGroupId(mixed $value): static
    {
        return $this->setFieldValue('media_group_id', $value);
    }

    /**
     * Optional. Signature of the post author for messages in channels, or the custom title of an anonymous group administrator
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getAuthorSignature(): mixed
    {
        return $this->getFieldValue('author_signature');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAuthorSignature(mixed $value): static
    {
        return $this->setFieldValue('author_signature', $value);
    }

    /**
     * Optional. The number of Telegram Stars that were paid by the sender of the message to send it
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getPaidStarCount(): mixed
    {
        return $this->getFieldValue('paid_star_count');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPaidStarCount(mixed $value): static
    {
        return $this->setFieldValue('paid_star_count', $value);
    }

    /**
     * Optional. For text messages, the actual UTF-8 text of the message
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getText(): mixed
    {
        return $this->getFieldValue('text');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setText(mixed $value): static
    {
        return $this->setFieldValue('text', $value);
    }

    /**
     * Optional. For text messages, special entities like usernames, URLs, bot commands, etc. that appear in the text
     *
     * @return Base\ArrayObject<MessageEntity>
     * @throws Base\TelegramException
     */
    public function getEntities(): mixed
    {
        return $this->getFieldValue('entities');
    }

    /**
     * @param list<MessageEntity|array<string, mixed>>|Base\ArrayObject<MessageEntity> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setEntities(mixed $value): static
    {
        return $this->setFieldValue('entities', $value);
    }

    /**
     * Optional. Options used for link preview generation for the message, if it is a text message and link preview options were changed
     *
     * @return LinkPreviewOptions|null
     * @throws Base\TelegramException
     */
    public function getLinkPreviewOptions(): mixed
    {
        return $this->getFieldValue('link_preview_options');
    }

    /**
     * @param LinkPreviewOptions|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setLinkPreviewOptions(mixed $value): static
    {
        return $this->setFieldValue('link_preview_options', $value);
    }

    /**
     * Optional. Information about suggested post parameters if the message is a suggested post in a channel direct messages chat. If the message is an approved or declined suggested post, then it can't be edited.
     *
     * @return SuggestedPostInfo|null
     * @throws Base\TelegramException
     */
    public function getSuggestedPostInfo(): mixed
    {
        return $this->getFieldValue('suggested_post_info');
    }

    /**
     * @param SuggestedPostInfo|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSuggestedPostInfo(mixed $value): static
    {
        return $this->setFieldValue('suggested_post_info', $value);
    }

    /**
     * Optional. Unique identifier of the message effect added to the message
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getEffectId(): mixed
    {
        return $this->getFieldValue('effect_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setEffectId(mixed $value): static
    {
        return $this->setFieldValue('effect_id', $value);
    }

    /**
     * Optional. Message is a rich formatted message
     *
     * @return RichMessages\RichMessage|null
     * @throws Base\TelegramException
     */
    public function getRichMessage(): mixed
    {
        return $this->getFieldValue('rich_message');
    }

    /**
     * @param RichMessages\RichMessage|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setRichMessage(mixed $value): static
    {
        return $this->setFieldValue('rich_message', $value);
    }

    /**
     * Optional. Message is an animation, information about the animation. For backward compatibility, when this field is set, the *document* field will also be set.
     *
     * @return Animation|null
     * @throws Base\TelegramException
     */
    public function getAnimation(): mixed
    {
        return $this->getFieldValue('animation');
    }

    /**
     * @param Animation|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAnimation(mixed $value): static
    {
        return $this->setFieldValue('animation', $value);
    }

    /**
     * Optional. Message is an audio file, information about the file
     *
     * @return Audio|null
     * @throws Base\TelegramException
     */
    public function getAudio(): mixed
    {
        return $this->getFieldValue('audio');
    }

    /**
     * @param Audio|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAudio(mixed $value): static
    {
        return $this->setFieldValue('audio', $value);
    }

    /**
     * Optional. Message is a general file, information about the file
     *
     * @return Document|null
     * @throws Base\TelegramException
     */
    public function getDocument(): mixed
    {
        return $this->getFieldValue('document');
    }

    /**
     * @param Document|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setDocument(mixed $value): static
    {
        return $this->setFieldValue('document', $value);
    }

    /**
     * Optional. Message is a live photo, information about the live photo. For backward compatibility, when this field is set, the *photo* field will also be set.
     *
     * @return LivePhoto|null
     * @throws Base\TelegramException
     */
    public function getLivePhoto(): mixed
    {
        return $this->getFieldValue('live_photo');
    }

    /**
     * @param LivePhoto|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setLivePhoto(mixed $value): static
    {
        return $this->setFieldValue('live_photo', $value);
    }

    /**
     * Optional. Message contains paid media; information about the paid media
     *
     * @return PaidMediaInfo|null
     * @throws Base\TelegramException
     */
    public function getPaidMedia(): mixed
    {
        return $this->getFieldValue('paid_media');
    }

    /**
     * @param PaidMediaInfo|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPaidMedia(mixed $value): static
    {
        return $this->setFieldValue('paid_media', $value);
    }

    /**
     * Optional. Message is a photo, available sizes of the photo
     *
     * @return Base\ArrayObject<PhotoSize>
     * @throws Base\TelegramException
     */
    public function getPhoto(): mixed
    {
        return $this->getFieldValue('photo');
    }

    /**
     * @param list<PhotoSize|array<string, mixed>>|Base\ArrayObject<PhotoSize> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPhoto(mixed $value): static
    {
        return $this->setFieldValue('photo', $value);
    }

    /**
     * Optional. Message is a sticker, information about the sticker
     *
     * @return Stickers\Sticker|null
     * @throws Base\TelegramException
     */
    public function getSticker(): mixed
    {
        return $this->getFieldValue('sticker');
    }

    /**
     * @param Stickers\Sticker|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSticker(mixed $value): static
    {
        return $this->setFieldValue('sticker', $value);
    }

    /**
     * Optional. Message is a forwarded story
     *
     * @return Story|null
     * @throws Base\TelegramException
     */
    public function getStory(): mixed
    {
        return $this->getFieldValue('story');
    }

    /**
     * @param Story|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setStory(mixed $value): static
    {
        return $this->setFieldValue('story', $value);
    }

    /**
     * Optional. Message is a video, information about the video
     *
     * @return Video|null
     * @throws Base\TelegramException
     */
    public function getVideo(): mixed
    {
        return $this->getFieldValue('video');
    }

    /**
     * @param Video|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setVideo(mixed $value): static
    {
        return $this->setFieldValue('video', $value);
    }

    /**
     * Optional. Message is a [video note](https://telegram.org/blog/video-messages-and-telescope), information about the video message
     *
     * @return VideoNote|null
     * @throws Base\TelegramException
     */
    public function getVideoNote(): mixed
    {
        return $this->getFieldValue('video_note');
    }

    /**
     * @param VideoNote|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setVideoNote(mixed $value): static
    {
        return $this->setFieldValue('video_note', $value);
    }

    /**
     * Optional. Message is a voice message, information about the file
     *
     * @return Voice|null
     * @throws Base\TelegramException
     */
    public function getVoice(): mixed
    {
        return $this->getFieldValue('voice');
    }

    /**
     * @param Voice|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setVoice(mixed $value): static
    {
        return $this->setFieldValue('voice', $value);
    }

    /**
     * Optional. Caption for the animation, audio, document, paid media, photo, video or voice
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getCaption(): mixed
    {
        return $this->getFieldValue('caption');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCaption(mixed $value): static
    {
        return $this->setFieldValue('caption', $value);
    }

    /**
     * Optional. For messages with a caption, special entities like usernames, URLs, bot commands, etc. that appear in the caption
     *
     * @return Base\ArrayObject<MessageEntity>
     * @throws Base\TelegramException
     */
    public function getCaptionEntities(): mixed
    {
        return $this->getFieldValue('caption_entities');
    }

    /**
     * @param list<MessageEntity|array<string, mixed>>|Base\ArrayObject<MessageEntity> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCaptionEntities(mixed $value): static
    {
        return $this->setFieldValue('caption_entities', $value);
    }

    /**
     * Optional. *True*, if the caption must be shown above the message media
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getShowCaptionAboveMedia(): mixed
    {
        return $this->getFieldValue('show_caption_above_media');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setShowCaptionAboveMedia(mixed $value): static
    {
        return $this->setFieldValue('show_caption_above_media', $value);
    }

    /**
     * Optional. *True*, if the message media is covered by a spoiler animation
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getHasMediaSpoiler(): mixed
    {
        return $this->getFieldValue('has_media_spoiler');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setHasMediaSpoiler(mixed $value): static
    {
        return $this->setFieldValue('has_media_spoiler', $value);
    }

    /**
     * Optional. Message is a checklist
     *
     * @return Checklist|null
     * @throws Base\TelegramException
     */
    public function getChecklist(): mixed
    {
        return $this->getFieldValue('checklist');
    }

    /**
     * @param Checklist|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setChecklist(mixed $value): static
    {
        return $this->setFieldValue('checklist', $value);
    }

    /**
     * Optional. Message is a shared contact, information about the contact
     *
     * @return Contact|null
     * @throws Base\TelegramException
     */
    public function getContact(): mixed
    {
        return $this->getFieldValue('contact');
    }

    /**
     * @param Contact|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setContact(mixed $value): static
    {
        return $this->setFieldValue('contact', $value);
    }

    /**
     * Optional. Message is a dice with random value
     *
     * @return Dice|null
     * @throws Base\TelegramException
     */
    public function getDice(): mixed
    {
        return $this->getFieldValue('dice');
    }

    /**
     * @param Dice|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setDice(mixed $value): static
    {
        return $this->setFieldValue('dice', $value);
    }

    /**
     * Optional. Message is a game, information about the game. [More about games »](https://core.telegram.org/bots/api#games)
     *
     * @return Games\Game|null
     * @throws Base\TelegramException
     */
    public function getGame(): mixed
    {
        return $this->getFieldValue('game');
    }

    /**
     * @param Games\Game|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setGame(mixed $value): static
    {
        return $this->setFieldValue('game', $value);
    }

    /**
     * Optional. Message is a native poll, information about the poll
     *
     * @return Poll|null
     * @throws Base\TelegramException
     */
    public function getPoll(): mixed
    {
        return $this->getFieldValue('poll');
    }

    /**
     * @param Poll|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPoll(mixed $value): static
    {
        return $this->setFieldValue('poll', $value);
    }

    /**
     * Optional. Message is a venue, information about the venue. For backward compatibility, when this field is set, the *location* field will also be set.
     *
     * @return Venue|null
     * @throws Base\TelegramException
     */
    public function getVenue(): mixed
    {
        return $this->getFieldValue('venue');
    }

    /**
     * @param Venue|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setVenue(mixed $value): static
    {
        return $this->setFieldValue('venue', $value);
    }

    /**
     * Optional. Message is a shared location, information about the location
     *
     * @return Location|null
     * @throws Base\TelegramException
     */
    public function getLocation(): mixed
    {
        return $this->getFieldValue('location');
    }

    /**
     * @param Location|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setLocation(mixed $value): static
    {
        return $this->setFieldValue('location', $value);
    }

    /**
     * Optional. New members that were added to the group or supergroup and information about them (the bot itself may be one of these members)
     *
     * @return Base\ArrayObject<User>
     * @throws Base\TelegramException
     */
    public function getNewChatMembers(): mixed
    {
        return $this->getFieldValue('new_chat_members');
    }

    /**
     * @param list<User|array<string, mixed>>|Base\ArrayObject<User> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setNewChatMembers(mixed $value): static
    {
        return $this->setFieldValue('new_chat_members', $value);
    }

    /**
     * Optional. A member was removed from the group, information about them (this member may be the bot itself)
     *
     * @return User|null
     * @throws Base\TelegramException
     */
    public function getLeftChatMember(): mixed
    {
        return $this->getFieldValue('left_chat_member');
    }

    /**
     * @param User|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setLeftChatMember(mixed $value): static
    {
        return $this->setFieldValue('left_chat_member', $value);
    }

    /**
     * Optional. Service message: chat owner has left
     *
     * @return ChatOwnerLeft|null
     * @throws Base\TelegramException
     */
    public function getChatOwnerLeft(): mixed
    {
        return $this->getFieldValue('chat_owner_left');
    }

    /**
     * @param ChatOwnerLeft|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setChatOwnerLeft(mixed $value): static
    {
        return $this->setFieldValue('chat_owner_left', $value);
    }

    /**
     * Optional. Service message: chat owner has changed
     *
     * @return ChatOwnerChanged|null
     * @throws Base\TelegramException
     */
    public function getChatOwnerChanged(): mixed
    {
        return $this->getFieldValue('chat_owner_changed');
    }

    /**
     * @param ChatOwnerChanged|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setChatOwnerChanged(mixed $value): static
    {
        return $this->setFieldValue('chat_owner_changed', $value);
    }

    /**
     * Optional. A chat title was changed to this value
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getNewChatTitle(): mixed
    {
        return $this->getFieldValue('new_chat_title');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setNewChatTitle(mixed $value): static
    {
        return $this->setFieldValue('new_chat_title', $value);
    }

    /**
     * Optional. A chat photo was change to this value
     *
     * @return Base\ArrayObject<PhotoSize>
     * @throws Base\TelegramException
     */
    public function getNewChatPhoto(): mixed
    {
        return $this->getFieldValue('new_chat_photo');
    }

    /**
     * @param list<PhotoSize|array<string, mixed>>|Base\ArrayObject<PhotoSize> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setNewChatPhoto(mixed $value): static
    {
        return $this->setFieldValue('new_chat_photo', $value);
    }

    /**
     * Optional. Service message: the chat photo was deleted
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getDeleteChatPhoto(): mixed
    {
        return $this->getFieldValue('delete_chat_photo');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setDeleteChatPhoto(mixed $value): static
    {
        return $this->setFieldValue('delete_chat_photo', $value);
    }

    /**
     * Optional. Service message: the group has been created
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getGroupChatCreated(): mixed
    {
        return $this->getFieldValue('group_chat_created');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setGroupChatCreated(mixed $value): static
    {
        return $this->setFieldValue('group_chat_created', $value);
    }

    /**
     * Optional. Service message: the supergroup has been created. This field can't be received in a message coming through updates, because bot can't be a member of a supergroup when it is created. It can only be found in reply_to_message if someone replies to a very first message in a directly created supergroup.
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getSupergroupChatCreated(): mixed
    {
        return $this->getFieldValue('supergroup_chat_created');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSupergroupChatCreated(mixed $value): static
    {
        return $this->setFieldValue('supergroup_chat_created', $value);
    }

    /**
     * Optional. Service message: the channel has been created. This field can't be received in a message coming through updates, because bot can't be a member of a channel when it is created. It can only be found in reply_to_message if someone replies to a very first message in a channel.
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getChannelChatCreated(): mixed
    {
        return $this->getFieldValue('channel_chat_created');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setChannelChatCreated(mixed $value): static
    {
        return $this->setFieldValue('channel_chat_created', $value);
    }

    /**
     * Optional. Service message: auto-delete timer settings changed in the chat
     *
     * @return MessageAutoDeleteTimerChanged|null
     * @throws Base\TelegramException
     */
    public function getMessageAutoDeleteTimerChanged(): mixed
    {
        return $this->getFieldValue('message_auto_delete_timer_changed');
    }

    /**
     * @param MessageAutoDeleteTimerChanged|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setMessageAutoDeleteTimerChanged(mixed $value): static
    {
        return $this->setFieldValue('message_auto_delete_timer_changed', $value);
    }

    /**
     * Optional. The group has been migrated to a supergroup with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getMigrateToChatId(): mixed
    {
        return $this->getFieldValue('migrate_to_chat_id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setMigrateToChatId(mixed $value): static
    {
        return $this->setFieldValue('migrate_to_chat_id', $value);
    }

    /**
     * Optional. The supergroup has been migrated from a group with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getMigrateFromChatId(): mixed
    {
        return $this->getFieldValue('migrate_from_chat_id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setMigrateFromChatId(mixed $value): static
    {
        return $this->setFieldValue('migrate_from_chat_id', $value);
    }

    /**
     * Optional. Specified message was pinned. Note that the `Message` object in this field will not contain further *reply_to_message* fields even if it itself is a reply.
     *
     * @return MaybeInaccessibleMessage|null
     * @throws Base\TelegramException
     */
    public function getPinnedMessage(): mixed
    {
        return $this->getFieldValue('pinned_message');
    }

    /**
     * @param MaybeInaccessibleMessage|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPinnedMessage(mixed $value): static
    {
        return $this->setFieldValue('pinned_message', $value);
    }

    /**
     * Optional. Message is an invoice for a [payment](https://core.telegram.org/bots/api#payments), information about the invoice. [More about payments »](https://core.telegram.org/bots/api#payments)
     *
     * @return Payments\Invoice|null
     * @throws Base\TelegramException
     */
    public function getInvoice(): mixed
    {
        return $this->getFieldValue('invoice');
    }

    /**
     * @param Payments\Invoice|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setInvoice(mixed $value): static
    {
        return $this->setFieldValue('invoice', $value);
    }

    /**
     * Optional. Message is a service message about a successful payment, information about the payment. [More about payments »](https://core.telegram.org/bots/api#payments)
     *
     * @return Payments\SuccessfulPayment|null
     * @throws Base\TelegramException
     */
    public function getSuccessfulPayment(): mixed
    {
        return $this->getFieldValue('successful_payment');
    }

    /**
     * @param Payments\SuccessfulPayment|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSuccessfulPayment(mixed $value): static
    {
        return $this->setFieldValue('successful_payment', $value);
    }

    /**
     * Optional. Message is a service message about a refunded payment, information about the payment. [More about payments »](https://core.telegram.org/bots/api#payments)
     *
     * @return Payments\RefundedPayment|null
     * @throws Base\TelegramException
     */
    public function getRefundedPayment(): mixed
    {
        return $this->getFieldValue('refunded_payment');
    }

    /**
     * @param Payments\RefundedPayment|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setRefundedPayment(mixed $value): static
    {
        return $this->setFieldValue('refunded_payment', $value);
    }

    /**
     * Optional. Service message: users were shared with the bot
     *
     * @return UsersShared|null
     * @throws Base\TelegramException
     */
    public function getUsersShared(): mixed
    {
        return $this->getFieldValue('users_shared');
    }

    /**
     * @param UsersShared|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setUsersShared(mixed $value): static
    {
        return $this->setFieldValue('users_shared', $value);
    }

    /**
     * Optional. Service message: a chat was shared with the bot
     *
     * @return ChatShared|null
     * @throws Base\TelegramException
     */
    public function getChatShared(): mixed
    {
        return $this->getFieldValue('chat_shared');
    }

    /**
     * @param ChatShared|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setChatShared(mixed $value): static
    {
        return $this->setFieldValue('chat_shared', $value);
    }

    /**
     * Optional. Service message: a regular gift was sent or received
     *
     * @return GiftInfo|null
     * @throws Base\TelegramException
     */
    public function getGift(): mixed
    {
        return $this->getFieldValue('gift');
    }

    /**
     * @param GiftInfo|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setGift(mixed $value): static
    {
        return $this->setFieldValue('gift', $value);
    }

    /**
     * Optional. Service message: a unique gift was sent or received
     *
     * @return UniqueGiftInfo|null
     * @throws Base\TelegramException
     */
    public function getUniqueGift(): mixed
    {
        return $this->getFieldValue('unique_gift');
    }

    /**
     * @param UniqueGiftInfo|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setUniqueGift(mixed $value): static
    {
        return $this->setFieldValue('unique_gift', $value);
    }

    /**
     * Optional. Service message: upgrade of a gift was purchased after the gift was sent
     *
     * @return GiftInfo|null
     * @throws Base\TelegramException
     */
    public function getGiftUpgradeSent(): mixed
    {
        return $this->getFieldValue('gift_upgrade_sent');
    }

    /**
     * @param GiftInfo|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setGiftUpgradeSent(mixed $value): static
    {
        return $this->setFieldValue('gift_upgrade_sent', $value);
    }

    /**
     * Optional. The domain name of the website on which the user has logged in. [More about Telegram Login »](https://core.telegram.org/widgets/login)
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getConnectedWebsite(): mixed
    {
        return $this->getFieldValue('connected_website');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setConnectedWebsite(mixed $value): static
    {
        return $this->setFieldValue('connected_website', $value);
    }

    /**
     * Optional. Service message: the user allowed the bot to write messages after adding it to the attachment or side menu, launching a Web App from a link, or accepting an explicit request from a Web App sent by the method [requestWriteAccess](https://core.telegram.org/bots/webapps#initializing-mini-apps)
     *
     * @return WriteAccessAllowed|null
     * @throws Base\TelegramException
     */
    public function getWriteAccessAllowed(): mixed
    {
        return $this->getFieldValue('write_access_allowed');
    }

    /**
     * @param WriteAccessAllowed|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setWriteAccessAllowed(mixed $value): static
    {
        return $this->setFieldValue('write_access_allowed', $value);
    }

    /**
     * Optional. Telegram Passport data
     *
     * @return Passport\PassportData|null
     * @throws Base\TelegramException
     */
    public function getPassportData(): mixed
    {
        return $this->getFieldValue('passport_data');
    }

    /**
     * @param Passport\PassportData|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPassportData(mixed $value): static
    {
        return $this->setFieldValue('passport_data', $value);
    }

    /**
     * Optional. Service message: a user in the chat triggered another user's proximity alert while sharing Live Location
     *
     * @return ProximityAlertTriggered|null
     * @throws Base\TelegramException
     */
    public function getProximityAlertTriggered(): mixed
    {
        return $this->getFieldValue('proximity_alert_triggered');
    }

    /**
     * @param ProximityAlertTriggered|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setProximityAlertTriggered(mixed $value): static
    {
        return $this->setFieldValue('proximity_alert_triggered', $value);
    }

    /**
     * Optional. Service message: user boosted the chat
     *
     * @return ChatBoostAdded|null
     * @throws Base\TelegramException
     */
    public function getBoostAdded(): mixed
    {
        return $this->getFieldValue('boost_added');
    }

    /**
     * @param ChatBoostAdded|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setBoostAdded(mixed $value): static
    {
        return $this->setFieldValue('boost_added', $value);
    }

    /**
     * Optional. Service message: chat background set
     *
     * @return ChatBackground|null
     * @throws Base\TelegramException
     */
    public function getChatBackgroundSet(): mixed
    {
        return $this->getFieldValue('chat_background_set');
    }

    /**
     * @param ChatBackground|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setChatBackgroundSet(mixed $value): static
    {
        return $this->setFieldValue('chat_background_set', $value);
    }

    /**
     * Optional. Service message: some tasks in a checklist were marked as done or not done
     *
     * @return ChecklistTasksDone|null
     * @throws Base\TelegramException
     */
    public function getChecklistTasksDone(): mixed
    {
        return $this->getFieldValue('checklist_tasks_done');
    }

    /**
     * @param ChecklistTasksDone|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setChecklistTasksDone(mixed $value): static
    {
        return $this->setFieldValue('checklist_tasks_done', $value);
    }

    /**
     * Optional. Service message: tasks were added to a checklist
     *
     * @return ChecklistTasksAdded|null
     * @throws Base\TelegramException
     */
    public function getChecklistTasksAdded(): mixed
    {
        return $this->getFieldValue('checklist_tasks_added');
    }

    /**
     * @param ChecklistTasksAdded|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setChecklistTasksAdded(mixed $value): static
    {
        return $this->setFieldValue('checklist_tasks_added', $value);
    }

    /**
     * Optional. Service message: chat or bot added to a `Community`
     *
     * @return CommunityChatAdded|null
     * @throws Base\TelegramException
     */
    public function getCommunityChatAdded(): mixed
    {
        return $this->getFieldValue('community_chat_added');
    }

    /**
     * @param CommunityChatAdded|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCommunityChatAdded(mixed $value): static
    {
        return $this->setFieldValue('community_chat_added', $value);
    }

    /**
     * Optional. Service message: chat was joined by a user from a `Community`
     *
     * @return CommunityChatJoined|null
     * @throws Base\TelegramException
     */
    public function getCommunityChatJoined(): mixed
    {
        return $this->getFieldValue('community_chat_joined');
    }

    /**
     * @param CommunityChatJoined|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCommunityChatJoined(mixed $value): static
    {
        return $this->setFieldValue('community_chat_joined', $value);
    }

    /**
     * Optional. Service message: chat or bot removed from a `Community`
     *
     * @return CommunityChatRemoved|null
     * @throws Base\TelegramException
     */
    public function getCommunityChatRemoved(): mixed
    {
        return $this->getFieldValue('community_chat_removed');
    }

    /**
     * @param CommunityChatRemoved|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCommunityChatRemoved(mixed $value): static
    {
        return $this->setFieldValue('community_chat_removed', $value);
    }

    /**
     * Optional. Service message: the price for paid messages in the corresponding direct messages chat of a channel has changed
     *
     * @return DirectMessagePriceChanged|null
     * @throws Base\TelegramException
     */
    public function getDirectMessagePriceChanged(): mixed
    {
        return $this->getFieldValue('direct_message_price_changed');
    }

    /**
     * @param DirectMessagePriceChanged|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setDirectMessagePriceChanged(mixed $value): static
    {
        return $this->setFieldValue('direct_message_price_changed', $value);
    }

    /**
     * Optional. Service message: forum topic created
     *
     * @return ForumTopicCreated|null
     * @throws Base\TelegramException
     */
    public function getForumTopicCreated(): mixed
    {
        return $this->getFieldValue('forum_topic_created');
    }

    /**
     * @param ForumTopicCreated|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setForumTopicCreated(mixed $value): static
    {
        return $this->setFieldValue('forum_topic_created', $value);
    }

    /**
     * Optional. Service message: forum topic edited
     *
     * @return ForumTopicEdited|null
     * @throws Base\TelegramException
     */
    public function getForumTopicEdited(): mixed
    {
        return $this->getFieldValue('forum_topic_edited');
    }

    /**
     * @param ForumTopicEdited|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setForumTopicEdited(mixed $value): static
    {
        return $this->setFieldValue('forum_topic_edited', $value);
    }

    /**
     * Optional. Service message: forum topic closed
     *
     * @return ForumTopicClosed|null
     * @throws Base\TelegramException
     */
    public function getForumTopicClosed(): mixed
    {
        return $this->getFieldValue('forum_topic_closed');
    }

    /**
     * @param ForumTopicClosed|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setForumTopicClosed(mixed $value): static
    {
        return $this->setFieldValue('forum_topic_closed', $value);
    }

    /**
     * Optional. Service message: forum topic reopened
     *
     * @return ForumTopicReopened|null
     * @throws Base\TelegramException
     */
    public function getForumTopicReopened(): mixed
    {
        return $this->getFieldValue('forum_topic_reopened');
    }

    /**
     * @param ForumTopicReopened|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setForumTopicReopened(mixed $value): static
    {
        return $this->setFieldValue('forum_topic_reopened', $value);
    }

    /**
     * Optional. Service message: the 'General' forum topic hidden
     *
     * @return GeneralForumTopicHidden|null
     * @throws Base\TelegramException
     */
    public function getGeneralForumTopicHidden(): mixed
    {
        return $this->getFieldValue('general_forum_topic_hidden');
    }

    /**
     * @param GeneralForumTopicHidden|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setGeneralForumTopicHidden(mixed $value): static
    {
        return $this->setFieldValue('general_forum_topic_hidden', $value);
    }

    /**
     * Optional. Service message: the 'General' forum topic unhidden
     *
     * @return GeneralForumTopicUnhidden|null
     * @throws Base\TelegramException
     */
    public function getGeneralForumTopicUnhidden(): mixed
    {
        return $this->getFieldValue('general_forum_topic_unhidden');
    }

    /**
     * @param GeneralForumTopicUnhidden|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setGeneralForumTopicUnhidden(mixed $value): static
    {
        return $this->setFieldValue('general_forum_topic_unhidden', $value);
    }

    /**
     * Optional. Service message: a scheduled giveaway was created
     *
     * @return GiveawayCreated|null
     * @throws Base\TelegramException
     */
    public function getGiveawayCreated(): mixed
    {
        return $this->getFieldValue('giveaway_created');
    }

    /**
     * @param GiveawayCreated|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setGiveawayCreated(mixed $value): static
    {
        return $this->setFieldValue('giveaway_created', $value);
    }

    /**
     * Optional. The message is a scheduled giveaway message
     *
     * @return Giveaway|null
     * @throws Base\TelegramException
     */
    public function getGiveaway(): mixed
    {
        return $this->getFieldValue('giveaway');
    }

    /**
     * @param Giveaway|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setGiveaway(mixed $value): static
    {
        return $this->setFieldValue('giveaway', $value);
    }

    /**
     * Optional. A giveaway with public winners was completed
     *
     * @return GiveawayWinners|null
     * @throws Base\TelegramException
     */
    public function getGiveawayWinners(): mixed
    {
        return $this->getFieldValue('giveaway_winners');
    }

    /**
     * @param GiveawayWinners|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setGiveawayWinners(mixed $value): static
    {
        return $this->setFieldValue('giveaway_winners', $value);
    }

    /**
     * Optional. Service message: a giveaway without public winners was completed
     *
     * @return GiveawayCompleted|null
     * @throws Base\TelegramException
     */
    public function getGiveawayCompleted(): mixed
    {
        return $this->getFieldValue('giveaway_completed');
    }

    /**
     * @param GiveawayCompleted|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setGiveawayCompleted(mixed $value): static
    {
        return $this->setFieldValue('giveaway_completed', $value);
    }

    /**
     * Optional. Service message: user created a bot that will be managed by the current bot
     *
     * @return ManagedBotCreated|null
     * @throws Base\TelegramException
     */
    public function getManagedBotCreated(): mixed
    {
        return $this->getFieldValue('managed_bot_created');
    }

    /**
     * @param ManagedBotCreated|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setManagedBotCreated(mixed $value): static
    {
        return $this->setFieldValue('managed_bot_created', $value);
    }

    /**
     * Optional. Service message: the price for paid messages has changed in the chat
     *
     * @return PaidMessagePriceChanged|null
     * @throws Base\TelegramException
     */
    public function getPaidMessagePriceChanged(): mixed
    {
        return $this->getFieldValue('paid_message_price_changed');
    }

    /**
     * @param PaidMessagePriceChanged|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPaidMessagePriceChanged(mixed $value): static
    {
        return $this->setFieldValue('paid_message_price_changed', $value);
    }

    /**
     * Optional. Service message: answer option was added to a poll
     *
     * @return PollOptionAdded|null
     * @throws Base\TelegramException
     */
    public function getPollOptionAdded(): mixed
    {
        return $this->getFieldValue('poll_option_added');
    }

    /**
     * @param PollOptionAdded|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPollOptionAdded(mixed $value): static
    {
        return $this->setFieldValue('poll_option_added', $value);
    }

    /**
     * Optional. Service message: answer option was deleted from a poll
     *
     * @return PollOptionDeleted|null
     * @throws Base\TelegramException
     */
    public function getPollOptionDeleted(): mixed
    {
        return $this->getFieldValue('poll_option_deleted');
    }

    /**
     * @param PollOptionDeleted|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPollOptionDeleted(mixed $value): static
    {
        return $this->setFieldValue('poll_option_deleted', $value);
    }

    /**
     * Optional. Service message: a suggested post was approved
     *
     * @return SuggestedPostApproved|null
     * @throws Base\TelegramException
     */
    public function getSuggestedPostApproved(): mixed
    {
        return $this->getFieldValue('suggested_post_approved');
    }

    /**
     * @param SuggestedPostApproved|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSuggestedPostApproved(mixed $value): static
    {
        return $this->setFieldValue('suggested_post_approved', $value);
    }

    /**
     * Optional. Service message: approval of a suggested post has failed
     *
     * @return SuggestedPostApprovalFailed|null
     * @throws Base\TelegramException
     */
    public function getSuggestedPostApprovalFailed(): mixed
    {
        return $this->getFieldValue('suggested_post_approval_failed');
    }

    /**
     * @param SuggestedPostApprovalFailed|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSuggestedPostApprovalFailed(mixed $value): static
    {
        return $this->setFieldValue('suggested_post_approval_failed', $value);
    }

    /**
     * Optional. Service message: a suggested post was declined
     *
     * @return SuggestedPostDeclined|null
     * @throws Base\TelegramException
     */
    public function getSuggestedPostDeclined(): mixed
    {
        return $this->getFieldValue('suggested_post_declined');
    }

    /**
     * @param SuggestedPostDeclined|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSuggestedPostDeclined(mixed $value): static
    {
        return $this->setFieldValue('suggested_post_declined', $value);
    }

    /**
     * Optional. Service message: payment for a suggested post was received
     *
     * @return SuggestedPostPaid|null
     * @throws Base\TelegramException
     */
    public function getSuggestedPostPaid(): mixed
    {
        return $this->getFieldValue('suggested_post_paid');
    }

    /**
     * @param SuggestedPostPaid|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSuggestedPostPaid(mixed $value): static
    {
        return $this->setFieldValue('suggested_post_paid', $value);
    }

    /**
     * Optional. Service message: payment for a suggested post was refunded
     *
     * @return SuggestedPostRefunded|null
     * @throws Base\TelegramException
     */
    public function getSuggestedPostRefunded(): mixed
    {
        return $this->getFieldValue('suggested_post_refunded');
    }

    /**
     * @param SuggestedPostRefunded|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSuggestedPostRefunded(mixed $value): static
    {
        return $this->setFieldValue('suggested_post_refunded', $value);
    }

    /**
     * Optional. Service message: video chat scheduled
     *
     * @return VideoChatScheduled|null
     * @throws Base\TelegramException
     */
    public function getVideoChatScheduled(): mixed
    {
        return $this->getFieldValue('video_chat_scheduled');
    }

    /**
     * @param VideoChatScheduled|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setVideoChatScheduled(mixed $value): static
    {
        return $this->setFieldValue('video_chat_scheduled', $value);
    }

    /**
     * Optional. Service message: video chat started
     *
     * @return VideoChatStarted|null
     * @throws Base\TelegramException
     */
    public function getVideoChatStarted(): mixed
    {
        return $this->getFieldValue('video_chat_started');
    }

    /**
     * @param VideoChatStarted|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setVideoChatStarted(mixed $value): static
    {
        return $this->setFieldValue('video_chat_started', $value);
    }

    /**
     * Optional. Service message: video chat ended
     *
     * @return VideoChatEnded|null
     * @throws Base\TelegramException
     */
    public function getVideoChatEnded(): mixed
    {
        return $this->getFieldValue('video_chat_ended');
    }

    /**
     * @param VideoChatEnded|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setVideoChatEnded(mixed $value): static
    {
        return $this->setFieldValue('video_chat_ended', $value);
    }

    /**
     * Optional. Service message: new participants invited to a video chat
     *
     * @return VideoChatParticipantsInvited|null
     * @throws Base\TelegramException
     */
    public function getVideoChatParticipantsInvited(): mixed
    {
        return $this->getFieldValue('video_chat_participants_invited');
    }

    /**
     * @param VideoChatParticipantsInvited|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setVideoChatParticipantsInvited(mixed $value): static
    {
        return $this->setFieldValue('video_chat_participants_invited', $value);
    }

    /**
     * Optional. Service message: data sent by a Web App
     *
     * @return WebAppData|null
     * @throws Base\TelegramException
     */
    public function getWebAppData(): mixed
    {
        return $this->getFieldValue('web_app_data');
    }

    /**
     * @param WebAppData|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setWebAppData(mixed $value): static
    {
        return $this->setFieldValue('web_app_data', $value);
    }

    /**
     * Optional. [Inline keyboard](https://core.telegram.org/bots/features#inline-keyboards) attached to the message. `login_url` buttons are represented as ordinary `url` buttons.
     *
     * @return InlineKeyboardMarkup|null
     * @throws Base\TelegramException
     */
    public function getReplyMarkup(): mixed
    {
        return $this->getFieldValue('reply_markup');
    }

    /**
     * @param InlineKeyboardMarkup|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setReplyMarkup(mixed $value): static
    {
        return $this->setFieldValue('reply_markup', $value);
    }
}
