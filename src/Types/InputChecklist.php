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
 * Describes a checklist to create.
 * @property string $title
 * Title of the checklist; 1-255 characters after entities parsing
 * @property string $parseMode
 * Optional. Mode for parsing entities in the title. See [formatting options](#formatting-options) for more details.
 * @property Base\ArrayObject|MessageEntity[] $titleEntities
 * *Optional*. List of special entities that appear in the title, which can be specified instead of parse\_mode. Currently, only *bold*, *italic*, *underline*, *strikethrough*, *spoiler*, and *custom\_emoji* entities are allowed.
 * @property Base\ArrayObject|InputChecklistTask[] $tasks
 * List of 1-30 tasks in the checklist
 * @property bool $othersCanAddTasks
 * *Optional*. Pass *True* if other users can add tasks to the checklist
 * @property bool $othersCanMarkTasksAsDone
 * *Optional*. Pass *True* if other users can mark tasks as done or not done in the checklist
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
	* @return string
	*/

	public function getParseMode(): mixed
	{
		return $this->getFieldValue('parse_mode');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setParseMode(mixed $value): static
	{
		return $this->setFieldValue('parse_mode', $value);
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
	* @return Base\ArrayObject|InputChecklistTask[]
	*/

	public function getTasks(): mixed
	{
		return $this->getFieldValue('tasks');
	}

	/**
	* @param Base\ArrayObject|InputChecklistTask[] $value
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