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
 * A list of blocks, corresponding to the HTML tag `<ul>` or `<ol>` with multiple nested tags `<li>`.
 * @property string $type
 * Type of the block, always “list”
 * @property Base\ArrayObject|RichBlockListItem[] $items
 * Items of the list
 */
class RichBlockList extends RichBlock
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => 'list',
				'required' => true,
			],
			'items' => [
				'type' => [RichBlockListItem::class],
				'isArray' => true,
				'required' => true,
			],
		];
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

	/**
	* @return Base\ArrayObject|RichBlockListItem[]
	*/

	public function getItems(): mixed
	{
		return $this->getFieldValue('items');
	}

	/**
	* @param Base\ArrayObject|RichBlockListItem[] $value
	* @return static
	*/

	public function setItems(mixed $value): static
	{
		return $this->setFieldValue('items', $value);
	}

}