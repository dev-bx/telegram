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
* This object represents a point on the map.
* @property float $latitude
* Latitude as defined by the sender
* @property float $longitude
* Longitude as defined by the sender
* @property float $horizontalAccuracy
* *Optional*. The radius of uncertainty for the location, measured in meters; 0-1500
* @property int $livePeriod
* *Optional*. Time relative to the message sending date, during which the location can be updated; in seconds. For active live locations only.
* @property int $heading
* *Optional*. The direction in which user is moving, in degrees; 1-360. For active live locations only.
* @property int $proximityAlertRadius
* *Optional*. The maximum distance for proximity alerts about approaching another chat member, in meters. For sent live locations only.
*/

class Location extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'latitude' => [
				'type' => ['float'],
				'required' => true,
			],
			'longitude' => [
				'type' => ['float'],
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
		];
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

}