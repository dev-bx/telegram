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
 * The boost was obtained by subscribing to Telegram Premium or by gifting a Telegram Premium subscription to another user.
 *
 * @link https://core.telegram.org/bots/api#chatboostsourcepremium
 *
 * @property-read string|null $source Required. Source of the boost, always “premium”
 * @property-write string $source
 * @property-read User|null $user Required. User that boosted the chat
 * @property-write User|array<string, mixed> $user
 */
class ChatBoostSourcePremium extends ChatBoostSource
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
                'value' => 'premium',
                'required' => true,
            ],
            'user' => [
                'type' => [User::class],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Source of the boost, always “premium”
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
     * Required. User that boosted the chat
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
}
