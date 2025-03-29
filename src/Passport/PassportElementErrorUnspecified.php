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
 * Represents an issue in an unspecified place. The error is considered resolved when new data is added.
 * @property string $source
 * Error source, must be *unspecified*
 * @property string $type
 * Type of element of the user's Telegram Passport which has the issue
 * @property string $elementHash
 * Base64-encoded element hash
 * @property string $message
 * Error message
 */
class PassportElementErrorUnspecified extends PassportElementError
{
	public static function getFields(): array
	{
		return [
			'source' => [
				'type' => ['string'],
				'value' => 'unspecified',
				'required' => true,
			],
			'type' => [
				'type' => ['string'],
				'required' => true,
			],
			'element_hash' => [
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

	public function getElementHash(): mixed
	{
		return $this->getFieldValue('element_hash');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setElementHash(mixed $value): static
	{
		return $this->setFieldValue('element_hash', $value);
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