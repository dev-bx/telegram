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

namespace DevBX\Telegram\Requests;

use DevBX\Telegram\Base;
use DevBX\Telegram\Api;

/**
 * Verifies a chat [on behalf of the organization](https://telegram.org/verify#third-party-verification) which is represented by the bot. Returns *True* on success.
 *
 * @link https://core.telegram.org/bots/api#verifychat
 *
 * @property-read int|string|null $chatId Required. Unique identifier for the target chat or username of the target bot, supergroup or channel in the format `@username`. Channel direct messages chats can't be verified.
 * @property-write int|string $chatId
 * @property-read string|null $customDescription Optional. Custom description for the verification; 0-70 characters. Must be empty if the organization isn't allowed to provide a custom verification description.
 * @property-write string $customDescription
 *
 * @method Base\ParameterBool send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class VerifyChat extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'chat_id' => [
                'type' => ['int', 'string'],
                'required' => true,
            ],
            'custom_description' => [
                'type' => ['string'],
            ],
            '@return' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Required. Unique identifier for the target chat or username of the target bot, supergroup or channel in the format `@username`. Channel direct messages chats can't be verified.
     *
     * @return int|string|null
     * @throws Base\TelegramException
     */
    public function getChatId(): mixed
    {
        return $this->getFieldValue('chat_id');
    }

    /**
     * @param int|string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setChatId(mixed $value): static
    {
        return $this->setFieldValue('chat_id', $value);
    }

    /**
     * Optional. Custom description for the verification; 0-70 characters. Must be empty if the organization isn't allowed to provide a custom verification description.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getCustomDescription(): mixed
    {
        return $this->getFieldValue('custom_description');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCustomDescription(mixed $value): static
    {
        return $this->setFieldValue('custom_description', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'verifyChat';
    }
}
