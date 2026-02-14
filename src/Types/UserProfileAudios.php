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
 * This object represents the audios displayed on a user's profile.
 * @property int $totalCount
 * Total number of profile audios for the target user
 * @property Base\ArrayObject|Audio[] $audios
 * Requested profile audios
 */
class UserProfileAudios extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'total_count' => [
				'type' => ['int'],
				'required' => true,
			],
			'audios' => [
				'type' => [Audio::class],
				'isArray' => true,
				'required' => true,
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
	* @return Base\ArrayObject|Audio[]
	*/

	public function getAudios(): mixed
	{
		return $this->getFieldValue('audios');
	}

	/**
	* @param Base\ArrayObject|Audio[] $value
	* @return static
	*/

	public function setAudios(mixed $value): static
	{
		return $this->setFieldValue('audios', $value);
	}

}