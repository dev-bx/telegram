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
* Represents an issue with one of the files that constitute the translation of a document. The error is considered resolved when the file changes.
* @property string $source
* Error source, must be *translation\_file*
* @property string $type
* Type of element of the user's Telegram Passport which has the issue, one of “passport”, “driver\_license”, “identity\_card”, “internal\_passport”, “utility\_bill”, “bank\_statement”, “rental\_agreement”, “passport\_registration”, “temporary\_registration”
* @property string $fileHash
* Base64-encoded file hash
* @property string $message
* Error message
*/

class PassportElementErrorTranslationFile extends PassportElementError
{
	public static function getFields(): array
	{
		return [
			'source' => [
				'type' => ['string'],
				'value' => 'translation_file',
				'required' => true,
			],
			'type' => [
				'type' => ['string'],
				'required' => true,
			],
			'file_hash' => [
				'type' => ['string'],
				'required' => true,
			],
			'message' => [
				'type' => ['string'],
				'required' => true,
			],
		];
	}
	/**
	* @return string
	*/

	public function getSource(): mixed
	{
		return $this->getFieldValue('source');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setSource(mixed $value): static
	{
		return $this->setFieldValue('source', $value);
	}

	/**
	* @return string
	*/

	public function getType(): mixed
	{
		return $this->getFieldValue('type');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setType(mixed $value): static
	{
		return $this->setFieldValue('type', $value);
	}

	/**
	* @return string
	*/

	public function getFileHash(): mixed
	{
		return $this->getFieldValue('file_hash');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setFileHash(mixed $value): static
	{
		return $this->setFieldValue('file_hash', $value);
	}

	/**
	* @return string
	*/

	public function getMessage(): mixed
	{
		return $this->getFieldValue('message');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setMessage(mixed $value): static
	{
		return $this->setFieldValue('message', $value);
	}

}