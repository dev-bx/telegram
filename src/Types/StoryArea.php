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
 * Describes a clickable area on a story media.
 * @property StoryAreaPosition $position
 * Position of the area
 * @property StoryAreaType|StoryAreaTypeLocation|StoryAreaTypeSuggestedReaction|StoryAreaTypeLink|StoryAreaTypeWeather|StoryAreaTypeUniqueGift $type
 * Type of the area
 */
class StoryArea extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'position' => [
				'type' => [StoryAreaPosition::class],
				'required' => true,
			],
			'type' => [
				'type' => [StoryAreaType::class],
				'required' => true,
			],
		];
	}
	/**
	* @return StoryAreaPosition
	*/

	public function getPosition(): mixed
	{
		return $this->getFieldValue('position');
	}

	/**
	* @param StoryAreaPosition $value
	* @return static
	*/

	public function setPosition(mixed $value): static
	{
		return $this->setFieldValue('position', $value);
	}

	/**
	* @return StoryAreaType|StoryAreaTypeLocation|StoryAreaTypeSuggestedReaction|StoryAreaTypeLink|StoryAreaTypeWeather|StoryAreaTypeUniqueGift
	*/

	public function getType(): mixed
	{
		return $this->getFieldValue('type');
	}

	/**
	* @param StoryAreaType|StoryAreaTypeLocation|StoryAreaTypeSuggestedReaction|StoryAreaTypeLink|StoryAreaTypeWeather|StoryAreaTypeUniqueGift $value
	* @return static
	*/

	public function setType(mixed $value): static
	{
		return $this->setFieldValue('type', $value);
	}

}