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
 * Represents a reaction added to a message along with the number of times it was added.
 *
 * @link https://core.telegram.org/bots/api#reactioncount
 *
 * @property-read ReactionType|null $type Required. Type of the reaction
 * @property-write ReactionType|array<string, mixed> $type
 * @property-read int|null $totalCount Required. Number of times the reaction was added
 * @property-write int $totalCount
 */
class ReactionCount extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'type' => [
                'type' => [ReactionType::class],
                'required' => true,
            ],
            'total_count' => [
                'type' => ['int'],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Type of the reaction
     *
     * @return ReactionType|null
     * @throws Base\TelegramException
     */
    public function getType(): mixed
    {
        return $this->getFieldValue('type');
    }

    /**
     * @param ReactionType|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setType(mixed $value): static
    {
        return $this->setFieldValue('type', $value);
    }

    /**
     * Required. Number of times the reaction was added
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getTotalCount(): mixed
    {
        return $this->getFieldValue('total_count');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setTotalCount(mixed $value): static
    {
        return $this->setFieldValue('total_count', $value);
    }
}
