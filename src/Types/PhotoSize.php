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
 * This object represents one size of a photo or a [file](#document) / [sticker](#sticker) thumbnail.
 * @property string $fileId
 * Identifier for this file, which can be used to download or reuse the file
 * @property string $fileUniqueId
 * Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 * @property int $width
 * Photo width
 * @property int $height
 * Photo height
 * @property int $fileSize
 * *Optional*. File size in bytes
 */
class PhotoSize extends Base\BaseType
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