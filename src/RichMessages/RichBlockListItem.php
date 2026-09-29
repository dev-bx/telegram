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

namespace DevBX\Telegram\RichMessages;

use DevBX\Telegram\Base;


/**
 * An item of a list.
 * @property string $label
 * Label of the item
 * @property Base\ArrayObject|RichBlock[] $blocks
 * The content of the item
 * @property bool $hasCheckbox
 * *Optional*. *True*, if the item has a checkbox
 * @property bool $isChecked
 * *Optional*. *True*, if the item has a checked checkbox
 * @property int $value
 * *Optional*. For ordered lists, the numeric value of the item label
 * @property string $type
 * *Optional*. For ordered lists, the type of the item label; must be one of “a” for lowercase letters, “A” for uppercase letters, “i” for lowercase Roman numerals, “I” for uppercase Roman numerals, or “1” for decimal numbers
 */
class RichBlockListItem extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'label' => [
				'type' => ['string'],
				'required' => true,
			],
			'blocks' => [
				'type' => [RichBlock::class],
				'isArray' => true,
				'required' => true,
			],
			'has_checkbox' => [
				'type' => ['bool'],
			],
			'is_checked' => [
				'type' => ['bool'],
			],
			'value' => [
				'type' => ['int'],
			],
			'type' => [
				'type' => ['string'],
			],
		];
	}
	/**
	* @return string
	*/

	public function getLabel(): mixed
	{
		return $this->getFieldValue('label');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setLabel(mixed $value): static
	{
		return $this->setFieldValue('label', $value);
	}

	/**
	* @return Base\ArrayObject|RichBlock[]
	*/

	public function getBlocks(): mixed
	{
		return $this->getFieldValue('blocks');
	}

	/**
	* @param Base\ArrayObject|RichBlock[] $value
	* @return static
	*/

	public function setBlocks(mixed $value): static
	{
		return $this->setFieldValue('blocks', $value);
	}

	/**
	* @return bool
	*/

	public function getHasCheckbox(): mixed
	{
		return $this->getFieldValue('has_checkbox');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setHasCheckbox(mixed $value): static
	{
		return $this->setFieldValue('has_checkbox', $value);
	}

	/**
	* @return bool
	*/

	public function getIsChecked(): mixed
	{
		return $this->getFieldValue('is_checked');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setIsChecked(mixed $value): static
	{
		return $this->setFieldValue('is_checked', $value);
	}

	/**
	* @return int
	*/

	public function getValue(): mixed
	{
		return $this->getFieldValue('value');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setValue(mixed $value): static
	{
		return $this->setFieldValue('value', $value);
	}

	/**
	* @return string
	*/

	public function getType(): mixed
	{
		return $this->getFieldValue('type');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setType(mixed $value): static
	{
		return $this->setFieldValue('type', $value);
	}

}