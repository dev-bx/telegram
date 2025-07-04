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


/**
 * This object describes a sticker to be added to a sticker set.
 * @property string $sticker
 * The added sticker. Pass a *file\_id* as a String to send a file that already exists on the Telegram servers, pass an HTTP URL as a String for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new file using multipart/form-data under <file_attach_name> name. Animated and video stickers can't be uploaded via HTTP URL. [More information on Sending Files »](#sending-files)</file_attach_name></file_attach_name>
 * @property string $format
 * Format of the added sticker, must be one of “static” for a **.WEBP** or **.PNG** image, “animated” for a **.TGS** animation, “video” for a **.WEBM** video
 * @property string[] $emojiList
 * List of 1-20 emoji associated with the sticker
 * @property MaskPosition $maskPosition
 * *Optional*. Position where the mask should be placed on faces. For “mask” stickers only.
 * @property string[] $keywords
 * *Optional*. List of 0-20 search keywords for the sticker with total length of up to 64 characters. For “regular” and “custom\_emoji” stickers only.
 */
class InputSticker extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'sticker' => [
				'type' => ['string'],
				'required' => true,
			],
			'format' => [
				'type' => ['string'],
				'required' => true,
			],
			'emoji_list' => [
				'type' => ['string'],
				'isArray' => true,
				'required' => true,
			],
			'mask_position' => [
				'type' => [MaskPosition::class],
			],
			'keywords' => [
				'type' => ['string'],
				'isArray' => true,
			],
		];
	}
	/**
	* @return string
	*/

	public function getSticker(): mixed
	{
		return $this->getFieldValue('sticker');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setSticker(mixed $value): static
	{
		return $this->setFieldValue('sticker', $value);
	}

	/**
	* @return string
	*/

	public function getFormat(): mixed
	{
		return $this->getFieldValue('format');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setFormat(mixed $value): static
	{
		return $this->setFieldValue('format', $value);
	}

	/**
	* @return string[]
	*/

	public function getEmojiList(): mixed
	{
		return $this->getFieldValue('emoji_list');
	}

	/**
	* @param string[] $value
	* @return static
	*/

	public function setEmojiList(mixed $value): static
	{
		return $this->setFieldValue('emoji_list', $value);
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
	* @return string[]
	*/

	public function getKeywords(): mixed
	{
		return $this->getFieldValue('keywords');
	}

	/**
	* @param string[] $value
	* @return static
	*/

	public function setKeywords(mixed $value): static
	{
		return $this->setFieldValue('keywords', $value);
	}

}