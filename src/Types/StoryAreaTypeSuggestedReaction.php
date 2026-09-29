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

namespace DevBX\Telegram\Types;

use DevBX\Telegram\Base;

/**
 * Describes a story area pointing to a suggested reaction. Currently, a story can have up to 5 suggested reaction areas.
 *
 * @link https://core.telegram.org/bots/api#storyareatypesuggestedreaction
 *
 * @property-read string|null $type Required. Type of the area, always “suggested_reaction”
 * @property-write string $type
 * @property-read ReactionType|null $reactionType Required. Type of the reaction
 * @property-write ReactionType|array<string, mixed> $reactionType
 * @property-read bool|null $isDark Optional. Pass *True* if the reaction area has a dark background
 * @property-write bool $isDark
 * @property-read bool|null $isFlipped Optional. Pass *True* if reaction area corner is flipped
 * @property-write bool $isFlipped
 */
class StoryAreaTypeSuggestedReaction extends StoryAreaType
{
    /**
     * @return static
     * @throws Base\TelegramException
     */
    public static function create(mixed $value = null, bool $ignoreUnknownFields = false): ?Base\BaseType
    {
        return static::createInstance($value, $ignoreUnknownFields);
    }

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
     * Required. Type of the area, always “suggested_reaction”
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getType(): mixed
    {
        return $this->getFieldValue('type');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setType(mixed $value): static
    {
        return $this->setFieldValue('type', $value);
    }

    /**
     * Required. Type of the reaction
     *
     * @return ReactionType|null
     * @throws Base\TelegramException
     */
    public function getReactionType(): mixed
    {
        return $this->getFieldValue('reaction_type');
    }

    /**
     * @param ReactionType|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setReactionType(mixed $value): static
    {
        return $this->setFieldValue('reaction_type', $value);
    }

    /**
     * Optional. Pass *True* if the reaction area has a dark background
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsDark(): mixed
    {
        return $this->getFieldValue('is_dark');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsDark(mixed $value): static
    {
        return $this->setFieldValue('is_dark', $value);
    }

    /**
     * Optional. Pass *True* if reaction area corner is flipped
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsFlipped(): mixed
    {
        return $this->getFieldValue('is_flipped');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsFlipped(mixed $value): static
    {
        return $this->setFieldValue('is_flipped', $value);
    }
}
