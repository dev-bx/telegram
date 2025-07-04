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
 * Describes a video to post as a story.
 * @property string $type
 * Type of the content, must be *video*
 * @property string $video
 * The video to post as a story. The video must be of the size 720x1280, streamable, encoded with H.265 codec, with key frames added each second in the MPEG4 format, and must not exceed 30 MB. The video can't be reused and can only be uploaded as a new file, so you can pass “attach://<file_attach_name>” if the video was uploaded using multipart/form-data under <file_attach_name>. [More information on Sending Files »](#sending-files)</file_attach_name></file_attach_name>
 * @property float $duration
 * *Optional*. Precise duration of the video in seconds; 0-60
 * @property float $coverFrameTimestamp
 * *Optional*. Timestamp in seconds of the frame that will be used as the static cover for the story. Defaults to 0.0.
 * @property bool $isAnimation
 * *Optional*. Pass *True* if the video has no sound
 */
class InputStoryContentVideo extends InputStoryContent
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => 'video',
				'required' => true,
			],
			'video' => [
				'type' => ['string'],
				'required' => true,
			],
			'duration' => [
				'type' => ['float'],
			],
			'cover_frame_timestamp' => [
				'type' => ['float'],
			],
			'is_animation' => [
				'type' => ['bool'],
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

	public function getVideo(): mixed
	{
		return $this->getFieldValue('video');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setVideo(mixed $value): static
	{
		return $this->setFieldValue('video', $value);
	}

	/**
	* @return float
	*/

	public function getDuration(): mixed
	{
		return $this->getFieldValue('duration');
	}

	/**
	* @param float $value
	* @return static
	*/

	public function setDuration(mixed $value): static
	{
		return $this->setFieldValue('duration', $value);
	}

	/**
	* @return float
	*/

	public function getCoverFrameTimestamp(): mixed
	{
		return $this->getFieldValue('cover_frame_timestamp');
	}

	/**
	* @param float $value
	* @return static
	*/

	public function setCoverFrameTimestamp(mixed $value): static
	{
		return $this->setFieldValue('cover_frame_timestamp', $value);
	}

	/**
	* @return bool
	*/

	public function getIsAnimation(): mixed
	{
		return $this->getFieldValue('is_animation');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setIsAnimation(mixed $value): static
	{
		return $this->setFieldValue('is_animation', $value);
	}

}