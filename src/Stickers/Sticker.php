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

namespace DevBX\Telegram\Stickers;

use DevBX\Telegram\Base;
use DevBX\Telegram\Types;


/**
* This object represents a sticker.
* @property string $fileId
* Identifier for this file, which can be used to download or reuse the file
* @property string $fileUniqueId
* Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
* @property string $type
* Type of the sticker, currently one of “regular”, “mask”, “custom\_emoji”. The type of the sticker is independent from its format, which is determined by the fields *is\_animated* and *is\_video*.
* @property int $width
* Sticker width
* @property int $height
* Sticker height
* @property bool $isAnimated
* *True*, if the sticker is [animated](https://telegram.org/blog/animated-stickers)
* @property bool $isVideo
* *True*, if the sticker is a [video sticker](https://telegram.org/blog/video-stickers-better-reactions)
* @property Types\PhotoSize $thumbnail
* *Optional*. Sticker thumbnail in the .WEBP or .JPG format
* @property string $emoji
* *Optional*. Emoji associated with the sticker
* @property string $setName
* *Optional*. Name of the sticker set to which the sticker belongs
* @property Types\File $premiumAnimation
* *Optional*. For premium regular stickers, premium animation for the sticker
* @property MaskPosition $maskPosition
* *Optional*. For mask stickers, the position where the mask should be placed
* @property string $customEmojiId
* *Optional*. For custom emoji stickers, unique identifier of the custom emoji
* @property bool $needsRepainting
* *Optional*. *True*, if the sticker must be repainted to a text color in messages, the color of the Telegram Premium badge in emoji status, white color on chat photos, or another appropriate color in other places
* @property int $fileSize
* *Optional*. File size in bytes
*/

class Sticker extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'file_id' => [
				'type' => ['string'],
				'required' => true,
			],
			'file_unique_id' => [
				'type' => ['string'],
				'required' => true,
			],
			'type' => [
				'type' => ['string'],
				'required' => true,
			],
			'width' => [
				'type' => ['int'],
				'required' => true,
			],
			'height' => [
				'type' => ['int'],
				'required' => true,
			],
			'is_animated' => [
				'type' => ['bool'],
				'required' => true,
			],
			'is_video' => [
				'type' => ['bool'],
				'required' => true,
			],
			'thumbnail' => [
				'type' => [Types\PhotoSize::class],
			],
			'emoji' => [
				'type' => ['string'],
			],
			'set_name' => [
				'type' => ['string'],
			],
			'premium_animation' => [
				'type' => [Types\File::class],
			],
			'mask_position' => [
				'type' => [MaskPosition::class],
			],
			'custom_emoji_id' => [
				'type' => ['string'],
			],
			'needs_repainting' => [
				'type' => ['bool'],
			],
			'file_size' => [
				'type' => ['int'],
			],
		];
	}
	/**
	* @return string
	*/

	public function getFileId(): mixed
	{
		return $this->getFieldValue('file_id');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setFileId(mixed $value): static
	{
		return $this->setFieldValue('file_id', $value);
	}

	/**
	* @return string
	*/

	public function getFileUniqueId(): mixed
	{
		return $this->getFieldValue('file_unique_id');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setFileUniqueId(mixed $value): static
	{
		return $this->setFieldValue('file_unique_id', $value);
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
	* @return bool
	*/

	public function getIsAnimated(): mixed
	{
		return $this->getFieldValue('is_animated');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setIsAnimated(mixed $value): static
	{
		return $this->setFieldValue('is_animated', $value);
	}

	/**
	* @return bool
	*/

	public function getIsVideo(): mixed
	{
		return $this->getFieldValue('is_video');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setIsVideo(mixed $value): static
	{
		return $this->setFieldValue('is_video', $value);
	}

	/**
	* @return Types\PhotoSize
	*/

	public function getThumbnail(): mixed
	{
		return $this->getFieldValue('thumbnail');
	}

	/**
	* @param Types\PhotoSize $value
	* @return static
	*/

	public function setThumbnail(mixed $value): static
	{
		return $this->setFieldValue('thumbnail', $value);
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
	* @return string
	*/

	public function getSetName(): mixed
	{
		return $this->getFieldValue('set_name');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setSetName(mixed $value): static
	{
		return $this->setFieldValue('set_name', $value);
	}

	/**
	* @return Types\File
	*/

	public function getPremiumAnimation(): mixed
	{
		return $this->getFieldValue('premium_animation');
	}

	/**
	* @param Types\File $value
	* @return static
	*/

	public function setPremiumAnimation(mixed $value): static
	{
		return $this->setFieldValue('premium_animation', $value);
	}

	/**
	* @return MaskPosition
	*/

	public function getMaskPosition(): mixed
	{
		return $this->getFieldValue('mask_position');
	}

	/**
	* @param MaskPosition $value
	* @return static
	*/

	public function setMaskPosition(mixed $value): static
	{
		return $this->setFieldValue('mask_position', $value);
	}

	/**
	* @return string
	*/

	public function getCustomEmojiId(): mixed
	{
		return $this->getFieldValue('custom_emoji_id');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setCustomEmojiId(mixed $value): static
	{
		return $this->setFieldValue('custom_emoji_id', $value);
	}

	/**
	* @return bool
	*/

	public function getNeedsRepainting(): mixed
	{
		return $this->getFieldValue('needs_repainting');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setNeedsRepainting(mixed $value): static
	{
		return $this->setFieldValue('needs_repainting', $value);
	}

	/**
	* @return int
	*/

	public function getFileSize(): mixed
	{
		return $this->getFieldValue('file_size');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setFileSize(mixed $value): static
	{
		return $this->setFieldValue('file_size', $value);
	}

}