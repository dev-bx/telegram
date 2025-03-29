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
 * Describes the paid media added to a message.
 * @property int $starCount
 * The number of Telegram Stars that must be paid to buy access to the media
 * @property Base\ArrayObject|PaidMedia[] $paidMedia
 * Information about the paid media
 */
class PaidMediaInfo extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'star_count' => [
				'type' => ['int'],
				'required' => true,
			],
			'paid_media' => [
				'type' => [PaidMedia::class],
				'isArray' => true,
				'required' => true,
			],
		];
	}
	/**
	* @return int
	*/

	public function getStarCount(): mixed
	{
		return $this->getFieldValue('star_count');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setStarCount(mixed $value): static
	{
		return $this->setFieldValue('star_count', $value);
	}

	/**
	* @return Base\ArrayObject|PaidMedia[]
	*/

	public function getPaidMedia(): mixed
	{
		return $this->getFieldValue('paid_media');
	}

	/**
	* @param Base\ArrayObject|PaidMedia[] $value
	* @return static
	*/

	public function setPaidMedia(mixed $value): static
	{
		return $this->setFieldValue('paid_media', $value);
	}

}