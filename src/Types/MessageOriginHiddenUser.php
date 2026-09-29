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
 * The message was originally sent by an unknown user.
 *
 * @link https://core.telegram.org/bots/api#messageoriginhiddenuser
 *
 * @property-read string|null $type Required. Type of the message origin, always “hidden_user”
 * @property-write string $type
 * @property-read int|null $date Required. Date the message was sent originally in Unix time
 * @property-write int $date
 * @property-read string|null $senderUserName Required. Name of the user that sent the message originally
 * @property-write string $senderUserName
 */
class MessageOriginHiddenUser extends MessageOrigin
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
            'type' => [
                'type' => ['string'],
                'value' => 'hidden_user',
                'required' => true,
            ],
            'date' => [
                'type' => ['int'],
                'required' => true,
            ],
            'sender_user_name' => [
                'type' => ['string'],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Type of the message origin, always “hidden_user”
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
     * Required. Date the message was sent originally in Unix time
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getDate(): mixed
    {
        return $this->getFieldValue('date');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setDate(mixed $value): static
    {
        return $this->setFieldValue('date', $value);
    }

    /**
     * Required. Name of the user that sent the message originally
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getSenderUserName(): mixed
    {
        return $this->getFieldValue('sender_user_name');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSenderUserName(mixed $value): static
    {
        return $this->setFieldValue('sender_user_name', $value);
    }
}
