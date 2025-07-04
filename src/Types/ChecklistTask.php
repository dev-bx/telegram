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
 * Describes a task in a checklist.
 * @property int $id
 * Unique identifier of the task
 * @property string $text
 * Text of the task
 * @property Base\ArrayObject|MessageEntity[] $textEntities
 * *Optional*. Special entities that appear in the task text
 * @property User $completedByUser
 * *Optional*. User that completed the task; omitted if the task wasn't completed
 * @property int $completionDate
 * *Optional*. Point in time (Unix timestamp) when the task was completed; 0 if the task wasn't completed
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
			'completion_date' => [
				'type' => ['int'],
			],
		];
	}
	/**
	* @return int
	*/

	public function getId(): mixed
	{
		return $this->getFieldValue('id');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setId(mixed $value): static
	{
		return $this->setFieldValue('id', $value);
	}

	/**
	* @return string
	*/

	public function getText(): mixed
	{
		return $this->getFieldValue('text');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setText(mixed $value): static
	{
		return $this->setFieldValue('text', $value);
	}

	/**
	* @return Base\ArrayObject|MessageEntity[]
	*/

	public function getTextEntities(): mixed
	{
		return $this->getFieldValue('text_entities');
	}

	/**
	* @param Base\ArrayObject|MessageEntity[] $value
	* @return static
	*/

	public function setTextEntities(mixed $value): static
	{
		return $this->setFieldValue('text_entities', $value);
	}

	/**
	* @return User
	*/

	public function getCompletedByUser(): mixed
	{
		return $this->getFieldValue('completed_by_user');
	}

	/**
	* @param User $value
	* @return static
	*/

	public function setCompletedByUser(mixed $value): static
	{
		return $this->setFieldValue('completed_by_user', $value);
	}

	/**
	* @return int
	*/

	public function getCompletionDate(): mixed
	{
		return $this->getFieldValue('completion_date');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setCompletionDate(mixed $value): static
	{
		return $this->setFieldValue('completion_date', $value);
	}

}