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


/**
* Describes an inline message sent by a [Web App](/bots/webapps) on behalf of a user.
* @property string $inlineMessageId
* *Optional*. Identifier of the sent inline message. Available only if there is an [inline keyboard](#inlinekeyboardmarkup) attached to the message.
*/

class SentWebAppMessage extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'inline_message_id' => [
				'type' => ['string'],
			],
		];
	}
	/**
	* @return string
	*/

	public function getInlineMessageId(): mixed
	{
		return $this->getFieldValue('inline_message_id');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setInlineMessageId(mixed $value): static
	{
		return $this->setFieldValue('inline_message_id', $value);
	}

}