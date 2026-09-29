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
 * A block containing a list of buttons that are shown in one row, corresponding to the custom HTML tag `<tg-button-row>`.
 * @property string $type
 * Type of the block, always “buttons”
 * @property Base\ArrayObject|RichMessageButton[] $buttons
 * List of 1-8 buttons to send
 * @property string $align
 * *Optional*. Horizontal alignment of the buttons. Currently, must be one of “left”, “center”, or “right”.
 */
class InputRichBlockButtons extends InputRichBlock
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => 'buttons',
				'required' => true,
			],
			'buttons' => [
				'type' => [RichMessageButton::class],
				'isArray' => true,
				'required' => true,
			],
			'align' => [
				'type' => ['string'],
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
	* @return Base\ArrayObject|RichMessageButton[]
	*/

	public function getButtons(): mixed
	{
		return $this->getFieldValue('buttons');
	}

	/**
	* @param Base\ArrayObject|RichMessageButton[] $value
	* @return static
	*/

	public function setButtons(mixed $value): static
	{
		return $this->setFieldValue('buttons', $value);
	}

	/**
	* @return string
	*/

	public function getAlign(): mixed
	{
		return $this->getFieldValue('align');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setAlign(mixed $value): static
	{
		return $this->setFieldValue('align', $value);
	}

}