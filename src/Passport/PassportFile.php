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

namespace DevBX\Telegram\Passport;

use DevBX\Telegram\Base;


/**
 * This object represents a file uploaded to Telegram Passport. Currently all Telegram Passport files are in JPEG format when decrypted and don't exceed 10MB.
 * @property string $fileId
 * Identifier for this file, which can be used to download or reuse the file
 * @property string $fileUniqueId
 * Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 * @property int $fileSize
 * File size in bytes
 * @property int $fileDate
 * Unix time when the file was uploaded
 */
class PassportFile extends Base\BaseType
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
			'file_size' => [
				'type' => ['int'],
				'required' => true,
			],
			'file_date' => [
				'type' => ['int'],
				'required' => true,
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
	* @return int
	*/

	public function getFileDate(): mixed
	{
		return $this->getFieldValue('file_date');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setFileDate(mixed $value): static
	{
		return $this->setFieldValue('file_date', $value);
	}

}