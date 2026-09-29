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
 * Represents a venue to be sent.
 * @property string $type
 * Type of the media, must be *venue*
 * @property float $latitude
 * Latitude of the location
 * @property float $longitude
 * Longitude of the location
 * @property string $title
 * Name of the venue
 * @property string $address
 * Address of the venue
 * @property string $foursquareId
 * *Optional*. Foursquare identifier of the venue
 * @property string $foursquareType
 * *Optional*. Foursquare type of the venue, if known. (For example, “arts\_entertainment/default”, “arts\_entertainment/aquarium” or “food/icecream”.)
 * @property string $googlePlaceId
 * *Optional*. Google Places identifier of the venue
 * @property string $googlePlaceType
 * *Optional*. Google Places type of the venue. (See [supported types](https://developers.google.com/places/web-service/supported_types).)
 */
class InputMediaVenue extends InputPollOptionMedia
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => 'venue',
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

}