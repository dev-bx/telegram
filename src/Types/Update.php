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
use DevBX\Telegram\InlineMode;
use DevBX\Telegram\Payments;

/**
 * This [object](https://core.telegram.org/bots/api#available-types) represents an incoming update.
 * At most **one** of the optional fields can be present in any given update.
 *
 * @link https://core.telegram.org/bots/api#update
 *
 * @property-read int|null $updateId Required. The update's unique identifier. Update identifiers start from a certain positive number and increase sequentially. This identifier becomes especially handy if you're using `setWebhook`, since it allows you to ignore repeated updates or to restore the correct update sequence, should they get out of order. If there are no new updates for at least a week, then identifier of the next update will be chosen randomly instead of sequentially.
 * @property-write int $updateId
 * @property-read Message|null $message Optional. New incoming message of any kind - text, photo, sticker, etc.
 * @property-write Message|array<string, mixed> $message
 * @property-read Message|null $editedMessage Optional. New version of a message that is known to the bot and was edited. This update may at times be triggered by changes to message fields that are either unavailable or not actively used by your bot.
 * @property-write Message|array<string, mixed> $editedMessage
 * @property-read Message|null $channelPost Optional. New incoming channel post of any kind - text, photo, sticker, etc.
 * @property-write Message|array<string, mixed> $channelPost
 * @property-read Message|null $editedChannelPost Optional. New version of a channel post that is known to the bot and was edited. This update may at times be triggered by changes to message fields that are either unavailable or not actively used by your bot.
 * @property-write Message|array<string, mixed> $editedChannelPost
 * @property-read BusinessConnection|null $businessConnection Optional. The bot was connected to or disconnected from a business account, or a user edited an existing connection with the bot
 * @property-write BusinessConnection|array<string, mixed> $businessConnection
 * @property-read Message|null $businessMessage Optional. New message from a connected business account
 * @property-write Message|array<string, mixed> $businessMessage
 * @property-read Message|null $editedBusinessMessage Optional. New version of a message from a connected business account
 * @property-write Message|array<string, mixed> $editedBusinessMessage
 * @property-read BusinessMessagesDeleted|null $deletedBusinessMessages Optional. Messages were deleted from a connected business account
 * @property-write BusinessMessagesDeleted|array<string, mixed> $deletedBusinessMessages
 * @property-read Message|null $guestMessage Optional. New guest message. The bot can use the field *Message.guest_query_id* and the method `answerGuestQuery` to send a message in response.
 * @property-write Message|array<string, mixed> $guestMessage
 * @property-read MessageReactionUpdated|null $messageReaction Optional. A reaction to a message was changed by a user. The bot must be an administrator in the chat and must explicitly specify `"message_reaction"` in the list of *allowed_updates* to receive these updates. The update isn't received for reactions set by bots.
 * @property-write MessageReactionUpdated|array<string, mixed> $messageReaction
 * @property-read MessageReactionCountUpdated|null $messageReactionCount Optional. Reactions to a message with anonymous reactions were changed. The bot must be an administrator in the chat and must explicitly specify `"message_reaction_count"` in the list of *allowed_updates* to receive these updates. The updates are grouped and can be sent with delay up to a few minutes.
 * @property-write MessageReactionCountUpdated|array<string, mixed> $messageReactionCount
 * @property-read InlineMode\InlineQuery|null $inlineQuery Optional. New incoming [inline](https://core.telegram.org/bots/api#inline-mode) query
 * @property-write InlineMode\InlineQuery|array<string, mixed> $inlineQuery
 * @property-read InlineMode\ChosenInlineResult|null $chosenInlineResult Optional. The result of an [inline](https://core.telegram.org/bots/api#inline-mode) query that was chosen by a user and sent to their chat partner. Please see our documentation on the [feedback collecting](https://core.telegram.org/bots/inline#collecting-feedback) for details on how to enable these updates for your bot.
 * @property-write InlineMode\ChosenInlineResult|array<string, mixed> $chosenInlineResult
 * @property-read CallbackQuery|null $callbackQuery Optional. New incoming callback query
 * @property-write CallbackQuery|array<string, mixed> $callbackQuery
 * @property-read Payments\ShippingQuery|null $shippingQuery Optional. New incoming shipping query. Only for invoices with flexible price.
 * @property-write Payments\ShippingQuery|array<string, mixed> $shippingQuery
 * @property-read Payments\PreCheckoutQuery|null $preCheckoutQuery Optional. New incoming pre-checkout query. Contains full information about checkout.
 * @property-write Payments\PreCheckoutQuery|array<string, mixed> $preCheckoutQuery
 * @property-read Payments\PaidMediaPurchased|null $purchasedPaidMedia Optional. A user purchased paid media with a non-empty payload sent by the bot in a non-channel chat
 * @property-write Payments\PaidMediaPurchased|array<string, mixed> $purchasedPaidMedia
 * @property-read Poll|null $poll Optional. New poll state. Bots receive only updates about manually stopped polls and polls, which are sent by the bot.
 * @property-write Poll|array<string, mixed> $poll
 * @property-read PollAnswer|null $pollAnswer Optional. A user changed their answer in a non-anonymous poll. Bots receive new votes only in polls that were sent by the bot itself.
 * @property-write PollAnswer|array<string, mixed> $pollAnswer
 * @property-read ChatMemberUpdated|null $myChatMember Optional. The bot's chat member status was updated in a chat. For private chats, this update is received only when the bot is blocked or unblocked by the user.
 * @property-write ChatMemberUpdated|array<string, mixed> $myChatMember
 * @property-read ChatMemberUpdated|null $chatMember Optional. A chat member's status was updated in a chat. The bot must be an administrator in the chat and must explicitly specify `"chat_member"` in the list of *allowed_updates* to receive these updates.
 * @property-write ChatMemberUpdated|array<string, mixed> $chatMember
 * @property-read ChatJoinRequest|null $chatJoinRequest Optional. A request to join the chat has been sent. The bot must have the *can_invite_users* administrator right in the chat to receive these updates.
 * @property-write ChatJoinRequest|array<string, mixed> $chatJoinRequest
 * @property-read ChatBoostUpdated|null $chatBoost Optional. A chat boost was added or changed. The bot must be an administrator in the chat to receive these updates.
 * @property-write ChatBoostUpdated|array<string, mixed> $chatBoost
 * @property-read ChatBoostRemoved|null $removedChatBoost Optional. A boost was removed from a chat. The bot must be an administrator in the chat to receive these updates.
 * @property-write ChatBoostRemoved|array<string, mixed> $removedChatBoost
 * @property-read ManagedBotUpdated|null $managedBot Optional. A new bot was created to be managed by the bot, or token or owner of a managed bot was changed
 * @property-write ManagedBotUpdated|array<string, mixed> $managedBot
 * @property-read BotSubscriptionUpdated|null $subscription Optional. User payment subscription has changed
 * @property-write BotSubscriptionUpdated|array<string, mixed> $subscription
 * @property-read MessageGenerationStopped|null $stoppedMessageGeneration Optional. A user asked the bot to stop the generation of a message
 * @property-write MessageGenerationStopped|array<string, mixed> $stoppedMessageGeneration
 */
