<?php

/**
 * @project Telegram Bot Api
 * @author Kubeev Ruslan <ruslan@dev-bx.ru>
 * @copyright 2025 Kubeev Ruslan
 * @license MIT
 * @link https://dev-bx.ru/
 *
 * This file is part of the project Telegram Bot Api Class Generator.
 */

namespace DevBX\Telegram\Types;

use DevBX\Telegram\Base;


/**
 * Describes a service message about tasks added to a checklist.
 * @property Message $checklistMessage
 * *Optional*. Message containing the checklist to which the tasks were added. Note that the Message object in this field will not contain the *reply\_to\_message* field even if it itself is a reply.
 * @property Base\ArrayObject|ChecklistTask[] $tasks
 * List of tasks added to the checklist
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
	* @return Message
	*/

	public function getChecklistMessage(): mixed
	{
		return $this->getFieldValue('checklist_message');
	}

	/**
	* @param Message $value
	* @return static
	*/

	public function setChecklistMessage(mixed $value): static
	{
		return $this->setFieldValue('checklist_message', $value);
	}

	/**
	* @return Base\ArrayObject|ChecklistTask[]
	*/

	public function getTasks(): mixed
	{
		return $this->getFieldValue('tasks');
	}

	/**
	* @param Base\ArrayObject|ChecklistTask[] $value
	* @return static
	*/

	public function setTasks(mixed $value): static
	{
		return $this->setFieldValue('tasks', $value);
	}

}