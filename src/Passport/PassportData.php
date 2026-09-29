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
 * Describes Telegram Passport data shared with the bot by the user.
 *
 * @link https://core.telegram.org/bots/api#passportdata
 *
 * @property-read Base\ArrayObject<EncryptedPassportElement> $data Required. Array with information about documents and other Telegram Passport elements that was shared with the bot
 * @property-write list<EncryptedPassportElement|array<string, mixed>>|Base\ArrayObject<EncryptedPassportElement> $data
 * @property-read EncryptedCredentials|null $credentials Required. Encrypted credentials required to decrypt the data
 * @property-write EncryptedCredentials|array<string, mixed> $credentials
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
     * Required. Array with information about documents and other Telegram Passport elements that was shared with the bot
     *
     * @return Base\ArrayObject<EncryptedPassportElement>
     * @throws Base\TelegramException
     */
    public function getData(): mixed
    {
        return $this->getFieldValue('data');
    }

    /**
     * @param list<EncryptedPassportElement|array<string, mixed>>|Base\ArrayObject<EncryptedPassportElement> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setData(mixed $value): static
    {
        return $this->setFieldValue('data', $value);
    }

    /**
     * Required. Encrypted credentials required to decrypt the data
     *
     * @return EncryptedCredentials|null
     * @throws Base\TelegramException
     */
    public function getCredentials(): mixed
    {
        return $this->getFieldValue('credentials');
    }

    /**
     * @param EncryptedCredentials|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCredentials(mixed $value): static
    {
        return $this->setFieldValue('credentials', $value);
    }
}
