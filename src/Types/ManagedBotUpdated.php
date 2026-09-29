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
 * This object contains information about the creation, token update, or owner update of a bot that is managed by the current bot.
 *
 * @link https://core.telegram.org/bots/api#managedbotupdated
 *
 * @property-read User|null $user Required. User that created the bot
 * @property-write User|array<string, mixed> $user
 * @property-read User|null $bot Required. Information about the bot. Token of the bot can be fetched using the method `getManagedBotToken`.
 * @property-write User|array<string, mixed> $bot
 */
class ManagedBotUpdated extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'user' => [
                'type' => [User::class],
                'required' => true,
            ],
            'bot' => [
                'type' => [User::class],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. User that created the bot
     *
     * @return User|null
     * @throws Base\TelegramException
     */
    public function getUser(): mixed
    {
        return $this->getFieldValue('user');
    }

    /**
     * @param User|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setUser(mixed $value): static
    {
        return $this->setFieldValue('user', $value);
    }

    /**
     * Required. Information about the bot. Token of the bot can be fetched using the method `getManagedBotToken`.
     *
     * @return User|null
     * @throws Base\TelegramException
     */
    public function getBot(): mixed
    {
        return $this->getFieldValue('bot');
    }

    /**
     * @param User|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setBot(mixed $value): static
    {
        return $this->setFieldValue('bot', $value);
    }
}
