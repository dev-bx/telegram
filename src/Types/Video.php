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
 * This object represents a video file.
 * @property string $fileId
 * Identifier for this file, which can be used to download or reuse the file
 * @property string $fileUniqueId
 * Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 * @property int $width
 * Video width as defined by the sender
 * @property int $height
 * Video height as defined by the sender
 * @property int $duration
 * Duration of the video in seconds as defined by the sender
 * @property PhotoSize $thumbnail
 * *Optional*. Video thumbnail
 * @property Base\ArrayObject|PhotoSize[] $cover
 * *Optional*. Available sizes of the cover of the video in the message
 * @property int $startTimestamp
 * *Optional*. Timestamp in seconds from which the video will play in the message
 * @property string $fileName
 * *Optional*. Original filename as defined by the sender
 * @property string $mimeType
 * *Optional*. MIME type of the file as defined by the sender
 * @property int $fileSize
 * *Optional*. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value.
 */
class Video extends Base\BaseType
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
			'width' => [
				'type' => ['int'],
				'required' => true,
			],
			'height' => [
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
			'cover' => [
				'type' => [PhotoSize::class],
				'isArray' => true,
			],
			'start_timestamp' => [
				'type' => ['int'],
			],
			'file_name' => [
				'type' => ['string'],
			],
			'mime_type' => [
				'type' => ['string'],
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

	public function getWidth(): mixed
	{
		return $this->getFieldValue('width');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setWidth(mixed $value): static
	{
		return $this->setFieldValue('width', $value);
	}

	/**
	* @return int
	*/

	public function getHeight(): mixed
	{
		return $this->getFieldValue('height');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setHeight(mixed $value): static
	{
		return $this->setFieldValue('height', $value);
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
	* @return Base\ArrayObject|PhotoSize[]
	*/

	public function getCover(): mixed
	{
		return $this->getFieldValue('cover');
	}

	/**
	* @param Base\ArrayObject|PhotoSize[] $value
	* @return static
	*/

	public function setCover(mixed $value): static
	{
		return $this->setFieldValue('cover', $value);
	}

	/**
	* @return int
	*/

	public function getStartTimestamp(): mixed
	{
		return $this->getFieldValue('start_timestamp');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setStartTimestamp(mixed $value): static
	{
		return $this->setFieldValue('start_timestamp', $value);
	}

	/**
	* @return string
	*/

	public function getFileName(): mixed
	{
		return $this->getFieldValue('file_name');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setFileName(mixed $value): static
	{
		return $this->setFieldValue('file_name', $value);
	}

	/**
	* @return string
	*/

	public function getMimeType(): mixed
	{
		return $this->getFieldValue('mime_type');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setMimeType(mixed $value): static
	{
		return $this->setFieldValue('mime_type', $value);
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