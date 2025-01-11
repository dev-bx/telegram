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
* The paid media is a photo.
* @property string $type
* Type of the paid media, always “photo”
* @property Base\ArrayObject|PhotoSize[] $photo
* The photo
*/

class PaidMediaPhoto extends PaidMedia
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => '��photo�',
				'required' => true,
			],
			'photo' => [
				'type' => [PhotoSize::class],
				'isArray' => true,
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

}