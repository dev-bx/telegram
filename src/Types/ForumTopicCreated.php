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
 * This object represents a service message about a new forum topic created in the chat.
 * @property string $name
 * Name of the topic
 * @property int $iconColor
 * Color of the topic icon in RGB format
 * @property string $iconCustomEmojiId
 * *Optional*. Unique identifier of the custom emoji shown as the topic icon
 */
class ForumTopicCreated extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'name' => [
				'type' => ['string'],
				'required' => true,
			],
			'icon_color' => [
				'type' => ['int'],
				'required' => true,
			],
			'icon_custom_emoji_id' => [
				'type' => ['string'],
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
	* @return int
	*/

	public function getIconColor(): mixed
	{
		return $this->getFieldValue('icon_color');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setIconColor(mixed $value): static
	{
		return $this->setFieldValue('icon_color', $value);
	}

	/**
	* @return string
	*/

	public function getIconCustomEmojiId(): mixed
	{
		return $this->getFieldValue('icon_custom_emoji_id');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setIconCustomEmojiId(mixed $value): static
	{
		return $this->setFieldValue('icon_custom_emoji_id', $value);
	}

}