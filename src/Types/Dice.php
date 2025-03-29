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
 * This object represents an animated emoji that displays a random value.
 * @property string $emoji
 * Emoji on which the dice throw animation is based
 * @property int $value
 * Value of the dice, 1-6 for “![🎲](//telegram.org/img/emoji/40/F09F8EB2.png)”, “![🎯](//telegram.org/img/emoji/40/F09F8EAF.png)” and “![🎳](//telegram.org/img/emoji/40/F09F8EB3.png)” base emoji, 1-5 for “![🏀](//telegram.org/img/emoji/40/F09F8F80.png)” and “![⚽](//telegram.org/img/emoji/40/E29ABD.png)” base emoji, 1-64 for “![🎰](//telegram.org/img/emoji/40/F09F8EB0.png)” base emoji
 */
class Dice extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'emoji' => [
				'type' => ['string'],
				'required' => true,
			],
			'value' => [
				'type' => ['int'],
				'required' => true,
			],
		];
	}
	/**
	* @return string
	*/

	public function getEmoji(): mixed
	{
		return $this->getFieldValue('emoji');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setEmoji(mixed $value): static
	{
		return $this->setFieldValue('emoji', $value);
	}

	/**
	* @return int
	*/

	public function getValue(): mixed
	{
		return $this->getFieldValue('value');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setValue(mixed $value): static
	{
		return $this->setFieldValue('value', $value);
	}

}