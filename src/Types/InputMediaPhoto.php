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
 * Represents a photo to be sent.
 * @property string $type
 * Type of the result, must be *photo*
 * @property string $media
 * File to send. Pass a file\_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. [More information on Sending Files »](#sending-files)</file_attach_name></file_attach_name>
 * @property string $caption
 * *Optional*. Caption of the photo to be sent, 0-1024 characters after entities parsing
 * @property string $parseMode
 * *Optional*. Mode for parsing entities in the photo caption. See [formatting options](#formatting-options) for more details.
 * @property Base\ArrayObject|MessageEntity[] $captionEntities
 * *Optional*. List of special entities that appear in the caption, which can be specified instead of *parse\_mode*
 * @property bool $showCaptionAboveMedia
 * *Optional*. Pass *True*, if the caption must be shown above the message media
 * @property bool $hasSpoiler
 * *Optional*. Pass *True* if the photo needs to be covered with a spoiler animation
 */
class InputMediaPhoto extends InputMedia
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => 'photo',
				'required' => true,
			],
			'media' => [
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
				'type' => [MessageEntity::class],
				'isArray' => true,
			],
			'show_caption_above_media' => [
				'type' => ['bool'],
			],
			'has_spoiler' => [
				'type' => ['bool'],
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

	public function getMedia(): mixed
	{
		return $this->getFieldValue('media');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setMedia(mixed $value): static
	{
		return $this->setFieldValue('media', $value);
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
	* @return Base\ArrayObject|MessageEntity[]
	*/

	public function getCaptionEntities(): mixed
	{
		return $this->getFieldValue('caption_entities');
	}

	/**
	* @param Base\ArrayObject|MessageEntity[] $value
	* @return static
	*/

	public function setCaptionEntities(mixed $value): static
	{
		return $this->setFieldValue('caption_entities', $value);
	}

	/**
	* @return bool
	*/

	public function getShowCaptionAboveMedia(): mixed
	{
		return $this->getFieldValue('show_caption_above_media');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setShowCaptionAboveMedia(mixed $value): static
	{
		return $this->setFieldValue('show_caption_above_media', $value);
	}

	/**
	* @return bool
	*/

	public function getHasSpoiler(): mixed
	{
		return $this->getFieldValue('has_spoiler');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setHasSpoiler(mixed $value): static
	{
		return $this->setFieldValue('has_spoiler', $value);
	}

}