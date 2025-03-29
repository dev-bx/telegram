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
 * The paid media to send is a video.
 * @property string $type
 * Type of the media, must be *video*
 * @property string $media
 * File to send. Pass a file\_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. [More information on Sending Files »](#sending-files)</file_attach_name></file_attach_name>
 * @property string $thumbnail
 * *Optional*. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. [More information on Sending Files »](#sending-files)</file_attach_name></file_attach_name>
 * @property string $cover
 * *Optional*. Cover for the video in the message. Pass a file\_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. [More information on Sending Files »](#sending-files)</file_attach_name></file_attach_name>
 * @property int $startTimestamp
 * *Optional*. Start timestamp for the video in the message
 * @property int $width
 * *Optional*. Video width
 * @property int $height
 * *Optional*. Video height
 * @property int $duration
 * *Optional*. Video duration in seconds
 * @property bool $supportsStreaming
 * *Optional*. Pass *True* if the uploaded video is suitable for streaming
 */
class InputPaidMediaVideo extends InputPaidMedia
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => 'video',
				'required' => true,
			],
			'media' => [
				'type' => ['string'],
				'required' => true,
			],
			'thumbnail' => [
				'type' => ['string'],
			],
			'cover' => [
				'type' => ['string'],
			],
			'start_timestamp' => [
				'type' => ['int'],
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
			'supports_streaming' => [
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

	public function getMedia(): mixed
	{
		return $this->getFieldValue('media');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setMedia(mixed $value): static
	{
		return $this->setFieldValue('media', $value);
	}

	/**
	* @return string
	*/

	public function getThumbnail(): mixed
	{
		return $this->getFieldValue('thumbnail');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setThumbnail(mixed $value): static
	{
		return $this->setFieldValue('thumbnail', $value);
	}

	/**
	* @return string
	*/

	public function getCover(): mixed
	{
		return $this->getFieldValue('cover');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setCover(mixed $value): static
	{
		return $this->setFieldValue('cover', $value);
	}

	/**
	* @return int
	*/

	public function getStartTimestamp(): mixed
	{
		return $this->getFieldValue('start_timestamp');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setStartTimestamp(mixed $value): static
	{
		return $this->setFieldValue('start_timestamp', $value);
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

	/**
	* @return bool
	*/

	public function getSupportsStreaming(): mixed
	{
		return $this->getFieldValue('supports_streaming');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setSupportsStreaming(mixed $value): static
	{
		return $this->setFieldValue('supports_streaming', $value);
	}

}