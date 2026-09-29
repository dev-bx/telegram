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

namespace DevBX\Telegram\RichMessages;

use DevBX\Telegram\Base;
use DevBX\Telegram\Types;


/**
 * A block with a video, corresponding to the HTML tag `<video>`.
 * @property string $type
 * Type of the block, always “video”
 * @property Types\Video $video
 * The video
 * @property bool $hasSpoiler
 * *Optional*. *True*, if the media preview is covered by a spoiler animation
 * @property RichBlockCaption $caption
 * *Optional*. Caption of the block
 */
class RichBlockVideo extends RichBlock
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
				'type' => [Types\Video::class],
				'required' => true,
			],
			'has_spoiler' => [
				'type' => ['bool'],
			],
			'caption' => [
				'type' => [RichBlockCaption::class],
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
	* @return Types\Video
	*/

	public function getVideo(): mixed
	{
		return $this->getFieldValue('video');
	}

	/**
	* @param Types\Video $value
	* @return static
	*/

	public function setVideo(mixed $value): static
	{
		return $this->setFieldValue('video', $value);
	}

	/**
	* @return bool
	*/

	public function getHasSpoiler(): mixed
	{
		return $this->getFieldValue('has_spoiler');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setHasSpoiler(mixed $value): static
	{
		return $this->setFieldValue('has_spoiler', $value);
	}

	/**
	* @return RichBlockCaption
	*/

	public function getCaption(): mixed
	{
		return $this->getFieldValue('caption');
	}

	/**
	* @param RichBlockCaption $value
	* @return static
	*/

	public function setCaption(mixed $value): static
	{
		return $this->setFieldValue('caption', $value);
	}

}