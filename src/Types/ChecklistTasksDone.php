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
 * Describes a service message about checklist tasks marked as done or not done.
 *
 * @link https://core.telegram.org/bots/api#checklisttasksdone
 *
 * @property-read Message|null $checklistMessage Optional. Message containing the checklist whose tasks were marked as done or not done. Note that the `Message` object in this field will not contain the *reply_to_message* field even if it itself is a reply.
 * @property-write Message|array<string, mixed> $checklistMessage
 * @property-read Base\ArrayObject<Base\ParameterInt> $markedAsDoneTaskIds Optional. Identifiers of the tasks that were marked as done
 * @property-write list<int>|Base\ArrayObject<Base\ParameterInt> $markedAsDoneTaskIds
 * @property-read Base\ArrayObject<Base\ParameterInt> $markedAsNotDoneTaskIds Optional. Identifiers of the tasks that were marked as not done
 * @property-write list<int>|Base\ArrayObject<Base\ParameterInt> $markedAsNotDoneTaskIds
 */
class ChecklistTasksDone extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'checklist_message' => [
                'type' => [Message::class],
            ],
            'marked_as_done_task_ids' => [
                'type' => ['int'],
                'isArray' => true,
            ],
            'marked_as_not_done_task_ids' => [
                'type' => ['int'],
                'isArray' => true,
            ],
        ];
    }

    /**
     * Optional. Message containing the checklist whose tasks were marked as done or not done. Note that the `Message` object in this field will not contain the *reply_to_message* field even if it itself is a reply.
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
     * Optional. Identifiers of the tasks that were marked as done
     *
     * @return Base\ArrayObject<Base\ParameterInt>
     * @throws Base\TelegramException
     */
    public function getMarkedAsDoneTaskIds(): mixed
    {
        return $this->getFieldValue('marked_as_done_task_ids');
    }

    /**
     * @param list<int>|Base\ArrayObject<Base\ParameterInt> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setMarkedAsDoneTaskIds(mixed $value): static
    {
        return $this->setFieldValue('marked_as_done_task_ids', $value);
    }

    /**
     * Optional. Identifiers of the tasks that were marked as not done
     *
     * @return Base\ArrayObject<Base\ParameterInt>
     * @throws Base\TelegramException
     */
    public function getMarkedAsNotDoneTaskIds(): mixed
    {
        return $this->getFieldValue('marked_as_not_done_task_ids');
    }

    /**
     * @param list<int>|Base\ArrayObject<Base\ParameterInt> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setMarkedAsNotDoneTaskIds(mixed $value): static
    {
        return $this->setFieldValue('marked_as_not_done_task_ids', $value);
    }
}
