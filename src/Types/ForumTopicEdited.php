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
 * This object represents a service message about an edited forum topic.
 * @property string $name
 * *Optional*. New name of the topic, if it was edited
 * @property string $iconCustomEmojiId
 * *Optional*. New identifier of the custom emoji shown as the topic icon, if it was edited; an empty string if the icon was removed
 */
class ForumTopicEdited extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'name' => [
				'type' => ['string'],
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