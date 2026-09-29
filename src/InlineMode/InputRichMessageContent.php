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

namespace DevBX\Telegram\InlineMode;

use DevBX\Telegram\Base;
use DevBX\Telegram\RichMessages;


/**
 * Represents the [content](#inputmessagecontent) of a rich message to be sent as the result of an inline query.
 * @property RichMessages\InputRichMessage $richMessage
 * The message to be sent. Only previously uploaded files may be used in the message.
 */
class InputRichMessageContent extends InputMessageContent
{
	public static function getFields(): array
	{
		return [
			'rich_message' => [
				'type' => [RichMessages\InputRichMessage::class],
				'required' => true,
			],
		];
	}
	/**
	* @return RichMessages\InputRichMessage
	*/

	public function getRichMessage(): mixed
	{
		return $this->getFieldValue('rich_message');
	}

	/**
	* @param RichMessages\InputRichMessage $value
	* @return static
	*/

	public function setRichMessage(mixed $value): static
	{
		return $this->setFieldValue('rich_message', $value);
	}

}