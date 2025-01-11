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
* This object represent a user's profile pictures.
* @property int $totalCount
* Total number of profile pictures the target user has
* @property Base\ArrayOfArrayObject|PhotoSize[][] $photos
* Requested profile pictures (in up to 4 sizes each)
*/

class UserProfilePhotos extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'total_count' => [
				'type' => ['int'],
				'required' => true,
			],
			'photos' => [
				'type' => [PhotoSize::class],
				'isArray' => 'matrix',
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
	* @return Base\ArrayOfArrayObject|PhotoSize[][]
	*/

	public function getPhotos(): mixed
	{
		return $this->getFieldValue('photos');
	}

	/**
	* @param Base\ArrayOfArrayObject|PhotoSize[][] $value
	* @return static
	*/

	public function setPhotos(mixed $value): static
	{
		return $this->setFieldValue('photos', $value);
	}

}