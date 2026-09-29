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

namespace DevBX\Telegram\Types;

use DevBX\Telegram\Base;

/**
 * Describes an inline message to be sent by a user of a Mini App.
 *
 * @link https://core.telegram.org/bots/api#preparedinlinemessage
 *
 * @property-read string|null $id Required. Unique identifier of the prepared message
 * @property-write string $id
 * @property-read int|null $expirationDate Required. Expiration date of the prepared message, in Unix time. Expired prepared messages can no longer be used.
 * @property-write int $expirationDate
 */
class PreparedInlineMessage extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'expiration_date' => [
                'type' => ['int'],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Unique identifier of the prepared message
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getId(): mixed
    {
        return $this->getFieldValue('id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setId(mixed $value): static
    {
        return $this->setFieldValue('id', $value);
    }

    /**
     * Required. Expiration date of the prepared message, in Unix time. Expired prepared messages can no longer be used.
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getExpirationDate(): mixed
    {
        return $this->getFieldValue('expiration_date');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setExpirationDate(mixed $value): static
    {
        return $this->setFieldValue('expiration_date', $value);
    }
}
