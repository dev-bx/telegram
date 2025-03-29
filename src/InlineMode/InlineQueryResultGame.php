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
 * Represents a [Game](#games).
 * @property string $type
 * Type of the result, must be *game*
 * @property string $id
 * Unique identifier for this result, 1-64 bytes
 * @property string $gameShortName
 * Short name of the game
 * @property Types\InlineKeyboardMarkup $replyMarkup
 * *Optional*. [Inline keyboard](/bots/features#inline-keyboards) attached to the message
 */
class InlineQueryResultGame extends InlineQueryResult
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => 'game',
				'required' => true,
			],
			'id' => [
				'type' => ['string'],
				'required' => true,
			],
			'game_short_name' => [
				'type' => ['string'],
				'required' => true,
			],
			'reply_markup' => [
				'type' => [Types\InlineKeyboardMarkup::class],
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

	/**
	* @return Types\InlineKeyboardMarkup
	*/

	public function getReplyMarkup(): mixed
	{
		return $this->getFieldValue('reply_markup');
	}

	/**
	* @param Types\InlineKeyboardMarkup $value
	* @return static
	*/

	public function setReplyMarkup(mixed $value): static
	{
		return $this->setFieldValue('reply_markup', $value);
	}

}