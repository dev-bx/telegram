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
 * This object represents a venue.
 * @property Location $location
 * Venue location. Can't be a live location
 * @property string $title
 * Name of the venue
 * @property string $address
 * Address of the venue
 * @property string $foursquareId
 * *Optional*. Foursquare identifier of the venue
 * @property string $foursquareType
 * *Optional*. Foursquare type of the venue. (For example, “arts\_entertainment/default”, “arts\_entertainment/aquarium” or “food/icecream”.)
 * @property string $googlePlaceId
 * *Optional*. Google Places identifier of the venue
 * @property string $googlePlaceType
 * *Optional*. Google Places type of the venue. (See [supported types](https://developers.google.com/places/web-service/supported_types).)
 */
class Venue extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'location' => [
				'type' => [Location::class],
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
	* @return Location
	*/

	public function getLocation(): mixed
	{
		return $this->getFieldValue('location');
	}

	/**
	* @param Location $value
	* @return static
	*/

	public function setLocation(mixed $value): static
	{
		return $this->setFieldValue('location', $value);
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