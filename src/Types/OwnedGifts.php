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
 * Contains the list of gifts received and owned by a user or a chat.
 * @property int $totalCount
 * The total number of gifts owned by the user or the chat
 * @property Base\ArrayObject|OwnedGift[] $gifts
 * The list of gifts
 * @property string $nextOffset
 * *Optional*. Offset for the next request. If empty, then there are no more results
 */
class OwnedGifts extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'total_count' => [
				'type' => ['int'],
				'required' => true,
			],
			'gifts' => [
				'type' => [OwnedGift::class],
				'isArray' => true,
				'required' => true,
			],
			'next_offset' => [
				'type' => ['string'],
			],
		];
	}
	/**
	* @return int
	*/

	public function getTotalCount(): mixed
	{
		return $this->getFieldValue('total_count');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setTotalCount(mixed $value): static
	{
		return $this->setFieldValue('total_count', $value);
	}

	/**
	* @return Base\ArrayObject|OwnedGift[]
	*/

	public function getGifts(): mixed
	{
		return $this->getFieldValue('gifts');
	}

	/**
	* @param Base\ArrayObject|OwnedGift[] $value
	* @return static
	*/

	public function setGifts(mixed $value): static
	{
		return $this->setFieldValue('gifts', $value);
	}

	/**
	* @return string
	*/

	public function getNextOffset(): mixed
	{
		return $this->getFieldValue('next_offset');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setNextOffset(mixed $value): static
	{
		return $this->setFieldValue('next_offset', $value);
	}

}