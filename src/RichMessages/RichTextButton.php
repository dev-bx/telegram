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
 * A button.
 * @property string $type
 * Type of the rich text, always “button”
 * @property RichMessageButton $button
 * The button
 */
class RichTextButton extends RichText
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => 'button',
				'required' => true,
			],
			'button' => [
				'type' => [RichMessageButton::class],
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
	* @return RichMessageButton
	*/

	public function getButton(): mixed
	{
		return $this->getFieldValue('button');
	}

	/**
	* @param RichMessageButton $value
	* @return static
	*/

	public function setButton(mixed $value): static
	{
		return $this->setFieldValue('button', $value);
	}

}