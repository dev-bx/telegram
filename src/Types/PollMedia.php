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
use DevBX\Telegram\Stickers;


/**
 * At most **one** of the optional fields can be present in any given object.
 * @property Animation $animation
 * *Optional*. Media is an animation, information about the animation
 * @property Audio $audio
 * *Optional*. Media is an audio file, information about the file; currently, can't be received in a poll option
 * @property Document $document
 * *Optional*. Media is a general file, information about the file; currently, can't be received in a poll option
 * @property Link $link
 * *Optional*. The HTTP link attached to the poll option
 * @property LivePhoto $livePhoto
 * *Optional*. Media is a live photo, information about the live photo
 * @property Location $location
 * *Optional*. Media is a shared location, information about the location
 * @property Base\ArrayObject|PhotoSize[] $photo
 * *Optional*. Media is a photo, available sizes of the photo
 * @property Stickers\Sticker $sticker
 * *Optional*. Media is a sticker, information about the sticker; currently, for poll options only
 * @property Venue $venue
 * *Optional*. Media is a venue, information about the venue
 * @property Video $video
 * *Optional*. Media is a video, information about the video
 */
class PollMedia extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'animation' => [
				'type' => [Animation::class],
			],
			'audio' => [
				'type' => [Audio::class],
			],
			'document' => [
				'type' => [Document::class],
			],
			'link' => [
				'type' => [Link::class],
			],
			'live_photo' => [
				'type' => [LivePhoto::class],
			],
			'location' => [
				'type' => [Location::class],
			],
			'photo' => [
				'type' => [PhotoSize::class],
				'isArray' => true,
			],
			'sticker' => [
				'type' => [Stickers\Sticker::class],
			],
			'venue' => [
				'type' => [Venue::class],
			],
			'video' => [
				'type' => [Video::class],
			],
		];
	}
	/**
	* @return Animation
	*/

	public function getAnimation(): mixed
	{
		return $this->getFieldValue('animation');
	}

	/**
	* @param Animation $value
	* @return static
	*/

	public function setAnimation(mixed $value): static
	{
		return $this->setFieldValue('animation', $value);
	}

	/**
	* @return Audio
	*/

	public function getAudio(): mixed
	{
		return $this->getFieldValue('audio');
	}

	/**
	* @param Audio $value
	* @return static
	*/

	public function setAudio(mixed $value): static
	{
		return $this->setFieldValue('audio', $value);
	}

	/**
	* @return Document
	*/

	public function getDocument(): mixed
	{
		return $this->getFieldValue('document');
	}

	/**
	* @param Document $value
	* @return static
	*/

	public function setDocument(mixed $value): static
	{
		return $this->setFieldValue('document', $value);
	}

	/**
	* @return Link
	*/

	public function getLink(): mixed
	{
		return $this->getFieldValue('link');
	}

	/**
	* @param Link $value
	* @return static
	*/

	public function setLink(mixed $value): static
	{
		return $this->setFieldValue('link', $value);
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
	* @return Base\ArrayObject|PhotoSize[]
	*/

	public function getPhoto(): mixed
	{
		return $this->getFieldValue('photo');
	}

	/**
	* @param Base\ArrayObject|PhotoSize[] $value
	* @return static
	*/

	public function setPhoto(mixed $value): static
	{
		return $this->setFieldValue('photo', $value);
	}

	/**
	* @return Stickers\Sticker
	*/

	public function getSticker(): mixed
	{
		return $this->getFieldValue('sticker');
	}

	/**
	* @param Stickers\Sticker $value
	* @return static
	*/

	public function setSticker(mixed $value): static
	{
		return $this->setFieldValue('sticker', $value);
	}

	/**
	* @return Venue
	*/

	public function getVenue(): mixed
	{
		return $this->getFieldValue('venue');
	}

	/**
	* @param Venue $value
	* @return static
	*/

	public function setVenue(mixed $value): static
	{
		return $this->setFieldValue('venue', $value);
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