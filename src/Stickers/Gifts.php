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

namespace DevBX\Telegram\Stickers;

use DevBX\Telegram\Base;


/**
 * This object represent a list of gifts.
 * @property Base\ArrayObject|Gift[] $gifts
 * The list of gifts
 */
class Gifts extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'gifts' => [
				'type' => [Gift::class],
				'isArray' => true,
				'required' => true,
			],
		];
	}
	/**
	* @return Base\ArrayObject|Gift[]
	*/

	public function getGifts(): mixed
	{
		return $this->getFieldValue('gifts');
	}

	/**
	* @param Base\ArrayObject|Gift[] $value
	* @return static
	*/

	public function setGifts(mixed $value): static
	{
		return $this->setFieldValue('gifts', $value);
	}

}