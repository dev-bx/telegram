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
* This object represents an incoming callback query from a callback button in an [inline keyboard](/bots/features#inline-keyboards). If the button that originated the query was attached to a message sent by the bot, the field *message* will be present. If the button was attached to a message sent via the bot (in [inline mode](#inline-mode)), the field *inline\_message\_id* will be present. Exactly one of the fields *data* or *game\_short\_name* will be present.
* @property string $id
* Unique identifier for this query
* @property User $from
* Sender
* @property MaybeInaccessibleMessage $message
* *Optional*. Message sent by the bot with the callback button that originated the query
* @property string $inlineMessageId
* *Optional*. Identifier of the message sent via the bot in inline mode, that originated the query.
* @property string $chatInstance
* Global identifier, uniquely corresponding to the chat to which the message with the callback button was sent. Useful for high scores in [games](#games).
* @property string $data
* *Optional*. Data associated with the callback button. Be aware that the message originated the query can contain no callback buttons with this data.
* @property string $gameShortName
* *Optional*. Short name of a [Game](#games) to be returned, serves as the unique identifier for the game
*/

class CallbackQuery extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'id' => [
				'type' => ['string'],
				'required' => true,
			],
			'from' => [
				'type' => [User::class],
				'required' => true,
			],
			'message' => [
				'type' => [MaybeInaccessibleMessage::class],
			],
			'inline_message_id' => [
				'type' => ['string'],
			],
			'chat_instance' => [
				'type' => ['string'],
				'required' => true,
			],
			'data' => [
				'type' => ['string'],
			],
			'game_short_name' => [
				'type' => ['string'],
			],
		];
	}
	/**
	* @return string
	*/

	public function getId(): mixed
	{
		return $this->getFieldValue('id');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setId(mixed $value): static
	{
		return $this->setFieldValue('id', $value);
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
	* @return MaybeInaccessibleMessage
	*/

	public function getMessage(): mixed
	{
		return $this->getFieldValue('message');
	}

	/**
	* @param MaybeInaccessibleMessage $value
	* @return static
	*/

	public function setMessage(mixed $value): static
	{
		return $this->setFieldValue('message', $value);
	}

	/**
	* @return string
	*/

	public function getInlineMessageId(): mixed
	{
		return $this->getFieldValue('inline_message_id');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setInlineMessageId(mixed $value): static
	{
		return $this->setFieldValue('inline_message_id', $value);
	}

	/**
	* @return string
	*/

	public function getChatInstance(): mixed
	{
		return $this->getFieldValue('chat_instance');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setChatInstance(mixed $value): static
	{
		return $this->setFieldValue('chat_instance', $value);
	}

	/**
	* @return string
	*/

	public function getData(): mixed
	{
		return $this->getFieldValue('data');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setData(mixed $value): static
	{
		return $this->setFieldValue('data', $value);
	}

	/**
	* @return string
	*/

	public function getGameShortName(): mixed
	{
		return $this->getFieldValue('game_short_name');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setGameShortName(mixed $value): static
	{
		return $this->setFieldValue('game_short_name', $value);
	}

}