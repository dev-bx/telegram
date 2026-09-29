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
 * This object describes the backdrop of a unique gift.
 *
 * @link https://core.telegram.org/bots/api#uniquegiftbackdrop
 *
 * @property-read string|null $name Required. Name of the backdrop
 * @property-write string $name
 * @property-read UniqueGiftBackdropColors|null $colors Required. Colors of the backdrop
 * @property-write UniqueGiftBackdropColors|array<string, mixed> $colors
 * @property-read int|null $rarityPerMille Required. The number of unique gifts that receive this backdrop for every 1000 gifts upgraded
 * @property-write int $rarityPerMille
 */
class UniqueGiftBackdrop extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'name' => [
                'type' => ['string'],
                'required' => true,
            ],
            'colors' => [
                'type' => [UniqueGiftBackdropColors::class],
                'required' => true,
            ],
            'rarity_per_mille' => [
                'type' => ['int'],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Name of the backdrop
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getName(): mixed
    {
        return $this->getFieldValue('name');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setName(mixed $value): static
    {
        return $this->setFieldValue('name', $value);
    }

    /**
     * Required. Colors of the backdrop
     *
     * @return UniqueGiftBackdropColors|null
     * @throws Base\TelegramException
     */
    public function getColors(): mixed
    {
        return $this->getFieldValue('colors');
    }

    /**
     * @param UniqueGiftBackdropColors|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setColors(mixed $value): static
    {
        return $this->setFieldValue('colors', $value);
    }

    /**
     * Required. The number of unique gifts that receive this backdrop for every 1000 gifts upgraded
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getRarityPerMille(): mixed
    {
        return $this->getFieldValue('rarity_per_mille');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setRarityPerMille(mixed $value): static
    {
        return $this->setFieldValue('rarity_per_mille', $value);
    }
}
