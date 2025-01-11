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
* The background is a .PNG or .TGV (gzipped subset of SVG with MIME type “application/x-tgwallpattern”) pattern to be combined with the background fill chosen by the user.
* @property string $type
* Type of the background, always “pattern”
* @property Document $document
* Document with the pattern
* @property BackgroundFill $fill
* The background fill that is combined with the pattern
* @property int $intensity
* Intensity of the pattern when it is shown above the filled background; 0-100
* @property bool $isInverted
* *Optional*. *True*, if the background fill must be applied only to the pattern itself. All other pixels are black in this case. For dark themes only
* @property bool $isMoving
* *Optional*. *True*, if the background moves slightly when the device is tilted
*/

class BackgroundTypePattern extends BackgroundType
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => '��pattern�',
				'required' => true,
			],
			'document' => [
				'type' => [Document::class],
				'required' => true,
			],
			'fill' => [
				'type' => [BackgroundFill::class],
				'required' => true,
			],
			'intensity' => [
				'type' => ['int'],
				'required' => true,
			],
			'is_inverted' => [
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
	* @return BackgroundFill
	*/

	public function getFill(): mixed
	{
		return $this->getFieldValue('fill');
	}

	/**
	* @param BackgroundFill $value
	* @return static
	*/

	public function setFill(mixed $value): static
	{
		return $this->setFieldValue('fill', $value);
	}

	/**
	* @return int
	*/

	public function getIntensity(): mixed
	{
		return $this->getFieldValue('intensity');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setIntensity(mixed $value): static
	{
		return $this->setFieldValue('intensity', $value);
	}

	/**
	* @return bool
	*/

	public function getIsInverted(): mixed
	{
		return $this->getFieldValue('is_inverted');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setIsInverted(mixed $value): static
	{
		return $this->setFieldValue('is_inverted', $value);
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