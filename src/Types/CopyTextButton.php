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
* This object represents an inline keyboard button that copies specified text to the clipboard.
* @property string $text
* The text to be copied to the clipboard; 1-256 characters
*/

class CopyTextButton extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'text' => [
				'type' => ['string'],
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

}