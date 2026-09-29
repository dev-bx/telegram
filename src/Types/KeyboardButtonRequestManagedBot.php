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
 * This object defines the parameters for the creation of a managed bot. Information about the created bot will be shared with the bot using the update *managed_bot* and a `Message` with the field *managed_bot_created*.
 *
 * @link https://core.telegram.org/bots/api#keyboardbuttonrequestmanagedbot
 *
 * @property-read int|null $requestId Required. Signed 32-bit identifier of the request. Must be unique within the message.
 * @property-write int $requestId
 * @property-read string|null $suggestedName Optional. Suggested name for the bot
 * @property-write string $suggestedName
 * @property-read string|null $suggestedUsername Optional. Suggested username for the bot
 * @property-write string $suggestedUsername
 */
class KeyboardButtonRequestManagedBot extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'request_id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'suggested_name' => [
                'type' => ['string'],
            ],
            'suggested_username' => [
                'type' => ['string'],
            ],
        ];
    }

    /**
     * Required. Signed 32-bit identifier of the request. Must be unique within the message.
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getRequestId(): mixed
    {
        return $this->getFieldValue('request_id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setRequestId(mixed $value): static
    {
        return $this->setFieldValue('request_id', $value);
    }

    /**
     * Optional. Suggested name for the bot
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getSuggestedName(): mixed
    {
        return $this->getFieldValue('suggested_name');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSuggestedName(mixed $value): static
    {
        return $this->setFieldValue('suggested_name', $value);
    }

    /**
     * Optional. Suggested username for the bot
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getSuggestedUsername(): mixed
    {
        return $this->getFieldValue('suggested_username');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSuggestedUsername(mixed $value): static
    {
        return $this->setFieldValue('suggested_username', $value);
    }
}
