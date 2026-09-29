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
 * Represents an issue in an unspecified place. The error is considered resolved when new data is added.
 *
 * @link https://core.telegram.org/bots/api#passportelementerrorunspecified
 *
 * @property-read string|null $source Required. Error source, must be *unspecified*
 * @property-write string $source
 * @property-read string|null $type Required. Type of element of the user's Telegram Passport which has the issue
 * @property-write string $type
 * @property-read string|null $elementHash Required. Base64-encoded element hash
 * @property-write string $elementHash
 * @property-read string|null $message Required. Error message
 * @property-write string $message
 */
class PassportElementErrorUnspecified extends PassportElementError
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
     * Required. Error source, must be *unspecified*
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
     * Required. Type of element of the user's Telegram Passport which has the issue
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
     * Required. Base64-encoded element hash
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getElementHash(): mixed
    {
        return $this->getFieldValue('element_hash');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setElementHash(mixed $value): static
    {
        return $this->setFieldValue('element_hash', $value);
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
