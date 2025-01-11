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
* The reaction is based on a custom emoji.
* @property string $type
* Type of the reaction, always “custom\_emoji”
* @property string $customEmojiId
* Custom emoji identifier
*/

class ReactionTypeCustomEmoji extends ReactionType
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => '��custom_emoji�',
				'required' => true,
			],
			'custom_emoji_id' => [
				'type' => ['string'],
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

}