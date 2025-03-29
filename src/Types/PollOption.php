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
 * This object contains information about one answer option in a poll.
 * @property string $text
 * Option text, 1-100 characters
 * @property Base\ArrayObject|MessageEntity[] $textEntities
 * *Optional*. Special entities that appear in the option *text*. Currently, only custom emoji entities are allowed in poll option texts
 * @property int $voterCount
 * Number of users that voted for this option
 */
class PollOption extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'text' => [
				'type' => ['string'],
				'required' => true,
			],
			'text_entities' => [
				'type' => [MessageEntity::class],
				'isArray' => true,
			],
			'voter_count' => [
				'type' => ['int'],
				'required' => true,
			],
		];
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
	* @return int
	*/

	public function getVoterCount(): mixed
	{
		return $this->getFieldValue('voter_count');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setVoterCount(mixed $value): static
	{
		return $this->setFieldValue('voter_count', $value);
	}

}