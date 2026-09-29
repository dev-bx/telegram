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
 * Represents the `BotCommandScope` of bot commands, covering all group and supergroup chat administrators.
 *
 * @link https://core.telegram.org/bots/api#botcommandscopeallchatadministrators
 *
 * @property-read string|null $type Required. Scope type, must be *all_chat_administrators*
 * @property-write string $type
 */
class BotCommandScopeAllChatAdministrators extends BotCommandScope
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
                'value' => 'all_chat_administrators',
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Scope type, must be *all_chat_administrators*
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
}
