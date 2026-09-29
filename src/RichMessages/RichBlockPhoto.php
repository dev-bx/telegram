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
 * A block with a photo, corresponding to the HTML tag `<img>`.
 * @property string $type
 * Type of the block, always “photo”
 * @property Base\ArrayObject|Types\PhotoSize[] $photo
 * Available sizes of the photo
 * @property bool $hasSpoiler
 * *Optional*. *True*, if the media preview is covered by a spoiler animation
 * @property RichBlockCaption $caption
 * *Optional*. Caption of the block
 */
class RichBlockPhoto extends RichBlock
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => 'photo',
				'required' => true,
			],
			'photo' => [
				'type' => [Types\PhotoSize::class],
				'isArray' => true,
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
	* @return Base\ArrayObject|Types\PhotoSize[]
	*/

	public function getPhoto(): mixed
	{
		return $this->getFieldValue('photo');
	}

	/**
	* @param Base\ArrayObject|Types\PhotoSize[] $value
	* @return static
	*/

	public function setPhoto(mixed $value): static
	{
		return $this->setFieldValue('photo', $value);
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