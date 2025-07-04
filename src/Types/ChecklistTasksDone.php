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
 * Describes a service message about checklist tasks marked as done or not done.
 * @property Message $checklistMessage
 * *Optional*. Message containing the checklist whose tasks were marked as done or not done. Note that the Message object in this field will not contain the *reply\_to\_message* field even if it itself is a reply.
 * @property int[] $markedAsDoneTaskIds
 * *Optional*. Identifiers of the tasks that were marked as done
 * @property int[] $markedAsNotDoneTaskIds
 * *Optional*. Identifiers of the tasks that were marked as not done
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
	* @return int[]
	*/

	public function getMarkedAsDoneTaskIds(): mixed
	{
		return $this->getFieldValue('marked_as_done_task_ids');
	}

	/**
	* @param int[] $value
	* @return static
	*/

	public function setMarkedAsDoneTaskIds(mixed $value): static
	{
		return $this->setFieldValue('marked_as_done_task_ids', $value);
	}

	/**
	* @return int[]
	*/

	public function getMarkedAsNotDoneTaskIds(): mixed
	{
		return $this->getFieldValue('marked_as_not_done_task_ids');
	}

	/**
	* @param int[] $value
	* @return static
	*/

	public function setMarkedAsNotDoneTaskIds(mixed $value): static
	{
		return $this->setFieldValue('marked_as_not_done_task_ids', $value);
	}

}