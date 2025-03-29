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
 * Represents a location on a map. By default, the location will be sent by the user. Alternatively, you can use *input\_message\_content* to send a message with the specified content instead of the location.
 * @property string $type
 * Type of the result, must be *location*
 * @property string $id
 * Unique identifier for this result, 1-64 Bytes
 * @property float $latitude
 * Location latitude in degrees
 * @property float $longitude
 * Location longitude in degrees
 * @property string $title
 * Location title
 * @property float $horizontalAccuracy
 * *Optional*. The radius of uncertainty for the location, measured in meters; 0-1500
 * @property int $livePeriod
 * *Optional*. Period in seconds during which the location can be updated, should be between 60 and 86400, or 0x7FFFFFFF for live locations that can be edited indefinitely.
 * @property int $heading
 * *Optional*. For live locations, a direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.
 * @property int $proximityAlertRadius
 * *Optional*. For live locations, a maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified.
 * @property Types\InlineKeyboardMarkup $replyMarkup
 * *Optional*. [Inline keyboard](/bots/features#inline-keyboards) attached to the message
 * @property InputMessageContent|InputTextMessageContent|InputLocationMessageContent|InputVenueMessageContent|InputContactMessageContent|InputInvoiceMessageContent $inputMessageContent
 * *Optional*. Content of the message to be sent instead of the location
 * @property string $thumbnailUrl
 * *Optional*. Url of the thumbnail for the result
 * @property int $thumbnailWidth
 * *Optional*. Thumbnail width
 * @property int $thumbnailHeight
 * *Optional*. Thumbnail height
 */
class InlineQueryResultLocation extends InlineQueryResult
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => 'location',
				'required' => true,
			],
			'id' => [
				'type' => ['string'],
				'required' => true,
			],
			'latitude' => [
				'type' => ['float'],
				'required' => true,
			],
			'longitude' => [
				'type' => ['float'],
				'required' => true,
			],
			'title' => [
				'type' => ['string'],
				'required' => true,
			],
			'horizontal_accuracy' => [
				'type' => ['float'],
			],
			'live_period' => [
				'type' => ['int'],
			],
			'heading' => [
				'type' => ['int'],
			],
			'proximity_alert_radius' => [
				'type' => ['int'],
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
	* @return float
	*/

	public function getLatitude(): mixed
	{
		return $this->getFieldValue('latitude');
	}

	/**
	* @param float $value
	* @return static
	*/

	public function setLatitude(mixed $value): static
	{
		return $this->setFieldValue('latitude', $value);
	}

	/**
	* @return float
	*/

	public function getLongitude(): mixed
	{
		return $this->getFieldValue('longitude');
	}

	/**
	* @param float $value
	* @return static
	*/

	public function setLongitude(mixed $value): static
	{
		return $this->setFieldValue('longitude', $value);
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
	* @return float
	*/

	public function getHorizontalAccuracy(): mixed
	{
		return $this->getFieldValue('horizontal_accuracy');
	}

	/**
	* @param float $value
	* @return static
	*/

	public function setHorizontalAccuracy(mixed $value): static
	{
		return $this->setFieldValue('horizontal_accuracy', $value);
	}

	/**
	* @return int
	*/

	public function getLivePeriod(): mixed
	{
		return $this->getFieldValue('live_period');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setLivePeriod(mixed $value): static
	{
		return $this->setFieldValue('live_period', $value);
	}

	/**
	* @return int
	*/

	public function getHeading(): mixed
	{
		return $this->getFieldValue('heading');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setHeading(mixed $value): static
	{
		return $this->setFieldValue('heading', $value);
	}

	/**
	* @return int
	*/

	public function getProximityAlertRadius(): mixed
	{
		return $this->getFieldValue('proximity_alert_radius');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setProximityAlertRadius(mixed $value): static
	{
		return $this->setFieldValue('proximity_alert_radius', $value);
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