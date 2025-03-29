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
 * This object represents a sticker set.
 * @property string $name
 * Sticker set name
 * @property string $title
 * Sticker set title
 * @property string $stickerType
 * Type of stickers in the set, currently one of “regular”, “mask”, “custom\_emoji”
 * @property Base\ArrayObject|Sticker[] $stickers
 * List of all set stickers
 * @property Types\PhotoSize $thumbnail
 * *Optional*. Sticker set thumbnail in the .WEBP, .TGS, or .WEBM format
 */
class StickerSet extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'name' => [
				'type' => ['string'],
				'required' => true,
			],
			'title' => [
				'type' => ['string'],
				'required' => true,
			],
			'sticker_type' => [
				'type' => ['string'],
				'required' => true,
			],
			'stickers' => [
				'type' => [Sticker::class],
				'isArray' => true,
				'required' => true,
			],
			'thumbnail' => [
				'type' => [Types\PhotoSize::class],
			],
		];
	}
	/**
	* @return string
	*/

	public function getName(): mixed
	{
		return $this->getFieldValue('name');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setName(mixed $value): static
	{
		return $this->setFieldValue('name', $value);
	}

	/**
	* @return string
	*/

	public function getTitle(): mixed
	{
		return $this->getFieldValue('title');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setTitle(mixed $value): static
	{
		return $this->setFieldValue('title', $value);
	}

	/**
	* @return string
	*/

	public function getStickerType(): mixed
	{
		return $this->getFieldValue('sticker_type');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setStickerType(mixed $value): static
	{
		return $this->setFieldValue('sticker_type', $value);
	}

	/**
	* @return Base\ArrayObject|Sticker[]
	*/

	public function getStickers(): mixed
	{
		return $this->getFieldValue('stickers');
	}

	/**
	* @param Base\ArrayObject|Sticker[] $value
	* @return static
	*/

	public function setStickers(mixed $value): static
	{
		return $this->setFieldValue('stickers', $value);
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

}