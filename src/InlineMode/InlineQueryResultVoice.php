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
* Represents a link to a voice recording in an .OGG container encoded with OPUS. By default, this voice recording will be sent by the user. Alternatively, you can use *input\_message\_content* to send a message with the specified content instead of the the voice message.
* @property string $type
* Type of the result, must be *voice*
* @property string $id
* Unique identifier for this result, 1-64 bytes
* @property string $voiceUrl
* A valid URL for the voice recording
* @property string $title
* Recording title
* @property string $caption
* *Optional*. Caption, 0-1024 characters after entities parsing
* @property string $parseMode
* *Optional*. Mode for parsing entities in the voice message caption. See [formatting options](#formatting-options) for more details.
* @property Base\ArrayObject|Types\MessageEntity[] $captionEntities
* *Optional*. List of special entities that appear in the caption, which can be specified instead of *parse\_mode*
* @property int $voiceDuration
* *Optional*. Recording duration in seconds
* @property Types\InlineKeyboardMarkup $replyMarkup
* *Optional*. [Inline keyboard](/bots/features#inline-keyboards) attached to the message
* @property InputMessageContent $inputMessageContent
* *Optional*. Content of the message to be sent instead of the voice recording
*/

class InlineQueryResultVoice extends InlineQueryResult
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => 'voice',
				'required' => true,
			],
			'id' => [
				'type' => ['string'],
				'required' => true,
			],
			'voice_url' => [
				'type' => ['string'],
				'required' => true,
			],
			'title' => [
				'type' => ['string'],
				'required' => true,
			],
			'caption' => [
				'type' => ['string'],
			],
			'parse_mode' => [
				'type' => ['string'],
			],
			'caption_entities' => [
				'type' => [Types\MessageEntity::class],
				'isArray' => true,
			],
			'voice_duration' => [
				'type' => ['int'],
			],
			'reply_markup' => [
				'type' => [Types\InlineKeyboardMarkup::class],
			],
			'input_message_content' => [
				'type' => [InputMessageContent::class],
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

	public function getId(): mixed
	{
		return $this->getFieldValue('id');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setId(mixed $value): static
	{
		return $this->setFieldValue('id', $value);
	}

	/**
	* @return string
	*/

	public function getVoiceUrl(): mixed
	{
		return $this->getFieldValue('voice_url');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setVoiceUrl(mixed $value): static
	{
		return $this->setFieldValue('voice_url', $value);
	}

	/**
	* @return string
	*/

	public function getTitle(): mixed
	{
		return $this->getFieldValue('title');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setTitle(mixed $value): static
	{
		return $this->setFieldValue('title', $value);
	}

	/**
	* @return string
	*/

	public function getCaption(): mixed
	{
		return $this->getFieldValue('caption');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setCaption(mixed $value): static
	{
		return $this->setFieldValue('caption', $value);
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

	public function getCaptionEntities(): mixed
	{
		return $this->getFieldValue('caption_entities');
	}

	/**
	* @param Base\ArrayObject|Types\MessageEntity[] $value
	* @return static
	*/

	public function setCaptionEntities(mixed $value): static
	{
		return $this->setFieldValue('caption_entities', $value);
	}

	/**
	* @return int
	*/

	public function getVoiceDuration(): mixed
	{
		return $this->getFieldValue('voice_duration');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setVoiceDuration(mixed $value): static
	{
		return $this->setFieldValue('voice_duration', $value);
	}

	/**
	* @return Types\InlineKeyboardMarkup
	*/

	public function getReplyMarkup(): mixed
	{
		return $this->getFieldValue('reply_markup');
	}

	/**
	* @param Types\InlineKeyboardMarkup $value
	* @return static
	*/

	public function setReplyMarkup(mixed $value): static
	{
		return $this->setFieldValue('reply_markup', $value);
	}

	/**
	* @return InputMessageContent
	*/

	public function getInputMessageContent(): mixed
	{
		return $this->getFieldValue('input_message_content');
	}

	/**
	* @param InputMessageContent $value
	* @return static
	*/

	public function setInputMessageContent(mixed $value): static
	{
		return $this->setFieldValue('input_message_content', $value);
	}

}