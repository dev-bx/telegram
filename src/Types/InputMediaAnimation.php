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
 * Represents an animation file (GIF or H.264/MPEG-4 AVC video without sound) to be sent.
 * @property string $type
 * Type of the result, must be *animation*
 * @property string $media
 * File to send. Pass a file\_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. [More information on Sending Files »](#sending-files)</file_attach_name></file_attach_name>
 * @property string $thumbnail
 * *Optional*. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. [More information on Sending Files »](#sending-files)</file_attach_name></file_attach_name>
 * @property string $caption
 * *Optional*. Caption of the animation to be sent, 0-1024 characters after entities parsing
 * @property string $parseMode
 * *Optional*. Mode for parsing entities in the animation caption. See [formatting options](#formatting-options) for more details.
 * @property Base\ArrayObject|MessageEntity[] $captionEntities
 * *Optional*. List of special entities that appear in the caption, which can be specified instead of *parse\_mode*
 * @property bool $showCaptionAboveMedia
 * *Optional*. Pass *True*, if the caption must be shown above the message media
 * @property int $width
 * *Optional*. Animation width
 * @property int $height
 * *Optional*. Animation height
 * @property int $duration
 * *Optional*. Animation duration in seconds
 * @property bool $hasSpoiler
 * *Optional*. Pass *True* if the animation needs to be covered with a spoiler animation
 */
class InputMediaAnimation extends InputMedia
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => 'animation',
				'required' => true,
			],
			'media' => [
				'type' => ['string'],
				'required' => true,
			],
			'thumbnail' => [
				'type' => ['string'],
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
			'width' => [
				'type' => ['int'],
			],
			'height' => [
				'type' => ['int'],
			],
			'duration' => [
				'type' => ['int'],
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

	public function getThumbnail(): mixed
	{
		return $this->getFieldValue('thumbnail');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setThumbnail(mixed $value): static
	{
		return $this->setFieldValue('thumbnail', $value);
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
	* @return int
	*/

	public function getWidth(): mixed
	{
		return $this->getFieldValue('width');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setWidth(mixed $value): static
	{
		return $this->setFieldValue('width', $value);
	}

	/**
	* @return int
	*/

	public function getHeight(): mixed
	{
		return $this->getFieldValue('height');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setHeight(mixed $value): static
	{
		return $this->setFieldValue('height', $value);
	}

	/**
	* @return int
	*/

	public function getDuration(): mixed
	{
		return $this->getFieldValue('duration');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setDuration(mixed $value): static
	{
		return $this->setFieldValue('duration', $value);
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