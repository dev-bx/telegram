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
 * Describes a clickable area on a story media.
 *
 * @link https://core.telegram.org/bots/api#storyarea
 *
 * @property-read StoryAreaPosition|null $position Required. Position of the area
 * @property-write StoryAreaPosition|array<string, mixed> $position
 * @property-read StoryAreaType|null $type Required. Type of the area
 * @property-write StoryAreaType|array<string, mixed> $type
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
     * Required. Position of the area
     *
     * @return StoryAreaPosition|null
     * @throws Base\TelegramException
     */
    public function getPosition(): mixed
    {
        return $this->getFieldValue('position');
    }

    /**
     * @param StoryAreaPosition|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPosition(mixed $value): static
    {
        return $this->setFieldValue('position', $value);
    }

    /**
     * Required. Type of the area
     *
     * @return StoryAreaType|null
     * @throws Base\TelegramException
     */
    public function getType(): mixed
    {
        return $this->getFieldValue('type');
    }

    /**
     * @param StoryAreaType|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setType(mixed $value): static
    {
        return $this->setFieldValue('type', $value);
    }
}
