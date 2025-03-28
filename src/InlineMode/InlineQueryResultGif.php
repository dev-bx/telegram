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
* Represents a link to an animated GIF file. By default, this animated GIF file will be sent by the user with optional caption. Alternatively, you can use *input\_message\_content* to send a message with the specified content instead of the animation.
* @property string $type
* Type of the result, must be *gif*
* @property string $id
* Unique identifier for this result, 1-64 bytes
* @property string $gifUrl
* A valid URL for the GIF file
* @property int $gifWidth
* *Optional*. Width of the GIF
* @property int $gifHeight
* *Optional*. Height of the GIF
* @property int $gifDuration
* *Optional*. Duration of the GIF in seconds
* @property string $thumbnailUrl
* URL of the static (JPEG or GIF) or animated (MPEG4) thumbnail for the result
* @property string $thumbnailMimeType
* *Optional*. MIME type of the thumbnail, must be one of “image/jpeg”, “image/gif”, or “video/mp4”. Defaults to “image/jpeg”
* @property string $title
* *Optional*. Title for the result
* @property string $caption
* *Optional*. Caption of the GIF file to be sent, 0-1024 characters after entities parsing
* @property string $parseMode
* *Optional*. Mode for parsing entities in the caption. See [formatting options](#formatting-options) for more details.
* @property Base\ArrayObject|Types\MessageEntity[] $captionEntities
* *Optional*. List of special entities that appear in the caption, which can be specified instead of *parse\_mode*
* @property bool $showCaptionAboveMedia
* *Optional*. Pass *True*, if the caption must be shown above the message media
* @property Types\InlineKeyboardMarkup $replyMarkup
* *Optional*. [Inline keyboard](/bots/features#inline-keyboards) attached to the message
* @property InputMessageContent|InputTextMessageContent|InputLocationMessageContent|InputVenueMessageContent|InputContactMessageContent|InputInvoiceMessageContent $inputMessageContent
* *Optional*. Content of the message to be sent instead of the GIF animation
*/

class InlineQueryResultGif extends InlineQueryResult
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => 'gif',
				'required' => true,
			],
			'id' => [
				'type' => ['string'],
				'required' => true,
			],
			'gif_url' => [
				'type' => ['string'],
				'required' => true,
			],
			'gif_width' => [
				'type' => ['int'],
			],
			'gif_height' => [
				'type' => ['int'],
			],
			'gif_duration' => [
				'type' => ['int'],
			],
			'thumbnail_url' => [
				'type' => ['string'],
				'required' => true,
			],
			'thumbnail_mime_type' => [
				'type' => ['string'],
			],
			'title' => [
				'type' => ['string'],
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
			'show_caption_above_media' => [
				'type' => ['bool'],
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

	public function getGifUrl(): mixed
	{
		return $this->getFieldValue('gif_url');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setGifUrl(mixed $value): static
	{
		return $this->setFieldValue('gif_url', $value);
	}

	/**
	* @return int
	*/

	public function getGifWidth(): mixed
	{
		return $this->getFieldValue('gif_width');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setGifWidth(mixed $value): static
	{
		return $this->setFieldValue('gif_width', $value);
	}

	/**
	* @return int
	*/

	public function getGifHeight(): mixed
	{
		return $this->getFieldValue('gif_height');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setGifHeight(mixed $value): static
	{
		return $this->setFieldValue('gif_height', $value);
	}

	/**
	* @return int
	*/

	public function getGifDuration(): mixed
	{
		return $this->getFieldValue('gif_duration');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setGifDuration(mixed $value): static
	{
		return $this->setFieldValue('gif_duration', $value);
	}

	/**
	* @return string
	*/

	public function getThumbnailUrl(): mixed
	{
		return $this->getFieldValue('thumbnail_url');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setThumbnailUrl(mixed $value): static
	{
		return $this->setFieldValue('thumbnail_url', $value);
	}

	/**
	* @return string
	*/

	public function getThumbnailMimeType(): mixed
	{
		return $this->getFieldValue('thumbnail_mime_type');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setThumbnailMimeType(mixed $value): static
	{
		return $this->setFieldValue('thumbnail_mime_type', $value);
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
	* @return InputMessageContent|InputTextMessageContent|InputLocationMessageContent|InputVenueMessageContent|InputContactMessageContent|InputInvoiceMessageContent
	*/

	public function getInputMessageContent(): mixed
	{
		return $this->getFieldValue('input_message_content');
	}

	/**
	* @param InputMessageContent|InputTextMessageContent|InputLocationMessageContent|InputVenueMessageContent|InputContactMessageContent|InputInvoiceMessageContent $value
	* @return static
	*/

	public function setInputMessageContent(mixed $value): static
	{
		return $this->setFieldValue('input_message_content', $value);
	}

}