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
 * Describes documents or other Telegram Passport elements shared with the bot by the user.
 * @property string $type
 * Element type. One of “personal\_details”, “passport”, “driver\_license”, “identity\_card”, “internal\_passport”, “address”, “utility\_bill”, “bank\_statement”, “rental\_agreement”, “passport\_registration”, “temporary\_registration”, “phone\_number”, “email”.
 * @property string $data
 * *Optional*. Base64-encoded encrypted Telegram Passport element data provided by the user; available only for “personal\_details”, “passport”, “driver\_license”, “identity\_card”, “internal\_passport” and “address” types. Can be decrypted and verified using the accompanying [EncryptedCredentials](#encryptedcredentials).
 * @property string $phoneNumber
 * *Optional*. User's verified phone number; available only for “phone\_number” type
 * @property string $email
 * *Optional*. User's verified email address; available only for “email” type
 * @property Base\ArrayObject|PassportFile[] $files
 * *Optional*. Array of encrypted files with documents provided by the user; available only for “utility\_bill”, “bank\_statement”, “rental\_agreement”, “passport\_registration” and “temporary\_registration” types. Files can be decrypted and verified using the accompanying [EncryptedCredentials](#encryptedcredentials).
 * @property PassportFile $frontSide
 * *Optional*. Encrypted file with the front side of the document, provided by the user; available only for “passport”, “driver\_license”, “identity\_card” and “internal\_passport”. The file can be decrypted and verified using the accompanying [EncryptedCredentials](#encryptedcredentials).
 * @property PassportFile $reverseSide
 * *Optional*. Encrypted file with the reverse side of the document, provided by the user; available only for “driver\_license” and “identity\_card”. The file can be decrypted and verified using the accompanying [EncryptedCredentials](#encryptedcredentials).
 * @property PassportFile $selfie
 * *Optional*. Encrypted file with the selfie of the user holding a document, provided by the user; available if requested for “passport”, “driver\_license”, “identity\_card” and “internal\_passport”. The file can be decrypted and verified using the accompanying [EncryptedCredentials](#encryptedcredentials).
 * @property Base\ArrayObject|PassportFile[] $translation
 * *Optional*. Array of encrypted files with translated versions of documents provided by the user; available if requested for “passport”, “driver\_license”, “identity\_card”, “internal\_passport”, “utility\_bill”, “bank\_statement”, “rental\_agreement”, “passport\_registration” and “temporary\_registration” types. Files can be decrypted and verified using the accompanying [EncryptedCredentials](#encryptedcredentials).
 * @property string $hash
 * Base64-encoded element hash for using in [PassportElementErrorUnspecified](#passportelementerrorunspecified)
 */
class EncryptedPassportElement extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'required' => true,
			],
			'data' => [
				'type' => ['string'],
			],
			'phone_number' => [
				'type' => ['string'],
			],
			'email' => [
				'type' => ['string'],
			],
			'files' => [
				'type' => [PassportFile::class],
				'isArray' => true,
			],
			'front_side' => [
				'type' => [PassportFile::class],
			],
			'reverse_side' => [
				'type' => [PassportFile::class],
			],
			'selfie' => [
				'type' => [PassportFile::class],
			],
			'translation' => [
				'type' => [PassportFile::class],
				'isArray' => true,
			],
			'hash' => [
				'type' => ['string'],
				'required' => true,
			],
		];
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

	public function getEmail(): mixed
	{
		return $this->getFieldValue('email');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setEmail(mixed $value): static
	{
		return $this->setFieldValue('email', $value);
	}

	/**
	* @return Base\ArrayObject|PassportFile[]
	*/

	public function getFiles(): mixed
	{
		return $this->getFieldValue('files');
	}

	/**
	* @param Base\ArrayObject|PassportFile[] $value
	* @return static
	*/

	public function setFiles(mixed $value): static
	{
		return $this->setFieldValue('files', $value);
	}

	/**
	* @return PassportFile
	*/

	public function getFrontSide(): mixed
	{
		return $this->getFieldValue('front_side');
	}

	/**
	* @param PassportFile $value
	* @return static
	*/

	public function setFrontSide(mixed $value): static
	{
		return $this->setFieldValue('front_side', $value);
	}

	/**
	* @return PassportFile
	*/

	public function getReverseSide(): mixed
	{
		return $this->getFieldValue('reverse_side');
	}

	/**
	* @param PassportFile $value
	* @return static
	*/

	public function setReverseSide(mixed $value): static
	{
		return $this->setFieldValue('reverse_side', $value);
	}

	/**
	* @return PassportFile
	*/

	public function getSelfie(): mixed
	{
		return $this->getFieldValue('selfie');
	}

	/**
	* @param PassportFile $value
	* @return static
	*/

	public function setSelfie(mixed $value): static
	{
		return $this->setFieldValue('selfie', $value);
	}

	/**
	* @return Base\ArrayObject|PassportFile[]
	*/

	public function getTranslation(): mixed
	{
		return $this->getFieldValue('translation');
	}

	/**
	* @param Base\ArrayObject|PassportFile[] $value
	* @return static
	*/

	public function setTranslation(mixed $value): static
	{
		return $this->setFieldValue('translation', $value);
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

}