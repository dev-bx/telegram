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

namespace DevBX\Telegram\Games;

use DevBX\Telegram\Base;
use DevBX\Telegram\Types;

/**
 * This object represents one row of the high scores table for a game.
 *
 * And that's about all we've got for now.
 * If you've got any questions, please check out our [**Bot FAQ »**](https://core.telegram.org/bots/faq)
 *
 * @link https://core.telegram.org/bots/api#gamehighscore
 *
 * @property-read int|null $position Required. Position in high score table for the game
 * @property-write int $position
 * @property-read Types\User|null $user Required. User
 * @property-write Types\User|array<string, mixed> $user
 * @property-read int|null $score Required. Score
 * @property-write int $score
 */
class GameHighScore extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'position' => [
                'type' => ['int'],
                'required' => true,
            ],
            'user' => [
                'type' => [Types\User::class],
                'required' => true,
            ],
            'score' => [
                'type' => ['int'],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Position in high score table for the game
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getPosition(): mixed
    {
        return $this->getFieldValue('position');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPosition(mixed $value): static
    {
        return $this->setFieldValue('position', $value);
    }

    /**
     * Required. User
     *
     * @return Types\User|null
     * @throws Base\TelegramException
     */
    public function getUser(): mixed
    {
        return $this->getFieldValue('user');
    }

    /**
     * @param Types\User|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setUser(mixed $value): static
    {
        return $this->setFieldValue('user', $value);
    }

    /**
     * Required. Score
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getScore(): mixed
    {
        return $this->getFieldValue('score');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setScore(mixed $value): static
    {
        return $this->setFieldValue('score', $value);
    }
}
