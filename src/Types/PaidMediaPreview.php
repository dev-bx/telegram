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
* The paid media isn't available before the payment.
* @property string $type
* Type of the paid media, always “preview”
* @property int $width
* *Optional*. Media width as defined by the sender
* @property int $height
* *Optional*. Media height as defined by the sender
* @property int $duration
* *Optional*. Duration of the media in seconds as defined by the sender
*/

class PaidMediaPreview extends PaidMedia
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => 'preview',
				'required' => true,
			],
			'width' => [
				'type' => ['int'],
			],
			'height' => [
				'type' => ['int'],
			],
			'duration' => [
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
	* @return int
	*/

	public function getWidth(): mixed
	{
		return $this->getFieldValue('width');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setWidth(mixed $value): static
	{
		return $this->setFieldValue('width', $value);
	}

	/**
	* @return int
	*/

	public function getHeight(): mixed
	{
		return $this->getFieldValue('height');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setHeight(mixed $value): static
	{
		return $this->setFieldValue('height', $value);
	}

	/**
	* @return int
	*/

	public function getDuration(): mixed
	{
		return $this->getFieldValue('duration');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setDuration(mixed $value): static
	{
		return $this->setFieldValue('duration', $value);
	}

}