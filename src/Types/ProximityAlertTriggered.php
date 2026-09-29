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
 * This object represents the content of a service message, sent whenever a user in the chat triggers a proximity alert set by another user.
 *
 * @link https://core.telegram.org/bots/api#proximityalerttriggered
 *
 * @property-read User|null $traveler Required. User that triggered the alert
 * @property-write User|array<string, mixed> $traveler
 * @property-read User|null $watcher Required. User that set the alert
 * @property-write User|array<string, mixed> $watcher
 * @property-read int|null $distance Required. The distance between the users
 * @property-write int $distance
 */
class ProximityAlertTriggered extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'traveler' => [
                'type' => [User::class],
                'required' => true,
            ],
            'watcher' => [
                'type' => [User::class],
                'required' => true,
            ],
            'distance' => [
                'type' => ['int'],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. User that triggered the alert
     *
     * @return User|null
     * @throws Base\TelegramException
     */
    public function getTraveler(): mixed
    {
        return $this->getFieldValue('traveler');
    }

    /**
     * @param User|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setTraveler(mixed $value): static
    {
        return $this->setFieldValue('traveler', $value);
    }

    /**
     * Required. User that set the alert
     *
     * @return User|null
     * @throws Base\TelegramException
     */
    public function getWatcher(): mixed
    {
        return $this->getFieldValue('watcher');
    }

    /**
     * @param User|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setWatcher(mixed $value): static
    {
        return $this->setFieldValue('watcher', $value);
    }

    /**
     * Required. The distance between the users
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getDistance(): mixed
    {
        return $this->getFieldValue('distance');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setDistance(mixed $value): static
    {
        return $this->setFieldValue('distance', $value);
    }
}
