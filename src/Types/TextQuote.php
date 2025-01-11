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
* This object contains information about the quoted part of a message that is replied to by the given message.
* @property string $text
* Text of the quoted part of a message that is replied to by the given message
* @property Base\ArrayObject|MessageEntity[] $entities
* *Optional*. Special entities that appear in the quote. Currently, only *bold*, *italic*, *underline*, *strikethrough*, *spoiler*, and *custom\_emoji* entities are kept in quotes.
* @property int $position
* Approximate quote position in the original message in UTF-16 code units as specified by the sender
* @property bool $isManual
* *Optional*. True, if the quote was chosen manually by the message sender. Otherwise, the quote was added automatically by the server.
*/

class TextQuote extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'text' => [
				'type' => ['string'],
				'required' => true,
			],
			'entities' => [
				'type' => [MessageEntity::class],
				'isArray' => true,
			],
			'position' => [
				'type' => ['int'],
				'required' => true,
			],
			'is_manual' => [
				'type' => ['bool'],
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

	public function getEntities(): mixed
	{
		return $this->getFieldValue('entities');
	}

	/**
	* @param Base\ArrayObject|MessageEntity[] $value
	* @return static
	*/

	public function setEntities(mixed $value): static
	{
		return $this->setFieldValue('entities', $value);
	}

	/**
	* @return int
	*/

	public function getPosition(): mixed
	{
		return $this->getFieldValue('position');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setPosition(mixed $value): static
	{
		return $this->setFieldValue('position', $value);
	}

	/**
	* @return bool
	*/

	public function getIsManual(): mixed
	{
		return $this->getFieldValue('is_manual');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setIsManual(mixed $value): static
	{
		return $this->setFieldValue('is_manual', $value);
	}

}