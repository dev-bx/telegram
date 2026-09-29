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
 * Represents an issue in one of the data fields that was provided by the user. The error is considered resolved when the field's value changes.
 *
 * @link https://core.telegram.org/bots/api#passportelementerrordatafield
 *
 * @property-read string|null $source Required. Error source, must be *data*
 * @property-write string $source
 * @property-read string|null $type Required. The section of the user's Telegram Passport which has the error, one of “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport”, “address”
 * @property-write string $type
 * @property-read string|null $fieldName Required. Name of the data field which has the error
 * @property-write string $fieldName
 * @property-read string|null $dataHash Required. Base64-encoded data hash
 * @property-write string $dataHash
 * @property-read string|null $message Required. Error message
 * @property-write string $message
 */
class PassportElementErrorDataField extends PassportElementError
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
     * Required. Error source, must be *data*
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
     * Required. The section of the user's Telegram Passport which has the error, one of “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport”, “address”
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
     * Required. Name of the data field which has the error
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getFieldName(): mixed
    {
        return $this->getFieldValue('field_name');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setFieldName(mixed $value): static
    {
        return $this->setFieldValue('field_name', $value);
    }

    /**
     * Required. Base64-encoded data hash
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getDataHash(): mixed
    {
        return $this->getFieldValue('data_hash');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setDataHash(mixed $value): static
    {
        return $this->setFieldValue('data_hash', $value);
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
