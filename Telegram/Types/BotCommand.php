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
* This object represents a bot command.
* @property string $command
* Text of the command; 1-32 characters. Can contain only lowercase English letters, digits and underscores.
* @property string $description
* Description of the command; 1-256 characters.
*/

class BotCommand extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'command' => [
				'type' => ['string'],
				'required' => true,
			],
			'description' => [
				'type' => ['string'],
				'required' => true,
			],
		];
	}
	/**
	* @return string
	*/

	public function getCommand(): mixed
	{
		return $this->getFieldValue('command');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setCommand(mixed $value): static
	{
		return $this->setFieldValue('command', $value);
	}

	/**
	* @return string
	*/

	public function getDescription(): mixed
	{
		return $this->getFieldValue('description');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setDescription(mixed $value): static
	{
		return $this->setFieldValue('description', $value);
	}

}