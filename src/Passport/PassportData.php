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
* Describes Telegram Passport data shared with the bot by the user.
* @property Base\ArrayObject|EncryptedPassportElement[] $data
* Array with information about documents and other Telegram Passport elements that was shared with the bot
* @property EncryptedCredentials $credentials
* Encrypted credentials required to decrypt the data
*/

class PassportData extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'data' => [
				'type' => [EncryptedPassportElement::class],
				'isArray' => true,
				'required' => true,
			],
			'credentials' => [
				'type' => [EncryptedCredentials::class],
				'required' => true,
			],
		];
	}
	/**
	* @return Base\ArrayObject|EncryptedPassportElement[]
	*/

	public function getData(): mixed
	{
		return $this->getFieldValue('data');
	}

	/**
	* @param Base\ArrayObject|EncryptedPassportElement[] $value
	* @return static
	*/

	public function setData(mixed $value): static
	{
		return $this->setFieldValue('data', $value);
	}

	/**
	* @return EncryptedCredentials
	*/

	public function getCredentials(): mixed
	{
		return $this->getFieldValue('credentials');
	}

	/**
	* @param EncryptedCredentials $value
	* @return static
	*/

	public function setCredentials(mixed $value): static
	{
		return $this->setFieldValue('credentials', $value);
	}

}