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
 * This object represents the bot's short description.
 * @property string $shortDescription
 * The bot's short description
 */
class BotShortDescription extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'short_description' => [
				'type' => ['string'],
				'required' => true,
			],
		];
	}
	/**
	* @return string
	*/

	public function getShortDescription(): mixed
	{
		return $this->getFieldValue('short_description');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setShortDescription(mixed $value): static
	{
		return $this->setFieldValue('short_description', $value);
	}

}