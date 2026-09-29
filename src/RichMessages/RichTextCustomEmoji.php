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
 * A custom emoji.
 * @property string $type
 * Type of the rich text, always “custom\_emoji”
 * @property string $customEmojiId
 * Unique identifier of the custom emoji. Use [getCustomEmojiStickers](#getcustomemojistickers) to get full information about the sticker.
 * @property string $alternativeText
 * Alternative emoji for the custom emoji
 */
class RichTextCustomEmoji extends RichText
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => 'custom_emoji',
				'required' => true,
			],
			'custom_emoji_id' => [
				'type' => ['string'],
				'required' => true,
			],
			'alternative_text' => [
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

	/**
	* @return string
	*/

	public function getAlternativeText(): mixed
	{
		return $this->getFieldValue('alternative_text');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setAlternativeText(mixed $value): static
	{
		return $this->setFieldValue('alternative_text', $value);
	}

}