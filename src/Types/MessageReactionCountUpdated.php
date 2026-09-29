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
 * This object represents reaction changes on a message with anonymous reactions.
 *
 * @link https://core.telegram.org/bots/api#messagereactioncountupdated
 *
 * @property-read Chat|null $chat Required. The chat containing the message
 * @property-write Chat|array<string, mixed> $chat
 * @property-read int|null $messageId Required. Unique message identifier inside the chat
 * @property-write int $messageId
 * @property-read int|null $date Required. Date of the change in Unix time
 * @property-write int $date
 * @property-read Base\ArrayObject<ReactionCount> $reactions Required. List of reactions that are present on the message
 * @property-write list<ReactionCount|array<string, mixed>>|Base\ArrayObject<ReactionCount> $reactions
 */
class MessageReactionCountUpdated extends Base\BaseType
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
            'date' => [
                'type' => ['int'],
                'required' => true,
            ],
            'reactions' => [
                'type' => [ReactionCount::class],
                'isArray' => true,
                'required' => true,
            ],
        ];
    }

    /**
     * Required. The chat containing the message
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
     * Required. Unique message identifier inside the chat
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
     * Required. List of reactions that are present on the message
     *
     * @return Base\ArrayObject<ReactionCount>
     * @throws Base\TelegramException
     */
    public function getReactions(): mixed
    {
        return $this->getFieldValue('reactions');
    }

    /**
     * @param list<ReactionCount|array<string, mixed>>|Base\ArrayObject<ReactionCount> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setReactions(mixed $value): static
    {
        return $this->setFieldValue('reactions', $value);
    }
}
