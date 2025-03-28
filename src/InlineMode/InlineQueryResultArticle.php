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
* Represents a link to an article or web page.
* @property string $type
* Type of the result, must be *article*
* @property string $id
* Unique identifier for this result, 1-64 Bytes
* @property string $title
* Title of the result
* @property InputMessageContent|InputTextMessageContent|InputLocationMessageContent|InputVenueMessageContent|InputContactMessageContent|InputInvoiceMessageContent $inputMessageContent
* Content of the message to be sent
* @property Types\InlineKeyboardMarkup $replyMarkup
* *Optional*. [Inline keyboard](/bots/features#inline-keyboards) attached to the message
* @property string $url
* *Optional*. URL of the result
* @property string $description
* *Optional*. Short description of the result
* @property string $thumbnailUrl
* *Optional*. Url of the thumbnail for the result
* @property int $thumbnailWidth
* *Optional*. Thumbnail width
* @property int $thumbnailHeight
* *Optional*. Thumbnail height
*/

class InlineQueryResultArticle extends InlineQueryResult
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => 'article',
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
			'input_message_content' => [
				'type' => [InputMessageContent::class],
				'required' => true,
			],
			'reply_markup' => [
				'type' => [Types\InlineKeyboardMarkup::class],
			],
			'url' => [
				'type' => ['string'],
			],
			'description' => [
				'type' => ['string'],
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
	* @return string
	*/

	public function getUrl(): mixed
	{
		return $this->getFieldValue('url');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setUrl(mixed $value): static
	{
		return $this->setFieldValue('url', $value);
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