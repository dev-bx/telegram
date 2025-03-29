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
 * Represents a menu button, which launches a [Web App](/bots/webapps).
 * @property string $type
 * Type of the button, must be *web\_app*
 * @property string $text
 * Text on the button
 * @property WebAppInfo $webApp
 * Description of the Web App that will be launched when the user presses the button. The Web App will be able to send an arbitrary message on behalf of the user using the method [answerWebAppQuery](#answerwebappquery). Alternatively, a `t.me` link to a Web App of the bot can be specified in the object instead of the Web App's URL, in which case the Web App will be opened as if the user pressed the link.
 */
class MenuButtonWebApp extends MenuButton
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => 'web_app',
				'required' => true,
			],
			'text' => [
				'type' => ['string'],
				'required' => true,
			],
			'web_app' => [
				'type' => [WebAppInfo::class],
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
	* @return WebAppInfo
	*/

	public function getWebApp(): mixed
	{
		return $this->getFieldValue('web_app');
	}

	/**
	* @param WebAppInfo $value
	* @return static
	*/

	public function setWebApp(mixed $value): static
	{
		return $this->setFieldValue('web_app', $value);
	}

}