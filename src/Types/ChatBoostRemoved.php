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
* This object represents a boost removed from a chat.
* @property Chat $chat
* Chat which was boosted
* @property string $boostId
* Unique identifier of the boost
* @property int $removeDate
* Point in time (Unix timestamp) when the boost was removed
* @property ChatBoostSource|ChatBoostSourcePremium|ChatBoostSourceGiftCode|ChatBoostSourceGiveaway $source
* Source of the removed boost
*/

class ChatBoostRemoved extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'chat' => [
				'type' => [Chat::class],
				'required' => true,
			],
			'boost_id' => [
				'type' => ['string'],
				'required' => true,
			],
			'remove_date' => [
				'type' => ['int'],
				'required' => true,
			],
			'source' => [
				'type' => [ChatBoostSource::class],
				'required' => true,
			],
		];
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
	* @return string
	*/

	public function getBoostId(): mixed
	{
		return $this->getFieldValue('boost_id');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setBoostId(mixed $value): static
	{
		return $this->setFieldValue('boost_id', $value);
	}

	/**
	* @return int
	*/

	public function getRemoveDate(): mixed
	{
		return $this->getFieldValue('remove_date');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setRemoveDate(mixed $value): static
	{
		return $this->setFieldValue('remove_date', $value);
	}

	/**
	* @return ChatBoostSource|ChatBoostSourcePremium|ChatBoostSourceGiftCode|ChatBoostSourceGiveaway
	*/

	public function getSource(): mixed
	{
		return $this->getFieldValue('source');
	}

	/**
	* @param ChatBoostSource|ChatBoostSourcePremium|ChatBoostSourceGiftCode|ChatBoostSourceGiveaway $value
	* @return static
	*/

	public function setSource(mixed $value): static
	{
		return $this->setFieldValue('source', $value);
	}

}