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
 * Describes data required for decrypting and authenticating [EncryptedPassportElement](#encryptedpassportelement). See the [Telegram Passport Documentation](/passport#receiving-information) for a complete description of the data decryption and authentication processes.
 * @property string $data
 * Base64-encoded encrypted JSON-serialized data with unique user's payload, data hashes and secrets required for [EncryptedPassportElement](#encryptedpassportelement) decryption and authentication
 * @property string $hash
 * Base64-encoded data hash for data authentication
 * @property string $secret
 * Base64-encoded secret, encrypted with the bot's public RSA key, required for data decryption
 */
class EncryptedCredentials extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'data' => [
				'type' => ['string'],
				'required' => true,
			],
			'hash' => [
				'type' => ['string'],
				'required' => true,
			],
			'secret' => [
				'type' => ['string'],
				'required' => true,
			],
		];
	}
	/**
	* @return string
	*/

	public function getData(): mixed
	{
		return $this->getFieldValue('data');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setData(mixed $value): static
	{
		return $this->setFieldValue('data', $value);
	}

	/**
	* @return string
	*/

	public function getHash(): mixed
	{
		return $this->getFieldValue('hash');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setHash(mixed $value): static
	{
		return $this->setFieldValue('hash', $value);
	}

	/**
	* @return string
	*/

	public function getSecret(): mixed
	{
		return $this->getFieldValue('secret');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setSecret(mixed $value): static
	{
		return $this->setFieldValue('secret', $value);
	}

}