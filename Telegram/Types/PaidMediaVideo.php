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
* The paid media is a video.
* @property string $type
* Type of the paid media, always “video”
* @property Video $video
* The video
*/

class PaidMediaVideo extends PaidMedia
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => '��video�',
				'required' => true,
			],
			'video' => [
				'type' => [Video::class],
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
	* @return Video
	*/

	public function getVideo(): mixed
	{
		return $this->getFieldValue('video');
	}

	/**
	* @param Video $value
	* @return static
	*/

	public function setVideo(mixed $value): static
	{
		return $this->setFieldValue('video', $value);
	}

}