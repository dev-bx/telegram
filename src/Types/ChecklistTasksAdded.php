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
 * Describes a service message about tasks added to a checklist.
 *
 * @link https://core.telegram.org/bots/api#checklisttasksadded
 *
 * @property-read Message|null $checklistMessage Optional. Message containing the checklist to which the tasks were added. Note that the `Message` object in this field will not contain the *reply_to_message* field even if it itself is a reply.
 * @property-write Message|array<string, mixed> $checklistMessage
 * @property-read Base\ArrayObject<ChecklistTask> $tasks Required. List of tasks added to the checklist
 * @property-write list<ChecklistTask|array<string, mixed>>|Base\ArrayObject<ChecklistTask> $tasks
 */
class ChecklistTasksAdded extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'checklist_message' => [
                'type' => [Message::class],
            ],
            'tasks' => [
                'type' => [ChecklistTask::class],
                'isArray' => true,
                'required' => true,
            ],
        ];
    }

    /**
     * Optional. Message containing the checklist to which the tasks were added. Note that the `Message` object in this field will not contain the *reply_to_message* field even if it itself is a reply.
     *
     * @return Message|null
     * @throws Base\TelegramException
     */
    public function getChecklistMessage(): mixed
    {
        return $this->getFieldValue('checklist_message');
    }

    /**
     * @param Message|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setChecklistMessage(mixed $value): static
    {
        return $this->setFieldValue('checklist_message', $value);
    }

    /**
     * Required. List of tasks added to the checklist
     *
     * @return Base\ArrayObject<ChecklistTask>
     * @throws Base\TelegramException
     */
    public function getTasks(): mixed
    {
        return $this->getFieldValue('tasks');
    }

    /**
     * @param list<ChecklistTask|array<string, mixed>>|Base\ArrayObject<ChecklistTask> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setTasks(mixed $value): static
    {
        return $this->setFieldValue('tasks', $value);
    }
}
