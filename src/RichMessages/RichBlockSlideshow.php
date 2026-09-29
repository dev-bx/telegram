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


/**
 * A slideshow, corresponding to the custom HTML tag `<tg-slideshow>`.
 * @property string $type
 * Type of the block, always “slideshow”
 * @property Base\ArrayObject|RichBlock[] $blocks
 * Elements of the slideshow
 * @property RichBlockCaption $caption
 * *Optional*. Caption of the block
 */
class RichBlockSlideshow extends RichBlock
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => 'slideshow',
				'required' => true,
			],
			'blocks' => [
				'type' => [RichBlock::class],
				'isArray' => true,
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
	* @return Base\ArrayObject|RichBlock[]
	*/

	public function getBlocks(): mixed
	{
		return $this->getFieldValue('blocks');
	}

	/**
	* @param Base\ArrayObject|RichBlock[] $value
	* @return static
	*/

	public function setBlocks(mixed $value): static
	{
		return $this->setFieldValue('blocks', $value);
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