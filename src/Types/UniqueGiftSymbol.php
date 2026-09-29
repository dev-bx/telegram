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
use DevBX\Telegram\Stickers;

/**
 * This object describes the symbol shown on the pattern of a unique gift.
 *
 * @link https://core.telegram.org/bots/api#uniquegiftsymbol
 *
 * @property-read string|null $name Required. Name of the symbol
 * @property-write string $name
 * @property-read Stickers\Sticker|null $sticker Required. The sticker that represents the unique gift
 * @property-write Stickers\Sticker|array<string, mixed> $sticker
 * @property-read int|null $rarityPerMille Required. The number of unique gifts that receive this model for every 1000 gifts upgraded
 * @property-write int $rarityPerMille
 */
class UniqueGiftSymbol extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'name' => [
                'type' => ['string'],
                'required' => true,
            ],
            'sticker' => [
                'type' => [Stickers\Sticker::class],
                'required' => true,
            ],
            'rarity_per_mille' => [
                'type' => ['int'],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Name of the symbol
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
     * Required. The sticker that represents the unique gift
     *
     * @return Stickers\Sticker|null
     * @throws Base\TelegramException
     */
    public function getSticker(): mixed
    {
        return $this->getFieldValue('sticker');
    }

    /**
     * @param Stickers\Sticker|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSticker(mixed $value): static
    {
        return $this->setFieldValue('sticker', $value);
    }

    /**
     * Required. The number of unique gifts that receive this model for every 1000 gifts upgraded
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
