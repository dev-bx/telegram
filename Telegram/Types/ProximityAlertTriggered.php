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
* This object represents the content of a service message, sent whenever a user in the chat triggers a proximity alert set by another user.
* @property User $traveler
* User that triggered the alert
* @property User $watcher
* User that set the alert
* @property int $distance
* The distance between the users
*/

class ProximityAlertTriggered extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'traveler' => [
				'type' => [User::class],
				'required' => true,
			],
			'watcher' => [
				'type' => [User::class],
				'required' => true,
			],
			'distance' => [
				'type' => ['int'],
				'required' => true,
			],
		];
	}
	/**
	* @return User
	*/

	public function getTraveler(): mixed
	{
		return $this->getFieldValue('traveler');
	}

	/**
	* @param User $value
	* @return static
	*/

	public function setTraveler(mixed $value): static
	{
		return $this->setFieldValue('traveler', $value);
	}

	/**
	* @return User
	*/

	public function getWatcher(): mixed
	{
		return $this->getFieldValue('watcher');
	}

	/**
	* @param User $value
	* @return static
	*/

	public function setWatcher(mixed $value): static
	{
		return $this->setFieldValue('watcher', $value);
	}

	/**
	* @return int
	*/

	public function getDistance(): mixed
	{
		return $this->getFieldValue('distance');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setDistance(mixed $value): static
	{
		return $this->setFieldValue('distance', $value);
	}

}