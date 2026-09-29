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
 * The paid media is a [live photo](#livephoto).
 * @property string $type
 * Type of the paid media, always “live\_photo”
 * @property LivePhoto $livePhoto
 * The photo
 */
class PaidMediaLivePhoto extends PaidMedia
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => 'live_photo',
				'required' => true,
			],
			'live_photo' => [
				'type' => [LivePhoto::class],
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
	* @return LivePhoto
	*/

	public function getLivePhoto(): mixed
	{
		return $this->getFieldValue('live_photo');
	}

	/**
	* @param LivePhoto $value
	* @return static
	*/

	public function setLivePhoto(mixed $value): static
	{
		return $this->setFieldValue('live_photo', $value);
	}

}