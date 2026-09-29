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
 * Describes a topic of a direct messages chat.
 *
 * @link https://core.telegram.org/bots/api#directmessagestopic
 *
 * @property-read int|null $topicId Required. Unique identifier of the topic. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
 * @property-write int $topicId
 * @property-read User|null $user Optional. Information about the user that created the topic. Currently, it is always present.
 * @property-write User|array<string, mixed> $user
 */
class DirectMessagesTopic extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'topic_id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'user' => [
                'type' => [User::class],
            ],
        ];
    }

    /**
     * Required. Unique identifier of the topic. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getTopicId(): mixed
    {
        return $this->getFieldValue('topic_id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setTopicId(mixed $value): static
    {
        return $this->setFieldValue('topic_id', $value);
    }

    /**
     * Optional. Information about the user that created the topic. Currently, it is always present.
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
