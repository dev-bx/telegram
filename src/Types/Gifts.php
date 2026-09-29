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
 * This object represent a list of gifts.
 *
 * @link https://core.telegram.org/bots/api#gifts
 *
 * @property-read Base\ArrayObject<Gift> $gifts Required. The list of gifts
 * @property-write list<Gift|array<string, mixed>>|Base\ArrayObject<Gift> $gifts
 */
class Gifts extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'gifts' => [
                'type' => [Gift::class],
                'isArray' => true,
                'required' => true,
            ],
        ];
    }

    /**
     * Required. The list of gifts
     *
     * @return Base\ArrayObject<Gift>
     * @throws Base\TelegramException
     */
    public function getGifts(): mixed
    {
        return $this->getFieldValue('gifts');
    }

    /**
     * @param list<Gift|array<string, mixed>>|Base\ArrayObject<Gift> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setGifts(mixed $value): static
    {
        return $this->setFieldValue('gifts', $value);
    }
}
