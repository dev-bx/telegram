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
* Represents a venue. By default, the venue will be sent by the user. Alternatively, you can use *input\_message\_content* to send a message with the specified content instead of the venue.
* @property string $type
* Type of the result, must be *venue*
* @property string $id
* Unique identifier for this result, 1-64 Bytes
* @property float $latitude
* Latitude of the venue location in degrees
* @property float $longitude
* Longitude of the venue location in degrees
* @property string $title
* Title of the venue
* @property string $address
* Address of the venue
* @property string $foursquareId
* *Optional*. Foursquare identifier of the venue if known
* @property string $foursquareType
* *Optional*. Foursquare type of the venue, if known. (For example, “arts\_entertainment/default”, “arts\_entertainment/aquarium” or “food/icecream”.)
* @property string $googlePlaceId
* *Optional*. Google Places identifier of the venue
* @property string $googlePlaceType
* *Optional*. Google Places type of the venue. (See [supported types](https://developers.google.com/places/web-service/supported_types).)
* @property Types\InlineKeyboardMarkup $replyMarkup
* *Optional*. [Inline keyboard](/bots/features#inline-keyboards) attached to the message
* @property InputMessageContent|InputTextMessageContent|InputLocationMessageContent|InputVenueMessageContent|InputContactMessageContent|InputInvoiceMessageContent $inputMessageContent
* *Optional*. Content of the message to be sent instead of the venue
* @property string $thumbnailUrl
* *Optional*. Url of the thumbnail for the result
* @property int $thumbnailWidth
* *Optional*. Thumbnail width
* @property int $thumbnailHeight
* *Optional*. Thumbnail height
*/

class InlineQueryResultVenue extends InlineQueryResult
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => 'venue',
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
			'address' => [
				'type' => ['string'],
				'required' => true,
			],
			'foursquare_id' => [
				'type' => ['string'],
			],
			'foursquare_type' => [
				'type' => ['string'],
			],
			'google_place_id' => [
				'type' => ['string'],
			],
			'google_place_type' => [
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
	* @return string
	*/

	public function getAddress(): mixed
	{
		return $this->getFieldValue('address');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setAddress(mixed $value): static
	{
		return $this->setFieldValue('address', $value);
	}

	/**
	* @return string
	*/

	public function getFoursquareId(): mixed
	{
		return $this->getFieldValue('foursquare_id');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setFoursquareId(mixed $value): static
	{
		return $this->setFieldValue('foursquare_id', $value);
	}

	/**
	* @return string
	*/

	public function getFoursquareType(): mixed
	{
		return $this->getFieldValue('foursquare_type');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setFoursquareType(mixed $value): static
	{
		return $this->setFieldValue('foursquare_type', $value);
	}

	/**
	* @return string
	*/

	public function getGooglePlaceId(): mixed
	{
		return $this->getFieldValue('google_place_id');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setGooglePlaceId(mixed $value): static
	{
		return $this->setFieldValue('google_place_id', $value);
	}

	/**
	* @return string
	*/

	public function getGooglePlaceType(): mixed
	{
		return $this->getFieldValue('google_place_type');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setGooglePlaceType(mixed $value): static
	{
		return $this->setFieldValue('google_place_type', $value);
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