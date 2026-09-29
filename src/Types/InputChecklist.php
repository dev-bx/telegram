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
 * Describes a checklist to create.
 *
 * @link https://core.telegram.org/bots/api#inputchecklist
 *
 * @property-read string|null $title Required. Title of the checklist; 1-255 characters after entities parsing
 * @property-write string $title
 * @property-read string|null $parseMode Optional. Mode for parsing entities in the title. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details.
 * @property-write string $parseMode
 * @property-read Base\ArrayObject<MessageEntity> $titleEntities Optional. List of special entities that appear in the title, which can be specified instead of parse_mode. Currently, only *bold*, *italic*, *underline*, *strikethrough*, *spoiler*, *custom_emoji*, and *date_time* entities are allowed.
 * @property-write list<MessageEntity|array<string, mixed>>|Base\ArrayObject<MessageEntity> $titleEntities
 * @property-read Base\ArrayObject<InputChecklistTask> $tasks Required. List of 1-30 tasks in the checklist
 * @property-write list<InputChecklistTask|array<string, mixed>>|Base\ArrayObject<InputChecklistTask> $tasks
 * @property-read bool|null $othersCanAddTasks Optional. Pass *True* if other users can add tasks to the checklist
 * @property-write bool $othersCanAddTasks
 * @property-read bool|null $othersCanMarkTasksAsDone Optional. Pass *True* if other users can mark tasks as done or not done in the checklist
 * @property-write bool $othersCanMarkTasksAsDone
 */
class InputChecklist extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'title' => [
                'type' => ['string'],
                'required' => true,
            ],
            'parse_mode' => [
                'type' => ['string'],
            ],
            'title_entities' => [
                'type' => [MessageEntity::class],
                'isArray' => true,
            ],
            'tasks' => [
                'type' => [InputChecklistTask::class],
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
     * Required. Title of the checklist; 1-255 characters after entities parsing
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
     * Optional. Mode for parsing entities in the title. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getParseMode(): mixed
    {
        return $this->getFieldValue('parse_mode');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setParseMode(mixed $value): static
    {
        return $this->setFieldValue('parse_mode', $value);
    }

    /**
     * Optional. List of special entities that appear in the title, which can be specified instead of parse_mode. Currently, only *bold*, *italic*, *underline*, *strikethrough*, *spoiler*, *custom_emoji*, and *date_time* entities are allowed.
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
     * Required. List of 1-30 tasks in the checklist
     *
     * @return Base\ArrayObject<InputChecklistTask>
     * @throws Base\TelegramException
     */
    public function getTasks(): mixed
    {
        return $this->getFieldValue('tasks');
    }

    /**
     * @param list<InputChecklistTask|array<string, mixed>>|Base\ArrayObject<InputChecklistTask> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setTasks(mixed $value): static
    {
        return $this->setFieldValue('tasks', $value);
    }

    /**
     * Optional. Pass *True* if other users can add tasks to the checklist
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
     * Optional. Pass *True* if other users can mark tasks as done or not done in the checklist
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
