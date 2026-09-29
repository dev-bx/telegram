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
 * Describes data required for decrypting and authenticating `EncryptedPassportElement`. See the [Telegram Passport Documentation](https://core.telegram.org/passport#receiving-information) for a complete description of the data decryption and authentication processes.
 *
 * @link https://core.telegram.org/bots/api#encryptedcredentials
 *
 * @property-read string|null $data Required. Base64-encoded encrypted JSON-serialized data with unique user's payload, data hashes and secrets required for `EncryptedPassportElement` decryption and authentication
 * @property-write string $data
 * @property-read string|null $hash Required. Base64-encoded data hash for data authentication
 * @property-write string $hash
 * @property-read string|null $secret Required. Base64-encoded secret, encrypted with the bot's public RSA key, required for data decryption
 * @property-write string $secret
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
     * Required. Base64-encoded encrypted JSON-serialized data with unique user's payload, data hashes and secrets required for `EncryptedPassportElement` decryption and authentication
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
     * Required. Base64-encoded data hash for data authentication
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

    /**
     * Required. Base64-encoded secret, encrypted with the bot's public RSA key, required for data decryption
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getSecret(): mixed
    {
        return $this->getFieldValue('secret');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSecret(mixed $value): static
    {
        return $this->setFieldValue('secret', $value);
    }
}
