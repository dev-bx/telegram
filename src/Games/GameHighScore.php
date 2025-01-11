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

namespace DevBX\Telegram\Games;

use DevBX\Telegram\Base;
use DevBX\Telegram\Types;


/**
* And that's about all we've got for now.  
If you've got any questions, please check out our [**Bot FAQ »**](/bots/faq)
* @property int $position
* Position in high score table for the game
* @property Types\User $user
* User
* @property int $score
* Score
*/

class GameHighScore extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'position' => [
				'type' => ['int'],
				'required' => true,
			],
			'user' => [
				'type' => [Types\User::class],
				'required' => true,
			],
			'score' => [
				'type' => ['int'],
				'required' => true,
			],
		];
	}
	/**
	* @return int
	*/

	public function getPosition(): mixed
	{
		return $this->getFieldValue('position');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setPosition(mixed $value): static
	{
		return $this->setFieldValue('position', $value);
	}

	/**
	* @return Types\User
	*/

	public function getUser(): mixed
	{
		return $this->getFieldValue('user');
	}

	/**
	* @param Types\User $value
	* @return static
	*/

	public function setUser(mixed $value): static
	{
		return $this->setFieldValue('user', $value);
	}

	/**
	* @return int
	*/

	public function getScore(): mixed
	{
		return $this->getFieldValue('score');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setScore(mixed $value): static
	{
		return $this->setFieldValue('score', $value);
	}

}