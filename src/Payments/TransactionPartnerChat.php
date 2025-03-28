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

namespace DevBX\Telegram\Payments;

use DevBX\Telegram\Base;
use DevBX\Telegram\Types;
use DevBX\Telegram\Stickers;


/**
* Describes a transaction with a chat.
* @property string $type
* Type of the transaction partner, always “chat”
* @property Types\Chat $chat
* Information about the chat
* @property Stickers\Gift $gift
* *Optional*. The gift sent to the chat by the bot
*/

class TransactionPartnerChat extends TransactionPartner
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => 'chat',
				'required' => true,
			],
			'chat' => [
				'type' => [Types\Chat::class],
				'required' => true,
			],
			'gift' => [
				'type' => [Stickers\Gift::class],
			],
		];
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
	* @return Types\Chat
	*/

	public function getChat(): mixed
	{
		return $this->getFieldValue('chat');
	}

	/**
	* @param Types\Chat $value
	* @return static
	*/

	public function setChat(mixed $value): static
	{
		return $this->setFieldValue('chat', $value);
	}

	/**
	* @return Stickers\Gift
	*/

	public function getGift(): mixed
	{
		return $this->getFieldValue('gift');
	}

	/**
	* @param Stickers\Gift $value
	* @return static
	*/

	public function setGift(mixed $value): static
	{
		return $this->setFieldValue('gift', $value);
	}

}