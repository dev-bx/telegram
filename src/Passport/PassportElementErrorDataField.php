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
* Represents an issue in one of the data fields that was provided by the user. The error is considered resolved when the field's value changes.
* @property string $source
* Error source, must be *data*
* @property string $type
* The section of the user's Telegram Passport which has the error, one of “personal\_details”, “passport”, “driver\_license”, “identity\_card”, “internal\_passport”, “address”
* @property string $fieldName
* Name of the data field which has the error
* @property string $dataHash
* Base64-encoded data hash
* @property string $message
* Error message
*/

class PassportElementErrorDataField extends PassportElementError
{
	public static function getFields(): array
	{
		return [
			'source' => [
				'type' => ['string'],
				'value' => 'data',
				'required' => true,
			],
			'type' => [
				'type' => ['string'],
				'required' => true,
			],
			'field_name' => [
				'type' => ['string'],
				'required' => true,
			],
			'data_hash' => [
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

	public function getFieldName(): mixed
	{
		return $this->getFieldValue('field_name');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setFieldName(mixed $value): static
	{
		return $this->setFieldValue('field_name', $value);
	}

	/**
	* @return string
	*/

	public function getDataHash(): mixed
	{
		return $this->getFieldValue('data_hash');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setDataHash(mixed $value): static
	{
		return $this->setFieldValue('data_hash', $value);
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