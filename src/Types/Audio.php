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
* This object represents an audio file to be treated as music by the Telegram clients.
* @property string $fileId
* Identifier for this file, which can be used to download or reuse the file
* @property string $fileUniqueId
* Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
* @property int $duration
* Duration of the audio in seconds as defined by the sender
* @property string $performer
* *Optional*. Performer of the audio as defined by the sender or by audio tags
* @property string $title
* *Optional*. Title of the audio as defined by the sender or by audio tags
* @property string $fileName
* *Optional*. Original filename as defined by the sender
* @property string $mimeType
* *Optional*. MIME type of the file as defined by the sender
* @property int $fileSize
* *Optional*. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value.
* @property PhotoSize $thumbnail
* *Optional*. Thumbnail of the album cover to which the music file belongs
*/

class Audio extends Base\BaseType
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
			'duration' => [
				'type' => ['int'],
				'required' => true,
			],
			'performer' => [
				'type' => ['string'],
			],
			'title' => [
				'type' => ['string'],
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
			'thumbnail' => [
				'type' => [PhotoSize::class],
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
	* @return string
	*/

	public function getPerformer(): mixed
	{
		return $this->getFieldValue('performer');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setPerformer(mixed $value): static
	{
		return $this->setFieldValue('performer', $value);
	}

	/**
	* @return string
	*/

	public function getTitle(): mixed
	{
		return $this->getFieldValue('title');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setTitle(mixed $value): static
	{
		return $this->setFieldValue('title', $value);
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

}