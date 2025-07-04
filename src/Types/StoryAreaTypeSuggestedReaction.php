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
 * Describes a story area pointing to a suggested reaction. Currently, a story can have up to 5 suggested reaction areas.
 * @property string $type
 * Type of the area, always “suggested\_reaction”
 * @property ReactionType|ReactionTypeEmoji|ReactionTypeCustomEmoji|ReactionTypePaid $reactionType
 * Type of the reaction
 * @property bool $isDark
 * *Optional*. Pass *True* if the reaction area has a dark background
 * @property bool $isFlipped
 * *Optional*. Pass *True* if reaction area corner is flipped
 */
class StoryAreaTypeSuggestedReaction extends StoryAreaType
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => 'suggested_reaction',
				'required' => true,
			],
			'reaction_type' => [
				'type' => [ReactionType::class],
				'required' => true,
			],
			'is_dark' => [
				'type' => ['bool'],
			],
			'is_flipped' => [
				'type' => ['bool'],
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
	* @return ReactionType|ReactionTypeEmoji|ReactionTypeCustomEmoji|ReactionTypePaid
	*/

	public function getReactionType(): mixed
	{
		return $this->getFieldValue('reaction_type');
	}

	/**
	* @param ReactionType|ReactionTypeEmoji|ReactionTypeCustomEmoji|ReactionTypePaid $value
	* @return static
	*/

	public function setReactionType(mixed $value): static
	{
		return $this->setFieldValue('reaction_type', $value);
	}

	/**
	* @return bool
	*/

	public function getIsDark(): mixed
	{
		return $this->getFieldValue('is_dark');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setIsDark(mixed $value): static
	{
		return $this->setFieldValue('is_dark', $value);
	}

	/**
	* @return bool
	*/

	public function getIsFlipped(): mixed
	{
		return $this->getFieldValue('is_flipped');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setIsFlipped(mixed $value): static
	{
		return $this->setFieldValue('is_flipped', $value);
	}

}