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
* This object represents a chat photo.
* @property string $smallFileId
* File identifier of small (160x160) chat photo. This file\_id can be used only for photo download and only for as long as the photo is not changed.
* @property string $smallFileUniqueId
* Unique file identifier of small (160x160) chat photo, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
* @property string $bigFileId
* File identifier of big (640x640) chat photo. This file\_id can be used only for photo download and only for as long as the photo is not changed.
* @property string $bigFileUniqueId
* Unique file identifier of big (640x640) chat photo, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
*/

class ChatPhoto extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'small_file_id' => [
				'type' => ['string'],
				'required' => true,
			],
			'small_file_unique_id' => [
				'type' => ['string'],
				'required' => true,
			],
			'big_file_id' => [
				'type' => ['string'],
				'required' => true,
			],
			'big_file_unique_id' => [
				'type' => ['string'],
				'required' => true,
			],
		];
	}
	/**
	* @return string
	*/

	public function getSmallFileId(): mixed
	{
		return $this->getFieldValue('small_file_id');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setSmallFileId(mixed $value): static
	{
		return $this->setFieldValue('small_file_id', $value);
	}

	/**
	* @return string
	*/

	public function getSmallFileUniqueId(): mixed
	{
		return $this->getFieldValue('small_file_unique_id');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setSmallFileUniqueId(mixed $value): static
	{
		return $this->setFieldValue('small_file_unique_id', $value);
	}

	/**
	* @return string
	*/

	public function getBigFileId(): mixed
	{
		return $this->getFieldValue('big_file_id');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setBigFileId(mixed $value): static
	{
		return $this->setFieldValue('big_file_id', $value);
	}

	/**
	* @return string
	*/

	public function getBigFileUniqueId(): mixed
	{
		return $this->getFieldValue('big_file_unique_id');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setBigFileUniqueId(mixed $value): static
	{
		return $this->setFieldValue('big_file_unique_id', $value);
	}

}