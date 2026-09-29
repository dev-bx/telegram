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
 * Describes reply parameters for the message that is being sent.
 * @property int $messageId
 * *Optional*. Identifier of the message that will be replied to in the current chat, or in the chat *chat\_id* if it is specified. Required if *ephemeral\_message\_id* isn't specified.
 * @property int|string $chatId
 * *Optional*. If the message to be replied to is from a different chat, unique identifier for the chat or username of the bot, supergroup or channel in the format `@username`. Not supported for messages sent on behalf of a business account, messages from channel direct messages chats and ephemeral messages.
 * @property int $ephemeralMessageId
 * *Optional*. Identifier of the incoming ephemeral message that will be replied to in the current chat. A reply to an ephemeral message must itself be an ephemeral message. An ephemeral message may only be replied to within 15 seconds of being sent. Required if *message\_id* isn't specified.
 * @property bool $allowSendingWithoutReply
 * *Optional*. Pass *True* if the message should be sent even if the specified message to be replied to is not found. Always *False* for replies in another chat or forum topic, and sent ephemeral messages. Always *True* for messages sent on behalf of a business account.
 * @property string $quote
 * *Optional*. Quoted part of the message to be replied to; 0-1024 characters after entities parsing. The quote must be an exact substring of the message to be replied to, including *bold*, *italic*, *underline*, *strikethrough*, *spoiler*, *custom\_emoji*, and *date\_time* entities. The message will fail to send if the quote isn't found in the original message. Ignored for ephemeral messages.
 * @property string $quoteParseMode
 * *Optional*. Mode for parsing entities in the quote. See [formatting options](#formatting-options) for more details.
 * @property Base\ArrayObject|MessageEntity[] $quoteEntities
 * *Optional*. A JSON-serialized list of special entities that appear in the quote. It can be specified instead of *quote\_parse\_mode*.
 * @property int $quotePosition
 * *Optional*. Position of the quote in the original message in UTF-16 code units
 * @property int $checklistTaskId
 * *Optional*. Identifier of the specific checklist task to be replied to
 * @property string $pollOptionId
 * *Optional*. Persistent identifier of the specific poll option to be replied to
 */
class ReplyParameters extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'message_id' => [
				'type' => ['int'],
			],
			'chat_id' => [
				'type' => ['int', 'string'],
			],
			'ephemeral_message_id' => [
				'type' => ['int'],
			],
			'allow_sending_without_reply' => [
				'type' => ['bool'],
			],
			'quote' => [
				'type' => ['string'],
			],
			'quote_parse_mode' => [
				'type' => ['string'],
			],
			'quote_entities' => [
				'type' => [MessageEntity::class],
				'isArray' => true,
			],
			'quote_position' => [
				'type' => ['int'],
			],
			'checklist_task_id' => [
				'type' => ['int'],
			],
			'poll_option_id' => [
				'type' => ['string'],
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

	public function getEphemeralMessageId(): mixed
	{
		return $this->getFieldValue('ephemeral_message_id');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setEphemeralMessageId(mixed $value): static
	{
		return $this->setFieldValue('ephemeral_message_id', $value);
	}

	/**
	* @return bool
	*/

	public function getAllowSendingWithoutReply(): mixed
	{
		return $this->getFieldValue('allow_sending_without_reply');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setAllowSendingWithoutReply(mixed $value): static
	{
		return $this->setFieldValue('allow_sending_without_reply', $value);
	}

	/**
	* @return string
	*/

	public function getQuote(): mixed
	{
		return $this->getFieldValue('quote');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setQuote(mixed $value): static
	{
		return $this->setFieldValue('quote', $value);
	}

	/**
	* @return string
	*/

	public function getQuoteParseMode(): mixed
	{
		return $this->getFieldValue('quote_parse_mode');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setQuoteParseMode(mixed $value): static
	{
		return $this->setFieldValue('quote_parse_mode', $value);
	}

	/**
	* @return Base\ArrayObject|MessageEntity[]
	*/

	public function getQuoteEntities(): mixed
	{
		return $this->getFieldValue('quote_entities');
	}

	/**
	* @param Base\ArrayObject|MessageEntity[] $value
	* @return static
	*/

	public function setQuoteEntities(mixed $value): static
	{
		return $this->setFieldValue('quote_entities', $value);
	}

	/**
	* @return int
	*/

	public function getQuotePosition(): mixed
	{
		return $this->getFieldValue('quote_position');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setQuotePosition(mixed $value): static
	{
		return $this->setFieldValue('quote_position', $value);
	}

	/**
	* @return int
	*/

	public function getChecklistTaskId(): mixed
	{
		return $this->getFieldValue('checklist_task_id');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setChecklistTaskId(mixed $value): static
	{
		return $this->setFieldValue('checklist_task_id', $value);
	}

	/**
	* @return string
	*/

	public function getPollOptionId(): mixed
	{
		return $this->getFieldValue('poll_option_id');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setPollOptionId(mixed $value): static
	{
		return $this->setFieldValue('poll_option_id', $value);
	}

}