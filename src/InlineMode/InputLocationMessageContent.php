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


/**
 * Represents the [content](#inputmessagecontent) of a location message to be sent as the result of an inline query.
 * @property float $latitude
 * Latitude of the location in degrees
 * @property float $longitude
 * Longitude of the location in degrees
 * @property float $horizontalAccuracy
 * *Optional*. The radius of uncertainty for the location, measured in meters; 0-1500
 * @property int $livePeriod
 * *Optional*. Period in seconds during which the location can be updated, should be between 60 and 86400, or 0x7FFFFFFF for live locations that can be edited indefinitely.
 * @property int $heading
 * *Optional*. For live locations, a direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.
 * @property int $proximityAlertRadius
 * *Optional*. For live locations, a maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified.
 */
class InputLocationMessageContent extends InputMessageContent
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