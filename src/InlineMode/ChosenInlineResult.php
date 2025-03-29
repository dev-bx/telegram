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
 * **Note:** It is necessary to enable [inline feedback](/bots/inline#collecting-feedback) via [@BotFather](https://t.me/botfather) in order to receive these objects in updates.
 * @property string $resultId
 * The unique identifier for the result that was chosen
 * @property Types\User $from
 * The user that chose the result
 * @property Types\Location $location
 * *Optional*. Sender location, only for bots that require user location
 * @property string $inlineMessageId
 * *Optional*. Identifier of the sent inline message. Available only if there is an [inline keyboard](#inlinekeyboardmarkup) attached to the message. Will be also received in [callback queries](#callbackquery) and can be used to [edit](#updating-messages) the message.
 * @property string $query
 * The query that was used to obtain the result
 */
class ChosenInlineResult extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'result_id' => [
				'type' => ['string'],
				'required' => true,
			],
			'from' => [
				'type' => [Types\User::class],
				'required' => true,
			],
			'location' => [
				'type' => [Types\Location::class],
			],
			'inline_message_id' => [
				'type' => ['string'],
			],
			'query' => [
				'type' => ['string'],
				'required' => true,
			],
		];
	}
	/**
	* @return string
	*/

	public function getResultId(): mixed
	{
		return $this->getFieldValue('result_id');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setResultId(mixed $value): static
	{
		return $this->setFieldValue('result_id', $value);
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

}