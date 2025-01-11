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
* The background is a wallpaper in the JPEG format.
* @property string $type
* Type of the background, always “wallpaper”
* @property Document $document
* Document with the wallpaper
* @property int $darkThemeDimming
* Dimming of the background in dark themes, as a percentage; 0-100
* @property bool $isBlurred
* *Optional*. *True*, if the wallpaper is downscaled to fit in a 450x450 square and then box-blurred with radius 12
* @property bool $isMoving
* *Optional*. *True*, if the background moves slightly when the device is tilted
*/

class BackgroundTypeWallpaper extends BackgroundType
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => '��wallpaper�',
				'required' => true,
			],
			'document' => [
				'type' => [Document::class],
				'required' => true,
			],
			'dark_theme_dimming' => [
				'type' => ['int'],
				'required' => true,
			],
			'is_blurred' => [
				'type' => ['bool'],
			],
			'is_moving' => [
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
	* @return int
	*/

	public function getDarkThemeDimming(): mixed
	{
		return $this->getFieldValue('dark_theme_dimming');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setDarkThemeDimming(mixed $value): static
	{
		return $this->setFieldValue('dark_theme_dimming', $value);
	}

	/**
	* @return bool
	*/

	public function getIsBlurred(): mixed
	{
		return $this->getFieldValue('is_blurred');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setIsBlurred(mixed $value): static
	{
		return $this->setFieldValue('is_blurred', $value);
	}

	/**
	* @return bool
	*/

	public function getIsMoving(): mixed
	{
		return $this->getFieldValue('is_moving');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setIsMoving(mixed $value): static
	{
		return $this->setFieldValue('is_moving', $value);
	}

}