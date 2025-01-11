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

namespace DevBX\Telegram\InlineMode;

use DevBX\Telegram\Base;
use DevBX\Telegram\Types;


/**
* This object represents an incoming inline query. When the user sends an empty query, your bot could return some default or trending results.
* @property string $id
* Unique identifier for this query
* @property Types\User $from
* Sender
* @property string $query
* Text of the query (up to 256 characters)
* @property string $offset
* Offset of the results to be returned, can be controlled by the bot
* @property string $chatType
* *Optional*. Type of the chat from which the inline query was sent. Can be either “sender” for a private chat with the inline query sender, “private”, “group”, “supergroup”, or “channel”. The chat type should be always known for requests sent from official clients and most third-party clients, unless the request was sent from a secret chat
* @property Types\Location $location
* *Optional*. Sender location, only for bots that request user location
*/

class InlineQuery extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'id' => [
				'type' => ['string'],
				'required' => true,
			],
			'from' => [
				'type' => [Types\User::class],
				'required' => true,
			],
			'query' => [
				'type' => ['string'],
				'required' => true,
			],
			'offset' => [
				'type' => ['string'],
				'required' => true,
			],
			'chat_type' => [
				'type' => ['string'],
			],
			'location' => [
				'type' => [Types\Location::class],
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
	* @return Types\User
	*/

	public function getFrom(): mixed
	{
		return $this->getFieldValue('from');
	}

	/**
	* @param Types\User $value
	* @return static
	*/

	public function setFrom(mixed $value): static
	{
		return $this->setFieldValue('from', $value);
	}

	/**
	* @return string
	*/

	public function getQuery(): mixed
	{
		return $this->getFieldValue('query');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setQuery(mixed $value): static
	{
		return $this->setFieldValue('query', $value);
	}

	/**
	* @return string
	*/

	public function getOffset(): mixed
	{
		return $this->getFieldValue('offset');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setOffset(mixed $value): static
	{
		return $this->setFieldValue('offset', $value);
	}

	/**
	* @return string
	*/

	public function getChatType(): mixed
	{
		return $this->getFieldValue('chat_type');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setChatType(mixed $value): static
	{
		return $this->setFieldValue('chat_type', $value);
	}

	/**
	* @return Types\Location
	*/

	public function getLocation(): mixed
	{
		return $this->getFieldValue('location');
	}

	/**
	* @param Types\Location $value
	* @return static
	*/

	public function setLocation(mixed $value): static
	{
		return $this->setFieldValue('location', $value);
	}

}