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

namespace DevBX\Telegram\InlineMode;

use DevBX\Telegram\Base;
use DevBX\Telegram\Types;


/**
* This object represents a button to be shown above inline query results. You **must** use exactly one of the optional fields.
* @property string $text
* Label text on the button
* @property Types\WebAppInfo $webApp
* *Optional*. Description of the [Web App](/bots/webapps) that will be launched when the user presses the button. The Web App will be able to switch back to the inline mode using the method [switchInlineQuery](/bots/webapps#initializing-mini-apps) inside the Web App.
* @property string $startParameter
* *Optional*. [Deep-linking](/bots/features#deep-linking) parameter for the /start message sent to the bot when a user presses the button. 1-64 characters, only `A-Z`, `a-z`, `0-9`, `_` and `-` are allowed.  
  
*Example:* An inline bot that sends YouTube videos can ask the user to connect the bot to their YouTube account to adapt search results accordingly. To do this, it displays a 'Connect your YouTube account' button above the results, or even before showing any. The user presses the button, switches to a private chat with the bot and, in doing so, passes a start parameter that instructs the bot to return an OAuth link. Once done, the bot can offer a [*switch\_inline*](#inlinekeyboardmarkup) button so that the user can easily return to the chat where they wanted to use the bot's inline capabilities.
*/

class InlineQueryResultsButton extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'text' => [
				'type' => ['string'],
				'required' => true,
			],
			'web_app' => [
				'type' => [Types\WebAppInfo::class],
			],
			'start_parameter' => [
				'type' => ['string'],
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
	* @return Types\WebAppInfo
	*/

	public function getWebApp(): mixed
	{
		return $this->getFieldValue('web_app');
	}

	/**
	* @param Types\WebAppInfo $value
	* @return static
	*/

	public function setWebApp(mixed $value): static
	{
		return $this->setFieldValue('web_app', $value);
	}

	/**
	* @return string
	*/

	public function getStartParameter(): mixed
	{
		return $this->getFieldValue('start_parameter');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setStartParameter(mixed $value): static
	{
		return $this->setFieldValue('start_parameter', $value);
	}

}