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
 * Describes a checklist.
 * @property string $title
 * Title of the checklist
 * @property Base\ArrayObject|MessageEntity[] $titleEntities
 * *Optional*. Special entities that appear in the checklist title
 * @property Base\ArrayObject|ChecklistTask[] $tasks
 * List of tasks in the checklist
 * @property bool $othersCanAddTasks
 * *Optional*. *True*, if users other than the creator of the list can add tasks to the list
 * @property bool $othersCanMarkTasksAsDone
 * *Optional*. *True*, if users other than the creator of the list can mark tasks as done or not done
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
	* @return string
	*/

	public function getTitle(): mixed
	{
		return $this->getFieldValue('title');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setTitle(mixed $value): static
	{
		return $this->setFieldValue('title', $value);
	}

	/**
	* @return Base\ArrayObject|MessageEntity[]
	*/

	public function getTitleEntities(): mixed
	{
		return $this->getFieldValue('title_entities');
	}

	/**
	* @param Base\ArrayObject|MessageEntity[] $value
	* @return static
	*/

	public function setTitleEntities(mixed $value): static
	{
		return $this->setFieldValue('title_entities', $value);
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

	/**
	* @return bool
	*/

	public function getOthersCanAddTasks(): mixed
	{
		return $this->getFieldValue('others_can_add_tasks');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setOthersCanAddTasks(mixed $value): static
	{
		return $this->setFieldValue('others_can_add_tasks', $value);
	}

	/**
	* @return bool
	*/

	public function getOthersCanMarkTasksAsDone(): mixed
	{
		return $this->getFieldValue('others_can_mark_tasks_as_done');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setOthersCanMarkTasksAsDone(mixed $value): static
	{
		return $this->setFieldValue('others_can_mark_tasks_as_done', $value);
	}

}