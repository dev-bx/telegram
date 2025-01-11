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
use DevBX\Telegram\InlineMode;
use DevBX\Telegram\Payments;


/**
* This [object](#available-types) represents an incoming update.  
At most **one** of the optional parameters can be present in any given update.
* @property int $updateId
* The update's unique identifier. Update identifiers start from a certain positive number and increase sequentially. This identifier becomes especially handy if you're using [webhooks](#setwebhook), since it allows you to ignore repeated updates or to restore the correct update sequence, should they get out of order. If there are no new updates for at least a week, then identifier of the next update will be chosen randomly instead of sequentially.
* @property Message $message
* *Optional*. New incoming message of any kind - text, photo, sticker, etc.
* @property Message $editedMessage
* *Optional*. New version of a message that is known to the bot and was edited. This update may at times be triggered by changes to message fields that are either unavailable or not actively used by your bot.
* @property Message $channelPost
* *Optional*. New incoming channel post of any kind - text, photo, sticker, etc.
* @property Message $editedChannelPost
* *Optional*. New version of a channel post that is known to the bot and was edited. This update may at times be triggered by changes to message fields that are either unavailable or not actively used by your bot.
* @property BusinessConnection $businessConnection
* *Optional*. The bot was connected to or disconnected from a business account, or a user edited an existing connection with the bot
* @property Message $businessMessage
* *Optional*. New message from a connected business account
* @property Message $editedBusinessMessage
* *Optional*. New version of a message from a connected business account
* @property BusinessMessagesDeleted $deletedBusinessMessages
* *Optional*. Messages were deleted from a connected business account
* @property MessageReactionUpdated $messageReaction
* *Optional*. A reaction to a message was changed by a user. The bot must be an administrator in the chat and must explicitly specify `"message_reaction"` in the list of *allowed\_updates* to receive these updates. The update isn't received for reactions set by bots.
* @property MessageReactionCountUpdated $messageReactionCount
* *Optional*. Reactions to a message with anonymous reactions were changed. The bot must be an administrator in the chat and must explicitly specify `"message_reaction_count"` in the list of *allowed\_updates* to receive these updates. The updates are grouped and can be sent with delay up to a few minutes.
* @property InlineMode\InlineQuery $inlineQuery
* *Optional*. New incoming [inline](#inline-mode) query
* @property InlineMode\ChosenInlineResult $chosenInlineResult
* *Optional*. The result of an [inline](#inline-mode) query that was chosen by a user and sent to their chat partner. Please see our documentation on the [feedback collecting](/bots/inline#collecting-feedback) for details on how to enable these updates for your bot.
* @property CallbackQuery $callbackQuery
* *Optional*. New incoming callback query
* @property Payments\ShippingQuery $shippingQuery
* *Optional*. New incoming shipping query. Only for invoices with flexible price
* @property Payments\PreCheckoutQuery $preCheckoutQuery
* *Optional*. New incoming pre-checkout query. Contains full information about checkout
* @property Payments\PaidMediaPurchased $purchasedPaidMedia
* *Optional*. A user purchased paid media with a non-empty payload sent by the bot in a non-channel chat
* @property Poll $poll
* *Optional*. New poll state. Bots receive only updates about manually stopped polls and polls, which are sent by the bot
* @property PollAnswer $pollAnswer
* *Optional*. A user changed their answer in a non-anonymous poll. Bots receive new votes only in polls that were sent by the bot itself.
* @property ChatMemberUpdated $myChatMember
* *Optional*. The bot's chat member status was updated in a chat. For private chats, this update is received only when the bot is blocked or unblocked by the user.
* @property ChatMemberUpdated $chatMember
* *Optional*. A chat member's status was updated in a chat. The bot must be an administrator in the chat and must explicitly specify `"chat_member"` in the list of *allowed\_updates* to receive these updates.
* @property ChatJoinRequest $chatJoinRequest
* *Optional*. A request to join the chat has been sent. The bot must have the *can\_invite\_users* administrator right in the chat to receive these updates.
* @property ChatBoostUpdated $chatBoost
* *Optional*. A chat boost was added or changed. The bot must be an administrator in the chat to receive these updates.
* @property ChatBoostRemoved $removedChatBoost
* *Optional*. A boost was removed from a chat. The bot must be an administrator in the chat to receive these updates.
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
		];
	}
	/**
	* @return int
	*/

	public function getUpdateId(): mixed
	{
		return $this->getFieldValue('update_id');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setUpdateId(mixed $value): static
	{
		return $this->setFieldValue('update_id', $value);
	}

	/**
	* @return Message
	*/

	public function getMessage(): mixed
	{
		return $this->getFieldValue('message');
	}

	/**
	* @param Message $value
	* @return static
	*/

	public function setMessage(mixed $value): static
	{
		return $this->setFieldValue('message', $value);
	}

	/**
	* @return Message
	*/

	public function getEditedMessage(): mixed
	{
		return $this->getFieldValue('edited_message');
	}

	/**
	* @param Message $value
	* @return static
	*/

	public function setEditedMessage(mixed $value): static
	{
		return $this->setFieldValue('edited_message', $value);
	}

	/**
	* @return Message
	*/

	public function getChannelPost(): mixed
	{
		return $this->getFieldValue('channel_post');
	}

	/**
	* @param Message $value
	* @return static
	*/

	public function setChannelPost(mixed $value): static
	{
		return $this->setFieldValue('channel_post', $value);
	}

	/**
	* @return Message
	*/

	public function getEditedChannelPost(): mixed
	{
		return $this->getFieldValue('edited_channel_post');
	}

	/**
	* @param Message $value
	* @return static
	*/

	public function setEditedChannelPost(mixed $value): static
	{
		return $this->setFieldValue('edited_channel_post', $value);
	}

	/**
	* @return BusinessConnection
	*/

	public function getBusinessConnection(): mixed
	{
		return $this->getFieldValue('business_connection');
	}

	/**
	* @param BusinessConnection $value
	* @return static
	*/

	public function setBusinessConnection(mixed $value): static
	{
		return $this->setFieldValue('business_connection', $value);
	}

	/**
	* @return Message
	*/

	public function getBusinessMessage(): mixed
	{
		return $this->getFieldValue('business_message');
	}

	/**
	* @param Message $value
	* @return static
	*/

	public function setBusinessMessage(mixed $value): static
	{
		return $this->setFieldValue('business_message', $value);
	}

	/**
	* @return Message
	*/

	public function getEditedBusinessMessage(): mixed
	{
		return $this->getFieldValue('edited_business_message');
	}

	/**
	* @param Message $value
	* @return static
	*/

	public function setEditedBusinessMessage(mixed $value): static
	{
		return $this->setFieldValue('edited_business_message', $value);
	}

	/**
	* @return BusinessMessagesDeleted
	*/

	public function getDeletedBusinessMessages(): mixed
	{
		return $this->getFieldValue('deleted_business_messages');
	}

	/**
	* @param BusinessMessagesDeleted $value
	* @return static
	*/

	public function setDeletedBusinessMessages(mixed $value): static
	{
		return $this->setFieldValue('deleted_business_messages', $value);
	}

	/**
	* @return MessageReactionUpdated
	*/

	public function getMessageReaction(): mixed
	{
		return $this->getFieldValue('message_reaction');
	}

	/**
	* @param MessageReactionUpdated $value
	* @return static
	*/

	public function setMessageReaction(mixed $value): static
	{
		return $this->setFieldValue('message_reaction', $value);
	}

	/**
	* @return MessageReactionCountUpdated
	*/

	public function getMessageReactionCount(): mixed
	{
		return $this->getFieldValue('message_reaction_count');
	}

	/**
	* @param MessageReactionCountUpdated $value
	* @return static
	*/

	public function setMessageReactionCount(mixed $value): static
	{
		return $this->setFieldValue('message_reaction_count', $value);
	}

	/**
	* @return InlineMode\InlineQuery
	*/

	public function getInlineQuery(): mixed
	{
		return $this->getFieldValue('inline_query');
	}

	/**
	* @param InlineMode\InlineQuery $value
	* @return static
	*/

	public function setInlineQuery(mixed $value): static
	{
		return $this->setFieldValue('inline_query', $value);
	}

	/**
	* @return InlineMode\ChosenInlineResult
	*/

	public function getChosenInlineResult(): mixed
	{
		return $this->getFieldValue('chosen_inline_result');
	}

	/**
	* @param InlineMode\ChosenInlineResult $value
	* @return static
	*/

	public function setChosenInlineResult(mixed $value): static
	{
		return $this->setFieldValue('chosen_inline_result', $value);
	}

	/**
	* @return CallbackQuery
	*/

	public function getCallbackQuery(): mixed
	{
		return $this->getFieldValue('callback_query');
	}

	/**
	* @param CallbackQuery $value
	* @return static
	*/

	public function setCallbackQuery(mixed $value): static
	{
		return $this->setFieldValue('callback_query', $value);
	}

	/**
	* @return Payments\ShippingQuery
	*/

	public function getShippingQuery(): mixed
	{
		return $this->getFieldValue('shipping_query');
	}

	/**
	* @param Payments\ShippingQuery $value
	* @return static
	*/

	public function setShippingQuery(mixed $value): static
	{
		return $this->setFieldValue('shipping_query', $value);
	}

	/**
	* @return Payments\PreCheckoutQuery
	*/

	public function getPreCheckoutQuery(): mixed
	{
		return $this->getFieldValue('pre_checkout_query');
	}

	/**
	* @param Payments\PreCheckoutQuery $value
	* @return static
	*/

	public function setPreCheckoutQuery(mixed $value): static
	{
		return $this->setFieldValue('pre_checkout_query', $value);
	}

	/**
	* @return Payments\PaidMediaPurchased
	*/

	public function getPurchasedPaidMedia(): mixed
	{
		return $this->getFieldValue('purchased_paid_media');
	}

	/**
	* @param Payments\PaidMediaPurchased $value
	* @return static
	*/

	public function setPurchasedPaidMedia(mixed $value): static
	{
		return $this->setFieldValue('purchased_paid_media', $value);
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
	* @return PollAnswer
	*/

	public function getPollAnswer(): mixed
	{
		return $this->getFieldValue('poll_answer');
	}

	/**
	* @param PollAnswer $value
	* @return static
	*/

	public function setPollAnswer(mixed $value): static
	{
		return $this->setFieldValue('poll_answer', $value);
	}

	/**
	* @return ChatMemberUpdated
	*/

	public function getMyChatMember(): mixed
	{
		return $this->getFieldValue('my_chat_member');
	}

	/**
	* @param ChatMemberUpdated $value
	* @return static
	*/

	public function setMyChatMember(mixed $value): static
	{
		return $this->setFieldValue('my_chat_member', $value);
	}

	/**
	* @return ChatMemberUpdated
	*/

	public function getChatMember(): mixed
	{
		return $this->getFieldValue('chat_member');
	}

	/**
	* @param ChatMemberUpdated $value
	* @return static
	*/

	public function setChatMember(mixed $value): static
	{
		return $this->setFieldValue('chat_member', $value);
	}

	/**
	* @return ChatJoinRequest
	*/

	public function getChatJoinRequest(): mixed
	{
		return $this->getFieldValue('chat_join_request');
	}

	/**
	* @param ChatJoinRequest $value
	* @return static
	*/

	public function setChatJoinRequest(mixed $value): static
	{
		return $this->setFieldValue('chat_join_request', $value);
	}

	/**
	* @return ChatBoostUpdated
	*/

	public function getChatBoost(): mixed
	{
		return $this->getFieldValue('chat_boost');
	}

	/**
	* @param ChatBoostUpdated $value
	* @return static
	*/

	public function setChatBoost(mixed $value): static
	{
		return $this->setFieldValue('chat_boost', $value);
	}

	/**
	* @return ChatBoostRemoved
	*/

	public function getRemovedChatBoost(): mixed
	{
		return $this->getFieldValue('removed_chat_boost');
	}

	/**
	* @param ChatBoostRemoved $value
	* @return static
	*/

	public function setRemovedChatBoost(mixed $value): static
	{
		return $this->setFieldValue('removed_chat_boost', $value);
	}

}