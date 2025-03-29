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
 * This object represents the bot's name.
 * @property string $name
 * The bot's name
 */
class BotName extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'name' => [
				'type' => ['string'],
				'required' => true,
			],
		];
	}
	/**
	* @return string
	*/

	public function getName(): mixed
	{
		return $this->getFieldValue('name');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setName(mixed $value): static
	{
		return $this->setFieldValue('name', $value);
	}

}