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
 * Rich formatted message.
 * @property Base\ArrayObject|RichBlock[] $blocks
 * Content of the message
 * @property bool $isRtl
 * *Optional*. *True*, if the rich message must be shown right-to-left
 */
class RichMessage extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'blocks' => [
				'type' => [RichBlock::class],
				'isArray' => true,
				'required' => true,
			],
			'is_rtl' => [
				'type' => ['bool'],
			],
		];
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
	* @return bool
	*/

	public function getIsRtl(): mixed
	{
		return $this->getFieldValue('is_rtl');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setIsRtl(mixed $value): static
	{
		return $this->setFieldValue('is_rtl', $value);
	}

}