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
 * Describes a task to add to a checklist.
 * @property int $id
 * Unique identifier of the task; must be positive and unique among all task identifiers currently present in the checklist
 * @property string $text
 * Text of the task; 1-100 characters after entities parsing
 * @property string $parseMode
 * Optional. Mode for parsing entities in the text. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details.
 * @property Base\ArrayObject|MessageEntity[] $textEntities
 * *Optional*. List of special entities that appear in the text, which can be specified instead of parse\_mode. Currently, only *bold*, *italic*, *underline*, *strikethrough*, *spoiler*, and *custom\_emoji* entities are allowed.
 */
class InputChecklistTask extends Base\BaseType
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
			'parse_mode' => [
				'type' => ['string'],
			],
			'text_entities' => [
				'type' => [MessageEntity::class],
				'isArray' => true,
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

}