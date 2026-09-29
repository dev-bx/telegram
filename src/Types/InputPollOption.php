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

namespace DevBX\Telegram\Types;

use DevBX\Telegram\Base;


/**
 * This object contains information about one answer option in a poll to be sent.
 * @property string $text
 * Option text, 1-100 characters
 * @property string $textParseMode
 * *Optional*. Mode for parsing entities in the text. See [formatting options](#formatting-options) for more details. Currently, only custom emoji entities are allowed.
 * @property Base\ArrayObject|MessageEntity[] $textEntities
 * *Optional*. A JSON-serialized list of special entities that appear in the poll option text. It can be specified instead of *text\_parse\_mode*.
 * @property InputPollOptionMedia|InputMediaAnimation|InputMediaLink|InputMediaLivePhoto|InputMediaLocation|InputMediaPhoto|InputMediaSticker|InputMediaVenue|InputMediaVideo $media
 * *Optional*. Media added to the poll option
 */
class InputPollOption extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'text' => [
				'type' => ['string'],
				'required' => true,
			],
			'text_parse_mode' => [
				'type' => ['string'],
			],
			'text_entities' => [
				'type' => [MessageEntity::class],
				'isArray' => true,
			],
			'media' => [
				'type' => [InputPollOptionMedia::class],
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
	* @return string
	*/

	public function getTextParseMode(): mixed
	{
		return $this->getFieldValue('text_parse_mode');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setTextParseMode(mixed $value): static
	{
		return $this->setFieldValue('text_parse_mode', $value);
	}

	/**
	* @return Base\ArrayObject|MessageEntity[]
	*/

	public function getTextEntities(): mixed
	{
		return $this->getFieldValue('text_entities');
	}

	/**
	* @param Base\ArrayObject|MessageEntity[] $value
	* @return static
	*/

	public function setTextEntities(mixed $value): static
	{
		return $this->setFieldValue('text_entities', $value);
	}

	/**
	* @return InputPollOptionMedia|InputMediaAnimation|InputMediaLink|InputMediaLivePhoto|InputMediaLocation|InputMediaPhoto|InputMediaSticker|InputMediaVenue|InputMediaVideo
	*/

	public function getMedia(): mixed
	{
		return $this->getFieldValue('media');
	}

	/**
	* @param InputPollOptionMedia|InputMediaAnimation|InputMediaLink|InputMediaLivePhoto|InputMediaLocation|InputMediaPhoto|InputMediaSticker|InputMediaVenue|InputMediaVideo $value
	* @return static
	*/

	public function setMedia(mixed $value): static
	{
		return $this->setFieldValue('media', $value);
	}

}