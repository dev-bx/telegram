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
 * A block with an animation, corresponding to the HTML tag `<video>`.
 * @property string $type
 * Type of the block, always “animation”
 * @property Types\InputMediaAnimation $animation
 * The animation. Caption is ignored.
 * @property RichBlockCaption $caption
 * *Optional*. Caption of the block
 */
class InputRichBlockAnimation extends InputRichBlock
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => 'animation',
				'required' => true,
			],
			'animation' => [
				'type' => [Types\InputMediaAnimation::class],
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
	* @return Types\InputMediaAnimation
	*/

	public function getAnimation(): mixed
	{
		return $this->getFieldValue('animation');
	}

	/**
	* @param Types\InputMediaAnimation $value
	* @return static
	*/

	public function setAnimation(mixed $value): static
	{
		return $this->setFieldValue('animation', $value);
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