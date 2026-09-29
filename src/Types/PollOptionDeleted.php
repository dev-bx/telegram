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
 * Describes a service message about an option deleted from a poll.
 * @property MaybeInaccessibleMessage|Message|InaccessibleMessage $pollMessage
 * *Optional*. Message containing the poll from which the option was deleted, if known. Note that the [Message](#message) object in this field will not contain the *reply\_to\_message* field even if it itself is a reply.
 * @property string $optionPersistentId
 * Unique identifier of the deleted option
 * @property string $optionText
 * Option text
 * @property Base\ArrayObject|MessageEntity[] $optionTextEntities
 * *Optional*. Special entities that appear in the *option\_text*
 */
class PollOptionDeleted extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'poll_message' => [
				'type' => [MaybeInaccessibleMessage::class],
			],
			'option_persistent_id' => [
				'type' => ['string'],
				'required' => true,
			],
			'option_text' => [
				'type' => ['string'],
				'required' => true,
			],
			'option_text_entities' => [
				'type' => [MessageEntity::class],
				'isArray' => true,
			],
		];
	}
	/**
	* @return MaybeInaccessibleMessage|Message|InaccessibleMessage
	*/

	public function getPollMessage(): mixed
	{
		return $this->getFieldValue('poll_message');
	}

	/**
	* @param MaybeInaccessibleMessage|Message|InaccessibleMessage $value
	* @return static
	*/

	public function setPollMessage(mixed $value): static
	{
		return $this->setFieldValue('poll_message', $value);
	}

	/**
	* @return string
	*/

	public function getOptionPersistentId(): mixed
	{
		return $this->getFieldValue('option_persistent_id');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setOptionPersistentId(mixed $value): static
	{
		return $this->setFieldValue('option_persistent_id', $value);
	}

	/**
	* @return string
	*/

	public function getOptionText(): mixed
	{
		return $this->getFieldValue('option_text');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setOptionText(mixed $value): static
	{
		return $this->setFieldValue('option_text', $value);
	}

	/**
	* @return Base\ArrayObject|MessageEntity[]
	*/

	public function getOptionTextEntities(): mixed
	{
		return $this->getFieldValue('option_text_entities');
	}

	/**
	* @param Base\ArrayObject|MessageEntity[] $value
	* @return static
	*/

	public function setOptionTextEntities(mixed $value): static
	{
		return $this->setFieldValue('option_text_entities', $value);
	}

}