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
 * Describes data sent from a [Web App](/bots/webapps) to the bot.
 * @property string $data
 * The data. Be aware that a bad client can send arbitrary data in this field.
 * @property string $buttonText
 * Text of the *web\_app* keyboard button from which the Web App was opened. Be aware that a bad client can send arbitrary data in this field.
 */
class WebAppData extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'data' => [
				'type' => ['string'],
				'required' => true,
			],
			'button_text' => [
				'type' => ['string'],
				'required' => true,
			],
		];
	}
	/**
	* @return string
	*/

	public function getData(): mixed
	{
		return $this->getFieldValue('data');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setData(mixed $value): static
	{
		return $this->setFieldValue('data', $value);
	}

	/**
	* @return string
	*/

	public function getButtonText(): mixed
	{
		return $this->getFieldValue('button_text');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setButtonText(mixed $value): static
	{
		return $this->setFieldValue('button_text', $value);
	}

}