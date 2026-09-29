<?php

/**
 * @project Telegram Bot Api
 * @author Kubeev Ruslan <ruslan@dev-bx.ru>
 * @copyright 2026 Kubeev Ruslan
 * @license MIT
 * @link https://dev-bx.ru/
 *
 * This file is part of the project Telegram Bot Api Class Generator.
 */

namespace DevBX\Telegram\Passport;

use DevBX\Telegram\Base;

/**
 * Describes documents or other Telegram Passport elements shared with the bot by the user.
 *
 * @link https://core.telegram.org/bots/api#encryptedpassportelement
 *
 * @property-read string|null $type Required. Element type. One of “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport”, “address”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”, “phone_number”, “email”.
 * @property-write string $type
 * @property-read string|null $data Optional. Base64-encoded encrypted Telegram Passport element data provided by the user; available only for “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport” and “address” types. Can be decrypted and verified using the accompanying `EncryptedCredentials`.
 * @property-write string $data
 * @property-read string|null $phoneNumber Optional. User's verified phone number; available only for “phone_number” type
 * @property-write string $phoneNumber
 * @property-read string|null $email Optional. User's verified email address; available only for “email” type
 * @property-write string $email
 * @property-read Base\ArrayObject<PassportFile> $files Optional. Array of encrypted files with documents provided by the user; available only for “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration” and “temporary_registration” types. Files can be decrypted and verified using the accompanying `EncryptedCredentials`.
 * @property-write list<PassportFile|array<string, mixed>>|Base\ArrayObject<PassportFile> $files
 * @property-read PassportFile|null $frontSide Optional. Encrypted file with the front side of the document, provided by the user; available only for “passport”, “driver_license”, “identity_card” and “internal_passport”. The file can be decrypted and verified using the accompanying `EncryptedCredentials`.
 * @property-write PassportFile|array<string, mixed> $frontSide
 * @property-read PassportFile|null $reverseSide Optional. Encrypted file with the reverse side of the document, provided by the user; available only for “driver_license” and “identity_card”. The file can be decrypted and verified using the accompanying `EncryptedCredentials`.
 * @property-write PassportFile|array<string, mixed> $reverseSide
 * @property-read PassportFile|null $selfie Optional. Encrypted file with the selfie of the user holding a document, provided by the user; available if requested for “passport”, “driver_license”, “identity_card” and “internal_passport”. The file can be decrypted and verified using the accompanying `EncryptedCredentials`.
 * @property-write PassportFile|array<string, mixed> $selfie
 * @property-read Base\ArrayObject<PassportFile> $translation Optional. Array of encrypted files with translated versions of documents provided by the user; available if requested for “passport”, “driver_license”, “identity_card”, “internal_passport”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration” and “temporary_registration” types. Files can be decrypted and verified using the accompanying `EncryptedCredentials`.
 * @property-write list<PassportFile|array<string, mixed>>|Base\ArrayObject<PassportFile> $translation
 * @property-read string|null $hash Required. Base64-encoded element hash for using in `PassportElementErrorUnspecified`
 * @property-write string $hash
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
     * Required. Element type. One of “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport”, “address”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”, “phone_number”, “email”.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getType(): mixed
    {
        return $this->getFieldValue('type');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setType(mixed $value): static
    {
        return $this->setFieldValue('type', $value);
    }

    /**
     * Optional. Base64-encoded encrypted Telegram Passport element data provided by the user; available only for “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport” and “address” types. Can be decrypted and verified using the accompanying `EncryptedCredentials`.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getData(): mixed
    {
        return $this->getFieldValue('data');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setData(mixed $value): static
    {
        return $this->setFieldValue('data', $value);
    }

    /**
     * Optional. User's verified phone number; available only for “phone_number” type
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getPhoneNumber(): mixed
    {
        return $this->getFieldValue('phone_number');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPhoneNumber(mixed $value): static
    {
        return $this->setFieldValue('phone_number', $value);
    }

    /**
     * Optional. User's verified email address; available only for “email” type
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getEmail(): mixed
    {
        return $this->getFieldValue('email');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setEmail(mixed $value): static
    {
        return $this->setFieldValue('email', $value);
    }

    /**
     * Optional. Array of encrypted files with documents provided by the user; available only for “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration” and “temporary_registration” types. Files can be decrypted and verified using the accompanying `EncryptedCredentials`.
     *
     * @return Base\ArrayObject<PassportFile>
     * @throws Base\TelegramException
     */
    public function getFiles(): mixed
    {
        return $this->getFieldValue('files');
    }

    /**
     * @param list<PassportFile|array<string, mixed>>|Base\ArrayObject<PassportFile> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setFiles(mixed $value): static
    {
        return $this->setFieldValue('files', $value);
    }

    /**
     * Optional. Encrypted file with the front side of the document, provided by the user; available only for “passport”, “driver_license”, “identity_card” and “internal_passport”. The file can be decrypted and verified using the accompanying `EncryptedCredentials`.
     *
     * @return PassportFile|null
     * @throws Base\TelegramException
     */
    public function getFrontSide(): mixed
    {
        return $this->getFieldValue('front_side');
    }

    /**
     * @param PassportFile|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setFrontSide(mixed $value): static
    {
        return $this->setFieldValue('front_side', $value);
    }

    /**
     * Optional. Encrypted file with the reverse side of the document, provided by the user; available only for “driver_license” and “identity_card”. The file can be decrypted and verified using the accompanying `EncryptedCredentials`.
     *
     * @return PassportFile|null
     * @throws Base\TelegramException
     */
    public function getReverseSide(): mixed
    {
        return $this->getFieldValue('reverse_side');
    }

    /**
     * @param PassportFile|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setReverseSide(mixed $value): static
    {
        return $this->setFieldValue('reverse_side', $value);
    }

    /**
     * Optional. Encrypted file with the selfie of the user holding a document, provided by the user; available if requested for “passport”, “driver_license”, “identity_card” and “internal_passport”. The file can be decrypted and verified using the accompanying `EncryptedCredentials`.
     *
     * @return PassportFile|null
     * @throws Base\TelegramException
     */
    public function getSelfie(): mixed
    {
        return $this->getFieldValue('selfie');
    }

    /**
     * @param PassportFile|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSelfie(mixed $value): static
    {
        return $this->setFieldValue('selfie', $value);
    }

    /**
     * Optional. Array of encrypted files with translated versions of documents provided by the user; available if requested for “passport”, “driver_license”, “identity_card”, “internal_passport”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration” and “temporary_registration” types. Files can be decrypted and verified using the accompanying `EncryptedCredentials`.
     *
     * @return Base\ArrayObject<PassportFile>
     * @throws Base\TelegramException
     */
    public function getTranslation(): mixed
    {
        return $this->getFieldValue('translation');
    }

    /**
     * @param list<PassportFile|array<string, mixed>>|Base\ArrayObject<PassportFile> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setTranslation(mixed $value): static
    {
        return $this->setFieldValue('translation', $value);
    }

    /**
     * Required. Base64-encoded element hash for using in `PassportElementErrorUnspecified`
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getHash(): mixed
    {
        return $this->getFieldValue('hash');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setHash(mixed $value): static
    {
        return $this->setFieldValue('hash', $value);
    }
}
