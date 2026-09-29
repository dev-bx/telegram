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
 * Describes a task in a checklist.
 *
 * @link https://core.telegram.org/bots/api#checklisttask
 *
 * @property-read int|null $id Required. Unique identifier of the task
 * @property-write int $id
 * @property-read string|null $text Required. Text of the task
 * @property-write string $text
 * @property-read Base\ArrayObject<MessageEntity> $textEntities Optional. Special entities that appear in the task text
 * @property-write list<MessageEntity|array<string, mixed>>|Base\ArrayObject<MessageEntity> $textEntities
 * @property-read User|null $completedByUser Optional. User that completed the task; omitted if the task wasn't completed by a user
 * @property-write User|array<string, mixed> $completedByUser
 * @property-read Chat|null $completedByChat Optional. Chat that completed the task; omitted if the task wasn't completed by a chat
 * @property-write Chat|array<string, mixed> $completedByChat
 * @property-read int|null $completionDate Optional. Point in time (Unix timestamp) when the task was completed; 0 if the task wasn't completed
 * @property-write int $completionDate
 */
class ChecklistTask extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'text' => [
                'type' => ['string'],
                'required' => true,
            ],
            'text_entities' => [
                'type' => [MessageEntity::class],
                'isArray' => true,
            ],
            'completed_by_user' => [
                'type' => [User::class],
            ],
            'completed_by_chat' => [
                'type' => [Chat::class],
            ],
            'completion_date' => [
                'type' => ['int'],
            ],
        ];
    }

    /**
     * Required. Unique identifier of the task
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getId(): mixed
    {
        return $this->getFieldValue('id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setId(mixed $value): static
    {
        return $this->setFieldValue('id', $value);
    }

    /**
     * Required. Text of the task
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getText(): mixed
    {
        return $this->getFieldValue('text');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setText(mixed $value): static
    {
        return $this->setFieldValue('text', $value);
    }

    /**
     * Optional. Special entities that appear in the task text
     *
     * @return Base\ArrayObject<MessageEntity>
     * @throws Base\TelegramException
     */
    public function getTextEntities(): mixed
    {
        return $this->getFieldValue('text_entities');
    }

    /**
     * @param list<MessageEntity|array<string, mixed>>|Base\ArrayObject<MessageEntity> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setTextEntities(mixed $value): static
    {
        return $this->setFieldValue('text_entities', $value);
    }

    /**
     * Optional. User that completed the task; omitted if the task wasn't completed by a user
     *
     * @return User|null
     * @throws Base\TelegramException
     */
    public function getCompletedByUser(): mixed
    {
        return $this->getFieldValue('completed_by_user');
    }

    /**
     * @param User|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCompletedByUser(mixed $value): static
    {
        return $this->setFieldValue('completed_by_user', $value);
    }

    /**
     * Optional. Chat that completed the task; omitted if the task wasn't completed by a chat
     *
     * @return Chat|null
     * @throws Base\TelegramException
     */
    public function getCompletedByChat(): mixed
    {
        return $this->getFieldValue('completed_by_chat');
    }

    /**
     * @param Chat|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCompletedByChat(mixed $value): static
    {
        return $this->setFieldValue('completed_by_chat', $value);
    }

    /**
     * Optional. Point in time (Unix timestamp) when the task was completed; 0 if the task wasn't completed
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getCompletionDate(): mixed
    {
        return $this->getFieldValue('completion_date');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCompletionDate(mixed $value): static
    {
        return $this->setFieldValue('completion_date', $value);
    }
}
