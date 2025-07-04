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
 * An animated profile photo in the MPEG4 format.
 * @property string $type
 * Type of the profile photo, must be *animated*
 * @property string $animation
 * The animated profile photo. Profile photos can't be reused and can only be uploaded as a new file, so you can pass “attach://<file_attach_name>” if the photo was uploaded using multipart/form-data under <file_attach_name>. [More information on Sending Files »](#sending-files)</file_attach_name></file_attach_name>
 * @property float $mainFrameTimestamp
 * *Optional*. Timestamp in seconds of the frame that will be used as the static profile photo. Defaults to 0.0.
 */
class InputProfilePhotoAnimated extends InputProfilePhoto
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => 'animated',
				'required' => true,
			],
			'animation' => [
				'type' => ['string'],
				'required' => true,
			],
			'main_frame_timestamp' => [
				'type' => ['float'],
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

	public function getAnimation(): mixed
	{
		return $this->getFieldValue('animation');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setAnimation(mixed $value): static
	{
		return $this->setFieldValue('animation', $value);
	}

	/**
	* @return float
	*/

	public function getMainFrameTimestamp(): mixed
	{
		return $this->getFieldValue('main_frame_timestamp');
	}

	/**
	* @param float $value
	* @return static
	*/

	public function setMainFrameTimestamp(mixed $value): static
	{
		return $this->setFieldValue('main_frame_timestamp', $value);
	}

}