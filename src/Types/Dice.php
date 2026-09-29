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
 * This object represents an animated emoji that displays a random value.
 *
 * @link https://core.telegram.org/bots/api#dice
 *
 * @property-read string|null $emoji Required. Emoji on which the dice throw animation is based
 * @property-write string $emoji
 * @property-read int|null $value Required. Value of the dice, 1-6 for “🎲”, “🎯” and “🎳” base emoji, 1-5 for “🏀” and “⚽” base emoji, 1-64 for “🎰” base emoji
 * @property-write int $value
 */
class Dice extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'emoji' => [
                'type' => ['string'],
                'required' => true,
            ],
            'value' => [
                'type' => ['int'],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Emoji on which the dice throw animation is based
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getEmoji(): mixed
    {
        return $this->getFieldValue('emoji');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setEmoji(mixed $value): static
    {
        return $this->setFieldValue('emoji', $value);
    }

    /**
     * Required. Value of the dice, 1-6 for “🎲”, “🎯” and “🎳” base emoji, 1-5 for “🏀” and “⚽” base emoji, 1-64 for “🎰” base emoji
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getValue(): mixed
    {
        return $this->getFieldValue('value');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setValue(mixed $value): static
    {
        return $this->setFieldValue('value', $value);
    }
}
