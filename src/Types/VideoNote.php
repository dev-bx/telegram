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
 * This object represents a [video message](https://telegram.org/blog/video-messages-and-telescope) (available in Telegram apps as of [v.4.0](https://telegram.org/blog/video-messages-and-telescope)).
 * @property string $fileId
 * Identifier for this file, which can be used to download or reuse the file
 * @property string $fileUniqueId
 * Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 * @property int $length
 * Video width and height (diameter of the video message) as defined by the sender
 * @property int $duration
 * Duration of the video in seconds as defined by the sender
 * @property PhotoSize $thumbnail
 * *Optional*. Video thumbnail
 * @property int $fileSize
 * *Optional*. File size in bytes
 */
class VideoNote extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'file_id' => [
				'type' => ['string'],
				'required' => true,
			],
			'file_unique_id' => [
				'type' => ['string'],
				'required' => true,
			],
			'length' => [
				'type' => ['int'],
				'required' => true,
			],
			'duration' => [
				'type' => ['int'],
				'required' => true,
			],
			'thumbnail' => [
				'type' => [PhotoSize::class],
			],
			'file_size' => [
				'type' => ['int'],
			],
		];
	}
	/**
	* @return string
	*/

	public function getFileId(): mixed
	{
		return $this->getFieldValue('file_id');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setFileId(mixed $value): static
	{
		return $this->setFieldValue('file_id', $value);
	}

	/**
	* @return string
	*/

	public function getFileUniqueId(): mixed
	{
		return $this->getFieldValue('file_unique_id');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setFileUniqueId(mixed $value): static
	{
		return $this->setFieldValue('file_unique_id', $value);
	}

	/**
	* @return int
	*/

	public function getLength(): mixed
	{
		return $this->getFieldValue('length');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setLength(mixed $value): static
	{
		return $this->setFieldValue('length', $value);
	}

	/**
	* @return int
	*/

	public function getDuration(): mixed
	{
		return $this->getFieldValue('duration');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setDuration(mixed $value): static
	{
		return $this->setFieldValue('duration', $value);
	}

	/**
	* @return PhotoSize
	*/

	public function getThumbnail(): mixed
	{
		return $this->getFieldValue('thumbnail');
	}

	/**
	* @param PhotoSize $value
	* @return static
	*/

	public function setThumbnail(mixed $value): static
	{
		return $this->setFieldValue('thumbnail', $value);
	}

	/**
	* @return int
	*/

	public function getFileSize(): mixed
	{
		return $this->getFieldValue('file_size');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setFileSize(mixed $value): static
	{
		return $this->setFieldValue('file_size', $value);
	}

}