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
* Represents the [content](#inputmessagecontent) of a text message to be sent as the result of an inline query.
* @property string $messageText
* Text of the message to be sent, 1-4096 characters
* @property string $parseMode
* *Optional*. Mode for parsing entities in the message text. See [formatting options](#formatting-options) for more details.
* @property Base\ArrayObject|Types\MessageEntity[] $entities
* *Optional*. List of special entities that appear in message text, which can be specified instead of *parse\_mode*
* @property Types\LinkPreviewOptions $linkPreviewOptions
* *Optional*. Link preview generation options for the message
*/

class InputTextMessageContent extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'message_text' => [
				'type' => ['string'],
				'required' => true,
			],
			'parse_mode' => [
				'type' => ['string'],
			],
			'entities' => [
				'type' => [Types\MessageEntity::class],
				'isArray' => true,
			],
			'link_preview_options' => [
				'type' => [Types\LinkPreviewOptions::class],
			],
		];
	}
	/**
	* @return string
	*/

	public function getMessageText(): mixed
	{
		return $this->getFieldValue('message_text');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setMessageText(mixed $value): static
	{
		return $this->setFieldValue('message_text', $value);
	}

	/**
	* @return string
	*/

	public function getParseMode(): mixed
	{
		return $this->getFieldValue('parse_mode');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setParseMode(mixed $value): static
	{
		return $this->setFieldValue('parse_mode', $value);
	}

	/**
	* @return Base\ArrayObject|Types\MessageEntity[]
	*/

	public function getEntities(): mixed
	{
		return $this->getFieldValue('entities');
	}

	/**
	* @param Base\ArrayObject|Types\MessageEntity[] $value
	* @return static
	*/

	public function setEntities(mixed $value): static
	{
		return $this->setFieldValue('entities', $value);
	}

	/**
	* @return Types\LinkPreviewOptions
	*/

	public function getLinkPreviewOptions(): mixed
	{
		return $this->getFieldValue('link_preview_options');
	}

	/**
	* @param Types\LinkPreviewOptions $value
	* @return static
	*/

	public function setLinkPreviewOptions(mixed $value): static
	{
		return $this->setFieldValue('link_preview_options', $value);
	}

}