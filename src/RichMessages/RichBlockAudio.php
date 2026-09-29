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
 * A block with a music file, corresponding to the HTML tag `<audio>`.
 * @property string $type
 * Type of the block, always “audio”
 * @property Types\Audio $audio
 * The audio
 * @property RichBlockCaption $caption
 * *Optional*. Caption of the block
 */
class RichBlockAudio extends RichBlock
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => 'audio',
				'required' => true,
			],
			'audio' => [
				'type' => [Types\Audio::class],
				'required' => true,
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
	* @return Types\Audio
	*/

	public function getAudio(): mixed
	{
		return $this->getFieldValue('audio');
	}

	/**
	* @param Types\Audio $value
	* @return static
	*/

	public function setAudio(mixed $value): static
	{
		return $this->setFieldValue('audio', $value);
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