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
 * Describes a story area containing weather information. Currently, a story can have up to 3 weather areas.
 * @property string $type
 * Type of the area, always “weather”
 * @property float $temperature
 * Temperature, in degree Celsius
 * @property string $emoji
 * Emoji representing the weather
 * @property int $backgroundColor
 * A color of the area background in the ARGB format
 */
class StoryAreaTypeWeather extends StoryAreaType
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => 'weather',
				'required' => true,
			],
			'temperature' => [
				'type' => ['float'],
				'required' => true,
			],
			'emoji' => [
				'type' => ['string'],
				'required' => true,
			],
			'background_color' => [
				'type' => ['int'],
				'required' => true,
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

	public function getTemperature(): mixed
	{
		return $this->getFieldValue('temperature');
	}

	/**
	* @param float $value
	* @return static
	*/

	public function setTemperature(mixed $value): static
	{
		return $this->setFieldValue('temperature', $value);
	}

	/**
	* @return string
	*/

	public function getEmoji(): mixed
	{
		return $this->getFieldValue('emoji');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setEmoji(mixed $value): static
	{
		return $this->setFieldValue('emoji', $value);
	}

	/**
	* @return int
	*/

	public function getBackgroundColor(): mixed
	{
		return $this->getFieldValue('background_color');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setBackgroundColor(mixed $value): static
	{
		return $this->setFieldValue('background_color', $value);
	}

}