class Update extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'update_id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'message' => [
                'type' => [Message::class],
            ],
            'edited_message' => [
                'type' => [Message::class],
            ],
            'channel_post' => [
                'type' => [Message::class],
            ],
            'edited_channel_post' => [
                'type' => [Message::class],
            ],
            'business_connection' => [
                'type' => [BusinessConnection::class],
            ],
            'business_message' => [
                'type' => [Message::class],
            ],
            'edited_business_message' => [
                'type' => [Message::class],
            ],
            'deleted_business_messages' => [
                'type' => [BusinessMessagesDeleted::class],
            ],
            'guest_message' => [
                'type' => [Message::class],
            ],
            'message_reaction' => [
                'type' => [MessageReactionUpdated::class],
            ],
            'message_reaction_count' => [
                'type' => [MessageReactionCountUpdated::class],
            ],
            'inline_query' => [
                'type' => [InlineMode\InlineQuery::class],
            ],
            'chosen_inline_result' => [
                'type' => [InlineMode\ChosenInlineResult::class],
            ],
            'callback_query' => [
                'type' => [CallbackQuery::class],
            ],
            'shipping_query' => [
                'type' => [Payments\ShippingQuery::class],
            ],
            'pre_checkout_query' => [
                'type' => [Payments\PreCheckoutQuery::class],
            ],
            'purchased_paid_media' => [
                'type' => [Payments\PaidMediaPurchased::class],
            ],
            'poll' => [
                'type' => [Poll::class],
            ],
            'poll_answer' => [
                'type' => [PollAnswer::class],
            ],
            'my_chat_member' => [
                'type' => [ChatMemberUpdated::class],
            ],
            'chat_member' => [
                'type' => [ChatMemberUpdated::class],
            ],
            'chat_join_request' => [
                'type' => [ChatJoinRequest::class],
            ],
            'chat_boost' => [
                'type' => [ChatBoostUpdated::class],
            ],
            'removed_chat_boost' => [
                'type' => [ChatBoostRemoved::class],
            ],
            'managed_bot' => [
                'type' => [ManagedBotUpdated::class],
            ],
            'subscription' => [
                'type' => [BotSubscriptionUpdated::class],
            ],
            'stopped_message_generation' => [
                'type' => [MessageGenerationStopped::class],
            ],
        ];
    }

    /**
     * Required. The update's unique identifier. Update identifiers start from a certain positive number and increase sequentially. This identifier becomes especially handy if you're using `setWebhook`, since it allows you to ignore repeated updates or to restore the correct update sequence, should they get out of order. If there are no new updates for at least a week, then identifier of the next update will be chosen randomly instead of sequentially.
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getUpdateId(): mixed
    {
        return $this->getFieldValue('update_id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setUpdateId(mixed $value): static
    {
        return $this->setFieldValue('update_id', $value);
    }

    /**
     * Optional. New incoming message of any kind - text, photo, sticker, etc.
     *
     * @return Message|null
     * @throws Base\TelegramException
     */
    public function getMessage(): mixed
    {
        return $this->getFieldValue('message');
    }

    /**
     * @param Message|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setMessage(mixed $value): static
    {
        return $this->setFieldValue('message', $value);
    }

    /**
     * Optional. New version of a message that is known to the bot and was edited. This update may at times be triggered by changes to message fields that are either unavailable or not actively used by your bot.
     *
     * @return Message|null
     * @throws Base\TelegramException
     */
    public function getEditedMessage(): mixed
    {
        return $this->getFieldValue('edited_message');
    }

    /**
     * @param Message|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setEditedMessage(mixed $value): static
    {
        return $this->setFieldValue('edited_message', $value);
    }

    /**
     * Optional. New incoming channel post of any kind - text, photo, sticker, etc.
     *
     * @return Message|null
     * @throws Base\TelegramException
     */
    public function getChannelPost(): mixed
    {
        return $this->getFieldValue('channel_post');
    }

    /**
     * @param Message|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setChannelPost(mixed $value): static
    {
        return $this->setFieldValue('channel_post', $value);
    }

    /**
     * Optional. New version of a channel post that is known to the bot and was edited. This update may at times be triggered by changes to message fields that are either unavailable or not actively used by your bot.
     *
     * @return Message|null
     * @throws Base\TelegramException
     */
    public function getEditedChannelPost(): mixed
    {
        return $this->getFieldValue('edited_channel_post');
    }

    /**
     * @param Message|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setEditedChannelPost(mixed $value): static
    {
        return $this->setFieldValue('edited_channel_post', $value);
    }

    /**
     * Optional. The bot was connected to or disconnected from a business account, or a user edited an existing connection with the bot
     *
     * @return BusinessConnection|null
     * @throws Base\TelegramException
     */
    public function getBusinessConnection(): mixed
    {
        return $this->getFieldValue('business_connection');
    }

    /**
     * @param BusinessConnection|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setBusinessConnection(mixed $value): static
    {
        return $this->setFieldValue('business_connection', $value);
    }

    /**
     * Optional. New message from a connected business account
     *
     * @return Message|null
     * @throws Base\TelegramException
     */
    public function getBusinessMessage(): mixed
    {
        return $this->getFieldValue('business_message');
    }

    /**
     * @param Message|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setBusinessMessage(mixed $value): static
    {
        return $this->setFieldValue('business_message', $value);
    }

    /**
     * Optional. New version of a message from a connected business account
     *
     * @return Message|null
     * @throws Base\TelegramException
     */
    public function getEditedBusinessMessage(): mixed
    {
        return $this->getFieldValue('edited_business_message');
    }

    /**
     * @param Message|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setEditedBusinessMessage(mixed $value): static
    {
        return $this->setFieldValue('edited_business_message', $value);
    }

    /**
     * Optional. Messages were deleted from a connected business account
     *
     * @return BusinessMessagesDeleted|null
     * @throws Base\TelegramException
     */
    public function getDeletedBusinessMessages(): mixed
    {
        return $this->getFieldValue('deleted_business_messages');
    }

    /**
     * @param BusinessMessagesDeleted|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setDeletedBusinessMessages(mixed $value): static
    {
        return $this->setFieldValue('deleted_business_messages', $value);
    }

    /**
     * Optional. New guest message. The bot can use the field *Message.guest_query_id* and the method `answerGuestQuery` to send a message in response.
     *
     * @return Message|null
     * @throws Base\TelegramException
     */
    public function getGuestMessage(): mixed
    {
        return $this->getFieldValue('guest_message');
    }

    /**
     * @param Message|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setGuestMessage(mixed $value): static
    {
        return $this->setFieldValue('guest_message', $value);
    }

    /**
     * Optional. A reaction to a message was changed by a user. The bot must be an administrator in the chat and must explicitly specify `"message_reaction"` in the list of *allowed_updates* to receive these updates. The update isn't received for reactions set by bots.
     *
     * @return MessageReactionUpdated|null
     * @throws Base\TelegramException
     */
    public function getMessageReaction(): mixed
    {
        return $this->getFieldValue('message_reaction');
    }

    /**
     * @param MessageReactionUpdated|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setMessageReaction(mixed $value): static
    {
        return $this->setFieldValue('message_reaction', $value);
    }

    /**
     * Optional. Reactions to a message with anonymous reactions were changed. The bot must be an administrator in the chat and must explicitly specify `"message_reaction_count"` in the list of *allowed_updates* to receive these updates. The updates are grouped and can be sent with delay up to a few minutes.
     *
     * @return MessageReactionCountUpdated|null
     * @throws Base\TelegramException
     */
    public function getMessageReactionCount(): mixed
    {
        return $this->getFieldValue('message_reaction_count');
    }

    /**
     * @param MessageReactionCountUpdated|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setMessageReactionCount(mixed $value): static
    {
        return $this->setFieldValue('message_reaction_count', $value);
    }

    /**
     * Optional. New incoming [inline](https://core.telegram.org/bots/api#inline-mode) query
     *
     * @return InlineMode\InlineQuery|null
     * @throws Base\TelegramException
     */
    public function getInlineQuery(): mixed
    {
        return $this->getFieldValue('inline_query');
    }

    /**
     * @param InlineMode\InlineQuery|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setInlineQuery(mixed $value): static
    {
        return $this->setFieldValue('inline_query', $value);
    }

    /**
     * Optional. The result of an [inline](https://core.telegram.org/bots/api#inline-mode) query that was chosen by a user and sent to their chat partner. Please see our documentation on the [feedback collecting](https://core.telegram.org/bots/inline#collecting-feedback) for details on how to enable these updates for your bot.
     *
     * @return InlineMode\ChosenInlineResult|null
     * @throws Base\TelegramException
     */
    public function getChosenInlineResult(): mixed
    {
        return $this->getFieldValue('chosen_inline_result');
    }

    /**
     * @param InlineMode\ChosenInlineResult|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setChosenInlineResult(mixed $value): static
    {
        return $this->setFieldValue('chosen_inline_result', $value);
    }

    /**
     * Optional. New incoming callback query
     *
     * @return CallbackQuery|null
     * @throws Base\TelegramException
     */
    public function getCallbackQuery(): mixed
    {
        return $this->getFieldValue('callback_query');
    }

    /**
     * @param CallbackQuery|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCallbackQuery(mixed $value): static
    {
        return $this->setFieldValue('callback_query', $value);
    }

    /**
     * Optional. New incoming shipping query. Only for invoices with flexible price.
     *
     * @return Payments\ShippingQuery|null
     * @throws Base\TelegramException
     */
    public function getShippingQuery(): mixed
    {
        return $this->getFieldValue('shipping_query');
    }

    /**
     * @param Payments\ShippingQuery|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setShippingQuery(mixed $value): static
    {
        return $this->setFieldValue('shipping_query', $value);
    }

    /**
     * Optional. New incoming pre-checkout query. Contains full information about checkout.
     *
     * @return Payments\PreCheckoutQuery|null
     * @throws Base\TelegramException
     */
    public function getPreCheckoutQuery(): mixed
    {
        return $this->getFieldValue('pre_checkout_query');
    }

    /**
     * @param Payments\PreCheckoutQuery|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPreCheckoutQuery(mixed $value): static
    {
        return $this->setFieldValue('pre_checkout_query', $value);
    }

    /**
     * Optional. A user purchased paid media with a non-empty payload sent by the bot in a non-channel chat
     *
     * @return Payments\PaidMediaPurchased|null
     * @throws Base\TelegramException
     */
    public function getPurchasedPaidMedia(): mixed
    {
        return $this->getFieldValue('purchased_paid_media');
    }

    /**
     * @param Payments\PaidMediaPurchased|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPurchasedPaidMedia(mixed $value): static
    {
        return $this->setFieldValue('purchased_paid_media', $value);
    }

    /**
     * Optional. New poll state. Bots receive only updates about manually stopped polls and polls, which are sent by the bot.
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
     * Optional. A user changed their answer in a non-anonymous poll. Bots receive new votes only in polls that were sent by the bot itself.
     *
     * @return PollAnswer|null
     * @throws Base\TelegramException
     */
    public function getPollAnswer(): mixed
    {
        return $this->getFieldValue('poll_answer');
    }

    /**
     * @param PollAnswer|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPollAnswer(mixed $value): static
    {
        return $this->setFieldValue('poll_answer', $value);
    }

    /**
     * Optional. The bot's chat member status was updated in a chat. For private chats, this update is received only when the bot is blocked or unblocked by the user.
     *
     * @return ChatMemberUpdated|null
     * @throws Base\TelegramException
     */
    public function getMyChatMember(): mixed
    {
        return $this->getFieldValue('my_chat_member');
    }

    /**
     * @param ChatMemberUpdated|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setMyChatMember(mixed $value): static
    {
        return $this->setFieldValue('my_chat_member', $value);
    }

    /**
     * Optional. A chat member's status was updated in a chat. The bot must be an administrator in the chat and must explicitly specify `"chat_member"` in the list of *allowed_updates* to receive these updates.
     *
     * @return ChatMemberUpdated|null
     * @throws Base\TelegramException
     */
    public function getChatMember(): mixed
    {
        return $this->getFieldValue('chat_member');
    }

    /**
     * @param ChatMemberUpdated|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setChatMember(mixed $value): static
    {
        return $this->setFieldValue('chat_member', $value);
    }

    /**
     * Optional. A request to join the chat has been sent. The bot must have the *can_invite_users* administrator right in the chat to receive these updates.
     *
     * @return ChatJoinRequest|null
     * @throws Base\TelegramException
     */
    public function getChatJoinRequest(): mixed
    {
        return $this->getFieldValue('chat_join_request');
    }

    /**
     * @param ChatJoinRequest|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setChatJoinRequest(mixed $value): static
    {
        return $this->setFieldValue('chat_join_request', $value);
    }

    /**
     * Optional. A chat boost was added or changed. The bot must be an administrator in the chat to receive these updates.
     *
     * @return ChatBoostUpdated|null
     * @throws Base\TelegramException
     */
    public function getChatBoost(): mixed
    {
        return $this->getFieldValue('chat_boost');
    }

    /**
     * @param ChatBoostUpdated|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setChatBoost(mixed $value): static
    {
        return $this->setFieldValue('chat_boost', $value);
    }

    /**
     * Optional. A boost was removed from a chat. The bot must be an administrator in the chat to receive these updates.
     *
     * @return ChatBoostRemoved|null
     * @throws Base\TelegramException
     */
    public function getRemovedChatBoost(): mixed
    {
        return $this->getFieldValue('removed_chat_boost');
    }

    /**
     * @param ChatBoostRemoved|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setRemovedChatBoost(mixed $value): static
    {
        return $this->setFieldValue('removed_chat_boost', $value);
    }

    /**
     * Optional. A new bot was created to be managed by the bot, or token or owner of a managed bot was changed
     *
     * @return ManagedBotUpdated|null
     * @throws Base\TelegramException
     */
    public function getManagedBot(): mixed
    {
        return $this->getFieldValue('managed_bot');
    }

    /**
     * @param ManagedBotUpdated|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setManagedBot(mixed $value): static
    {
        return $this->setFieldValue('managed_bot', $value);
    }

    /**
     * Optional. User payment subscription has changed
     *
     * @return BotSubscriptionUpdated|null
     * @throws Base\TelegramException
     */
    public function getSubscription(): mixed
    {
        return $this->getFieldValue('subscription');
    }

    /**
     * @param BotSubscriptionUpdated|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSubscription(mixed $value): static
    {
        return $this->setFieldValue('subscription', $value);
    }

    /**
     * Optional. A user asked the bot to stop the generation of a message
     *
     * @return MessageGenerationStopped|null
     * @throws Base\TelegramException
     */
    public function getStoppedMessageGeneration(): mixed
    {
        return $this->getFieldValue('stopped_message_generation');
    }

    /**
     * @param MessageGenerationStopped|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setStoppedMessageGeneration(mixed $value): static
    {
        return $this->setFieldValue('stopped_message_generation', $value);
    }
}
