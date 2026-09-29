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
 * Represents an issue with the selfie with a document. The error is considered resolved when the file with the selfie changes.
 *
 * @link https://core.telegram.org/bots/api#passportelementerrorselfie
 *
 * @property-read string|null $source Required. Error source, must be *selfie*
 * @property-write string $source
 * @property-read string|null $type Required. The section of the user's Telegram Passport which has the issue, one of “passport”, “driver_license”, “identity_card”, “internal_passport”
 * @property-write string $type
 * @property-read string|null $fileHash Required. Base64-encoded hash of the file with the selfie
 * @property-write string $fileHash
 * @property-read string|null $message Required. Error message
 * @property-write string $message
 */
class PassportElementErrorSelfie extends PassportElementError
{
    /**
     * @return static
     * @throws Base\TelegramException
     */
    public static function create(mixed $value = null, bool $ignoreUnknownFields = false): ?Base\BaseType
    {
        return static::createInstance($value, $ignoreUnknownFields);
    }

    public static function getFields(): array
    {
        return [
            'source' => [
                'type' => ['string'],
                'value' => 'selfie',
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
     * Required. Error source, must be *selfie*
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getSource(): mixed
    {
        return $this->getFieldValue('source');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSource(mixed $value): static
    {
        return $this->setFieldValue('source', $value);
    }

    /**
     * Required. The section of the user's Telegram Passport which has the issue, one of “passport”, “driver_license”, “identity_card”, “internal_passport”
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
     * Required. Base64-encoded hash of the file with the selfie
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getFileHash(): mixed
    {
        return $this->getFieldValue('file_hash');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setFileHash(mixed $value): static
    {
        return $this->setFieldValue('file_hash', $value);
    }

    /**
     * Required. Error message
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getMessage(): mixed
    {
        return $this->getFieldValue('message');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setMessage(mixed $value): static
    {
        return $this->setFieldValue('message', $value);
    }
}
