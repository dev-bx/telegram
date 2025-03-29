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
 * This object represents a forum topic.
 * @property int $messageThreadId
 * Unique identifier of the forum topic
 * @property string $name
 * Name of the topic
 * @property int $iconColor
 * Color of the topic icon in RGB format
 * @property string $iconCustomEmojiId
 * *Optional*. Unique identifier of the custom emoji shown as the topic icon
 */
class ForumTopic extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'message_thread_id' => [
				'type' => ['int'],
				'required' => true,
			],
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
	* @return int
	*/

	public function getMessageThreadId(): mixed
	{
		return $this->getFieldValue('message_thread_id');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setMessageThreadId(mixed $value): static
	{
		return $this->setFieldValue('message_thread_id', $value);
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