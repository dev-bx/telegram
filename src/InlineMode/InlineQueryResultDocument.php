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
 * Represents a link to a file. By default, this file will be sent by the user with an optional caption. Alternatively, you can use *input\_message\_content* to send a message with the specified content instead of the file. Currently, only **.PDF** and **.ZIP** files can be sent using this method.
 * @property string $type
 * Type of the result, must be *document*
 * @property string $id
 * Unique identifier for this result, 1-64 bytes
 * @property string $title
 * Title for the result
 * @property string $caption
 * *Optional*. Caption of the document to be sent, 0-1024 characters after entities parsing
 * @property string $parseMode
 * *Optional*. Mode for parsing entities in the document caption. See [formatting options](#formatting-options) for more details.
 * @property Base\ArrayObject|Types\MessageEntity[] $captionEntities
 * *Optional*. List of special entities that appear in the caption, which can be specified instead of *parse\_mode*
 * @property string $documentUrl
 * A valid URL for the file
 * @property string $mimeType
 * MIME type of the content of the file, either “application/pdf” or “application/zip”
 * @property string $description
 * *Optional*. Short description of the result
 * @property Types\InlineKeyboardMarkup $replyMarkup
 * *Optional*. Inline keyboard attached to the message
 * @property InputMessageContent|InputTextMessageContent|InputLocationMessageContent|InputVenueMessageContent|InputContactMessageContent|InputInvoiceMessageContent $inputMessageContent
 * *Optional*. Content of the message to be sent instead of the file
 * @property string $thumbnailUrl
 * *Optional*. URL of the thumbnail (JPEG only) for the file
 * @property int $thumbnailWidth
 * *Optional*. Thumbnail width
 * @property int $thumbnailHeight
 * *Optional*. Thumbnail height
 */
class InlineQueryResultDocument extends InlineQueryResult
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => 'document',
				'required' => true,
			],
			'id' => [
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
			'document_url' => [
				'type' => ['string'],
				'required' => true,
			],
			'mime_type' => [
				'type' => ['string'],
				'required' => true,
			],
			'description' => [
				'type' => ['string'],
			],
			'reply_markup' => [
				'type' => [Types\InlineKeyboardMarkup::class],
			],
			'input_message_content' => [
				'type' => [InputMessageContent::class],
			],
			'thumbnail_url' => [
				'type' => ['string'],
			],
			'thumbnail_width' => [
				'type' => ['int'],
			],
			'thumbnail_height' => [
				'type' => ['int'],
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
	* @return string
	*/

	public function getDocumentUrl(): mixed
	{
		return $this->getFieldValue('document_url');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setDocumentUrl(mixed $value): static
	{
		return $this->setFieldValue('document_url', $value);
	}

	/**
	* @return string
	*/

	public function getMimeType(): mixed
	{
		return $this->getFieldValue('mime_type');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setMimeType(mixed $value): static
	{
		return $this->setFieldValue('mime_type', $value);
	}

	/**
	* @return string
	*/

	public function getDescription(): mixed
	{
		return $this->getFieldValue('description');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setDescription(mixed $value): static
	{
		return $this->setFieldValue('description', $value);
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
	* @return int
	*/

	public function getThumbnailWidth(): mixed
	{
		return $this->getFieldValue('thumbnail_width');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setThumbnailWidth(mixed $value): static
	{
		return $this->setFieldValue('thumbnail_width', $value);
	}

	/**
	* @return int
	*/

	public function getThumbnailHeight(): mixed
	{
		return $this->getFieldValue('thumbnail_height');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setThumbnailHeight(mixed $value): static
	{
		return $this->setFieldValue('thumbnail_height', $value);
	}

}