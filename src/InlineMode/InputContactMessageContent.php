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

namespace DevBX\Telegram\InlineMode;

use DevBX\Telegram\Base;


/**
* Represents the [content](#inputmessagecontent) of a contact message to be sent as the result of an inline query.
* @property string $phoneNumber
* Contact's phone number
* @property string $firstName
* Contact's first name
* @property string $lastName
* *Optional*. Contact's last name
* @property string $vcard
* *Optional*. Additional data about the contact in the form of a [vCard](https://en.wikipedia.org/wiki/VCard), 0-2048 bytes
*/

class InputContactMessageContent extends InputMessageContent
{
	public static function getFields(): array
	{
		return [
			'phone_number' => [
				'type' => ['string'],
				'required' => true,
			],
			'first_name' => [
				'type' => ['string'],
				'required' => true,
			],
			'last_name' => [
				'type' => ['string'],
			],
			'vcard' => [
				'type' => ['string'],
			],
		];
	}
	/**
	* @return string
	*/

	public function getPhoneNumber(): mixed
	{
		return $this->getFieldValue('phone_number');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setPhoneNumber(mixed $value): static
	{
		return $this->setFieldValue('phone_number', $value);
	}

	/**
	* @return string
	*/

	public function getFirstName(): mixed
	{
		return $this->getFieldValue('first_name');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setFirstName(mixed $value): static
	{
		return $this->setFieldValue('first_name', $value);
	}

	/**
	* @return string
	*/

	public function getLastName(): mixed
	{
		return $this->getFieldValue('last_name');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setLastName(mixed $value): static
	{
		return $this->setFieldValue('last_name', $value);
	}

	/**
	* @return string
	*/

	public function getVcard(): mixed
	{
		return $this->getFieldValue('vcard');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setVcard(mixed $value): static
	{
		return $this->setFieldValue('vcard', $value);
	}

}