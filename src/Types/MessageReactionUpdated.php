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
 * This object represents a change of a reaction on a message performed by a user.
 *
 * @link https://core.telegram.org/bots/api#messagereactionupdated
 *
 * @property-read Chat|null $chat Required. The chat containing the message the user reacted to
 * @property-write Chat|array<string, mixed> $chat
 * @property-read int|null $messageId Required. Unique identifier of the message inside the chat
 * @property-write int $messageId
 * @property-read User|null $user Optional. The user that changed the reaction, if the user isn't anonymous
 * @property-write User|array<string, mixed> $user
 * @property-read Chat|null $actorChat Optional. The chat on behalf of which the reaction was changed, if the user is anonymous
 * @property-write Chat|array<string, mixed> $actorChat
 * @property-read int|null $date Required. Date of the change in Unix time
 * @property-write int $date
 * @property-read Base\ArrayObject<ReactionType> $oldReaction Required. Previous list of reaction types that were set by the user
 * @property-write list<ReactionType|array<string, mixed>>|Base\ArrayObject<ReactionType> $oldReaction
 * @property-read Base\ArrayObject<ReactionType> $newReaction Required. New list of reaction types that have been set by the user
 * @property-write list<ReactionType|array<string, mixed>>|Base\ArrayObject<ReactionType> $newReaction
 */
class MessageReactionUpdated extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'chat' => [
                'type' => [Chat::class],
                'required' => true,
            ],
            'message_id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'user' => [
                'type' => [User::class],
            ],
            'actor_chat' => [
                'type' => [Chat::class],
            ],
            'date' => [
                'type' => ['int'],
                'required' => true,
            ],
            'old_reaction' => [
                'type' => [ReactionType::class],
                'isArray' => true,
                'required' => true,
            ],
            'new_reaction' => [
                'type' => [ReactionType::class],
                'isArray' => true,
                'required' => true,
            ],
        ];
    }

    /**
     * Required. The chat containing the message the user reacted to
     *
     * @return Chat|null
     * @throws Base\TelegramException
     */
    public function getChat(): mixed
    {
        return $this->getFieldValue('chat');
    }

    /**
     * @param Chat|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setChat(mixed $value): static
    {
        return $this->setFieldValue('chat', $value);
    }

    /**
     * Required. Unique identifier of the message inside the chat
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getMessageId(): mixed
    {
        return $this->getFieldValue('message_id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setMessageId(mixed $value): static
    {
        return $this->setFieldValue('message_id', $value);
    }

    /**
     * Optional. The user that changed the reaction, if the user isn't anonymous
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
     * Optional. The chat on behalf of which the reaction was changed, if the user is anonymous
     *
     * @return Chat|null
     * @throws Base\TelegramException
     */
    public function getActorChat(): mixed
    {
        return $this->getFieldValue('actor_chat');
    }

    /**
     * @param Chat|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setActorChat(mixed $value): static
    {
        return $this->setFieldValue('actor_chat', $value);
    }

    /**
     * Required. Date of the change in Unix time
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
     * Required. Previous list of reaction types that were set by the user
     *
     * @return Base\ArrayObject<ReactionType>
     * @throws Base\TelegramException
     */
    public function getOldReaction(): mixed
    {
        return $this->getFieldValue('old_reaction');
    }

    /**
     * @param list<ReactionType|array<string, mixed>>|Base\ArrayObject<ReactionType> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setOldReaction(mixed $value): static
    {
        return $this->setFieldValue('old_reaction', $value);
    }

    /**
     * Required. New list of reaction types that have been set by the user
     *
     * @return Base\ArrayObject<ReactionType>
     * @throws Base\TelegramException
     */
    public function getNewReaction(): mixed
    {
        return $this->getFieldValue('new_reaction');
    }

    /**
     * @param list<ReactionType|array<string, mixed>>|Base\ArrayObject<ReactionType> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setNewReaction(mixed $value): static
    {
        return $this->setFieldValue('new_reaction', $value);
    }
}
