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
 * Describes a checklist.
 *
 * @link https://core.telegram.org/bots/api#checklist
 *
 * @property-read string|null $title Required. Title of the checklist
 * @property-write string $title
 * @property-read Base\ArrayObject<MessageEntity> $titleEntities Optional. Special entities that appear in the checklist title
 * @property-write list<MessageEntity|array<string, mixed>>|Base\ArrayObject<MessageEntity> $titleEntities
 * @property-read Base\ArrayObject<ChecklistTask> $tasks Required. List of tasks in the checklist
 * @property-write list<ChecklistTask|array<string, mixed>>|Base\ArrayObject<ChecklistTask> $tasks
 * @property-read bool|null $othersCanAddTasks Optional. *True*, if users other than the creator of the list can add tasks to the list
 * @property-write bool $othersCanAddTasks
 * @property-read bool|null $othersCanMarkTasksAsDone Optional. *True*, if users other than the creator of the list can mark tasks as done or not done
 * @property-write bool $othersCanMarkTasksAsDone
 */
class Checklist extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'title' => [
                'type' => ['string'],
                'required' => true,
            ],
            'title_entities' => [
                'type' => [MessageEntity::class],
                'isArray' => true,
            ],
            'tasks' => [
                'type' => [ChecklistTask::class],
                'isArray' => true,
                'required' => true,
            ],
            'others_can_add_tasks' => [
                'type' => ['bool'],
            ],
            'others_can_mark_tasks_as_done' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Required. Title of the checklist
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getTitle(): mixed
    {
        return $this->getFieldValue('title');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setTitle(mixed $value): static
    {
        return $this->setFieldValue('title', $value);
    }

    /**
     * Optional. Special entities that appear in the checklist title
     *
     * @return Base\ArrayObject<MessageEntity>
     * @throws Base\TelegramException
     */
    public function getTitleEntities(): mixed
    {
        return $this->getFieldValue('title_entities');
    }

    /**
     * @param list<MessageEntity|array<string, mixed>>|Base\ArrayObject<MessageEntity> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setTitleEntities(mixed $value): static
    {
        return $this->setFieldValue('title_entities', $value);
    }

    /**
     * Required. List of tasks in the checklist
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

    /**
     * Optional. *True*, if users other than the creator of the list can add tasks to the list
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getOthersCanAddTasks(): mixed
    {
        return $this->getFieldValue('others_can_add_tasks');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setOthersCanAddTasks(mixed $value): static
    {
        return $this->setFieldValue('others_can_add_tasks', $value);
    }

    /**
     * Optional. *True*, if users other than the creator of the list can mark tasks as done or not done
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getOthersCanMarkTasksAsDone(): mixed
    {
        return $this->getFieldValue('others_can_mark_tasks_as_done');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setOthersCanMarkTasksAsDone(mixed $value): static
    {
        return $this->setFieldValue('others_can_mark_tasks_as_done', $value);
    }
}
