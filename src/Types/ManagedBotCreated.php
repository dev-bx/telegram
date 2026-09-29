<?php

/**
 * @project Telegram Bot Api
 * @author Kubeev Ruslan <ruslan@dev-bx.ru>
 * @copyright 2026 Kubeev Ruslan
 * @license MIT
 * @link https://dev-bx.ru/
 *
 * This file is part of the project Telegram Bot Api Class Generator.
 */

namespace DevBX\Telegram\Types;

use DevBX\Telegram\Base;


/**
 * This object contains information about the bot that was created to be managed by the current bot.
 * @property User $bot
 * Information about the bot. The bot's token can be fetched using the method [getManagedBotToken](#getmanagedbottoken).
 */
class ManagedBotCreated extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'bot' => [
				'type' => [User::class],
				'required' => true,
			],
		];
	}
	/**
	* @return User
	*/

	public function getBot(): mixed
	{
		return $this->getFieldValue('bot');
	}

	/**
	* @param User $value
	* @return static
	*/

	public function setBot(mixed $value): static
	{
		return $this->setFieldValue('bot', $value);
	}

}